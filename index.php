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
  <body>
    <div class="container">
        <h1 class="my-5"><i class="fas fa-list-ul text-success"></i> My List</h1>
        <div class="card shadow-lg mb-5 bg-body rounded border border-success">
          <div class="card-body">
            <form class="d-flex" action="insert.php" method="post">
              <input class="form-control me-2" type="text" name="data" placeholder="Apa Yang Mau Kamu Lakukan Hari Ini?">
              <button class="btn btn-outline-success" type="submit"><i class="fa-sharp fa-solid fa-circle-plus"></i></button>
            </form>
          </div>
        </div>

      <?php
      include('config.php');
      $alldata = mysqli_query($connect,"SELECT * FROM list");
      
      ?>


    <table class="table">
      <tbody>
        <?php while ($row = mysqli_fetch_array($alldata)) { ?>
        <tr>
          <th scope="row"><?php echo $row['Id'] ?></th>
            <td><?php echo $row['data']?></td>
            <td style="width:5%"><a href="edit.php?ID=<?php echo $row['Id'] ?>" class="btn btn-outline-primary"><i class="fa-sharp fa-solid fa-pen"></i></a></td>
            <td style="width:5%"><a href="delete.php?ID=<?php echo $row['Id'] ?>" class="btn btn-outline-success"><i class="fa-sharp fa-solid fa-check"></i></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>






    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>