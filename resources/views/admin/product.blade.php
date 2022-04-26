<!DOCTYPE html>
<html lang="en">
  <head>
   
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style >
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
    background-color: rgb(60, 160, 60);
    margin-left:300px;
    margin-top: 90px;
    width:1000px;
  height:auto;
  border-radius: 20px;
  position: fixed;
  

    
}
    </style>
   
  </head>
  <body>
    
     
      @include('admin.sidebar')
@include('admin.navbar')


    <div class="container" align="center">
    <h1 class="title">Add product</h1>

    @if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">X</button>

{{session()->get('message')}}
</div>

@endif

<form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

    @csrf

  
        <div style="padding:15px">
            <label>Product Title</label>
            <input type="text" name="title" placeholder="Give a product title" required="">
        </div>
        
        <div style="padding:15px">
            <label>Price</label>
            <input type="number" name="price" placeholder="Give a price" required="">
        </div>
        
        
        <div style="padding:15px">
            <label>Description</label>
            <input type="text" name="des" placeholder="Give a discription" required="">
        </div>
        
        <div style="padding:15px">
            <label>Quantity</label>
            <input type="text" name="quantity" placeholder="product quentity" required="">
        </div>
        
        
        <div style="padding:15px">
         
            <input type="file" name="file" >
        </div>
        
        
        <div style="padding:15px">
            
            <input  class="btn btn-dark" type="submit">
        </form>
        
        </div>
        </div>

</div>
</div>

       
  </body>
</html>