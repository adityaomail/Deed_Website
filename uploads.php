
<html>
<head><title>Image Upload</title><head>
<?php


$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["image_upload"]["name"]);
echo $target_file."\n";
echo $_FILES["image_upload"]["name"]."\n";

if (move_uploaded_file($_FILES["image_upload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image_upload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
?>

</html>
