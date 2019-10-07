<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src='https://www.google.com/recaptcha/api.js'></script>
    
	<title><?php echo $judul; ?></title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #048998">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">
    <img src="<?php echo base_url(); ?>asset/image/Logo.png" width="90" height="30" alt="">
  </a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url(); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="<?php base_url(); ?>login" class=""><button class="btn btn-outline-light px-4" type="button">Login</button></a>
    </form>
  </div>
</nav>

