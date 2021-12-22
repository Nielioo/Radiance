<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/mainStage.css">
	<link rel="stylesheet" href="/css/@yield('css').css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/03f2b35007.js" crossorigin="anonymous"></script>
</head>

<body>
	<div>
		@yield('mainBackground')
	</div>
	<div class="container-fluid">
		@yield('mainContent')
	</div>
</body>

</html>