<!doctype html>
<html>
  <head>
    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>

      #nav_container {
        align-items: flex-end;
        padding: 10px;
      }

      #account_container {
        text-align: center;
        margin-bottom: 30px;
      }

    </style>

  </head>
  <body>
      <div class="d-flex justify-content-around" id="container">
        <div class="d-inline-block">
          <img src="/storage/sample_mcdonald.jpg" alt="Shop Logo" width="150" height="150" />
        </div>
        <div class="d-inline-block" id="nav_container">
          <div id="account_container">
            @if (empty($email))
              <a href="/account/create_form">Create Account</a> / <a href="/account/login_user">Log In</a>
            @else
              <a href="#">{{ $email }}</a> / <a href="#"> <span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a> /  <a href="/account/log_out">
          <span class="glyphicon glyphicon-log-out"></span> Log out</a>
            @endif
          </div>
          <div>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="/home">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/products">PRODUCTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/shop">OUR SHOP</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </body>
</html>
