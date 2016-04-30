<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Upload</title>
  <link rel="stylesheet" type="text/css" href="split_styles.css">

</head>
<body>
<?php include 'header.php'; ?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Splits" name="submit">
</form>
<a href='home.php'>Home</a>
</body>
</html>