<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="websitecss.css">
</head>
<body>
    <div class="header">
            <a href="Home.php"><img src="logo.png" class="logo"></a>
        <div class="rightBox">
            <a class="others" href="Home.php">&nbsp;Home&nbsp;</a>
            <a class="others" href="Contact.php">&nbsp;Contact&nbsp;</a>
            <a class="others" href="Forum.php">&nbsp;Discuss&nbsp;</a>
            <a  class="login" href="Login.php">&nbsp;Login&nbsp;</a>
        </div>
    </div>
    <div class="registerbox">
    <form action="Register.php" id="registrationForm" method="POST">
        <div class="inputbox">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required placeholder="Enter Username"><br>
        <label for="email">E-mail:</label><br>
        <input type="text" id="email" name="email" required placeholder="Enter E-mail"><br>
        <label for="phonenumber">Phone Number:</label><br>
        <input type="text" id="phonenumber" name="phonenumber" required placeholder="Enter Phone Number"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required pattern=".{8,}" placeholder="Password (8 or more characters)" title="8 or more characters."><br>
        <label for="region">Region:</label><br>
        <select id="region" name="region" required>
            <option hidden disabled selected value>-Select your Region-</option>
            <option value="Asia">Asia</option>
            <option value="Europe">Europe</option>
            <option value="America">America</option>
        </select><br>
        <label for="birthdate">Birthday:</label><br>
        <input type="date" id="birthdate" name="birthdate" required><br><br>
        <button class="submitbutton" type="submit" name="register">Register</button>
        <p class="havedont"> Have an account? <a class="havedontlink" href="Login.php">&nbsp;Login&nbsp;</a></p>
        <?php
$conn = mysqli_connect("localhost","root","","user_registration");
if (isset($_POST['register'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $phonenumber = $_POST['phonenumber'];
    $region = $_POST['region'];
    $birthdate = $_POST['birthdate'];

    $query = "INSERT INTO users (username,email,password,phonenumber,region,birthdate) VALUES ('$username','$email','$password','$phonenumber','$region','$birthdate')";
    $result=mysqli_query($conn,$query);

    if($result){
        echo "<span style='color:white;'>Registration Sucessful!</span>";
    }
    else{
        echo "<span style='color:white;'>Registration Failed...</span>" . mysqli_error($conn);
    }
}
?>
        </div>
    </form>
    <script src="script.js"></script>
</body>
</html>