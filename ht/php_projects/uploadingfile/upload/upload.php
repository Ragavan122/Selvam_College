

<?php

    if(isset ($_POST['submit'])){

        $file=$_FILES['files'];


       $fileName=$_FILES['files']['name'];
       $error=$_FILES['files']['error'];
       $type=$_FILES['files']['type'];
       $tempname=$_FILES['files']['tmp_name'];
       $size=$_FILES['files']['size'];


        $fileformat=explode('.',$fileName);

        $fileactName=strtolower(end($fileformat));

      #  print_r($size);

        $allowed=array('jpg','jpeg','png');

        if(in_array($fileactName,$allowed)){
        
             if($error===0){
                 
                   if($size<1000000){
                       
                      $fileNewName=uniqid('',true).".".$fileactName;
                      $fileDestination='upload/'.$fileNewName;

                   # echo $tempname;
                          move_uploaded_file($tempname,$fileDestination);
                          header("Location:index.php?uploadsuccess");

                    }
                    else{
                        echo"your file size is too large";
                    }
             }
             else{
                echo "erros accur to tour file";
             }
        }
        else{
            echo"Please share the proper format";
        }


        









    }






























    /*
     if(isset($_POST['submit'])){

      $files=$_FILES['files'];

       #print_r ($files);
    
       $filename=$_FILES['files']['name'];

       $tmpname=$_FILES['files']['tmp_name'];
       $size=$_FILES['files']['size'];
       $error=$_FILES['files']['error'];
       $type=$_FILES['files']['type'];



       $filetext=explode('.',$filename);

      $fileActualTxt=strtolower($filename);

      $allowed=array('jpg','jpeg','png');


      if(in_array($fileActualTxt,$allowed)){

           if($error===0){
                 if($size<10000000){
                    $fileNewName=uniqueid('',true).'.'.$fileActualTxt;
                     $fileDestination="upload/".$fileNewName;

                     move_uploaded_file($fileNewName,$fileDestination);
                     #header('location:index.php?uploadsuccess');
                 }else{
                    echo "file is too big";
                 }
           }
           else{
              echo"There was an eroor in your file";
           }


        }
         else{
            echo "you can't upload this file";

        }



    }
*/

?>