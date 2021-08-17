<?php

    session_start();

    if (isset($_SESSION['username'])) {
      ?>  <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin-home</title>
            <style>
                table{
                    margin: auto;
                    background:steelblue;
                    color: seashell;
                }
                a{
                    margin-left: 50%;
                    margin-top: 30%;
                    background: steelblue;
                    background: teal;
                }
                
            </style>
        </head>
        <body>
            <div class="container">
                <h1 style="text-align: center;">USER DATA</h1>
                <br>
             
                <div class="table">
  <table border="1" cellspacing="0" >
      <thead>
                        
<tr>
<th> ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>Date of Birth</th>
<th>PASSWORD</th>
</tr>
</thead>
<?php
   $conn=mysqli_connect('localhost:3307','root','','task');
   $sql="SELECT * FROM signup";
   $res=mysqli_query($conn, $sql);
   $count=mysqli_num_rows($res);
   if ($count>0) {
       while ($row=mysqli_fetch_assoc($res)) {
           $id= $row['ID'];
           $name =$row['NAME'];
           $email=$row['EMAIL'];
           $DOB=$row['DOB'];
           $pwd=$row['PASSWORD'];
           ?>
           <tbody>
           <tr style="width:200px;height:50px;">
           <td><?php echo $id;?></td>
           <td><?php echo $row['NAME'];?></td>
           <td><?php echo $email; ?></td>
           <td><?php echo $DOB;?></td>
           <td><?php echo $pwd;?></td>
           </tr>
           </tbody>
           <?php
       }
   }

?>
</table>

                </div>
                <div style="margin-top: 2rem;">
                <a href="logout.php"><input type="submit" value="logout" name="logout" ></a>
                </div>
            </div>
        </body>
        </html>

        <?php
    }

    

?>