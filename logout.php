<?php
session_start(); // Starting Session
if(session_destroy())
  header("location: " .$_SESSION['page']);
?>