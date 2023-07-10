<?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        header("Location: http://127.0.0.1:8000/tabuada/$numero");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-color: #efefef;
        }
        .title {
            display: flex;
            justify-content: center;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        a {
            text-decoration: none;
        }
    </style>
    <title>Tabuada</title>
</head>
<body class="antialiased">
    <div class='title'>
        <h2>Tabuada</h2>
    </div>
    <div class='content'>
        <form method="get" action="">
            <p>Digite um número para ver a tabuada</p>
            <input type='text' id='numero' name='numero'/>
            <input type='submit' value='Ver tabuada'>
        </form>
    </div>
</body>
</html>
