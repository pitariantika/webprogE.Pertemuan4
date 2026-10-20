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
            background-color: #E5C3C8 ;
            padding: 15px;
            margin: 10px;
            border: 2px solid #c47883;
            border-radius:15px;
        }
    </style>
</head>
<body>

    <h2>Contoh Teks Pada H2</h2>
    <div class="flex-center">
        <div class="kartu-profile">
            <h2>Ita Riantika</h2>
            <p>Web Desain</p>
            <button onclick ="info()"class="btn-detail">Info Lengkap</button>
        </div>
    </div>

    <div class="kotak-info sembunyi">
        <h1>Informasi Detail</h1>
    </div>
    <script>
        function info(){
            alert("Tombol Lengkap di click")
        }
    </script>
</body>
</html>