<?php

include('config.php');
$id = $_POST['Id'];
$data = $_POST['data'];
mysqli_query($connect, "UPDATE list SET data ='$data' WHERE Id='$id'");
header("location:index.php");