
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <form id="loginForm" action="Login.php" method="POST">
        <div class="inputbox">
        <label for="username">Username:</label><br>
        <input type="text" id="loginDetail" name="username" required placeholder="Enter Username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required  placeholder="Password" title="8 or more characters."><br><br>
        <button class="submitbutton" type="submit" name="login">Log in</button>
        <p class="havedont"> Don't have an account? <a class="havedontlink" href="Register.php">&nbsp;Register&nbsp;</a></p>
        <?php
            $conn = mysqli_connect("localhost","root","","user_registration");
            if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $query);
            $user = mysqli_fetch_assoc($result);
                if ($user && password_verify( $password, $user['password'])) {
                    echo "<span style='color:white;'>Login successful!</span>"; 
                }
                else {
                    echo "<span style='color:white;'>Invalid username or password.</span>"; 
                } 
            } 
        ?> 
        </div>
    </form>
    </div>
    <script src="script.js"></script>
</body>
</html>