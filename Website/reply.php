<div class="reply">
    <h2> <?php echo $data['name']; ?> </h2>
    <p> <?php echo $data['date']; ?> </p>
    <br>
    <p> <?php echo $data['comment']; ?> </p>
    <?php $reply_id = $data['id']; ?>
    <button class="replybutton" onclick="reply(<?php echo $reply_id; ?>, '<?php echo $data['name']; ?>')">Reply</button>
    <?php
    unset($datas);
    $datas = mysqli_query($conn, "SELECT * FROM tb_data WHERE reply_id = $reply_id");
    if(mysqli_num_rows($datas) > 0){
        foreach($datas as $data){
            require 'reply.php';
        }
    }
    ?>
</div>