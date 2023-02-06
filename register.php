<?php
session_start()
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if(isset($_POST['register_btn']))
{
    $username=$_POST['username'];
    $username=$_POST['password_user'];
    $username=$_POST['password_user_repeat'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    
    $result=mysqli_query($conn,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                $password=hash("sha256",$password); //hash password before storing for security purposes
                $sql="INSERT INTO user(username, password ) VALUES('$username','$password')"; 
                mysqli_query($conn,$sql);  
                $_SESSION['message']="Jesteś zalogowany"; 
                $_SESSION['username']=$username;
                header("location:home.php");  //redirect home page
            }
            else
            {
                $_SESSION['message']="Hasła nie są takei same";   
            }
          }
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zajerestruj</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="CSS/styles8.css">
</head>
<body>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<header>
        
		<h1 class="logo"><img class="beczka" src="logo2.png" alt="logo" id="logo"></h1>
		
		<nav id="topnav">
		
			<ul class="menu">
				<li><a href="send1.html">Muzyka</a></li>
				<li><a href="send2.html">Obrazki</a></li>
				<li><a href="send3.html">Notatki</a></li>
				<li><a href="send4.html">Czat</a></li>
			</ul>
			
		</nav>
        <nav id="topnav">
		
			<ul class="menu">
				<li><a href="show1.html">Muzyka/Pokaż</a></li>
				<li><a href="show2.html">Obrazki/Pokaż</a></li>
				<li><a href="show3.html">Notatki/Pokaż</a></li>
                <!--<li><a href="show4.html">Czat</a></li> -->
			</ul>
			
		</nav>
	
	</header>
<form method="post" action="register.php">
<form action="register.php">
        <label for="name"></label><input type="text" name="name"><br>
        <label for="passwrod"></label><input type="text" name="name"><br>
        <label for="password_repeat"></label><input type="text" name="name"><br>
        <input type="submit" name="register_btn" class="Register">
    </form>
</body>
</html>
