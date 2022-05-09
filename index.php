<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Grocery | Home Page</title>
</head>

<body>
  <!--Navbar Starts-->
<nav  class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Grocery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="font-weight: bolder;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ordered.php">Ordered</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link" href="signup.html">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booked.php"><i class="bi bi-person-lines-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
       <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
      </svg>Admin</a>
      </li>
    </ul>
  </div>
</nav>
  <!--Navbar ends-->

  <!--Grocery Card Starts-->
  <div class="card-deck" style="margin:2rem;">
  <div class="card" style="border-radius:1rem;">
    <img class="card-img-top" src="Images/t.jpg" alt="Card image cap" style="border-radius:1rem;">
    <div class="card-body">
      <h5 class="card-title">Tomato</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">₹ 20/kg</small></p>
      <a href="order.php?item=Tomato&price=20" class="btn btn-success" style="border:0">Buy</a>
    </div>
  </div>
  <div class="card" style="border-radius:1rem;">
    <img class="card-img-top" src="Images/p.jpg" alt="Card image cap" style="border-radius:1rem;">
    <div class="card-body">
      <h5 class="card-title">Potato</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">₹ 30/kg</small></p>
      <a href="order.php?item=Potato&price=30" class="btn btn-success" style="border:0">Buy</a>
    </div>
  </div>
  <div class="card" style="border-radius:1rem;">
    <img class="card-img-top" src="Images/o.jpg" alt="Card image cap" style="border-radius:1rem;">
    <div class="card-body">
      <h5 class="card-title">Onion</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">₹ 40/kg</small></p>
      <a href="order.php?item=onion&price=40" class="btn btn-success" style="border:0">Buy</a>
    </div>
  </div>
</div>
<div class="card-deck" style="margin:2rem;">
  <div class="card" style="border-radius:1rem;">
    <img class="card-img-top" src="Images/c.jpg" alt="Card image cap" style="border-radius:1rem;">
    <div class="card-body">
      <h5 class="card-title">Carrot</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">₹ 25/kg</small></p>
      <a href="order.php?item=Carrot&price=25" class="btn btn-success" style="border:0">Buy</a>
    </div>
  </div>
  <div class="card" style="border-radius:1rem;">
    <img class="card-img-top" src="Images/cb.jpg" alt="Card image cap" style="border-radius:1rem;">
    <div class="card-body">
      <h5 class="card-title">Cabbage</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">₹ 35/kg</small></p>
      <a href="order.php?item=Cabbage&price=35" class="btn btn-success" style="border:0">Buy</a>
    </div>
  </div>
  <div class="card" style="border-radius:1rem;">
    <img class="card-img-top" src="Images/l.jpg" alt="Card image cap" style="border-radius:1rem;">
    <div class="card-body">
      <h5 class="card-title">Ladies Finger</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">₹ 30/kg</small></p>
      <a href="order.php?item=LadiesFinger&price=30" class="btn btn-success" style="border:0">Buy</a>
    </div>
  </div>
</div>
<div class="card-deck" style="margin:2rem;">
  <div class="card" style="border-radius:1rem;">
    <img class="card-img-top" src="Images/chl.jpg" alt="Card image cap" style="border-radius:1rem;">
    <div class="card-body">
      <h5 class="card-title">Chilli</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">₹ 15/kg</small></p>
      <a href="order.php?item=Chilli&price=15" class="btn btn-success" style="border:0">Buy</a>
    </div>
  </div>
  <div class="card" style="border-radius:1rem;">
    <img class="card-img-top" src="Images/cap.jpg" alt="Card image cap" style="border-radius:1rem;">
    <div class="card-body">
      <h5 class="card-title">Capsicum</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">₹ 20/kg</small></p>
      <a href="order.php?item=Capsicum&price=20" class="btn btn-success" style="border:0">Buy</a>
    </div>
  </div>
  <div class="card" style="border-radius:1rem;">
    <img class="card-img-top" src="Images/cf.jpg" alt="Card image cap" style="border-radius:1rem;">
    <div class="card-body">
      <h5 class="card-title">Coliflower</h5>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted">₹ 40/kg</small></p>
      <a href="order.php?item=Coliflower&price=40" class="btn btn-success" style="border:0">Buy</a>
    </div>
  </div>
</div>
<!--Grocery Card Ends-->


<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright : Mohammed Rihan<br>
    <a class="" style="text-decoration:underline;color:blue" href="https://github.com/Mohammedrihan551">Github</a>
  </div>
  <!-- Copyright -->
</footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>