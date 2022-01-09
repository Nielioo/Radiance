@extends('layouts.mainLayout')

@section('mainContent')

<div class="container newLogin">
    <div class="row justify-content-center">
        <h1 class="loginLogin">Login</h1>

        <!-- Content Row -->
        <div class="">

            <form action="" method="post" class="newLoginForm">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">

                <div class="form-group">
                    <label>Email: </label>
                    <input type="text" class="form-control" name="email" value=""
                           required>
                </div>
                <br>

                <div class="form-group">
                    <label>Password: </label>
                    <input type="text" class="form-control" name="password" value=""
                           required>
                </div>
                <br>

                <div class="text-center ">
                    <button type="submit" class="btn btn-success newLogin_button">Login</button>
                </div>

                <div class="text-center dontHaveAccount">
                    <p>
                        Don't have an account yet?
                        <a href="">Register here</a>
                    </p>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
