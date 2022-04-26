
<html>
    <head>
<style>

html{
    height: 625px;
}
  
    body{
    background-image: linear-gradient(#c2e59c,#64b3f4);
   }
   .container{
  
    margin-left:300px;
    margin-top: 90px;
    width:1000px;
  height:auto;
  border-radius: 20px;
  position: fixed;
    
}

h1{
    font-size: 25px;
    font-style:italic;
}
  h2{
      font-size: 20px;
  }
  h3{
      font-size: 20px;
      text-align: left;
  }
 
  .box {
  float: left;
  width: 33.33%;
  padding: 50px;
  margin: 30px;
}
</style>
<body>
    @include('admin.navbar')
    @include('admin.sidebar')

    <div class="container" align="center">
    
<h1><b>Welcome to Our Website</b></h1>
<br>
<h2>In our website is one type of Ecommerce website, here user is first of all register and after login website and show 
    products and purchase products.
</h2>
<br>
<h3>Used Technology:</h3>
<div class="box" style="background-color:#bbb">
    <p><a href="https://www.w3schools.com/">HTML</a></p>
    
    </div>
    <div class="box" style="background-color:#ccc">
    <p><a href="https://www.tutorialspoint.com/css/index.htm">CSS</a></p>
    </div>
    <div class="box" style="background-color:#ddd">
    <p><a href="https://laravel.com/docs/8.x/readme">PHP LARAVEL</a></p>
   </div>
  </div>
</body>
</head>
</html>


  

</div>