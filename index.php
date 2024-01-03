<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecommerse website using php and sql</title>
    <!-- bootstrap link for css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- fontaosame  link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-info">
   <a class="navbar-brand" href="#">LOGO</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart<i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">total price</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
 
</nav>
<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Welcome Guest</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
  </ul>
</nav>
<!--  third child -->
 <div class="bg-light">
  <h3 class="text-center">Hidden Store </h3>
  <p class="text-center"> communication is at the heart of e-commerce and ccommunity</p>
 </div>


<!-- fourth child -->
<div class="container-fluid">
<div class="row">
<div class="col-md-9">
  <!-- product -->

<div class="row">
  <div class="col-md-3">
    <div class="card  " style="width: 18rem;">
      <img src="https://picsum.photos/id/1/100/100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title </p>
        <a href="#" class="btn btn-primary">Add cart</a>
        <a href="#" class="btn btn-secondary">view more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card  " style="width: 18rem;">
      <img src="https://picsum.photos/id/6/100/100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title</p>
        <a href="#" class="btn btn-primary">Add Cart</a>
        <a href="#" class="btn btn-secondary">view more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card  " style="width: 18rem;">
      <img src="https://picsum.photos/id/8/100/100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and </p>
        <a href="#" class="btn btn-primary">Add Cart</a>
        <a href="#" class="btn btn-secondary">view more</a>
      </div>
    </div>
  </div>
  
  <div class="col-md-3">
    <div class="card  mb-2 " style="width: 18rem;">
      <img src="https://picsum.photos/id/1/100/100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and </p>
        <a href="#" class="btn btn-primary">Add Cart</a>
        <a href="#" class="btn btn-secondary">view more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card  mb-2 " style="width: 18rem;">
      <img src="https://picsum.photos/id/1/100/100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and </p>
        <a href="#" class="btn btn-primary">Add Cart</a>
        <a href="#" class="btn btn-secondary">view more</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card  mb-2 " style="width: 18rem;">
      <img src="https://picsum.photos/id/1/100/100" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and </p>
        <a href="#" class="btn btn-primary">Add Cart</a>
        <a href="#" class="btn btn-secondary">view more</a>
      </div>
    </div>
  </div>

</div>


</div>

<div class="col-md-3">
  <!-- sidenav -->

  <div class="flex-shrink-0 p-3 bg-body-secondary" style="width: 90%;  height: auto;">
   <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 fw-semibold">Collapsible</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle  align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Home
        </button>
        <div class="collapse show" id="home-collapse" style="">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Overview</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Updates</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Reports</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle  align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Dashboard
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Overview</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Weekly</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Monthly</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Annually</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Orders
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">New</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Processed</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Shipped</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Returned</a></li>
          </ul>
        </div>
      </li>
      <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-5 fw-semibold">Collapsible</span>
      </a>
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <button class="btn btn-toggle  align-items-center rounded border-0" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            Home
          </button>
          <div class="collapse show" id="home-collapse" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Overview</a></li>
              <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Updates</a></li>
              <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Reports</a></li>
            </ul>
          </div>
        </li>
      <li class="border-top my-3"></li>

      <li class="mb-1">
        
        <button class="btn btn-toggle  align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">New...</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Profile</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Settings</a></li>
            <li><a href="#" class="link-body-emphasis  text-decoration-none rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>


    <!-- last child  -->
    <!-- <div class="bg-info p-3 text-center">
<p> All right reseverd  c - dediged  by Rm</p>
    </div> -->
    </div></div>




   <!-- bootstrap link for js-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script> --
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" ></script>-->
</body>
</html>