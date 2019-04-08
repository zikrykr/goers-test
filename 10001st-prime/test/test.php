<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unit Test</title>
    <style>
        body{
            margin: 0;
            padding: 2em;
        }
    </style>
</head>
<body>
    <a href="../../index.php">Go Back To Home</a><br><br>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Input limit..."><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    
    <?php
        include_once('../controller/controller.php');

        echo 'Output: ',isset($_POST['submit']) ? getPrime($_POST['number']) : ' ';
    ?>
</body>
</html>