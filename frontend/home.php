<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eternal Cafe</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar starts -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Eternal Cafe</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Contact us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu" id="navbarDropdown">
            <li><a class="dropdown-item" href="#">MyProfile</a></li>
            <li>
            <form action="./logout.php" method="post">
        <button class="btn my-1" type="submit" href="./logout.php">Logout</button>
      </form>
            </li>
          </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<!-- navbar ends -->


<!-- card starts -->

<div class="container py-5">
  <div class="row mt-5">

  <h1 class="text-center"><u>Menus of Eternal Cafe </u></h1>
  <?php
      
      include('../db/dbconfig.php');

      $query = "SELECT * FROM products";
      $query_run = mysqli_query($conn,$query);
      $result = mysqli_num_rows($query_run)>0;

      if($result){
        while ($row=mysqli_fetch_assoc($query_run))
         {
           ?>
           <div class="col-md-3 mt-3">
            <div class="card">
              <!-- image start-->
              <img src="../backend/upload/<?php echo $row['image']; ?>" alt="Product Image" width="260px" height="250px">
              <div class="card-body">
                <h4 class="card-title mx-5"><?php echo $row['p_name']; ?></h4>
                <h5 class="card-title mx-5">Price:$<?php echo $row['price']; ?></h5>
                <p class="card-text">
                  <?php ?>
                </p>
                   <button class="btn btn-success mx-5">VIEW DETAILS</button>
              </div>
            </div>
           </div>
           <?php
      }
    }
    else{
      echo "No Product Found";
    }

?>
  </div>
</div>

<!-- card ends -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>