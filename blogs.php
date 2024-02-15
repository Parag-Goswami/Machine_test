<?php
include('head.php');
session_start();

if(!isset($_SESSION['name'])){
    echo "you are logged out";
    header('location: login.php');
}
?>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    body{
      background-color: hsl(218, 41%, 15%);
    }
    
    .background-radial-gradient {
      height:100%;
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


    .nav-link:hover{
        color:red;
    }
  </style>

<!-- NavBar -->

<div class="container mt-4">

<ul class="nav justify-content-center">

<a class="btn btn-primary mx-2" href="blogs.php">HOME</a>
  <a class="btn btn-warning mx-2" href="blogslist.php">BLOG'S LIST</a>
  <a class="btn btn-success mx-2" href="add_blogs.php">ADD BLOG'S</a>
 
  <a class="btn btn-success mx-2">Welcome <?php echo $_SESSION['name']; ?></a>
  <a class="btn btn-danger mx-2" href="logout.php">LOGOUT</a>

</ul>

</div>

  <!-- END -->

  <?php
  $sql = "SELECT * FROM blog";
  $result = mysqli_query($con,$sql) or die("Query Failed");
  
  if(mysqli_num_rows($result)>0){
    while($row =mysqli_fetch_assoc($result)){
  ?>

  <div class="container px-4  px-md-5 text-center text-lg-start my-5">

  
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          <?php echo $row['title']; ?> <br />
          <span style="color: hsl(218, 81%, 75%)">for your business</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
        <?php echo $row['description']; ?> 
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
          <img src="images/<?php echo $row['image'];?>" alt="" style="width: 30rem;">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } }?>
<!-- Section: Design Block -->