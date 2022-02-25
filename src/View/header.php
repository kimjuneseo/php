<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{margin: 0;padding: 0;box-sizing:border-box;}
    html, body, .app {
      min-height: 100vh;
    }
    .app {
      display: flex;
      flex-direction: column;
    }
    header {
      height: 60px;
      border-bottom: 1px solid #ddd;
    }
    footer {
      height: 60px;
      border-top: 1px solid #ddd;
    }
    main {
      flex: 1;
    }
    </style>
</head>
<body>
    <div class="app">
        <header>
            Header
            <a href="/">Main</a>
            <?php if(ss()): ?>
                <a href="/test/1234">Test</a>
                <a href="/logout">Logout</a>
                <span><?=ss()->name?>님 환영합니다</span>
            <?php else: ?>
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            <?php endif?>
        </header>
