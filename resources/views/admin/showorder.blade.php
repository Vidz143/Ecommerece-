<!DOCTYPE html>
<html lang="en">
    
  <head>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <style>

html{
     height: 1000px;
   }
       body{
    background-image: linear-gradient(#c2e59c,#64b3f4);
   }

    
   table{
       margin-left: 260px;
   }
     
    </style>
  </head>
  <body>
    
     
      @include('admin.sidebar')
@include('admin.navbar')

<br>
<br>
<br>


    <table>
<tr style="background-color: gray;">

    <td>Customer name</td>
    <td style="padding: 15px;">Phone</td>
    <td style="padding: 15px;">Address</td>
    <td style="padding: 15px;">Product title</td>
    <td style="padding: 15px;"> Price</td>
    <td style="padding: 15px;">Quantity</td>
    <td style="padding: 15px;">Status</td>

    <td style="padding: 15px;">Action</td>
    <td style="padding: 15px;">Action2</td>

</tr>

@foreach ($order as $orders)
    

<tr align="center" style="background-color: rgb(19, 18, 18); color: #fff;">
    <td style="padding: 15px;">{{$orders->name}}</td>
    <td style="padding: 15px;">{{$orders->phone}}</td>
    <td style="padding: 15px;">{{$orders->address}}</td>
    <td style="padding: 15px;">{{$orders->product_name}}</td>

    <td style="padding: 15px;">{{$orders->price}}</td>
    <td style="padding: 15px;">{{$orders->quantity}}</td>
    <td style="padding: 15px;">{{$orders->status}}</td>

    <td style="padding: 15px;"><a  class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Delivered</a></td>

    <td style="padding: 15px;"><a class="btn btn-success" onclick="return confirm('Are you sure')" href="{{url('deletestatus',$orders->id)}}">Delete</a></td>

    
</tr>

@endforeach

    </table>

</div>
       
  </body>
</html>