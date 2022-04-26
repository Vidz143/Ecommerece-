<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    

    <base href="/public">
   

    <style>
      html{
     height: 1000px;
   }
      body{
    background-image: linear-gradient(#c2e59c,#64b3f4);
   }


        .title{
           color: rgb(255, 255, 255); 
           padding-top:25px; 
           font-size:25px;
           
       }
   
       label
       {
           display: inline-block;
           width:200px;
           color: #ffffff;
   
       }
   
       
   input[type="text"] {
       color: #000000;
       font-weight: bold;
       
   }
   
       
   input[type="number"] {
       color: #050505;
       font-weight: bold;
       
   }
   
   
   
   .container{
       background-color: rgb(38, 116, 38);
       margin-left:400px;
       margin-top: 50px;
       height: 540px;
       width:800px;
       position: fixed;
       border-radius: 20px;
       
   }
       </style>
   
  </head>
  <body>
 
    @include('admin.sidebar')
    @include('admin.navbar')
   <br>
   
    <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

        @csrf
        
    
    

<div class="container" align="center">
<div style="padding:10px">
    <label>Product Title</label>
    <input type="text" name="title" value="{{$data->title}}" required="">
</div>

<div style="padding:10px">
    <label>Price</label>
    <input type="number" name="price" value="{{$data->price}}"  required="">
</div>


<div style="padding:10px">
    <label>Description</label>
    <input type="text" name="des" value="{{$data->description}}"  required="">
</div>

<div style="padding:10px">
    <label>Quantity</label>
    <input type="text" name="quantity" value="{{$data->quantity}}"  required="">
</div>


<div style="padding:10px">
    <label>old image</label>
    <img height="100" width="100"src="/productimage/{{$data->image}}">
</div>


<div style="padding:10px">
    <label>Change image</label>
    <input type="file" name="file" >


</div>


<div style="padding:10px">
    
    <input  class="btn btn-danger" type="submit">
            </div>
    </form>
    </div>
    </div>
    </div>
</div>       
  </body>
</html>