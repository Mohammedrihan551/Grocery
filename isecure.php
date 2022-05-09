<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <head>
  <body>
     <!--Navigation Bar starts-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <i class="bi bi-file-lock"></i>Grocery</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
              </svg>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="signup.html">
                    <i class="bi bi-person-square"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                      </svg>
                Singup</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.html">
                    <i class="bi bi-person-plus"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="logout.html">
                    <i class="bi bi-person-x"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                      </svg>
                Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="signout.html">
                    <i class="bi bi-person-video3"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video3" viewBox="0 0 16 16">
                        <path d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2Z"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783.059-.187.09-.386.09-.593V4a2 2 0 0 0-2-2H2Z"/>
                      </svg>
                Signout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--Navigation bar Ends-->
    

    <?php
    require "dblink.php";

    /*signup*/
    if (isset($_POST["signupformbtn"])) {
      $username = strtolower($_POST["username"]);
      $password = $_POST["password"];
      $confirmPassword = $_POST["confirmPassword"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];

      $ssql = "SELECT * FROM `accounts` where username='$username'";
      $sresult = mysqli_query($con, $ssql);
      $srow = mysqli_num_rows($sresult);

      if ($password == $confirmPassword) {
        if ($srow > 0) {
          echo '<div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">FAILED!</h4>
              <p>Username Already Exist Please Try Other Username.</p>
              <hr>
             <p class="mb-0">FAILURE.</p>
             </div>';
        } else{
          $isql = "INSERT INTO `accounts` (`username`, `password`, `email`, `phone`)
            VALUES ('$username', '$password', '$email', '$phone')";
          $iresult = mysqli_query($con, $isql);
          if (!$iresult) {
            echo ' <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">FAILED!</h4>
              <p>SIGN-UP FAILED.</p>
              <hr>
             <p class="mb-0">FAILURE.</p>
             </div>';
             echo '<button type="submit"  class="btn btn-success" style="margin:2rem;">
              <a href="signup.html" style="text-decoration: none;color: white;">Back</a></button>';
          } else {
            $_SESSION["logedin"] = true;
            echo '<div class="alert alert-success" role="alert">
                      <h4 class="alert-heading">SUCCESSFULY!</h4>
                      <p>SIGN-UP SUCCESSFULLY.</p>
                      <hr>
                     <p class="mb-0">SUCCESS.</p>
                     </div>';
          }
        }
      } else {
        echo '<div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading">FAILED!</h4>
                      <p>Password and Confirm Password Does Not Match.</p>
                      <hr>
                     <p class="mb-0">FAILURE.</p>
                </div>';
              echo '<button type="submit"  class="btn btn-success" style="margin:2rem;">
              <a href="signup.html" style="text-decoration: none;color: white;">Back</a></button>';
      }
    }
    /*signup ends*/



    /*Login*/
    if(isset($_POST["loginformbtn"])){
      $username = strtolower($_POST["username"]);
      $password = $_POST["password"];

      $ssql = "SELECT * FROM `accounts` where username='$username' and password='$password'";
      $sresult = mysqli_query($con, $ssql);
      $srow = mysqli_num_rows($sresult);
      
      if($srow == 1){
       $srec= mysqli_fetch_array($sresult);
      
       $_SESSION["uname"] = $username;
       $_SESSION["logedin"] = true;
        echo '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading">SUCCESSFULLY!</h4>
        <p>Login Done Sussesfully.</p>
        <hr>
        <p class="mb-0">SUCCESS.</p>
        </div>';
      }else {
        echo '<div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">FAILED!</h4>
              <p>Invalid Username Or Password.</p>
              <hr>
              <p class="mb-0">FAILURE.</p>
              </div>';
              echo '<button type="submit"  class="btn btn-success" style="margin: 2rem;">
              <a href="login.html" style="text-decoration: none;color: white;">Back</a></button>';
      }
    }
    /*loginends*/

    /*logout*/
    if (isset($_POST["logoutformbtn"])) {
      $username = strtolower($_POST["username"]);
      $password = $_POST["password"];

      $ssql = "SELECT * FROM `accounts` where username='$username' and password='$password'";
      $sresult = mysqli_query($con, $ssql);
      $srow = mysqli_num_rows($sresult);

      if ($srow == 1) {
        $srec = mysqli_fetch_array($sresult);
        if ($srec[0] === $username && $srec[1] === $password) {
          echo ' <div class="alert alert-success" role="alert">
                   <h4 class="alert-heading">SUCCESSFULLY!</h4>
                   <p>Logout Done Sussesfully.</p>
                   <hr>
                   <p class="mb-0">SUCCESS.</p>
                  </div>';
          session_unset();
          session_destroy();
        } else {
          echo ' <div class="alert alert-danger" role="alert">
                   <h4 class="alert-heading">FAILED!</h4>
                   <p>Logout failed.</p>
                   <hr>
                   <p class="mb-0">FAILURE.</p>
                  </div>';
                  echo '<button type="submit"  class="btn btn-success" style="margin: 2rem;">
                  <a href="logout.html" style="text-decoration: none;color: white;">BACK</a></button>';
        }
      } else {
        echo ' <div class="alert alert-danger" role="alert">
                   <h4 class="alert-heading">FAILED!</h4>
                   <p>Logout failed.</p>
                   <hr>
                   <p class="mb-0">FAILURE.</p>
                  </div>';
                  echo '<button type="submit"  class="btn btn-success" style="margin: 2rem;">
                  <a href="logout.html" style="text-decoration: none;color: white;">BACK</a></button>';
      }
    }
    /*logout ends*/


    /*signout*/
    if (isset($_POST["signoutformbtn"])) {
      $username = strtolower($_POST["username"]);
      $password = $_POST["password"];

      $ssql = "SELECT * FROM `accounts` where username='$username' and 	password='$password'";
      $sresult = mysqli_query($con, $ssql);
      $srow = mysqli_num_rows($sresult);

      if ($srow == 1) {
        $srec = mysqli_fetch_array($sresult);
        if ($srec[0] === $username && $srec[1] === $password) {
          $dsql = "DELETE FROM `accounts` WHERE `accounts`.`username` = '$username'";
          $dresult = mysqli_query($con, $dsql);
          if (!$dresult) {
            echo '<div class="alert alert-danger" role="alert">
                   <h4 class="alert-heading">FAILED!</h4>
                   <p>Failed To Sign-out.</p>
                   <hr>
                   <p class="mb-0">FAILURE.</p>
                  </div>';
            echo '<button type="submit"  class="btn btn-success">
                  <a href="signout.html" style="text-decoration: none;color: white;">Back</a></button>';
          } else {
            echo ' <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">SUCCESSFULLY!</h4>
           <p>Signed-out Sussesfully.</p>
          <hr>
          <p class="mb-0">SUCCESS.</p>
         </div>';
          }
        } else {
          echo '<div class="alert alert-danger" role="alert">
                   <h4 class="alert-heading">FAILED!</h4>
                   <p>Failed To Sign-out.</p>
                   <hr>
                   <p class="mb-0">FAILURE.</p>
                  </div>';
            echo '<button type="submit"  class="btn btn-success" style="margin: 2rem;">
            <a href="signout.html" style="text-decoration: none;color: white;">Back</a></button>';
        }
      } else {
        echo '<div class="alert alert-danger" role="alert">
                   <h4 class="alert-heading">FAILED!</h4>
                   <p>Failed To Sign-out.</p>
                   <hr>
                   <p class="mb-0">FAILURE.</p>
                  </div>';
        echo '<button type="submit"  class="btn btn-success" style="margin: 2rem;">
        <a href="signout.html" style="text-decoration: none;color: white;">Back</a></button>';
      }
    }
    /*signout ends */

    /*Complete Reset Password Starts*/
    /*Reset password*/
    if (isset($_POST["resetpasswordbtn"])) {
      $username = strtolower($_POST["username"]);
      $password = $_POST["password"];

      $ssql = "SELECT * FROM `accounts` where username='$username' and 	password='$password'";
      $sresult = mysqli_query($con, $ssql);
      $srow = mysqli_num_rows($sresult);

      if ($srow == 1) {
        $srec = mysqli_fetch_array($sresult);
        if ($srec[0] === $username && $srec[1] === $password) {
     
    /*Reset password form Start*/
     echo "<section class='vh-100' style='background-color:#eee;'>
          <div class='container h-100' >
            <div class='row d-flex justify-content-center align-items-center h-100>
              <div class='col-lg-12 col-xl-11'>
                <div class='card text-black' style='border-radius: 25px;'>
                  <div class='card-body p-md-5'>
                    <div class='row justify-content-center'>
                      <div class='col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1'>
        
                        <p class='text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4'>Reset Password</p>
        
                        <form class='mx-1 mx-md-4'  name='resetpassword' method='post'>
        
                          <div class='d-flex flex-row align-items-center mb-4'>
                            <i class='fas fa-user fa-lg me-3 fa-fw'></i>
                            <div class='form-outline flex-fill mb-0'>
                              <input type='text' id='form3Example1c' class='form-control' name='username'
                              value=$username readonly/>
                              <label class='form-label' for='form3Example1c'>Username</label>
                            </div>
                          </div>
        
                          <div class='d-flex flex-row align-items-center mb-4'>
                            <i class='fas fa-lock fa-lg me-3 fa-fw'></i>
                            <div class='form-outline flex-fill mb-0'>
                              <input type='password' id='form3Example4c' class='form-control' name='password' 
                              value=$password readonly/>
                              <label class='form-label' for='form3Example4c'>Password</label>
                            </div>
                          </div>

                          <div class='d-flex flex-row align-items-center mb-4'>
                            <i class='fas fa-lock fa-lg me-3 fa-fw'></i>
                            <div class='form-outline flex-fill mb-0'>
                              <input type='password' id='formpExample4c' class='form-control' name='newpassword' required/>
                              <label class='form-label' for='formpExample4c'>Password</label>
                            </div>
                          </div>
        
                          <div class='d-flex flex-row align-items-center mb-4'>
                            <i class='fas fa-key fa-lg me-3 fa-fw'></i>
                            <div class='form-outline flex-fill mb-0'>
                              <input type='password' id='form3Example4cd' class='form-control' name='confirmnewpassword' required/>
                              <label class='form-label' for='form3Example4cd'>Confirm Password</label>
                            </div>
                          </div>
  
                          <div class='d-flex justify-content-center mx-4 mb-3 mb-lg-4'>
                            <button type='submit' class='btn btn-primary btn-lg' name='resetpasswordsubmit'>Reset</button>
                          </div>
  
                        </form>
                      </div>
                      <div class='col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2'>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>";
        /*Reset password form end*/

        } else {
          echo '<div class="alert alert-danger" role="alert">
                   <h4 class="alert-heading">FAILED!</h4>
                   <p>Invalid Username Or Password.</p>
                   <hr>
                   <p class="mb-0">FAILURE.</p>
                  </div>';
        echo '<button type="submit"  class="btn btn-success" style="margin: 2rem;">
        <a href="resetpassword.html" style="text-decoration: none;color: white;">Back</a></button>';
        }
      } else {
        echo '<div class="alert alert-danger" role="alert">
                   <h4 class="alert-heading">FAILED!</h4>
                   <p>Invalid Username Or Password.</p>
                   <hr>
                   <p class="mb-0">FAILURE.</p>
                  </div>';
          echo '<button type="submit"  class="btn btn-success" style="margin: 2rem;">
          <a href="resetpassword.html" style="text-decoration: none;color: white;">Back</a></button>';
      }
    }
    /*reset password ends*/

    /*confirm new password*/
    if (isset($_POST["resetpasswordsubmit"])) {
      $username = strtolower($_POST["username"]);
      $password = $_POST["password"];
      $newpassword = $_POST["newpassword"];
      $confirmnewpassword = $_POST["confirmnewpassword"];

      if ($newpassword == $confirmnewpassword) {
        $usql = "UPDATE `accounts` SET `password` = '$newpassword' WHERE `accounts`.`username` = '$username'";
        $uresult = mysqli_query($con, $usql);
        if (!$uresult) {
          echo '<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">FAILED!</h4>
        <p>Reset Password Failed.</p>
        <hr>
        <p class="mb-0">FAILURE.</p>
       </div>';
          echo '<button type="submit"  class="btn btn-success">
          <a href="resetpassword.html" style="text-decoration: none;color: white;">Back</a></button>';
        } else {
          echo ' <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">SUCCESSFULLY!</h4>
           <p>Password Changed Sussessfully.</p>
          <hr>
         <p class="mb-0">SUCCESS.</p>
          </div>';
          echo '<button type="submit"  class="btn btn-success" style="margin: 2rem;">
          <a href="index.php" style="text-decoration: none;color: white;">Back</a></button>';
        }
      } else {
        echo '<div class="alert alert-danger" role="alert">
         <h4 class="alert-heading">FAILED!</h4>
         <p>Reset Password Failed.</p>
         <hr>
         <p class="mb-0">FAILURE.</p>
        </div>';
        echo '<button type="submit"  class="btn btn-success" style="margin: 2rem;">
        <a href="resetpassword.html" style="text-decoration: none;color: white;">Back</a></button>';
      }
    }
    /*confirm new password ends*/
    /*Complete Reset Password Ends*/

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>

</html>