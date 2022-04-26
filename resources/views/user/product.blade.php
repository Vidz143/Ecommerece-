<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .container{

       width: 1900px;
       height: 1100px;
       background-color: rgb(255, 255, 255);
    }

    .section-heading h2{
      color: #b92929;
      margin-left: 480px;

    }

    .latest-products {
	margin-top: 100px;
}

.product-item {
	border: 1px solid #eee;
	margin-bottom: 30px;
}

.product-item .down-content {
	padding: 30px;
	position: relative;
}

.product-item img {
	
  
	overflow: hidden;
}

.product-item .down-content h4 {
	font-size: 19px;
	color: #1a6692;
	margin-bottom: 20px;
}

.product-item .down-content h6 {
	position: absolute;
	top: 30px;
	right: 30px;
	font-size: 18px;
	color: #b92929;
  margin-bottom: 20px;
}
.product-item .down-content p {

	
	font-size: 17px;
	color: #080808;

  
}

</style>

<div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            
  <form  action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding:10px;">
          @csrf 
          
          <input class="form-control" type="search" name="search" placeholder="search">
           
           <input type="submit" value="Search" class="btn btn-success">
          </form>
          
          
          </div>
        </div>


          @foreach ($data as $product)
              
     <div class="col-md-4">
          <div class="product-item">
            <a><img height="250" width="100%" src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a><h4>{{$product->title}}</h4></a>
              <h6>RS-{{$product->price}}</h6>
              <p><b>Description-{{$product->description}}</b></p>

              <form action="{{url('addcart',$product->id)}}" method="POST">
                @csrf
<input type="number" value="1" min="1" class="form-control" style="width:100px" name="quantity">
                
<br><center>
<input class="btn btn-primary" type="submit" value="Add Cart"></center>
              </form>
             
            </div>
          </div>
        </div>
        @endforeach

    @if(method_exists($data,'links'))

        <div class="d-flex justify-content-center">

          {!! $data->links() !!}

        </div>

        @endif
      </div>
    </div>



  
 