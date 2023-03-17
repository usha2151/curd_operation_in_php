<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="insert.php" class="Btn_add"> <img src="images/plus.png"> Add New</a>
        
        <table>
            <tr id="items">
                <th>Name</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php 
                include_once "connection.php";
                $req = mysqli_query($con , "SELECT * FROM Employe");
                if(mysqli_num_rows($req) == 0){
                    echo "This is the curd operation of php!" ;
                    
                }else {
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['name']?></td>
                            <td><?=$row['department']?></td>
                            <td><?=$row['phone']?></td>
                            <td><a href="modify.php?id=<?=$row['id']?>"><img src="images/pen.png"></a></td>
                            <td><a href="delete.php?id=<?=$row['id']?>"><img src="images/trash.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
   
   
   
   
    </div>
</body>
</html>
// $.ajax({
    //   url :'update.php',
    //   type :'post',
    //   data:'name='+name.value+'&department='+department.value+'&phone='+phone.value,
    //   success: function(data){
    //     if(data==true){
    //       namex.innerHTML=name.value;
    //       mailx.innerHTML=department.value;
    //       phonex.innerHTML=phone.value;
    //     }
    //     else{
    //       windows.alert("something error");
    //     }
    //   }
    // })
  