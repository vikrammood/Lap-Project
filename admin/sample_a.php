<?php
echo;
?>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data"> <!--on form submission it redirects to upload.php-->
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"> <!--upload pdf file or text file -->
  <input type="submit" value="Upload Image" name="submit"> <!-- submit file -->
</form>

</body>
</html>
