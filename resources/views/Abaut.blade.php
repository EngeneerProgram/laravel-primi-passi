<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

            
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .container{
                
                
            }
            header{
                padding:20px;
                height: 10vh;
                display:flex;
                justify-content:space-between;
            }
            header .menu{
                display:flex;
                justify-items:center;
                justify-content:center;
                align-items:center;
                list-style:none;
            }

            li{
                margin:15px;
                
            }

            h1{
                text-transform:uppercase;
                color:red;
            }
            a{
                text-decoration:none;
                color:black;
                font-size: 18px;
                letter-spacing:1px;
            }

            a:hover{
                color:red;
            }

            h2{
                text-align:center;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Welcome To Laravel</h1>
                <nav>
                <ul class="menu">
                    @foreach($links as $link)
                    <li>
                        <a href="#">{{$link}}</a>
                    </li>

                    @endforeach
                </ul>
                </nav>
            </header>
        </div>
        <p>{{$info}}</p>
    </body>
</html>
