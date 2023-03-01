<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome  -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>

  </head>
  <?php include('config.php'); 
  $ID = $_GET['ID'];
  $getdata = mysqli_query($connect,"SELECT * FROM list Where Id='$ID'");
  $row = mysqli_fetch_array($getdata);
  
  ?>
  <body>
    <div class="container">
        <h1 class="my-5"><i class="fas fa-list-ul text-success"></i><span> Edit</span> My List</h1>
        <div class="card shadow-lg mb-5 bg-body rounded border border-success">
          <div class="card-body">
            <form class="d-flex" action="editdata.php" method="post">
              <input class="form-control me-2" type="text" name="data" value="<?php echo $row['data'] ?>" placeholder="Apa Yang Mau Kamu Lakukan Hari Ini?">
              <button class="btn btn-outline-success" type="submit"><i class="fa-sharp fa-solid fa-check"></i></button>
              <input type="hidden" value="<?php echo $row ['Id']?>" name="Id">
            </form>
          </div>
        </div>
</body>




