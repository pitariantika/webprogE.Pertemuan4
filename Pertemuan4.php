<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Belajar CSS dan JavaScipt</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .sembunyi{
            display: none;
        }
        .kotak-info{
            background-color: #e9cad1 ;
            padding: 15px;
            margin: 10px;
            border: 2px solid #FFF5F6;
            border-radius:15px;
        }
        .btn-close{
            position: relative;
            top: 8px;
            right: 10px;
            border: none;
            background: none;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            color: #331B22;
        }
        .btn-close:hover{
            color: #F7DDE2;
        }
    </style>
</head>
<body>

    <h2>Contoh Teks Pada H2</h2>
    <div class="flex-center">
        <div class="kartu-profile">
            <h2>Ita Riantika</h2>
            <p>Web Desain</p>
            <button id="btndetail" onclick ="info()"class="btn-detail">Info Lengkap</button>
        </div>
    </div>

    <div class="kotak-info sembunyi" id="infobox">
        <button onclick="tutupdetail()" class="btn-close">&times;</button>
        <h1>Informasi Detail</h1>
    </div>
    <script>
        function info(){
            //alert("Tombol Lengkap di click");
            let info = document.getElementById("infobox");
            let btndetail = document.getElementById("btndetail");

            info.style.display = "block";
            btndetail.style.display = "none";
        }

        function tutupdetail(){
            //alert("Tombol Lengkap di click");
            let info = document.getElementById("infobox");
            let btndetail = document.getElementById("btndetail");

            info.style.display = "none";
            btndetail.style.display = "inline-block";
        }
    </script>
</body>
</html>