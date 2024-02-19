<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chatbot Activity - CodeIgniter 3 - V88 PHP AJAX">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/script.js" defer></script>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Chatbot</title>
</head>
<body>
    <div id="chatbox">
    </div>
    <form action="chats/chat" method="post" id="chatform">
<?php echo form_open() ?>
    <input type="text" name="chat">
    <input type="submit" value="Send">
    </form>
</body>
</html>