<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ragister</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($name) && isset($department) && $phone){
                include_once "connection.php";
                $req = mysqli_query($con , "INSERT INTO Employe VALUES(NULL, '$name', '$department','$phone')");
                if($req){
                    header("location: index.php");
                }else {
                    $message = "employe a delete";
                }

           }else {
               $message = "there some error !";
           }
       }
    
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Add </a>
        <h2>Register </h2>
        <p class="erreur_message">
            <?php 
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Name</label>
            <input type="text" name="name">
            <label>Department</label>
            <input type="text" name="department">
            <label>Phone</label>
            <input type="number" name="phone">
            <input type="submit" value="submit" name="button">
        </form>
    </div>
</body>
</html>