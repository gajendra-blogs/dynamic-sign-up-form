<?php
if(isset($_POST['submit']))
{
 $name = $_POST['name'];
 $email =$_POST['email'];
 $dob =$_POST['dob'];
 $password=$_POST['password'];

 $conn = mysqli_connect('localhost:3307','root','','task');
 $sql=" INSERT INTO signup SET 
         NAME ='$name',
         EMAIL ='$email',
         DOB='$dob',
         PASSWORD ='$password' 
          ";
  $res=mysqli_query($conn,$sql);        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up-form</title>
    <style>
        .container{
            margin: auto auto;
            text-align: center;
            background: rgb(236, 235, 235);
            line-height: 3rem;
            height: 470px;
            width: 25%;
            z-index:2;
            box-shadow:#3333 3px 3px 3px;
        }
        form{
            margin-top: 2rem;
            text-align: center;
        }
        input{
            width: 70%;
             border: none;
            border-radius: 5px;
            font-weight: bold;
            line-height: 1.8rem;
            box-shadow: #3333 1.5px 1.5px 1px;
            
            
        }
        .btn{
            margin-top: 2rem;
            /* padding: 0.5rem 1.5rem; */
            border-radius: 5px;
            line-height: 2rem;
            background: rgb(42, 170, 3);
            color: #fff;
            font-weight: bolder;
            
        }
    </style>
</head>
<body>
    <div class="main">
    <div class="container">
        <h1 class="heading">Sign up form</h1>
        <form action=" " method="post">
            <div class="name">
            
                <input type="text" name="name" placeholder="Enter Name" required>
            </div>
            <div class="email">
                
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="dob">
                
                <input type="date" name="dob" value="DOB" required>
            </div>
            <div class="password">
                
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <div class="conpassword">
                
                <input type="password" name="conpassword" placeholder="Confirm Password" required>
            </div>
            <div class="botton">
                <input type="submit" value="sign up" class="btn" name="submit">
            </div>

        </form>
        <p>if already registered member?  <a href="login.php">Login here</a></p>
    </div>
    </div>
</body>
</html>