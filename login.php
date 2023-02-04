<?php


  // $pathroute = "app_sis/login.php";

  // $firstPage = $pathroute;
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>halaman_login</title>
    <meta name="author" content="	">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  </head>
    <body>


    <?php
    
if(isset($_GET['pesan'])){
 if($_GET['pesan'] == "gagal"){
      $error = true;
    }else if($_GET['pesan'] == "logout"){
      echo "<script type='text/javascript'> 
      alert ('anda berhasil logout');
  </script>";    
}else if($_GET['pesan'] == "belum_login"){
        echo "login dulu mas bro";
    }
} 

?>



  <section class="vh-140">
      <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="./asset/img/logo-gembok.png"
              class="img-fluid p-5" alt="Sample image">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form class="card o-hidden border-0 shadow-lg my-5"  method="POST" action="config/loginprocess.php">
            <?php if(isset($error)): ?> 
            <p class="alert alert-danger alert-dismissible fade show" >Password dan username salah</p>
            <?php endif;?>
              <div class="divider d-flex align-items-center my-4">
              </div>

              <!-- Username -->
              <div class="form-outline mb-4">
                <input type="username" name="username" id="username" class="form-control form-control-lg"
                  placeholder="Enter a valid username" />
                <label class="form-label" for="username">Username</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-3">
                <input type="password" name="password" id="password" class="form-control form-control-lg"
                  placeholder="Enter password" />
                <label class="form-label" for="password">Password</label>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                </div>
                <a href="#!" class="text-body">Forgot password?</a>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg"
                  style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
          
              </div>

            </form>
          </div>
        </div>
      </div>

  <div class="p-5"></div>

 

</div>
</section>

<script type="text/javascript">
  function error(){
document.getElementById("error").innerHTML = 'test';
}
</script>
</body>

</html>