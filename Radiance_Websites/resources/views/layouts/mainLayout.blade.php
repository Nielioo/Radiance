<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/mainLayout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/03f2b35007.js" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        @for ($i = 1; $i <= 50; $i++)
            <div class="rows">
                <div>
                    <i class="white fas fa-brain"></i>
                    <i class="white fas fa-dna"></i>
                    <i class="white fas fa-filter"></i>
                    <i class="white fas fa-eye-dropper"></i>
                    <i class="white fas fa-rocket"></i>
                    <i class="white fas fa-flask"></i>
                    <i class="white fas fa-seedling"></i>
                    <i class="white fas fa-band-aid"></i>
                    <i class="white fas fa-temperature-high"></i>
                    <i class="white fas fa-microscope"></i>
                    <i class="white fas fa-book-open"></i>
                    <i class="white fas fa-brain"></i>
                    <i class="white fas fa-dna"></i>
                    <i class="white fas fa-filter"></i>
                    <i class="white fas fa-eye-dropper"></i>
                    <i class="white fas fa-rocket"></i>
                    <i class="white fas fa-flask"></i>
                    <i class="white fas fa-seedling"></i>
                    <i class="white fas fa-band-aid"></i>
                    <i class="white fas fa-temperature-high"></i>
                    <i class="white fas fa-microscope"></i>
                    <i class="white fas fa-book-open"></i>
                    <i class="white fas fa-brain"></i>
                    <i class="white fas fa-dna"></i>
                    <i class="white fas fa-filter"></i>
                    <i class="white fas fa-eye-dropper"></i>
                    <i class="white fas fa-rocket"></i>
                    <i class="white fas fa-flask"></i>
                    <i class="white fas fa-seedling"></i>
                    <i class="white fas fa-band-aid"></i>
                    <i class="white fas fa-temperature-high"></i>
                    <i class="white fas fa-microscope"></i>
                    <i class="white fas fa-book-open"></i>
                </div>
                <div>
                    <i class="white fas fa-brain"></i>
                    <i class="white fas fa-dna"></i>
                    <i class="white fas fa-filter"></i>
                    <i class="white fas fa-eye-dropper"></i>
                    <i class="white fas fa-rocket"></i>
                    <i class="white fas fa-flask"></i>
                    <i class="white fas fa-seedling"></i>
                    <i class="white fas fa-band-aid"></i>
                    <i class="white fas fa-temperature-high"></i>
                    <i class="white fas fa-microscope"></i>
                    <i class="white fas fa-book-open"></i>
                    <i class="white fas fa-brain"></i>
                    <i class="white fas fa-dna"></i>
                    <i class="white fas fa-filter"></i>
                    <i class="white fas fa-eye-dropper"></i>
                    <i class="white fas fa-rocket"></i>
                    <i class="white fas fa-flask"></i>
                    <i class="white fas fa-seedling"></i>
                    <i class="white fas fa-band-aid"></i>
                    <i class="white fas fa-temperature-high"></i>
                    <i class="white fas fa-microscope"></i>
                    <i class="white fas fa-book-open"></i>
                    <i class="white fas fa-brain"></i>
                    <i class="white fas fa-dna"></i>
                    <i class="white fas fa-filter"></i>
                    <i class="white fas fa-eye-dropper"></i>
                    <i class="white fas fa-rocket"></i>
                    <i class="white fas fa-flask"></i>
                    <i class="white fas fa-seedling"></i>
                    <i class="white fas fa-band-aid"></i>
                    <i class="white fas fa-temperature-high"></i>
                    <i class="white fas fa-microscope"></i>
                    <i class="white fas fa-book-open"></i>
                </div>
            </div>
        @endfor

        <div class="container-fluid main-content">
            @yield('mainContent')
        </div>

        <script>
            const cursor = document.querySelector('.cursor');
            document.addEventListener('mousemove', (e) => {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
            })
        </script>
</body>

</html>
