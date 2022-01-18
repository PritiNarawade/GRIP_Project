<?php
include('config.php');

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
    
            // deducting amount from sender's account
            $newbalance = $sql1['balance'] - $amount;
            $sql = "UPDATE users set balance=$newbalance where id=$from"; 
            mysqli_query($conn,$sql);
             

            // adding amount to reciever's account
            $newbalance = $sql2['balance'] + $amount;
            $sql = "UPDATE users set balance=$newbalance where id=$to";
            mysqli_query($conn,$sql);
                
            $sender = $sql1['name'];
            $receiver = $sql2['name'];
            $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
            $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                             window.location='transactionhistory.php';
                           </script>";
                    
                }    

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
 
<!-- nav -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="createuser.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>GRIP project</title>
   
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
            <li class="nav-item  text-left">
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
 <br>

	<div class="container text-center">
    <h2 class="t-title">TRANSACTION</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext">
        <div class="screen-body-item" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="table-danger">Id</th>
                    <th class="table-danger">Name</th>
                    <th class="table-danger">Email</th>
                    <th class="table-danger">Balance</th>
                </tr>
                <tr>
                    <td class="py-2 "><?php echo $rows['id'] ?></td>
                    <td class="py-2 "><?php echo $rows['name'] ?></td>
                    <td class="py-2 "><?php echo $rows['email'] ?></td>
                    <td class="py-2 "><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
     
        <label>Transfer To:</label>
        <select class="app-form-control" placeholder="Transfer To" type="text" name="to" required> 
        
            <option class="app-form-control" placeholder="Choose" value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
            <label>Amount:</label>
            <input class="app-form-control" placeholder="Amount" type="number" name="amount" required> 
  
            <br>
                <div class="text-center py-4" >
            <button class="app-form-button" name="submit" type="submit" id="btn"><h4>Transfer</h4></button>
            </div>
        </form>
    </div>

<!-- footer -->
<?php
include('footer.php')
?>

</body>
</html>