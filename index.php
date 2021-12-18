<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF2TXT - Online Pdf to Text File Converter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
    <div class="navbar">
        <nav>
            <a href="index.php">
                <img src="images/Logo.png" class="logo">
            </a>
        </nav>
    </div>
    
    <div class="row">
        <form action="postUpload.php" method="post" enctype="multipart/form-data">
            <div class="col-1">
                <div class="color-box">
                    <div class="dot-box">
                        <label for="file-upload" class="add-btn">
                            <img src="images/add.png">
                            <p><small>Add File</small></p>
                        </label>
                        <input name="userfile" type="file" id="file-upload" accept=".pdf">
                    </div>

                    <a><label for="file-submit" class="upload-btn">Upload</label>
                    <input type="submit" id="file-submit"></a>
                </div>
                
                <h2>3 easy steps to convert your file:</h2>
                <div class="box">
                    <div class="box-1">
                        <img src="images/one.png">
                        <h3>Upload your PDF</h3>
                    </div>
                    <div class="box-2"><img src="images/two.png">
                        <h3>Click on "Convert" <br>button</h3>
                    </div>
                    <div class="box-3">
                        <img src="images/three.png">
                        <h3>Download your TXT file <br>through the link</h3>
                    </div>
                </div>
            </div>

            <div class="col-2">
                <h1>PDF to TXT</h1>
                <h2>Online Converter</h2>
                <h4>
                    <a>Fast</a>
                    <a>Free</a>
                    <a>Secure</a>
                </h4><br>
            </div>
        </form>
    </div>

    <div class="footer">
        <h4>Copyright © 2021 PDF2TXT. All rights reserved.</h4>
    </div>
</div>

</body>
</html>