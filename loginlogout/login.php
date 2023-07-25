<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>hello</title>
</head>
<body>
<div class="index">
   <?php
             include('Config.php');
              if(isset($_POST['submit'])){
               // echo "clicked";
                $email=$_POST['email'];
                $pass=$_POST['password'];

                $select="SELECT * FROM user  WHERE email='$email' && password='$pass'";
                $query=mysqli_query($Config,$select);
                $row=mySqli_num_rows($query);
                $fetch=mysqli_fetch_array($query);
               if($row==1){
                $username=$fetch['username'];
              echo " <h3 style='color:#00c319'>seccessfuly login!</h3>";
              session_start();
              $_SESSION['username']=$username;
              header('location:home.php');
               }
               else{
                echo " <p style='color:red;'>invalid // email and password</p>";
               }



              }

               ?>
  <form action="" method="POST">
    <input type="text"  class="failed" name="email" placeholder="Username" required><br><br>
    <input type="password"  class="failed" name="password" placeholder="password" required><br><br>
    <input type="submit" name="submit"  value="login" class="failed"  required>
    </div>
   
  </form>
          

</body>
</html>