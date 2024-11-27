<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="websitecss.css">
</head>
<body>
    <div class="header">
        <a href="Home.php"><img src="logo.png" class="logo"></a>
        <div class="rightBox">
            <a class="others" href="Home.php">&nbsp;Home&nbsp;</a>
            <a class="others" href="Contact.php">&nbsp;Contact&nbsp;</a>
            <a class="others" href="Forum.php">&nbsp;Discuss&nbsp;</a>
            <div class="button large popup-button" data-target="#popup-main">Login</div>
        </div>
    </div>
    <div class="popup" id="popup-main">
        <div class="popup-overlay">
            <div class="registerbox">
            <button class="button close popup-button" data-target="#popup-main">X</button>
                <form id="loginForm" action="Contact.php" method="POST">
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
    </div>
    </div>
</div>
    <div class="contactBox">
        <h2>National Contacts</h2>
        <ul>
            <li><h3>Bureau of Fire Protection (BFP)</h3> Hotline 166<br> Website <a href="http://www.bfp.gov.ph">BFP.gov.ph</a></li>
            <li><h3>Philippine National Police (PNP)</h3> Emergency Hotline 117</li>
            <li><h3>Metro Manila Development Authority (MMDA)</h3> Hotline 136 (for Metro Manila emergencies)</li>
            <li><h3>Philippine Red Cross</h3> Hotline 143</li>
        </ul>
        
        <h2>Metro Manila Fire Stations</h2>
        <ul>
            <li><h3>Manila</h3> Fire Station 1 735-4046 Fire Station 2 734-7981</li>
            <li><h3>Quezon City</h3> Fire Station 1 924-1813 Fire Station 2 925-0672</li>
            <li><h3>Makati</h3> Fire Station 895-1961</li>
            <li><h3>Pasig</h3> Fire Station 642-1905</li>
            <li><h3>Taguig</h3> Fire Station 8391-2751</li>
            <li><h3>Caloocan</h3> Fire Station 366-2048</li>
            <li><h3>Malabon</h3> Fire Station 281-6025</li>
            <li><h3>Navotas</h3> Fire Station 288-1897</li>
            <li><h3>Valenzuela</h3> Fire Station 292-0331</li>
            <li><h3>Mandaluyong</h3> Fire Station 636-2472</li>
            <li><h3>San Juan</h3> Fire Station 723-2135</li>
            <li><h3>Marikina</h3> Fire Station 646-2878</li>
            <li><h3>Pateros</h3> Fire Station 8651-3528</li>
        </ul>
        
        <h2>Northern Luzon Fire Stations</h2>
        <ul>
            <li><h3>Baguio City</h3> Fire Station 442-4898</li>
            <li><h3>La Union</h3> San Fernando 244-2580 Agoo 607-5465</li>
            <li><h3>Pangasinan</h3> Dagupan 710-1728 San Carlos 540-0838 Lingayen 542-2205</li>
            <li><h3>Ilocos Norte</h3> Laoag City 771-3200 Batac 670-8703</li>
            <li><h3>Ilocos Sur</h3> Vigan 207-7635 Candon City 605-1742</li>
            <li><h3>Abra</h3> Bangued 742-0924</li>
            <li><h3>Mountain Province</h3> Bontoc 632-0702</li>
        </ul>
        
        <h2>Central Luzon Fire Stations</h2>
        <ul>
            <li><h3>Angeles City</h3> Fire Station 888-4560</li>
            <li><h3>San Fernando, Pampanga</h3> Fire Station 961-0206</li>
            <li><h3>Mabalacat, Pampanga</h3> Fire Station 300-0906</li>
            <li><h3>Bulacan</h3> Malolos 440-7095 San Jose del Monte 290-4378</li>
            <li><h3>Tarlac</h3> Tarlac City 491-1825 Concepcion 605-3972</li>
            <li><h3>Pampanga</h3> Apalit 285-1433 San Simon 291-0970</li>
            <li><h3>Zambales</h3> Olongapo City 222-2023 Subic Bay 251-2012</li>
        </ul>
        
        <h2>Southern Luzon Fire Stations</h2>
        <ul>
            <li><h3>Cavite</h3> Imus 463-2848 Dasmariñas 416-2331 Bacoor 434-1290</li>
            <li><h3>Laguna</h3> Santa Rosa 831-7220 Calamba 480-1447 San Pedro 849-0306</li>
            <li><h3>Batangas</h3> Batangas City 980-3335 Lipa City 384-1231</li>
            <li><h3>Quezon</h3> Lucena City 342-8704 Tayabas City 215-2444</li>
            <li><h3>Rizal</h3> Antipolo 691-1075 Taytay 650-4815 Binangonan 652-7604</li>
            <li><h3>Marinduque</h3> Boac 415-0545 Gasan 416-1253</li>
        </ul>
        
        <h2>Additional Local Resources</h2>
        <ul>
            <li><h3>Local Government Units (LGUs)</h3> Check official websites for specific emergency numbers</li>
            <li><h3>Barangay Emergency Response Teams</h3> Many barangays have their own emergency contacts</li>
        </ul>
        <h1>Contact the Creator of this website!</h1>
        <h3>Christian Louis Cerezo</h3>
        <span>
        Email: mclcerezo@tip.edu.ph<br>
        Phone Number: +63 951295125<br>
        Send us a message:<br>
        </span>
        <form id="sendMessage">
        <textarea cols="75" rows="5" class="message"></textarea><br>
        <button type="submit" class="submitbutton">Submit</button>
    </form>
    <br>
    </div>
    <br>
    <script src="script.js"></script>
</body>
</html>


<!-- 
Copy for Login Button
    
    <div class="button large popup-button" data-target="#popup-main">Login</div>

Copy for pop up

<div class="popup" id="popup-main">
    <div class="popup-overlay">
<div class="registerbox">
    <button class="button close popup-button" data-target="#popup-main">X</button>
    <form id="loginForm">
        <div class="inputbox">
        <label for="username">Username/Email/Phone Number:</label><br>
        <input type="text" id="loginDetail" name="loginDetail" required placeholder="Enter Username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required  placeholder="Password" title="8 or more characters."><br><br>
        <button class="submitbutton" type="submit">Log in</button>
        <p class="havedont"> Don't have an account? <a class="havedontlink" href="Register.php">&nbsp;Register&nbsp;</a></p>
    </form>
    </div>
</div>
</div>

Dont forget the javascript

<script src="script.js"></script>

-->