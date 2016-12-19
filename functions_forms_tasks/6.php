<?php
$dir = '/home/alex/KSUHA/www/testsite/functions_forms_tasks/gallery/';
function saveFile($dir)
{
    if (isset($_FILES['photo'])) {
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        if (getimagesize($_FILES["photo"]["tmp_name"]) !== false) {
            $filePath = $dir . basename($_FILES["photo"]["name"]);
            if (file_exists($filePath)) {
                echo "Sorry, file already exists.";
                return;
            }
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $filePath)) {
                echo 'File is uploaded.';
            } else {
                echo 'File is not uploaded.';
            }

        } else {
            echo "File is not an image.";
        }
    }
}

function show($dir)
{
    if (!is_dir($dir)) {
        echo "Directory does not exist";
    } else {

        $files = scandir($dir);
        foreach ($files as $file) {
            if (is_file($dir . $file)) {
                echo '<tr><td><img width="80" src="./gallery/' . $file . '"></td></tr>';
            }
        }
    }
}
?>
<html>
    <body>
        <form action="6.php" method="post" enctype="multipart/form-data">
            <input name="photo" type="file"/>
            <input type="submit"/>
        </form>
        <?php saveFile($dir);?>
    <table>
        <?php echo show($dir);?>
    </table>

    </body>
</html>