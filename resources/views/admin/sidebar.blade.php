<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color:#8396d4;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: black;
  font-size: 18px;
}
 
.sidebar a:hover {
  color: #dfdbdb;
}


div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}


</style>
</head>
<body>

<div class="sidebar">
  <br>
  <br>
  <br>
  <br>
  <br>
  <a  href="{{url('body')}}"><i class="bi bi-house-door-fill"></i>home</a>
  <a  href="{{url('product')}}"><span class='bi bi-bag-fill'></span>Product</a>
  <a href="{{url('showproduct')}}"><span class='bi bi-card-list'></span>Show all products</a>
  <a href="{{url('showorder')}}"><span class='bi bi-basket-fill'></span>Orders</a>
  
</div>



</body>
</html>
