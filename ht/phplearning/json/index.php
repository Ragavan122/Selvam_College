<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Json using php</title>
   <link rel="stylesheet" href="style.css">
   <script>
      function getdata() {
         let xhr = new XMLHttpRequest();

         xhr.open("GET", "http://localhost/phplearning/json/mobile.json", false);
         xhr.send();


         if (xhr.readyState == 4 && xhr.status == 200) {

            var otp = xhr.responseText;
            // document.getElementById("result").innerHTML = otp;
            var o=JSON.parse(otp);
           
            for(let i=0;i<o.length;i++){
               {
                  data+=
               }
            }

         }
      }
   </script>
</head>

<body onload="getdata();">


   <div class="container">

      <h1> Mobile Gallery file by Json</h1> <br><br><br><br><br>
      <h2 id="result"> </h2>

   </div>

</body>

</html>