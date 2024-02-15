<?php
include('head.php');


// echo $title = $_POST['title'];
// echo $description = $_POST['description'];
// $filename = $_FILES['image']['name'];
// $tempname = $_FILES['image']['tmp_name'];
// $folder = "images/".$filename;


//  $sql= mysqli_query($con,"INSERT INTO blog(title,description,image) VALUES ('$title','$description','$filename')");

//     if(move_uploaded_file($tempname,$folder)){
//         echo "{$title} Blog Uploaded";
//     }else{
//         echo "Blog NOT Uploaded";
//     }




if(isset($_POST['add_blogs'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
$folder = 'images/'.$file_name;

$query = mysqli_query($con,"Insert into blog(title,description,image) values ('$title','$description','$file_name')");

if(move_uploaded_file($tempname,$folder)){
    echo "{$title} Blog Uploaded";
    header('location:blogs.php');

}else{
    echo "Blog NOT Uploaded";
}

  }



?>
