<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #a4a4a4;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            #header {
                background-color: #fff;
                padding-top: 30px;
                padding-bottom: 30px;
            }

            #carouselHomePage {
              height: 500px;
            }

        </style>
    </head>
    <body>
        <div id="header">
          @include('templates.header')
        </div>
        <div id="carouselHomePage" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/storage/burger_menu_1.jpg" height="300px">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/storage/burger_menu_2.png" height="300px">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="/storage/burger_menu_3.jpg" height="300px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHomePage" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHomePage" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </body>
</html>
