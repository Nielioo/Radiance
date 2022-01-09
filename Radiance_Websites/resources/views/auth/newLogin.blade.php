<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <title>{{$title}}</title> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/03f2b35007.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <h1>Login</h1>

        <!-- Content Row -->
        <div class="">

            <form action="" method="post">
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

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>

    </div>
</div>

</body>
</html>
