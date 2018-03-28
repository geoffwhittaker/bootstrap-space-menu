<?php $page = 'home'; ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bootstrap Space theme</title>
  <meta name="description" content="Space theme">
  <meta name="author" content="Geoffrey Whittaker">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="scripts/scripts.js"></script>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
    <div class="container">
       <div class="row">  
         <div class="col-lg-12">"
         <!-- Start naviagation ===========================================================-->
            <nav class="navbar navbar-expand-lg navbar">
                <a class="navbar-brand" href="#">Space news</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="material-icons" style="font-size:30px">menu</i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link<?php if($page=='home'){echo ' navactive';}?>" 
                    href="#"><i class="material-icons" style="font-size:12px">brightness_2 </i> Home </a>
                    <a class="nav-item nav-link <?php if($page=='features'){echo ' navactive';}?>" href="#">
                    <i class="material-icons" style="font-size:12px">camera</i> News & Features</a>
                    <a class="nav-item nav-link <?php if($page=='portfolio'){echo ' navactive';}?>" href="#">
                    <i class="material-icons" style="font-size:12px">camera</i>  Portfolio</a>
                    <a class="nav-item nav-link<?php if($page=='gallery'){echo ' navactive';}?>" 
                    href="#"><i class="material-icons" style="font-size:12px">camera</i> Gallery</a>
                    <a class="nav-item nav-link" href="#">
                        <i class="material-icons" style="font-size:12px">camera</i> Slide show</a>
                </div>
            </div>
            </nav>
                 <!-- end naviagation ===========================================================-->

         </div> <!-- end col -->
      </div> <!-- end row -->
     </div><!-- end container -->
</body>
</html>