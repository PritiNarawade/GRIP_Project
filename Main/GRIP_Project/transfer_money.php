<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GRIP project</title>
  	<link href="style.css" rel="stylesheet" type="text/css">
 	  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

</head>
<body>
<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
<!-- nav -->
<div id="main">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a href="https://internship.thesparksfoundation.info/" class="logo"><img src="img\TSF.png" alt="Sparks Foundation"></a>
      <a class="navbar-brand" href="index.php">TSF Basic Banking
      </a>   
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
               <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span></a> 
            </li>
            <li class="nav-item">
               <a class="nav-link" href="transactionhistory.php">Transaction History</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="about.html">About</a>
            </li>
          </ul>
      </div>    
    </nav>
  </div>

<br>
<div class="container text-center">
<h1 class="t-title">CUSTOMERS</h1>
            <div class="row">

                <div class="col">
                    <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="table-danger">Id</th>
                            <th scope="col" class="table-danger">Name</th>
                            <th scope="col" class="table-danger">E-Mail</th>
                            <th scope="col" class="table-danger">Balance</th>
                            <th scope="col" class="table-danger">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                           while($rows=mysqli_fetch_assoc($result)){
                          ?>
                        <tr>
                        <td class="  py-4"><?php echo $rows['id'] ?></td>
                        <td class="  py-4"><?php echo $rows['name']?></td>
                        <td class="  py-4"><?php echo $rows['email']?></td>
                        <td class=" py-4"><?php echo $rows['balance']?></td>
                        <td><center><a href="selectuserdetail.php?id= <?php echo $rows['id'] ;?>"> 
                        <button type="button" class="Transfer">Transfer</button></a></center></td> 
                       </tr>
                       <?php
                          }
                       ?>
                       </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
         <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script> 
         <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script> 

<!-- footer -->
<?php include('footer.php'); ?>

</body>
</html>