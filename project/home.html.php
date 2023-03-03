 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 25%;
  }
        
    .search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: -114px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
        }  
        .text-center{
            
            background: #a89f23;
            padding: 3rem;
            
        }
        
        .footer{
            background: #70948a;
            
        }
        body {
            background: #423d4a; 
            
        }
        
        
   </style>
  </head>
    
    <body>
    
   <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
            
  <a class="navbar-brand" href="#">HOME</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">DETAILS OF PRODUCTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">MY ACCOUNT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SHOP</a>
      </li>
    </ul>
  </div>
</nav>
  <div class="slideshow-container">

      <div class ="row">
        <div class ="col-sm-12">
             <h4 class="text-center" style="font-size:58px;">CEYLON TEA STORE</h4>
        </div>
      </div>
    </div>
        
      <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cover51.jpg" alt="Los Angeles" width="800" height="200">
    </div>
    <div class="carousel-item">
      <img src="images/cover61.jpg" alt="Chicago" width="800" height="200">
    </div>
    <div class="carousel-item">
      <img src="images/cover72.jpg" alt="New York" width="800" height="200">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>   
        
 <section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Pickup City">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section> 
    
    <div class="footer">
     <footer id="contact">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center">
          <h3>CEYLON TEA STORE</h3>
          <p>At our core is collection of evry super markat item and madicen and solution for you busy life ,Quik Fast &amp; Smart Your Choose. </p>
          <strong>Contact Info</strong>
          <p>(0110) 001-433-225<br>ceylonteastore@gmail.com</p>

           
        </div>
      </div>
    </footer>
   </div>
        
    
    </body>
</html>