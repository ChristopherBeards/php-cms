<?php 
  // Database Connection
  $connection = mysqli_connect('localhost', 'root', '', 'cms');

  if ($connection) {
    echo 'Connected to the DB!';
  }