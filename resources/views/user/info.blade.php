<html>
    <head>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <style>

            body{
                background-color: #c8e8e9;
            }

.topnav {

background-color: #000000;
margin-top: -8px;
margin-left: -8px;
margin-right: 0px;

width: 101.2%;
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


.container{
  width: 85%;
  margin-left: 95px;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #070707;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}


@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }

}

        </style>
    </head>
<body >
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
<br>
<br>
  
        <div class="container">
          <div class="content">
            <div class="left-side">
              <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Address</div>
                <div class="text-one">Ahmedabad</div>
               
              </div>
             
              <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">vidhikpatel19@gnu.ac.in</div>
                <div class="text-two">vidhi2062001@gmail.com</div>
              </div>
            </div>
            <div class="right-side">
              <div class="topic-text">Vidhi Patel</div>
              <p>My name is vidhi patel currently i am working in AUGUST INFOTECH.PVT. I am from ganpat university.I am working in LARAVEL </p>
              <p>If you have any query contact to me in my mail. Thank you</p>

             
              </div>

             <div>
              <img src="vidhi.jpg" alt="Trulli" width="500" height="333">
            </div>         
          </div>
          </div>
        </div>

    </body>
</html>

