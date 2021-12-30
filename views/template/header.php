<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/vendor/bootstrap-5.1.3-dist/css/bootstrap.css">
    <script src="/vendor/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SDHS Todo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">일정등록</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">일정삭제</a>
                        </li>
                    </ul>
                    <div>
                        <a href="/user/register" class="btn btn-primary">회원가입</a>
                        <a href="/user/login" class="btn btn-primary">로그인</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>