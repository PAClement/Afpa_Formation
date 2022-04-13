<html lang="fr">

<head>
    <?php

    require_once '../view/ViewUpload.php';
    require_once '../view/ViewTemplate.php';

    require_once '../model/ModelContact.php';

    ViewTemplate::head("upload");

    ?>
</head>

<body>
    <?php


    ViewTemplate::header();

    ViewUpload::formUpload();

    if (isset($_POST['submit'])) {
        filesUpload($_FILES);
    }


    ViewTemplate::footer();


    function filesUpload($FILES)
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                // ViewUpload::stateUpload("success", "File is an image - " . $check["mime"] . ".");
                $uploadOk = 1;
            } else {
                // ViewUpload::stateUpload("warning", "File is not an image.");
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            ViewUpload::stateUpload("warning", "File already exists.");
            $uploadOk = 0;
        }

        // Check file size
        if ($FILES["fileToUpload"]["size"] > 500000) {
            ViewUpload::stateUpload("warning", "File is too large.");
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            ViewUpload::stateUpload("warning", "Only JPG, JPEG, PNG & GIF files are allowed.");
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            ViewUpload::stateUpload("danger", "Sorry, Your file was not uploaded.");
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($FILES["fileToUpload"]["tmp_name"], $target_file)) {
                ViewUpload::stateUpload("success", "The file " . htmlspecialchars(basename($FILES["fileToUpload"]["name"])) . " has been uploaded.");
            } else {
                ViewUpload::stateUpload("danger", "Sorry, there was an error uploading your file.");
            }
        }
    }
    ?>
</body>

</html>