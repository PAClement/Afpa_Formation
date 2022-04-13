<?php

require_once '../model/ModelContact.php';

class ViewUpload
{
    public static function formUpload()
    {
?>
        <div class="container my-5">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Selectionnez une image à upload:
                <br />
                <br />
                <input type="file" class="mb-5" name="fileToUpload" id="fileToUpload">
                <br />
                <input type="submit" value="Upload Image" name="submit">
            </form>
        </div>
    <?php
    }

    public static function stateUpload($state, $contain)
    {
    ?>
        <div class="container my-5">
            <div class="alert alert-<?= $state ?>" role="alert">
                <?= $contain ?>
            </div>
        </div>
<?php
    }
}
