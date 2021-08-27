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
            background: #fff;
            line-height: 3rem;
            height: 470px;
            border-radius: 20px;
            width: 25%;
            box-shadow:0 20px 40px rgb(0, 0, 0.2);
        }
        form{
            margin-top: 2rem;
            text-align: center;
        }
        input{
            width: 70%;
             /* border: none; */
             border-top: none;
             border-left: none;
             border-right: none;
             border-bottom: 1px bold ;
            /* border-radius: 5px; */
            font-weight: bold;
            line-height: 1.8rem;
            /* box-shadow: 2px 1px 2px px #3333 */
            
            
        }
        input::after{
            border: none;
        }
        .btn{
            margin-top: 2rem;
            /* padding: 0.5rem 1.5rem; */
            border-radius: 5px;
            line-height: 2rem;
            background: rgb(42, 170, 3);
            color: #fff;
            box-shadow: o 4px 4px rgb(0, 0, 0.2);
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