<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <title>Application</title>

    </head>
    <body>
        <div class="header">
            <h1>Upload Image</h1>
        </div>
        <div class="image-form">
            <form method="POST" action="#" enctype="multipart/form-data" class="sendForm">
                    <div class="upload">
                        <label for="uploadButton" class="custom-file-upload">
                            Choose Image
                        </label>   
                        <input id="uploadButton" type="file" accept="image/*" name="upload_image"/>
                         
                    </div>
                <div class="submit">
                    <input id="submitButton" type="submit" name="submit_image" value="Sumbit"/>
                </div>
            </form>
        </div>
    </body>
</html>