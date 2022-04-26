<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   
  

    <title>Cloths Wear</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">


    <style>


/* Header Style */
header {
	position: absolute;
	z-index: 99999;
	width: 100%;
	height: 50px;
	background-color: #000000b7;

}

.head h1{
  font-size: 20px;
  margin-left: 490px;
  color: aqua;
  font-style: italic;
  margin-top: 10px;
}
.topnav {

  background-color: #b8b8b8;
margin-top: 0px;
  
  width: 100%;
    height: 80px;
}

.topnav a {
  float: left;
  display: block;
  color: #fffefe;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-top: 10px;
}

.topnav a:hover {
 display: block;
  color: rgb(209, 106, 106);
  background-color: rgb(38, 116, 38);
}

    /* banner home page alag thi css che ama chaneg kranu */
      .banner {
	position: relative;
	text-align: center;
	padding-top: 80px;
}

.banner-item-01 {
	padding: 300px 0px;
	background-image: url(slide_01.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
  background-color: #ffffff;
}

.banner .text-content {
	position: absolute;
	top: 50%;

	text-align: center;
	width: 100%;
}

.banner .text-content h4 {
	color: #d11c1c;
	font-size: 22px;
	text-transform: uppercase;
	font-weight: 700;
	margin-bottom: 15px;
  
}

.banner .text-content h2 {
	color: #fff;
	font-size: 62px;
	text-transform: uppercase;
	letter-spacing: 5px;
}

footer {
  height: 10px;
	text-align: center;
  border-top: 1px solid #eee;
  background-color: #d11c1c;
	margin-top: 60px;
	padding: 60px 0px;
  text-transform: uppercase;
 
	margin-left: 3px;
}

footer p {
  color: #eee;
  font-size: 15px;
}

.li{
  color: #d11c1c;
}



    </style>

  </head>

  <body>

   
    <!-- Header -->
     <header class="head">
      <h1>WELCOME TO OUR CAPTIVA GIRL</h1>
      
     
      <div class="topnav" id="myTopnav">
       
        <a href="{{url('home')}}">Home</a>
        <a href="{{url('info')}}">About Us</a>

        @if (Route::has('login'))
             
        @auth
        <a href="{{url('showcart')}}">   <i class="fas fa-shopping-cart"></i>Cart</a>
        <x-app-layout>
          <x-slot name="header">
             
          </x-slot>
      </x-app-layout>    
            @else
                   <a href="{{ route('login') }}" >Log in</a>   

                @if (Route::has('register'))
                        <a  href="{{ route('register') }}" >Register</a>   
                @endif
            @endauth
       
    @endif
             </a>
     </div>
    
      @if(session()->has('message'))
      <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      
      {{session()->get('message')}}
      </div>
      
      @endif
    </header>

   
    <!-- Banner Starts Here -->
    <div class="banner text">
      <div class="Container">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
      
      </div>
    </div>
    <!-- Banner Ends Here -->
    <br>
    <br>

  @include('user.product')
  <br>
  <br>
  <br>
  @include('user.about')
  <footer>

      <p>Created By Vidhi Patel from August Infotech </p>
  </footer>
</body>

</html>
