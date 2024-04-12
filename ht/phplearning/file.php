<html>
 <head>
</head>
<body>   
    
<?php

#-------file  read---------------------------------------------------------------------------------------------------


$filename="C:\Users\Admin\Desktop\Ragavan\Teaching\Day4\media/note.txt";


$file=fopen($filename, 'r');

if($file==true){


    echo "file in opening file";
   
}

$filesize=filesize($filename);

$filetext= fread($file,$filesize);


echo"File size : $filesize bytes";


echo (" <h1>$filetext</h1>");

#----------------------------------------------------------------------------------------------------------


?>
</body>
</html>