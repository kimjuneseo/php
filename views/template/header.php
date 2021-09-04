<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/vendor/bootstrap-5.1.0-dist/css/bootstrap.css">
    <script src="/vendor/bootstrap-5.1.0-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">SDHS Todo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <?php if( user() ) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/todo/write">일정등록</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/todo/list">일정리스트</a>
                    </li>
                    <?php endif;?>
                </ul>
                <?php if( user() ) : ?>
                    <div>
                        <button class="btn btn-primary"><?= user()->name ?></button>
                        <a href="/user/logout" class="btn btn-danger">로그아웃</a>
                    </div>
                <?php else : ?>
                    <div>
                        <a href="/user/register" class="btn btn-primary">회원가입</a>
                        <a href="/user/login" class="btn btn-success">로그인</a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </nav>
</div>

