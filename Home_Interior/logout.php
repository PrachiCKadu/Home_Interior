<?php
  session_start();
  include('connection.php');
  session_destroy();
  header ("Location:/HomeInterior/login.php");
  ?>