<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$to = "cristianoragavan786@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: vijayaragavansr2020@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

if(mail($to,$subject,$txt,$headers)){
    echo "msg shared";
} else {
    echo "failed";
}
?>

</body>
</html>
