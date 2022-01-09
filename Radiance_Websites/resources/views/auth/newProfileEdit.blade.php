
@extends('layouts.mainLayout')

@section('mainContent')

<div class="container newEditProfile">
    <div class="row justify-content-center">
        <h1 class="newRegister_title">Edit Profile</h1>

        <!-- Content Row -->
        <div class="">

            <form action="" method="post" class="registerForm">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">

                <div class="form-group">
                    <label>Name: </label>
                    <input type="text" class="form-control" name="name" value=""
                           required>
                </div>

                <br>

                <div class="form-group">
                    <label>Birthyear: </label>
                    <input type="text" class="form-control" name="birthyear" value=""
                           required>
                </div>
                <br>

                <div class="form-group">
                    <label>Username: </label>
                    <input type="text" class="form-control" name="username" value=""
                           required>
                </div>
                <br>
                <div class="form-group">
                    <label>School: </label>
                    <input type="text" class="form-control" name="school" value=""
                           required>
                </div>
                <br>
                <div class="form-group">
                    <label>City: </label>
                    <input type="text" class="form-control" name="city" value=""
                           required>
                </div>

                <br>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Edit Profile</button>
                </div>




            </form>
        </div>

    </div>
</div>

@endsection

