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
            background-color: #e2e8f0;
            padding: 15px;
            margin: 10px;
            border: 2px solid #070505;
            border-radius: 6px;
        }
        .btn-close{
            position:relative;
            top: 8px;
            right: 10px;
            border: none;
            background: none;
            font-size: 18px;
            font-weight:bold;
            cursor: pointer;
            color: #555:
        }
        .btn-close:hover{}
    
    </style>



</head>
<body>
    
    <div class="flex-center">

        <div class="kartu-profile">
             <h2>Noir kun</h2>
             <p>Web Desain</p>
             <button id="btndetail" onclick="info()" class="btn-detail">info lengkap </botton>
         
        </div> 
    </div>


    <div class="kotak-info sembunyi" id= "infobox">
        <button onclick ="tutupdetail()" class ="btn-detail">&times;</button>

        <h1>informasi Detail</h1>

     </div>


 <script>
    function info(){
        //alert("tombol lengkap di ke clik");
        let info = document.getElementById("infobox");
        let btndetail = document.getElementById("btndetail");

        info.style.display = "block";
        btndetail.style.display = "none";
    }

    function tutupdetail(){
        //alert("tombol lengkap di ke clik");
        let info = document.getElementById("infobox");
        let btndetail = document.getElementById("btndetail");

        info.style.display = "block";
        btndetail.style.display = "inline-block";
    }
 </script>   
</body>
</html>