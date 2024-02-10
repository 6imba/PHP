<?php
if (isset($_POST["uploadfile"]))
{ //start uploading processes
    $filedetial = $_FILES["choosenfile"];//get information of the file named as choosenfile and store/place all the information/detial of the choosenfile in variable $filedetial
  //now we have to extract all the information/detial hold by variable $filedetial like:name of file,size of file,etc
  //print_r($filedetial);//if u write this code it will print the info of the choosen file
    $fileName                  = $filedetial["name"];//name of file
    $fileTemporaryLocationName = $filedetial["tmp_name"];//temporary location name of file
    $fileSize                  = $filedetial["size"];
    $fileError                 = $filedetial["error"];//count number of error u can see the note for mre detial
    $fileType                  = $filedetial["type"];
  //$filename = $filedetial['name']; ==>
  //$filename =$_FILES['choosenfile']['name']; ==>
  //$filename = $_FILES['name of variable that hold all file detials']['name of detial/information'];
  //its use of 
    $fileNameBreak = explode('.',$fileName);//breaks a name string into an array seperated by dot'.'
    $fileActualExtension = strtolower(end($fileNameBreak));//end ==> returns the last element in an array

    $allowed = array('jpg','jpeg','png','pdf');//what type if file i want this page to allow to upload

  //now check if the file is allowed to upload into the page or not//if it has proper extention mentioned or not in variable $allowed
    if(in_array($fileActualExtension,$allowed))//check if value hold by $fileActualExtension is inside $allowed array or not
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)//check if file size and allow if its less than 1kb //here it measure in bit [1000 bit = 1 byte,1000 byte = 1kb]
            { // if anyone upload the file that has same name as already existing file then the new file overwrite the already existing file.So inorder to solve this problem we have to provide uniqueId to all the file before uploading...  
                $fileNewName = uniqid('',true).".".$fileActualExtension;//uniqueid.extension
                $fileDestination ='UploadedFile/'.$fileNewName;//rootpath
                //now define actual fuction that moves the file from tempoaray location to actual location where we want to send the file...
                move_uploaded_file($fileTemporaryLocationName,$fileDestination);//finally uploaded
                header("Location:1.ChooseFile.php?Uploaded_Successfully_!!!");
            }
            else
            {
                echo "Maximun file size allowed is 1kb.Your File size is more than 1000000 bit !!!";
            }
        }
        else
        {
            echo "There was an error uploading your file !!!";
        }
    }
    else
    {
        echo "You are not allowed to upload this type of files !!! ";
    }
}
else
{
    echo "Direct ???";
}
?>