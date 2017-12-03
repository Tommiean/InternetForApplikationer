<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/stylesheet.css">
	<title>Tasty Recipe</title>
</head>
<body>
<div class="navbar">
<ul>
  <li><a href="<?php echo base_url(); ?>home">Home</a></li>
  <li><a href="<?php echo base_url(); ?>calendar">Calendar</a></li>
  <li class="dropdown">
    <a href="<?php echo base_url(); ?>recipes" class="dropbtn">Recipes</a>
    <div class="dropdown-content">
      <a href="<?php echo base_url(); ?>meatballs">Meatballs</a>
      <a href="<?php echo base_url(); ?>pancakes">Pancakes</a>
    </div>
  </li>
  <?php if($this->session->userdata('logged_in')): ?>
      <li style="float:right; "><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
  <?php endif ?>
  <?php if(!$this->session->userdata('logged_in')): ?>
      <li style="float:right";><a href="<?php echo base_url(); ?>users/login">Login</a></li>
      <li style="float:right";><a href="<?php echo base_url(); ?>users/register">Signup</a></li>

   <?php endif ?>
 </ul>
</div>  

<div class="Container">
	 <!-- flashmessage -->
            <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert-fail">'.$this->session->flashdata('login_failed').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedin')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedout')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
            <?php endif; ?>