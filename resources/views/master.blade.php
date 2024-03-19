<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="{{asset('../image/refinedlogo1.gif')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>KOSELI</title>
  </head>
  <body>
  {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <style>
    header{
      position:sticky;
      top:0;
      z-index:99;
    }
    .para{
      text-align: justify;
    }
    .custom-login{
      height:50vh;
      padding-top:100vh;
    }
    img.slider-img{
      height:300px;
      object-fit:contain;
    }
    img{
      max-width:100%;
      height:auto;
    }
    img.logo-img{
      height:40px;
    }
    .slider-text{
      background-color: #ba3aae61;
    }
    .detail .more {
			display: none;
		}
		.detail .more.active {
			display: block;
		}
		.card img{
			height: 400px;
			object-fit: cover;
		}
    .card:hover{
      box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .15);
    }
 .footer {
    padding: 40px 0;
    background-color: #ffff;
}

.footer .social{
    text-align: center;
    padding-bottom: 25px;
    color: #4b4c4d;
}

.footer .social a{
    font-size: 24px;
    color: inherit;
    border: 1px solid #ccc;
    width: 40px;
    height: 40px;
    line-height: 38px;
    display: inline-block;
    text-align: center ;
    border-radius: 50%;
    margin: 0 8px;
    opacity: 0.75;
}
.footer .social a:hover{
opacity: 0.9;
}
.footer ul{
    margin-top: 0;
    padding: 0;
    list-style: none;
    font-size:18px;
    line-height: 1.6;
    margin-bottom: 0;
    text-align: center;
}
.footer ul a {
    color: inherit;
    text-decoration: none;
    opacity: 0.8;
}
.footer ul li{
    display: inline-block;
    padding: 0 15px;
}
.footer ul li a:hover{
    opacity: 1;
} 
.price{
  color:#d73d6c;
}
.dropdown-menu{
  left:auto;
  right:0;
}
.cart-divider{
  border-bottom:1px solid #ccc;
  margin-bottom:20px;
  padding-bottom:20px;
}
.navbar-right a,
.navbar-right a:hover {
  text-decoration: none;
}
.cart sup {
  color: #000;
}
.btn-outline-success {
    color:#000;
    border-color: #000;
}
.btn-outline-success:hover {
    color: #fff;
    background-color: #000;
    border-color: #000;
}
</style>
</html>