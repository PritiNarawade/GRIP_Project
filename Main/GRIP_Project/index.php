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
               <a class="nav-link" href="transfer_money.php">Customers</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="about.html">About</a>
            </li>
          </ul>
      </div>    
    </nav>
  </div>
 
  <section>
   <nav>

     <div class="activity">
       
       <div class="wrapper "><a href="createuser.php"><img src="img\new_user.png"><br><h3>Create User</h3></a></div>
       <div class="wrapper "><a href="transactionhistory.php"><img src="img\T_history.png"><br><h3>Transaction<br> History</h3></a></div>
       <div class="wrapper1 "><a href="transfer_money.php"><img src="img\customers.png"><h2>Customers</h2></a></div>

      </div>
   </nav>
 
   </section>
   <br><br><br><br><br>
    <section>
      <div>
        
       <center><a href="transfer_money.php" class="Transfer" >TRANSFER</a></center> 
      
      </div>
   </section>
        <br> <br> <br> <br>
    <?php
    include('footer.php');
    ?> 
       
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> 
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script> 
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
     
  </body>
</html>

