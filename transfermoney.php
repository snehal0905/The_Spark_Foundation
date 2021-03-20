<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
   
    <link rel="stylesheet" type="text/css" href="table.css">
    <link href="./Themesfinity&#39;s CSS Button_files/bootstrap.min.css" rel="stylesheet">
  <link href="./Themesfinity&#39;s CSS Button_files/buttons.css" rel="stylesheet">
  <link href="./Themesfinity&#39;s CSS Button_files/style..css" rel="stylesheet">


</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.html';
?>

<div class="container">
    <div><center>
        <h2>Transfer Money</h2></center></div>
        <br>
        <div style="overflow-x:auto;">

                    <table id="user">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Balance</th>
                            <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>" class="btn btn-outline-secondary btn-sm btn-radius">Transact</a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                </div>
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>