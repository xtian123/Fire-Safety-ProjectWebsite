<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
                <form id="loginForm" action="Home.php" method="POST">
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
    <div class="homeBox">
        <h1>Fire Safety & Evacuation</h1>
        <p>A fire outbreak can suddenly start anywhere. It is important to always be knowledgable and cautious so that we may safely evacuate the fire whenever it happens. 
            In the Philippines last January - April 2024, 5,764 fire incidents were recorded by the Bureau of
            Fire Protection which killed 120 people, injured 352 more and had Php. 2.74 billion
            worth of property destroyed. This was a significant increase from the previous year in
            the same period with 4,477 incidents, 79 deaths, 318 injured, and Php. 2.37 billion
           worth of property destroyed were recorded. People should always be prepared in case of emergency not limited to fire outbreaks alone.</p>
        <h2>Fire Evacuation</h2>
        <h3> Steps:</h3>
                <ol>
                    <li>Stop all activities immediately if you hear the fire alarm go off. Try to get out of the building as fast as possible.</li>
                    <li>Follow EXIT signs as these paths usually are clear of debris and have a clear path to the exit.</li>
                    <li> Use the stairs, never use the elevator.</li>
                    <li> Steer clear of hazards e.g smoke, flames, blockage. Choose another route if so.</li>
                    <li> Once out of the building find a safe spot, move at least 150 ft away from the burning building. Seek medical attention</li>
                </ol>
                <p>If possible call authorities as soon as possible, even if still inside the building.</p>
        <h2>Feel Doors Before Opening!</h2>
        <p>
            An oxygen starved fire filled with products of combustion including carbon monoxide, 
        will explode when mixed with oxygen, thus creating an phenomenon known as a Backdraft. Before opening the door, 
        feel the face of the door and the door knob for heat by using the back of your hand. If the door is cool, open the door cautiously. 
        If the door is hot, this is an indicator that the fire is close to your room. If there is heavy smoke or high heat present, do not leave the safety of your room. 
        Dial 911 and give the operator as much information as possible regarding the exact location and conditions of the fire. If smoke is entering under or around the door, 
        use dampen clothes to seal out the smoke. For added ventilation open a window at the top to release hot gases near the ceiling and open the window from the bottom the let cooler air inside. 
        Avoid breaking the window glass, because it may be difficult to reseal the window should smoke began to rush inside from the outside. To get the attention of onlookers, stay in front of a 
        window and wave a white/bright colored cloth or object.
    </p>
    <h2>Carbon Monoxide poisoning</h2>
    <p>Carbon monoxide (CO) is an invisible gas that is produced by fire. Even if one doesn't get burned by fire, by just simply inhaling CO it is possible to get sick.Symptoms of Carbon Monoxide Poisoning
        Early symptoms can be mistaken for flu or other illnesses and include:</p>
        <ul>
        <li>Headache</li>
        <li>Dizziness</li>
        <li>Weakness</li>
        <li>Nausea or vomiting</li>
        <li>Confusion</li>
        <li>Shortness of breath</li>
        <li>Blurred vision</li>
        <li>Loss of consciousness (in severe cases)</li>
        </ul>
    <h2>Difference of smoke detector & CO detector</h2>
    <ol>
        <li>Function</li>
        <ul>
        <li>Smoke Detectors: Designed to detect smoke particles from a fire. They alert occupants to the presence of smoke, which typically indicates a fire.</li>
        <li>Carbon Monoxide Detectors: Measure the levels of carbon monoxide (CO) gas in the air. They alert occupants to dangerous levels of CO, which is produced by incomplete combustion of fuels.</li>
        </ul>
        <li> Detection Mechanism</li>
        <ul>
        <li>Smoke Detectors:</li>
        <ul>
        <li>Ionization Detectors: Use radioactive material to detect fast-burning fires (flames).</li>
        <li>Photoelectric Detectors: Use a light beam to detect slow-smoldering fires (smoke).</li>
        </ul>
        <li>Carbon Monoxide Detectors: Use electrochemical sensors or semiconductor sensors to detect CO levels.</li></ul>
        <li>Alarm Type</li>
        <ul>
        <li>Smoke Detectors: Typically emit a loud beeping or chirping sound when smoke is detected.</li>
        <li>Carbon Monoxide Detectors: Emit a similar alarm sound, but may also include verbal alerts or different tones to differentiate from smoke alarms.</li></ul>
        <li>Location of Installation</li>
        <ul>
        <li>Smoke Detectors: Usually installed in common areas, bedrooms, and hallways. They should be placed on ceilings or high on walls.</li>
        <li>Carbon Monoxide Detectors: Recommended for installation near sleeping areas and on each level of a home. They should be placed at least 5 feet above the ground or at the same level as the potential source of CO.</li></ul>
        <li>Response Time</li>
        <ul><li>Smoke Detectors: Generally respond quickly to the presence of smoke, providing early warning of a fire.</li>
        <li>Carbon Monoxide Detectors: Detect the gradual buildup of CO and may take longer to trigger, depending on the concentration levels.</li></ul>
        </ol> 
        <h2>Types of Fire extinguisher</h2>
        <p>Fire extinguishers are classified into different types based on the kind of fire they are designed to combat. <br><br>Here are the main types:</p>
        <ol>
            <li>Class A</li>
            <ul>
            <li>Use: For ordinary combustible materials like wood, paper, and cloth.</li>
                <li>Extinguishing Agent: Water, foam, or multipurpose dry chemical agents.</li>
                </ul>
            <li>Class B</li>
            <ul>
            <li>Use: For flammable liquids such as gasoline, oil, grease, and paints.</li>
            <li>Extinguishing Agent: Foam, carbon dioxide (CO2), or dry chemical agents.</li>
            </ul>
            <li>Class C</li>
            <ul>
            <li>Use: For electrical fires involving wiring, appliances, and circuit boards.</li>
            <li>Extinguishing Agent: Non-conductive agents like CO2 or dry chemical agents.</li>
            </ul>
            <li>Class D</li>
            <ul>
            <li>Use: For combustible metals such as magnesium, titanium, and sodium.</li>
            <li>Extinguishing Agent: Special dry powder agents designed for metal fires.</li>
            </ul>
            <li>Class K</li>
            <ul>
            <li>Use: For fires involving cooking oils and fats, typically found in commercial kitchens.</li>
            <li>Extinguishing Agent: Wet chemical agents that cool and smother the flames.</li>
            </ul>
            <li>Multipurpose Extinguishers (ABC)</li>
            <ul>
            <li>Use: Effective against Class A, B, and C fires.</li>
            <li>Extinguishing Agent: Usually dry chemical agents that can handle multiple types of fires.</li>
            </ul>
            </ol>   
            <br>
    </div>
    <script src="script.js"></script>
</body>
</html>