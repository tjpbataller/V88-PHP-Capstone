$(document).ready(function(){
    $.get("chats/chat_index",function(res){
        $("#chatbox").html(res);
    })
    $("body").on("submit","form#chatform",function(){
        let message = $(this).serialize();
        $("#chatbox").prepend(`
        <div class="user">
            <p>${$(this).children("input[type=text]").val()}</p>
            <img src="assets/images/me.jpg" alt="This is me">
        </div>`);
        $("input[name=chat]").val("");
        $.post("chats/chat",message, function(res){
            $("#chatbox").html(res);
        })
        return false;
    })
})