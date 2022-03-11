<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/custom.css">
    
</head>
<body>
    <!--NAVBAR START-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <!--offcanvas toogler-->
  <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  <span class="navbar-toggler-icon"></span>
</button>
<!--offcanvas toogler-->
    <a class="navbar-brand fw-bold text-uppercase me-auto " href="#">Travella</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex ms-auto">
      <div class="input-group my-3 my-lg-0">
        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <button class="btn btn-primary" type="button" id="button-addon2"> <i class="bi bi-search"></i></button>
      </div>
      </form>

      <ul class="navbar-nav me-end mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-fill"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      
    </div>
  </div> 
</nav>
    <!--NAVBAR END-->

    <!--OFFCANVAS-->
<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Link with href
</a>

<div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-body p-0">
   <nav class="navbar-dark">
     <ul class="navbar-nav">
       <li>
         <div class="text-muted small fw-bold text-uppercase px-3">core</div>
       </li>
       <li>
         <a class="nav-link px-3 active" href="">
           <span class=" me-2"><i class="bi bi-speedometer2"></i></span>
           <span>Dashboard</span>
         </a>
       </li>
       <li class="my-4">
         <hr class="dropdown-divider" />
       </li>
       <li>
         <div class="text-muted small fw-bold text-uppercase px-3">Interface</div>
       </li>
       <li>
        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        <span class=" me-2" ><i class="bi bi-layout-split"></i></span>
           <span>Features</span>
           <span class="right-icon ms-auto" ><i class="bi bi-chevron-down "></i></span>
        </a>
        <div class="collapse" id="collapseExample">
          <div>
            <ul class="navbar-nav ps-3" >
              <li>
                <a href="admin/admin.php" class="nav-link px-3">
                <span class=" me-2"><i class="bi bi-person-fill"></i></i></span>
           <span>Admin</span>
                </a>
              </li>
              <li>
                <a href="user/view_user.php" class="nav-link px-3">
                <span class=" me-2"><i class="bi bi-person-fill"></i></i></span>
           <span>User</span>
                </a>
              </li>
              <li>
                <a href="bus/bus_info.php" class="nav-link px-3">
                <span class=" me-2"><i class="bi bi-calendar-event"></i></span>
           <span>Bus Schedule</span>
                </a>
              </li>
              <li>
                <a href="bus/booking.php" class="nav-link px-3">
                <span class=" me-2"><i class="bi bi-bookmark-plus"></i></span>
           <span>Book</span>
                </a>
              </li>
            </ul>            
          </div>
        </div>
       </li>
      
     </ul>

   </nav>
  </div>
</div>
    <!--OFFCANVAS-->
    <main class="mt-5 pt-3">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 fw-bold fs-3">Dashboard</div>
  </div>
  <div class="row">
    <div class="col-md-3 mb-3 ">
    <div class="card text-white bg-primary mb-3 h-100">
      <div class="card-body">
        <h5 class="card-title">Bus Schedule</h5>
        <p class="card-text">
          <a href="bus/bus_info.php" class="nav-link px-3 text-white">
                <span class=" me-2"><i class="bi bi-calendar-event"></i></span> <span>Bus Schedule</span>
          </a>
        </p>
  </div>
</div>      
    </div>

    <div class="col-md-3 mb-3"> 
    <div class="card text-white bg-success mb-3 h-100">
      <div class="card-body">
        <h5 class="card-title">Book Now</h5>
        <p class="card-text">
          <a href="bus/category1.php" class="nav-link px-3 text-white">
                <span class=" me-2"><i class="bi bi-bookmark-plus"></i></span><span>Book</span>
          </a>
        </p>
  </div>
</div>      
    </div>
    <div class="col-md-3 mb-3">
    <div class="card text-white bg-warning mb-3 h-100">
      <div class="card-body">
        <h5 class="card-title">User</h5>
        <p class="card-text"> 
          <a href="user/user.php" class="nav-link px-3 text-white">
                <span class=" me-2"><i class="bi bi-person-fill"></i></i></span><span>User</span>
          </a>
        </p>
      </div>
    </div>      
    </div>

    <div class="col-md-3 mb-3">
    <div class="card text-white bg-danger mb-3 h-100">
      <div class="card-body">
        <h5 class="card-title">Admin</h5>
        <p class="card-text"> 
          <a href="admin/admin.php" class="nav-link px-3 text-white">
                <span class=" me-2"><i class="bi bi-person-fill"></i></i></span><span>Admin</span>
          </a>
        </p>
      </div>
    </div>      
    </div>
  </div>
</div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--<script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.4.0.js"></script>
    <script src="./script.js"></script>-->
    
</body>
</html>