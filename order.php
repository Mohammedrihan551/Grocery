<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="foodcart.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
  <title>Grocery | Order Page</title>
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
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
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
  <!--Booking Form Starts-->
<?php
if(!isset($_SESSION["logedin"]) || $_SESSION["logedin"]!=true ){
  $login=true;   
}
else{
  $login=false;
}

if(!$login){
 /* echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">SUCCESSFULY!</h4>
                    <p>Hello.This is just to show that after signup/login only the success alert is shown</p>
                    <hr>
                   <p class="mb-0">SUCCESS.</p>
                   </div>'; */
                   $price=$_GET['price'];
                   $item=$_GET['item'];
                  
    echo "<form name='orderform' method='post' action='insert.php' style='margin: 2rem;border:1px solid gray;border-radius:0.5rem;'>
                      <legend style='margin:1rem;'><i class='bi bi-cart'></i>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                    <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
                     </svg>Order
                      </legend>
                    
                      <div class='form-group row' style='margin:1rem;'>
                        <label for='inputText3' class='col-sm-2 col-form-label' style='width:5rem'>Item</label>
                        <div class='col-sm-10' style='width:25rem' ;>
                          <input type='text' class='form-control' name='item' value=$item id='inputText3' placeholder='' readonly>
                        </div>
                      </div>
                      <div class='form-group row' style='margin:1rem;'>
                        <!-- Default input -->
                        <label for='inputTextl3' class='col-sm-2 col-form-label' style='width:5rem'>₹ Price</label>
                        <div class='col-sm-10' style='width:25rem' ;>
                          <input type='number' class='form-control' name='price' value=$price id='inputTextl3' placeholder='' readonly>
                        </div>
                      </div>";
                      
                  
                  
                   echo '<div class="form-group row" style="margin:1rem;">
                        <!-- Default input -->
                        <label for="peopleNum" class="col-sm-2 col-form-label" style="width:5rem">Quantity[KG]</label>
                        <div class="col-sm-10" style="width:25rem" ;>
                          <div class="def-number-input number-input safari_only" style="margin-left:1rem">
                            <button type="button" onclick="lessPeople()" class="minus"></button>
                            <input type="number" class="form-control" name="quantity" id="peopleNum" value="1" placeholder="" required>
                            <button type="button" onclick="addPeople()" class="plus"></button>
                          </div>
                        </div>
                      </div>
                  
                      <div class="form-group row" style="margin:1rem;">
                        <!-- Default input -->
                        <label for="inputEmail3" class="col-sm-2 col-form-label" style="width:5rem">Firstname</label>
                        <div class="col-sm-10" style="width:25rem" ;>
                          <input type="text" class="form-control" name="firstname" id="inputEmail3" placeholder="Firstname" required>
                        </div>
                      </div>
                      <div class="form-group row" style="margin:1rem;">
                        <!-- Default input -->
                        <label for="inputDate3" class="col-sm-2 col-form-label" style="width:5rem">Lastname</label>
                        <div class="col-sm-10" style="width:25rem" ;>
                          <input type="text" class="form-control" name="lastname" id="inputDate3" placeholder="Lastname" required>
                        </div>
                      </div>
                      <div class="form-group row" style="margin:1rem;">
                        <!-- Default input -->
                        <label for="input3" class="col-sm-2 col-form-label" style="width:5rem">Phone</label>
                        <div class="col-sm-10" style="width:25rem" ;>
                          <input type="tel" class="form-control" name="phone" id="input3" placeholder="Phone" required>
                        </div>
                      </div>
                      <div class="form-group row" style="margin:1rem;">
                        <!-- Default input -->
                        <label for="inputDateto3" class="col-sm-2 col-form-label" style="width:5rem">E-mail</label>
                        <div class="col-sm-10" style="width:25rem" ;>
                          <input type="email" class="form-control" name="email" id="inputDateto3" placeholder="email@gmail.com" required>
                        </div>
                      </div>
                      <div class="form-group row" style="margin:1rem;">
                        <!-- Default input -->
                        <label for="inputRoom3" class="col-sm-2 col-form-label" style="width:5rem">Address</label>
                        <div class="col-sm-10" style="width:25rem" ;>
                          <input type="text" class="form-control" name="address" id="inputRoom3" placeholder="Address">
                        </div>
                      </div>
                      <!-- Grid row -->
                      <!-- Grid row -->
                      <div class="form-group row" style="margin:1rem;display: inline-block;">
                        <div class="col-sm-10">
                          <button type="reset" class="btn btn-outline-danger">Reset</button>
                        </div>
                      </div>
                      <div class="form-group row" style="display: inline-block;">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-success" name="orderbtn">Order</button>
                        </div>
                      </div>
                      <!-- Grid row -->
                    </form>
                    <!-- Material form group -->
                    <!--Booking Form Ends-->
                  
                    <script>
                      function addPeople() {
                        let people = document.getElementById("peopleNum").value;
                        people++;
                        if (people < 100) {
                          document.getElementById("peopleNum").value = "";
                          document.getElementById("peopleNum").value = people;
                        } else {
                          document.getElementById("peopleNum").value = "";
                          document.getElementById("peopleNum").value = 1;
                        }
                      }
                  
                      function lessPeople() {
                        let people = document.getElementById("peopleNum").value;
                        people--;
                        if (people >= 1) {
                          document.getElementById("peopleNum").value = "";
                          document.getElementById("peopleNum").value = people;
                        } else {
                          document.getElementById("peopleNum").value = "";
                          document.getElementById("peopleNum").value = 1;
                        }
                      }
                    </script>';
                  
}else{
  echo ' <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">FAILED!</h4>
  <p><a href="login.html" style="text-decoration: none;">Login</a>/
  <a href="signup.html" style="text-decoration: none;">Signup</a></p>
  <hr>
 <p class="mb-0">FAILURE.</p>
 </div>';
 echo '<button type="submit"  class="btn btn-success" style="margin:2rem;">
       <a href="index.php" style="text-decoration: none;color: white;">BACK</a></button>';
}
?>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
</body>
</html>