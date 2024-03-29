<?php 
session_start();
include('head.php');

if(isset($_POST['submit'])){
    $rollnumber = $_POST['rollnumber'];
    $password = $_POST['password'];
  
    $roll_search ="select * from student where roll_number = '$rollnumber'";
    $query = mysqli_query($con,$roll_search);
  
    
  
    $roll_count = mysqli_num_rows($query);
  
    if($roll_count==1){
    $roll_pass = mysqli_fetch_assoc($query);
    $db_pass = $roll_pass['con_password'];
  
    $_SESSION['name'] = $roll_pass['name'];
    echo $db_pass; 
    echo "login successful";
    header('location:blogslist.php');
    }
    else 
    {
    echo "password incorrect";
    }
  }
?>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      height: 44rem;
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
         Student Login Form <br />
          <span style="color: hsl(218, 81%, 75%)">for registration..</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form  action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST" autocomplete="off">

              <!-- Email input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3"><b>Student Roll Number</b></label>
                <input type="text" name="rollnumber" class="form-control" />
              </div>
             
              <!-- Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4"><b>Password</b></label>
                <input type="password" name="password" id="pwd"  class="form-control" />
              </div>

              <!-- Submit button -->

              <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 mx-2">
               login
              </button> 
              <a href="register.php" type="button"  class="btn btn-primary btn-block mb-4">
               Register
              </a> 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
