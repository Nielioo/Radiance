<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/03f2b35007.js" crossorigin="anonymous"></script>
</head>

<body>

    <button class="back-redirect btn" onclick="window.location.href = '/'">
        <i class="fas fa-arrow-left fa-3x"></i>
    </button>

    <div class="d-flex justify-content-center">
        <div class="row" style="width: 100%">
            <div class="col">
                @if ($profileBorder != null)
                    <img src="{{ asset($profileBorder) }}" alt="{{ $profileBorder }}"
                        class="picture-border img-fluid logo-height">
                @endif

                @if ($characterSkin != null)
                    <img src="{{ $characterSkin }}" alt="{{ $characterSkin }}"
                        class="picture-rae img-fluid logo-height">
                @endif
            </div>

            <div class="col profile-info">
                <h1 class="pb-4">Profile Information</h1>
                <div class="d-flex justify-content-start pb-4">
                    <table class="table table-borderless" style="width: 45%">
                        <tbody>
                            <tr>
                                <th scope="col">Username</th>
                                <td scope="col">{{ $username }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Name</th>
                                <td scope="col">{{ $name }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Email</th>
                                <td scope="col">{{ $email }}</td>
                            </tr>
                            <tr>
                                <th scope="col">School</th>
                                <td scope="col">{{ $school }}</td>
                            </tr>
                            <tr>
                                <th scope="col">City</th>
                                <td scope="col">{{ $city }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Birthyear</th>
                                <td scope="col">{{ $birthyear }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-start pb-5 mb-5">
                    <form action="{{ route('profiles.destroy', Auth::id()) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('profiles.edit', Auth::id()) }}">Update</a>
                        <a class="btn btn-warning" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
