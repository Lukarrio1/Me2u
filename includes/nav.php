<!doctype html>
<?php session_start();?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/app.css">
    <title>ME2U</title>
  </head>
  <body>
  <div class="">
<div class="card  bg-primary pt-2 pb-2 rounded-top">
<div class="row">
<div class="col-lg-3">
<span class="h2 text-white" id="home" style="cursor: pointer;">
ME2U
</span>
</div>
<div class="col-lg-3">
<?php if(isset($_SESSION['user'])){ ?>
<span class="h3 text-white text-right" id="contact" style="cursor: pointer;">
<i class="fa fa-user-circle-o" aria-hidden="true"></i>
Contacts
</span>
<?php }?>
</div>
<div class="col-lg-4 pl-5 pt-1">
<?php if(isset($_SESSION['user'])){ ?>
  <span class="h3 text-white text-right" id="search_link" style="cursor: pointer;">
  <i class="fa fa-search" aria-hidden="true"></i>
Search
</span>
    <?php }?>
</div>
<div class="col-lg-2 text-right">
<?php if(isset($_SESSION['user'])){ ?>
<div class="dropdown pr-2">
  <a class="text-white h3 dropdown-toggle bg-primary btn-outline-white btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?php echo $_SESSION['user']['username']?>
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#" id="pro-link"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
    <a class="dropdown-item" href="#" id="logout" >
    <i class="fa fa-sign-in" aria-hidden="true"></i> logout</a>
  </div>
</div>
<?php }?>
</div>
</div>
</div>
