<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Laravel\Passport\Client;

class LoginController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {
        // Student data from form
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin',
            'is_login' => '0',
            'is_active' => '1',
        ];

        // Student data from database
        $student = DB::table('users')
            ->where('email', $request->email)
            ->first();

        // Check if supended
        if ($student->is_active === '0') {
            return response([
                'message' => 'This account is suspended',
            ]);
        }

        // Check if logged in
        if ($student->is_login === '1') {
            return response([
                'message' => 'This account has already logged in',
            ]);
        }

        // Attempt to login
        if (!Auth::attempt($credentials)) {
            return response([
                'message' => 'Login failed',
            ]);
        }

        // Login attempt success
        $this->isLogin(Auth::id());
        $response = Http::asForm()->post('http://radiance.test/oauth/token', [
            'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'username' => $request->email,
            'password' => $request->password,
            'scope' => '*',
        ]);

        return $response->json();
    }

    private function isLogin($studentId)
    {
        $student = DB::table('fis11_students')
            ->where('student_id', $studentId);

        return $student->update([
            'is_login' => '1',
        ]);
    }

    public function refresh(Request $request)
    {
        $this->validate($request, [
            'refresh_token' => 'required',
        ], [
            'refresh_token' => 'Request token is required',
        ]);

        $response = Http::asForm()->post('http://radiance.test/oauth/token', [
            'grant_type' => 'refresh_token',
            'refresh_token' => $request->refresh_token,
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'scope' => '*',
        ]);

        return $response->json();
    }

    public function logout()
    {
        $studentId = Auth::id();
        // ? Ignore this error
        $accessToken = Auth::user()->token();

        DB::table('oauth_refresh_tokens')
            ->where('access_token_id', $accessToken)
            ->update(['revoked' => true]);

        DB::table('fis11_students')
            ->where('student_id', $studentId)
            ->update(['is_login' => '0']);

        $accessToken->revoke();

        return response([
            'message' => 'Logout success'
        ]);
    }
}
