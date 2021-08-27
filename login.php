
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login-form</title>
    <style>
        
        .container{
            margin: auto auto;
            text-align: center;
            background: white;
            line-height: 3.5rem;
            height: 350px;
            width: 20%;
            border-radius: 10px;
            box-shadow:0 10px 20px rgb(0, 0, 0.2);
        }
        form{
            margin-top: 2rem;
            text-align: center;
        }
        input{
            width: 65%;
            border-top: none;
            padding:7px ;
            border-left: none;
            border-right: none;
            font-weight: bold;
            
            
        }
        .btn{
            text-align: center;
            margin-top: 2rem;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            background: rgb(5, 175, 5);
            width: 68%;
            box-shadow: #fff 2px 2px 2px;
            font-weight: bold;
            color: #fff;
            
        }
    </style>
</head>
<body>
    <div class="main">
    <div class="container">
        <h1 class="heading">Login form</h1>
        <form action=" " method="post">
            <div class="name">
                
                <input type="text" name="uname" placeholder="Enter Username" required>
            </div>
           
            <div class="password">
                <input type="password" name="pwd" placeholder="Enter Password" required>
            </div>
            <div class="botton">
                <input type="submit" value="Login" class="btn" name="submit">
            </div>

        </form>
        <p>if not registred? <a href="index.php">Sign up here</a></p>
    </div>
    </div>
</body>
</html>
<?php 
     session_start();
     if (isset($_POST['submit'])) 
     {
         $username=$_POST['uname'];
         $password=$_POST['pwd'];

         $conn=mysqli_connect('localhost:3307','root','','task');
         $sql="SELECT * FROM signup WHERE NAME='$username' AND PASSWORD='$password' ";
         $res=mysqli_query($conn,$sql);
         $count=mysqli_num_rows($res);
         if ($count>0) {
            $_SESSION['username']=$username;
         echo "<script> location.href='home.php'</script>";
         }
         else {
              
              echo "<script>alert('Either username or password is wrong Fill again. ')</script>";
         }
     } 
?>


