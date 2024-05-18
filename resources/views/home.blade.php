<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Laravel</title>
    <link rel="stylesheet"  href="{{ url('/../favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('/../css/mycss.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- link bootstrap  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="ms_body text-white d-flex flex-column">
    <div class="my_overlay ">
        <img src="https://www.noidellascuola.it/wp-content/uploads/2022/12/shutterstock_1714491562.jpg" alt="">
    </div>
    <header>
        <div class="d-flex align-itms-center justify-content-center gap-3 mt-4 position-relative">
            <h1 class="text-center opacity-100"> Hello World</h1>
            <img class="opacity-100"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                alt="">
        </div>
    </header>
    <main class="d-flex flex-grow-1 align-items-center position-relative">
        <div class="my_list row w-100">
            <div class="col ">
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
            <div class="col my_youtube d-flex align-items-center ms-5 flex-column">
               <img src="https://hiringplatform.boolean.careers/images/logo.png" alt="">
                <iframe width="80%" height="90%"
                    src="https://www.youtube.com/embed/VbPZpTVH8Ik?si=W1WVgYgjZbtaaoZj" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
        </div>
    </main>
    <footer class="d-flex justify-content-end align-items-end p-3 position-relative">
        <div class="d-flex align-items-center gap-3 ">
            <div class="d-flex gap-2 align-items-center my_git">
                <small>My GitHub</small>
                <a href="https://github.com/Casimiro-Moliterni" class="text-decoration-none text-white"><i
                        class="fa-brands fa-github "></i></a>
            </div>
            <div class="my_boolean">
                <a href="https://boolean.careers/" class="text-decoration-none">{{ $nome_scuola }} &hearts; careers
                    service</a>
            </div>
        </div>
    </footer>
</body>

</html>
