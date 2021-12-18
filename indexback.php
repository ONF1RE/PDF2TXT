<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF2TXT - Online Pdf to Text File Converter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php exec("cd C:/xampp/htdocs/PDF2TXT/java && run.cmd"); ?>

<div class="container">
    <div class="navbar">
        <nav>
            <a href="index.php">
                <img src="images/Logo.png" class="logo">
            </a>
        </nav>
    </div>

    <center>
        <h2>Welcome to PDF2TXT</h2>
        <p><b>Click below to download your file!</b></p>
        <a href="download.php?file=converted_txt" target="_PDF2TXT">Download TXT Now</a>
    </center>

    <div class="footer">
        <h4><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            Copyright © 2021 PDF2TXT. All rights reserved.
        </h4>
    </div>
</div>

</body>
</html>