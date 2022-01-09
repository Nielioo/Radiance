
@extends('layouts.mainLayout')

@section('mainContent')

<div class="container newRegister">
    <div class="row justify-content-center">
        <h1 class="newRegister_title">Register</h1>

        <!-- Content Row -->
        <div class="">

            <form action="" method="post" class="registerForm">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">

                <div class="form-group">
                    <label>Email: </label>
                    <input type="text" class="form-control" name="email" value=""
                           required>
                </div>

                <div class="form-group">
                    <label>Password: </label>
                    <input type="text" class="form-control" name="password" value=""
                           required>
                </div>

                <div class="form-group">
                    <label>Password Confirmation: </label>
                    <input type="text" class="form-control" name="passwordConfirmation" value=""
                           required>
                </div>

                <div class="form-group">
                    <label>Name: </label>
                    <input type="text" class="form-control" name="name" value=""
                           required>
                </div>

                <div class="form-group">
                    <label>Birthyear: </label>
                    <input type="text" class="form-control" name="birthyear" value=""
                           required>
                </div>

                <div class="form-group">
                    <label>Username: </label>
                    <input type="text" class="form-control" name="username" value=""
                           required>
                </div>

                <div class="form-group">
                    <label>School: </label>
                    <input type="text" class="form-control" name="school" value=""
                           required>
                </div>

                <div class="form-group">
                    <label>City: </label>
                    <input type="text" class="form-control" name="city" value=""
                           required>
                </div>

                <br>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>




            </form>
        </div>

    </div>
</div>

@endsection

