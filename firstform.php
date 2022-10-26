<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Technological University of the Philippines</title>
    <link rel="stylesheet" type="text/css" href="sytlefirstform.css">
    <link href="./img/tupbgico.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
    <?php include 'index.php';?>
    <br>
    <label id="SAM"> Student Access Module</label>
    <label id="ODR"> Online Document Request</label>
    <form >
            
            <label> Username</label>
			<input type= "text" name="uname" placeholder="Username"><br>
			<label> Password</label>
			<input type= "password" name="upass"placeholder="Password"><br>
			<button type="submit">Login </button>
            <button id="signup" href="frmsignup.php"type="submit">Sign Up </button>
            <label id="fp"> Forgot your password?</label>
            <!-- <label id="ch" href=""> <u>Click here</u></label> -->
            <a id="ch" href="frmsignup.php"> <u>Click here</u></a>

            

    </form>
    
    
</body>
</html>