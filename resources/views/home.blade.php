<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/../css/mycss.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="ms_body text-white bg-dark">
    <header>
        <div  class="d-flex align-itms-center justify-content-center gap-3">
            <h1 class="text-center opacity-100"> Hello World</h1>
            <img class="opacity-100"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"
                alt="">
        </div>
    </header>
    <div class="container">
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
                                src="https://ca.slack-edge.com/T91QPE3BP-U06FDFCT8E6-93ae26cea992-512" alt="">
                        </div>
                        <div class="my_color">
                            Web developer 👩‍💻
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</body>

</html>
