<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar CSS dan JavaScript</title>

    <link rel="stylesheet" href="style.css">

    <style>
        .sembunyi{
            display: none;
  
        }
        .kotak-info{
            backgrond-color: #e2e8f0;
            padding: 15px;
            margin: 10px;
            border: 2px solid #070505;
            border-radius: 6px;
        }
    
    </style>



</head>
<body>
    
    <div class="flex-center">

        <div class="kartu-profile">
             <h2>Noir kun</h2>
             <p>Web Desain</p>
             <button onclick="info()" class="btn-detail">info lengkap </botton>
         
        </div> 
    </div>


    <div class="kotak-info sembunyi">

        <h1>informasi Detail</h1>

     </div>


 <script>
    function info(){
        alert("tombol lengkap di ke clik");
    }
 </script>   
</body>
</html>