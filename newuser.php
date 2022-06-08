<?php
    include 'connection.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Congratulations! Your Account was Created.');
                               window.location='TransferMoney.php';
                     </script>";
                    
    }
  }
?>

<?php
    //define variables and set to empty values
    $name = $email = $balance = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $balance = test_input($_POST["balance"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/basic.css">
    <title>Transfer Money</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><span class="main-color">Sparks Foundation</span></a>
            </div>
        </div>
    </nav>
<form class="box" method="POST" role="form">
<style> 
input{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
  border-radius: 1rem;
}

.box{
    border-radius: 2rem;
}

input[type=text]:focus {
  border: 3px solid #555;
}
</style>
    <h1>Transfer details</h3>   
            
        <div class="form-group">
            <!-- <label for="">Full Name:</label> -->
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <!-- <label for="">Email(): </label> -->
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>

        <div class="form-group">
            <!-- <label for="">Balance(₹):</label> -->
             <input type="text" class="form-control" name="balance" id="balance" placeholder="balance email">
        </div>

        <div class="form-group">

    
        </div>
        <button class="button" type="submit" name="submit" class="btn btn-primary">Submit
        <style>
        .button {
        background-color: #000000;
        border: solid;
        border-radius: 0.5rem;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        }
</style>
        </button>
</form>
</body>
</html>