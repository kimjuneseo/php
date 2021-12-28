<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $data = 
    echo "<pre>";
    print_r($_POST);
    "</pre>";
    if(isset($_POST)) {
        switch($_POST['action']){
            case 'insert':
                echo "추가";
                exit;
        }
    }
    ?>
    
    <form action="" method="post">
        <fieldset></fieldset>
        <legend>추가</legend>
        <input type="text" name="content" >
        <input type="hidden" name="action" value="insert">
        <button type="submit">추가</button>
    </form>
</body>

</html>