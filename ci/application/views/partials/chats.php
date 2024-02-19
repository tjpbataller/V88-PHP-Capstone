<?php foreach($chats as $chat){ ?>
<div class="<?= $chat["class"] ?>">
<?php if($chat["class"] === "simsimi"){ ?>
    <img src="<?= $chat["image"] ?>" alt="<?= $chat["alt"] ?>">
<?php } ?>
    <p><?= $chat["message"] ?></p>
<?php if($chat["class"] === "user"){ ?> 
    <img src="<?= $chat["image"] ?>" alt="<?= $chat["alt"] ?>">
<?php } ?>
</div>
<?php } ?>