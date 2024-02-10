<!DOCTYPE html>
<html lang="en">
<head>
    <title>UploadFile</title>
</head>
<body>

<form action="2.ActionUploadFile.php" method="POST" enctype="multipart/form-data"><!-- specifies how the form-data should be encoded when submitting it to the server.As i wrote spelling of enctype wrong(entype) thus as this atribute specifies how the form-data should be encoded when submitting it to the server the wrong speeling didnt let it encode data due to which the index'choosenfile' {$filedetial = $_FILES["choosenfile"]} in action file(2.ActionUploadFile.php) was not recognize as name of file is 'choosenfile' which submitted from this file(1.ChoosenFile.php) to action file-->
    <input type="file" name="choosenfile">
    <button type="submit" name="uploadfile">Upload-File</button> <!-- type submit takes to action -->
</form>
    
</body>
</html>