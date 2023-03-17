<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

          include_once "connection.php";
          $id = $_GET['id'];
          $req = mysqli_query($con , "SELECT * FROM Employe WHERE id = $id");
          $row = mysqli_fetch_assoc($req);


       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($name) && isset($department) && $phone){
               $req = mysqli_query($con, "UPDATE employe SET  `name`= '$name' , `department` = '$department' , `phone` = '$phone' WHERE id = $id");
                if($req){
                    header("location: index.php");
                }else {
                    $message = "Employe not modify";
                }

           }else {
               $message = "There are some issue !";
           }
       }
    
    ?>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Edit</a>
        <h2>Edit Employe : <?=$row['name']?> </h2>
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">
            <label>Name</label>
            <input type="text" name="name" value="<?=$row['name']?>">
            <label>Department</label>
            <input type="text" name="department" value="<?=$row['department']?>">
            <label>Phone</label>
            <input type="number" name="phone" value="<?=$row['phone']?>">
            <input type="submit" value="submit" name="button">
        </form>
    </div>
</body>
</html>