<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>@yield('title')</title>
            <link rel="icon" href="img/logo.png">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">

    </head>
    <body>
    <style>
        body{
            min-height:100%;
            position:relative;
        }
        #navigasi{  
            padding-top: 20px;
            position:relative;
        }
        #footer{
            position: relative;
            bottom: 0;
            width: 100%;
            padding-top: 50px;
            padding-bottom: 40px;
            font-family: 'Lora', serif;
            background-color: #45637d;
        }
        .logoharian,.logodel{
            width: 100px;            
            padding-bottom: 20px;
        }
        textarea{
            width:100%; 
            border-radius: 10px; 
        }
        </style>
        @yield('container')
            <footer>
                <div class="text-center text-white fixed-bottom" id="footer">
                            <a href="{{url('/')}}"><img src="img/logo.png" alt="logo harian" class="logoharian"></a>
                            <a href="https://www.del.ac.id/"><img src="img/Logo_Del.png" alt="logo del" class="logodel"></a>
                <p>&copy;CopyRight @ 2021 All Rights Reservered || Developed by Kelompok 9 PA 1 || D4 TRPL</p>
                </div>
            </footer>
        
    </body>
</html>