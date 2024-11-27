<?php
$conn = mysqli_connect("localhost", "root","" , "data");

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $date = date('F d Y, h:i:s A');
    $reply_id = $_POST["reply_id"];

    $query = "INSERT INTO tb_data VALUES('', '$name', '$comment', '$date', '$reply_id')";
    mysqli_query($conn, $query);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss</title>
<link rel="stylesheet" href="forum.css">
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
    <div class="container">
        <?php
            $datas = mysqli_query($conn, "SELECT * FROM tb_data WHERE reply_id = 0");
            foreach($datas as $data){
                require 'comment.php';
            }
        ?>
        <form action="" method="post">
            <h3 id ="title">Leave a comment</h3>
            <input type="hidden" name="reply_id" id="reply_id">
            <input type="text" name="name" placeholder="Your name" required>
            <textarea name="comment" placeholder="Your comment" required></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
    </div>
    <script src="forum.js"></script>
</body>
</html>