<?php
    require_once "config.php";
    include('connection.php');

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];

        if($pass === $cpass){
            $password = password_hash($pass, PASSWORD_DEFAULT);

            $sql = "insert into users(name,email,phone,password)values('$name','$email','$phone','$password')";
            $result = mysqli_query($conn,$sql);
            if($result){
                header('location:index.php');
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp - Registration</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="login-box">
    <h1>Register</h4>
    <form method="post">
        <table>
            <tr>
                <td>Name:</td>
            </tr>
            <tr>
                <td><input type="text" name="name"  required/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>Phone Number:</td>
            </tr>
            <tr>
                <td><input type="email" name="email"  required/></td>
                <td><input type="text" name="phone"  required/></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>Confirm Password:</td>
            </tr>
            <tr>
                <td><input type="password" name="pass"  required/></td>
                <td><input type="password" name="cpass"  required/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;"><input type="submit" name="submit" value="Signup" /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;"><a href="<?=$gClient->createAuthUrl()?>"><img src="Image/registerlogo.png" width="10%"/></a></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
