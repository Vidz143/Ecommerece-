<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    

    <title>Cloths wear</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
   
    <script src="https://kit.fontawesome.com/a9545f17e8.js" crossorigin="anonymous"></script>
    <style>



body{
  background-color: rgb(214, 217, 219);
}

/* Header Style */

.topnav {
  
  background-color: #232323;
  height: 80px;
  margin-top: 0px;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-top:15px;
}

.topnav a:hover {
  background-color: rgb(15, 235, 81);
  color: rgb(209, 106, 106);
}

p{
  font-size: 20px;
  font-style: italic;
  color: rgb(117, 34, 34);
}
    </style>

  </head>

  <body>

  <!-- Header -->
    
      <div class="topnav" id="myTopnav">
        <a href="{{url('home')}}">Home</a>
        <a href="{{url('info')}}">About Us</a>

        @if (Route::has('login'))
             
        @auth
        <a href="{{url('showcart')}}">   <i class="fas fa-shopping-cart"></i>Cart[{{$count}}]</a>
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
    

  <!-- Flesh session -->

      @if(session()->has('message'))
      <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">X</button>
      
      {{session()->get('message')}}
      </div>
      
      @endif
    

<div style="padding: 100px;"  align="center">
   
    <table>
        <tr style="background-color: gray;">
            <td style="padding: 10px; font-size:20px;">Product Name</td>
            <td style="padding: 10px; font-size:20px;">Quantity</td>
            <td style="padding: 10px; font-size:20px;">Price</td>

            <td style="padding: 10px; font-size:20px;">Total price</td>
            <td style="padding: 10px; font-size:20px;">Action</td>
            

        </tr>
        <form action="{{url('order')}}" method="POST">

          @csrf


@foreach($cart as $carts)

        <tr style="background-color: black;">
            <td style="padding: 10px; color:rgb(255, 255, 255);">{{$carts->product_title}}
            <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden="">
            
            
            </td>
           
            <td style="padding: 10px; color:white;">{{$carts->quantity}}
            
              <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">
            </td>
            <td style="padding: 10px; color:white;">{{$carts->price}}
              <input type="text" name="price[]" value="{{$carts->price}}" hidden="">

            </td>
            <td style="padding: 20px; color:white;">{{$carts->price * $carts->quantity}}
              
           
            
            </td>
            
            </td>
            <td style="padding: 10px; color:white;">
            <a class="btn btn-danger"onclick="return confirm('Are you sure')" href="{{url('delete',$carts->id)}}">Delete</a>
            
            </td>


        
        
        </tr>


        @endforeach
    </table>
    <br>

    <p>Only Available Case On Delivery</p>
   
    <input type="radio" id="case" name="case" required="">
    <label for="age1">COD</label><br>
    <button  class="btn btn-success" onclick="return confirm('Are you sure')">Conform Order</button>



    


  </form>
</div>
 
  </body>

</html>
