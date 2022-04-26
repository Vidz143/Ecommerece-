<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
   html{
     height: 2000px;
   }
   body{
    background-image: linear-gradient(#c2e59c,#64b3f4);
   }

   table{
       margin-left: 400px;
   }



  </style>
   
  </head>
  <body>
    
     
      @include('admin.sidebar')
@include('admin.navbar')


      <br>
      <br>
      <br>
      <br>
      
      

<table>

<tr style="background-color: grey">

    <td style="padding:20px;">Title</td>
    <td style="padding:20px;">Description</td>
    <td style="padding:20px;">Quantity</td>
    <td style="padding:20px;">Price</td>
    <td style="padding:20px;">Image</td>
    <td style="padding:20px;">Update</td>
    <td style="padding:20px;">Delete</td>
</tr>


@foreach($data as $product)


<tr align:"center" style="background-color: rgb(19, 18, 18); color: #fff;">

<td style="padding:20px;">{{$product->title}}</td>
<td style="padding:20px;">{{$product->description}}</td>
<td style="padding:20px;">{{$product->quantity}}</td>
<td style="padding:20px;">{{$product->price}}</td>
<td style="padding:20px;">
   <img height="100" width="100" src="/productimage/{{$product->image}}" >  
</td>
<td style="padding:20px;">
    <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>
</td>

<td style="padding:20px;">
    <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="{{url('deleteproduct',$product->id)}}">delete</a>
</td>

</tr>

@endforeach
</table>

</div>
</div>


       
  </body>
</html>