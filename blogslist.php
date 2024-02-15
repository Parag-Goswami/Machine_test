

<?php

include('head.php');

session_start();

if(!isset($_SESSION['name'])){
    echo "you are logged out";
    header('location: login.php');
}
?>

<!-- Section: Design Block -->

  <style>

    body{
       background-color: #000;
    }
  </style>

<!-- NavBar -->






<div class="container mt-4">
<ul class="nav justify-content-center">

<a class="btn btn-primary mx-2" href="blogs.php">HOME</a>
  <a class="btn btn-warning mx-2" href="add_blogs.php">ADD BLOG</a>
  <a class="btn btn-success mx-2">Welcome <?php echo $_SESSION['name']; ?></a>
  <a class="btn btn-danger mx-2" href="logout.php">LOGOUT</a>

</ul>
</div>
  <!-- END -->

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <h1 style="color:azure;">Blog's List</h1>
    <div class="row gx-lg-5 align-items-center mb-5">
      <?php $res = mysqli_query($con,"select * from blog");
        while($row = mysqli_fetch_assoc($res)){
      ?>
    <table class="table" style="border:2px solid black;">
  <thead class="text-center">
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['title'];?></td>
      <td><?php echo $row['description'];?></td>
      <td><img src="images/<?php echo $row['image'];?>" alt="" style="width: 11rem;"></td>
    </tr>
  </tbody>
</table>
<?php }  ?>
    </div>
  </div>

<!-- Section: Design Block -->