<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>GRIP project</title> 
        <link href="createuser.css" rel="stylesheet" type="text/css">
        <link href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
     	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
     	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
     	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
        <link rel="stylesheet" type="text/css" href="style.css"> 
     
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
        <?php include 'config.php'; 
              if(isset($_POST['submit'])){ $name=$_POST['name']; 
              $email=$_POST['email']; $balance=$_POST['balance']; 
              $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')"; 
              $result=mysqli_query($conn,$sql); if($result){ echo "<script> alert('Hurray! User created'); 
              window.location='transfer_money.php'; </script>"; } } ?> 
              
              <br> 
              <div class="background"> 
                  <div class="container">
                  <h1 class="t-title">CREATE  A  USER</h1>
                  <div class="screen"> 
                      <div class="screen-header"> 
                      <div class="screen-header-right"> 
                          <div class="screen-header-ellipsis">
                          </div> 
                          <div class="screen-header-ellipsis"></div> 
                          <div class="screen-header-ellipsis"></div>
                         </div> </div> <div class="screen-body"> 
                             <div class="screen-body-item left"> 
                                <img class="img-fluid" src="img\new_user.png" style="border: none; border-radius: 50%;"> 
                            </div> 
                            <div class="screen-body-item" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                                <form class="app-form" method="post"> 
                                    <div class="app-form-group"> 
                                        <input class="app-form-control" placeholder="NAME" type="text" name="name" required> 
                                    </div> <div class="app-form-group"> 
                                        <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required> 
                                    </div> <div class="app-form-group"> 
                                        <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required> 
                                    </div> 
                                    <br> 
                                    <div class="app-form-group button"> 
                                        <input class="app-form-button" type="submit" value="CREATE" name="submit"></input> 
                                        <input class="app-form-button" type="reset" value="RESET" name="reset"></input> 
                                    </div> 
                                </form> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <?php include('footer.php');?>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> 
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
        </body> 
</html>