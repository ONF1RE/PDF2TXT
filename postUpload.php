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
    <div class="alert-box">
        <?php
            if(isset($_FILES['userfile'])){
            //pre_r($_FILES);

                $phpFileUploadErrors = array(
                    0 => 'There is no error, the file uploaded with success!',
                    1 => 'The uploaded file exceeds the upload_max _filesize directive in php.ini!',
                    2 => 'The uploaded file exceeds the max_file_size directive that was specified in the HTML form!',
                    3 => 'The uploaded file was only partially uploaded!',
                    4 => 'No file was uploaded!',
                    6 => 'Missing a temporary folder!',
                    7 => 'Failed to write file to disk!',
                    8 => 'A PHP extension stopped the file upload!',
                );
            
            
                //if the error of the upload is not equal to 0
                if($_FILES['userfile']['error']){
                    ?> <div class="error"><a> <?php echo $phpFileUploadErrors[$_FILES['userfile']['error']];
                    ?> </a></div> <?php
                }
                else{
                    ?> <div class="success"><a> <?php echo "PDF file has been successfully uploaded!";
                    ?> </a></div><?php

                    $temp = explode(".", $_FILES["userfile"]["name"]);
                    $newFileName = "convert_this" . '.' . end($temp);
                    move_uploaded_file($_FILES['userfile']['tmp_name'], 'pdfuploads/'.$newFileName);
                }
            }     
        ?>
    </div>   
    <div class="row">
        <form action="indexback.php" method="post" enctype="multipart/form-data">
            <div class="col-1">
                <div class="color-box">
                    <div class="dot-box">
                        <div class="file-view">
                            <img src="images/pdf.png">
                            <p><?php echo $_FILES['userfile']['name']?></p>
                        </div>
                    </div>

                   
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
                <label for="file-convert" class="convert-btn">Convert<img src="images/upload.png"></label>
                <input type="submit" id="file-convert">
            </div>
        </form>
    </div>
    

    <div class="footer">
        <h4>Copyright © 2021 PDF2TXT. All rights reserved.</h4>
    </div>
</div>
</body>
</html>