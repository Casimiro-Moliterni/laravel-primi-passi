<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/../css/mycss.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="ms_body text-white bg-dark d-flex flex-column">
    <header>
        <div class="d-flex align-itms-center justify-content-center gap-3 mt-4">
            <h1 class="text-center opacity-100"> Hello World</h1>
            <img class="opacity-100"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                alt="">
        </div>
    </header>
    <div class="container d-flex flex-grow-1 align-items-center">
        <div class="w-100">
            <ul class="fw-medium mb-0 p-2 ">
                <li class=" p-2 border-bottom">
                    <div class="d-flex align-items-center gap-2 text-white">
                        <span> {{ $nome }}</span>
                        <div class="my_img">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                                alt="">
                        </div>
                        <div class="my_color ms-4">
                            FrameWork
                        </div>
                    </div>
                </li>
                <li class=" p-2 border-bottom ">
                    <div>
                        <div class="d-flex align-items-center justify-content-center gap-2 text-white">
                            <span> {{ $nome_linguaggio }}</span>
                            <div class="my_img">
                                <img src="https://www.php.net/manual/en/images/c0d23d2d6769e53e24a1b3136c064577-php_logo.png"
                                    alt="">
                            </div>
                            <div class="my_color ms-3">
                                Linguaggio
                            </div>
                        </div>
                    </div>
                </li>
                <li class="  p-2 ">
                    <div>
                        <div class="d-flex align-items-center justify-content-end gap-2 text-white">
                            <span> {{ $nome_developer }}</span>
                            <div class="my_img me-4">
                                <img class="border border-2 border-success rounded-4"
                                    src="https://ca.slack-edge.com/T91QPE3BP-U06FDFCT8E6-93ae26cea992-512"
                                    alt="">
                            </div>
                            <div class="my_color">
                                Web developer 👩‍💻
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <footer class="d-flex justify-content-end align-items-end p-3">
        <div class="d-flex align-items-center gap-3 my_git">
            <div class="d-flex gap-2 align-items-center">
                <small>My GitHub</small>
                <a href="https://github.com/Casimiro-Moliterni"  class="text-decoration-none"><i class="fa-brands fa-github text-white my_git"></i></a>
            </div>
            <div class="my_boolean">
                <a href="https://boolean.careers/" class="text-decoration-none text-white">{{ $nome_scuola }} &hearts; careers service</a>
            </div>
        </div>
    </footer>
</body>

</html>
