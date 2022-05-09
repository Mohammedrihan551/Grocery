<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Grocery | Dispatch Page</title>
</head>

<body>
  <!--Navbar Starts-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Grocery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ordered.php">Ordered</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link" href="signup.html">Profile</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="booked.php" style="font-weight: bolder;"><i class="bi bi-person-lines-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
       <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
      </svg>Admin</a>
      </li>
    </ul>
  </div>
</nav>  
  <!--Navbar ends-->

  <!--Admin nav bar starts-->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" href="booked.php">Ordered</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="dispatched.php">Dispatched</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="delivered.php">Dleliverd</a>
    </li>
  </ul>
  <!--Admin nav bar ends-->

  <!--Date And Time Check starts-->
  <!--check with code starts-->
  <h1 style="color: gray; margin:2rem">Dispatch check</h1>
  <form name="codecheck" method="post" style="margin: 2rem;border:0px solid gray;border-radius: 0.5rem;background-color:aliceblue;">
    <legend style="margin:1rem;">Code Check</legend>
    <!-- Grid row -->
    <div class="form-group row" style="margin:1rem;">
      <!-- Default input -->
      <label for="inputText3" class="col-sm-2 col-form-label" style="width:5rem">Code</label>
      <div class="col-sm-10" style="width:25rem" ;>
        <input type="text" class="form-control" name="bookingcode" id="inputText3" placeholder="BookingCode" required>
      </div>
    </div>
    <div class="form-group row" style="display: inline-block;margin:1.5rem">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-outline-success" name="codesubmit">Ckeck</button>
      </div>
    </div>
    <!-- Grid row -->
  </form>


  <!--check with code ends-->
  <!--check with date starts-->
  <form name="datecheck" method="post" style="margin: 2rem;border:0px solid gray;border-radius: 0.5rem;background-color:aliceblue;">
    <legend style="margin:1rem;">Date Check</legend>
    <!-- Grid row -->
    <div class="form-group row" style="margin:1rem;">
      <!-- Default input -->
      <label for="inputdate3" class="col-sm-2 col-form-label" style="width:5rem">Date</label>
      <div class="col-sm-10" style="width:25rem" ;>
        <input type="date" class="form-control" name="bookingdate" id="inputdate3" placeholder="First Name" required>
      </div>
    </div>
    <div class="form-group row" style="display: inline-block;margin:1.5rem">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-outline-success" name="datesubmit">Ckeck</button>
      </div>
    </div>
    <!-- Grid row -->
  </form>
  <!--check with date ends-->


  <?php
  require "dblink.php";
  if (isset($_POST["datesubmit"])) {
    $date = $_POST["bookingdate"];

    /*displaying of dispatched starts*/

    $ssql = "SELECT * FROM `orderdispatch` where date='$date' and status='DISPATCHED'";
    $result = mysqli_query($con, $ssql);
    $nrow = mysqli_num_rows($result);
    $tot = 0;
    $slno = 0;

    echo "<div class='table-responsive' style=margin:2rem>
     <table class='table table-bordereless table-hover table-condensed small'>
      <thead><tr><th scope='col' style='color:darkcyan;'>SLNO</th>
      <th scope='col' style='color:darkslateblue;'>BOOKINGCODE</th>
      <th scope='col' style='color:darkslategray;'>FULLNAME</th>
      <th scope='col' style='color:mediumpurple;'>ITEM</th>
      <th scope='col' style='color:tomato;'>QUANTITY</th>
      <th scope='col' style='color:tomato;'>PRICE</th>
      <th scope='col'style='color:mediumvioletred;'> PHONE</th>
      <th scope='col' style='color:darkslategrey;'>E-MAIL</th>
      <th scope='col' style='color:mediumorchid;'> ADDRESS</th>
      <th scope='col' style='color:mediumorchid;'>BOOKED|DATE</th>
      <th scope='col' style='color:rebeccapurple;'>DISPATCH|DATE</th>
      <th scope='col' style='color:rebeccapurple;'>DISPATCH|IME</th>
      <th scope='col' style='color:green;'> STATUS</th>
      <th scope='col' style='color:steelblue;'>DISPATCH</th></tr></thead>";
    while ($row = mysqli_fetch_array($result)) {
      $slno++;
      /*displaying of dispatched ends*/

      echo " <form name='orderfrm' action='insert.php' method='post'><div class='form-group'>
    <tbody><tr>
    <td scope='row' style='color:darkcyan;font-weight:bold;width:auto;'>$slno</td>
    <td scope='row'><input type='number' name='bookingcode' value=$row[0]  style='color:darkslateblue;font-weight:bold;' readonly/></td>
    <td scope='row'><input type='text' name='fullname' value=$row[1] style='color:darkslategray;font-weight:bold;' readonly/></td>
    <td scope='row'><input type='text' name='item' value=$row[2] style='color:mediumpurple;font-weight:bold'  readonly /></t>
    <td scope='row'><input type='number' name='quantity' value=$row[3]  style='color:tomato;font-weight:bold;' readonly/></td>
    <td scope='row'><input type='number' name='price' value=$row[4] style='color:tomato;font-weight:bold;' readonly/></td>
    <td scope='row'><input type='tel' name='phone' value=$row[5] style='color:mediumvioletred;font-weight:bold;' readonly/></td>
    <td scope='row'><input  type='email' name='email' value=$row[6]  style='color:darkslategrey;font-weight:bold' readonly/></td>
    <td scope='row'><input  type='text' name='address' value=$row[7]  style='color:mediumorchid;font-weight:bold' readonly/></td>
    <td scope='row'><input  type='date' name='date' value=$row[8]   style='color:rebeccapurple;font-weight:bold' readonly/></td>
    <td scope='row'><input  type='date' name='date' value=$row[9]   style='color:rebeccapurple;font-weight:bold' readonly/></td>
    <td scope='row'><input  type='time' name='time' value=$row[10]  style='color:rebeccapurple;font-weight:bold' readonly/></td>
    <td scope='row'><input  type='text' name='status' value=$row[11]  style='color:green;font-weight:bold' readonly/></td>
    <td scope='row'><button type='submit' class='btn btn-primary' name='deliverd'>Delivered</button></td>";
      $tot = $tot + $row[4];
    }
    echo "<tr><th style='color:rebeccapurple;font-weight:bold' scope='row' colspan='9'>Number of items dispatched  on " . $date . " is " . $nrow . "</th></tr>";
    echo "<tr><th style='color:rebeccapurple;font-weight:bold' scope='row' colspan='9'> Total Number of item(quantity) dispatched on " . $date . " is " . $tot . "</th></tr>";

    echo '</table></div>';
  }
  /* dispating and displaying on date ends*/


  /*Code check of dispatched data start*/
  if (isset($_POST["codesubmit"])) {
    $code = $_POST["bookingcode"];

    $ssql = "SELECT * FROM `orderdispatch` where bookingcode='$code' and status='DISPATCHED'";
    $result = mysqli_query($con, $ssql);
    $nrow = mysqli_num_rows($result);
    $tot = 0;
    $slno = 0;


    echo "<div class='table-responsive' style=margin:2rem>
   <table class='table table-bordereless table-hover table-condensed small'>
    <thead><tr><th scope='col' style='color:darkcyan;'>SLNO</th>
    <th scope='col' style='color:darkslateblue;'>BOOKINGCODE</th>
    <th scope='col' style='color:darkslategray;'>FULLNAME</th>
    <th scope='col' style='color:mediumpurple;'>ITEM</th>
    <th scope='col' style='color:tomato;'>QUANTITY</th>
    <th scope='col' style='color:tomato;'>PRICE</th>
    <th scope='col'style='color:mediumvioletred;'> PHONE</th>
    <th scope='col' style='color:darkslategrey;'>E-MAIL</th>
    <th scope='col' style='color:mediumorchid;'> ADDRESS</th>
    <th scope='col' style='color:mediumorchid;'>BOOKED|DATE</th>
    <th scope='col' style='color:rebeccapurple;'>DISPATCH|DATE</th>
    <th scope='col' style='color:rebeccapurple;'>DISPATCH|IME</th>
    <th scope='col' style='color:green;'> STATUS</th>
    <th scope='col' style='color:steelblue;'>DISPATCH</th></tr></thead>";
    while ($row = mysqli_fetch_array($result)) {
      $slno++;
      /*displaying of dispatched ends*/

      echo " <form name='orderfrm' action='insert.php' method='post'><div class='form-group'>
 <tbody><tr>
 <td scope='row' style='color:darkcyan;font-weight:bold;width:auto;'>$slno</td>
 <td scope='row'><input type='number' name='bookingcode' value=$row[0]  style='color:darkslateblue;font-weight:bold;' readonly/></td>
 <td scope='row'><input type='text' name='fullname' value=$row[1] style='color:darkslategray;font-weight:bold;' readonly/></td>
 <td scope='row'><input type='text' name='item' value=$row[2] style='color:mediumpurple;font-weight:bold'  readonly /></t>
 <td scope='row'><input type='number' name='quantity' value=$row[3]  style='color:tomato;font-weight:bold;' readonly/></td>
 <td scope='row'><input type='number' name='price' value=$row[4] style='color:tomato;font-weight:bold;' readonly/></td>
 <td scope='row'><input type='tel' name='phone' value=$row[5] style='color:mediumvioletred;font-weight:bold;' readonly/></td>
 <td scope='row'><input  type='email' name='email' value=$row[6]  style='color:darkslategrey;font-weight:bold' readonly/></td>
 <td scope='row'><input  type='text' name='address' value=$row[7]  style='color:mediumorchid;font-weight:bold' readonly/></td>
 <td scope='row'><input  type='date' name='date' value=$row[8]   style='color:rebeccapurple;font-weight:bold' readonly/></td>
 <td scope='row'><input  type='date' name='date' value=$row[9]   style='color:rebeccapurple;font-weight:bold' readonly/></td>
 <td scope='row'><input  type='time' name='time' value=$row[10]  style='color:rebeccapurple;font-weight:bold' readonly/></td>
 <td scope='row'><input  type='text' name='status' value=$row[11]  style='color:green;font-weight:bold' readonly/></td>
 <td scope='row'><button type='submit' class='btn btn-primary' name='deliverd'>Delivered</button></td>";
      $tot = $tot + $row[4];
    }
    echo "<tr><th style='color:rebeccapurple;font-weight:bold' scope='row' colspan='9'>Number of items dispatched  on  is " . $nrow . "</th></tr>";
    echo "<tr><th style='color:rebeccapurple;font-weight:bold' scope='row' colspan='9'> Total Number of item(quantity) dispatched is " . $tot . "</th></tr>";

    echo '</table></div>';
  }

  /*Code check of dispatched ends*/


  /*select all details of dispatched starts*/
  $ssql = "SELECT * FROM `orderdispatch` where status='DISPATCHED'";
  $result = mysqli_query($con, $ssql);
  $nrow = mysqli_num_rows($result);
  $tot = 0;


  echo "<div class='table-responsive' style=margin:2rem>
   <table class='table table-bordereless table-hover table-condensed small'>
    <thead><tr><th scope='col' style='color:darkcyan;'>SLNO</th>
    <th scope='col' style='color:darkslateblue;'>BOOKINGCODE</th>
    <th scope='col' style='color:darkslategray;'>FULLNAME</th>
    <th scope='col' style='color:mediumpurple;'>ITEM</th>
    <th scope='col' style='color:tomato;'>QUANTITY</th>
    <th scope='col' style='color:tomato;'>PRICE</th>
    <th scope='col'style='color:mediumvioletred;'> PHONE</th>
    <th scope='col' style='color:darkslategrey;'>E-MAIL</th>
    <th scope='col' style='color:mediumorchid;'> ADDRESS</th>
    <th scope='col' style='color:mediumorchid;'>BOOKED|DATE</th>
    <th scope='col' style='color:rebeccapurple;'>DISPATCH|DATE</th>
    <th scope='col' style='color:rebeccapurple;'>DISPATCH|IME</th>
    <th scope='col' style='color:green;'> STATUS</th>
    <th scope='col' style='color:steelblue;'>DISPATCH</th></tr></thead>";
  $slno = 0;
  while ($row = mysqli_fetch_array($result)) {
    $slno++;
    /*displaying of dispatched ends*/

    echo " <form name='orderfrm' action='insert.php' method='post'><div class='form-group'>
   <tbody><tr>
   <td scope='row' style='color:darkcyan;font-weight:bold;width:auto;'>$slno</td>
   <td scope='row'><input type='number' name='bookingcode' value=$row[0]  style='color:darkslateblue;font-weight:bold;' readonly/></td>
   <td scope='row'><input type='text' name='fullname' value=$row[1] style='color:darkslategray;font-weight:bold;' readonly/></td>
   <td scope='row'><input type='text' name='item' value=$row[2] style='color:mediumpurple;font-weight:bold'  readonly /></t>
   <td scope='row'><input type='number' name='quantity' value=$row[3]  style='color:tomato;font-weight:bold;' readonly/></td>
   <td scope='row'><input type='number' name='price' value=$row[4] style='color:tomato;font-weight:bold;' readonly/></td>
   <td scope='row'><input type='tel' name='phone' value=$row[5] style='color:mediumvioletred;font-weight:bold;' readonly/></td>
   <td scope='row'><input  type='email' name='email' value=$row[6]  style='color:darkslategrey;font-weight:bold' readonly/></td>
   <td scope='row'><input  type='text' name='address' value=$row[7]  style='color:mediumorchid;font-weight:bold' readonly/></td>
   <td scope='row'><input  type='date' name='date' value=$row[8]   style='color:rebeccapurple;font-weight:bold' readonly/></td>
   <td scope='row'><input  type='date' name='date' value=$row[9]   style='color:rebeccapurple;font-weight:bold' readonly/></td>
   <td scope='row'><input  type='time' name='time' value=$row[10]  style='color:rebeccapurple;font-weight:bold' readonly/></td>
   <td scope='row'><input  type='text' name='status' value=$row[11]  style='color:green;font-weight:bold' readonly/></td>
   <td scope='row'><button type='submit' class='btn btn-primary' name='deliverd'>Delivered</button></td>";
    $tot = $tot + $row[3];
  }
  echo "<tr><th style='color:rebeccapurple;font-weight:bold' scope='row' colspan='9'>Number of items dispatched  is " . $nrow . "</th></tr>";
  echo "<tr><th style='color:rebeccapurple;font-weight:bold' scope='row' colspan='9'> Total Number of item(quantity) dispatched is " . $tot . "</th></tr>";

  echo '</table></div>';
  /*select all details of dispatched ends*/

  ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
</body>