<!doctype html>
<html lang="bn">
  <head>
    <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Moviebuzz</title>

  <link rel="icon" href="<?php echo base_url()?>images/logo.jpg" sizes="32x32" type="image/jpg">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/offcanvas/">
    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="offcanvas.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background: #666;">
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="<?php echo site_url('admin/deshbord');?>">Moviebuzz</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('admin/deshbord');?>">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Movies</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo site_url('admin/addmovieview');?>">Add Movies</a>
      <a class="dropdown-item" href="<?php echo site_url('admin/deshbord');?>">View Movies</a>

      
    </div>
  </li>
     <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo site_url('admin/register');?>">Add Admin</a>
      <a class="dropdown-item" href="#">View Admin</a>
      
    </div>
  </li>
       <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catagore</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="<?php echo site_url('admin/addchatagori');?>">Add Catagore</a>
      <a class="dropdown-item" href="<?php echo site_url('admin/getchatagori');?>">View Catagore</a>
      
    </div>
  </li>  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Comment</a>
    <div class="dropdown-menu">
     
      <a class="dropdown-item" href="<?php echo site_url('admin/viewcomment');?>">View Comment</a>
      
    </div>
  </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Message</a>
    <div class="dropdown-menu">
     
      <a class="dropdown-item" href="<?php echo site_url('admin/viewmessage');?>">View Messag</a>
      
    </div>
  </li>
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
    <div class="dropdown-menu">
      
      <a class="dropdown-item" href="#">
        <?php 
       if(isset($_SESSION['admin_data']['name'])){
        echo $_SESSION['admin_data']['name'];
       }
      
      ?></a>
      <a class="dropdown-item" href="#">Profile</a>
      <a class="dropdown-item" href="<?php echo site_url('admin/logout');?>">Log out</a>

    </div>
  </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav><br/><br/><br/>