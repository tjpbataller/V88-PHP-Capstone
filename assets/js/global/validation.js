$(document).ready(function()
{
    // transfer to new page 
    let error_counter = 0;
    $("body").on("change", "input", function()
    {
        $("p."+$(this).attr("name")+"_message").text("");
        if(!validate_input($(this)))
        {
            error_counter++;
            return;
        };
        error_counter = 0;
    })
    $("body").on("submit","form#login_signup_form, .login_signup_form",function()
    {
        let action = $("input[name=action]").val();
        if(!error_counter)
        {
            $(this).find("input").val("");
            $(".popover_overlay").show();
            $(".popover_overlay").fadeOut(2000);
            if(action === "login")
            {
                window.location.href = "catalogue.html";
            }
        }
        return false;
    })
    $("body").on("click","button[type=submit]",function(e)
    {
        let input = $(this).closest("form#login_signup_form").find("input");
        for(let index=0; index < input.length; index++)
        {
            if(!validate_input($(input[index])))
            {
                error_counter++;
            };
        }
    })
})
function validate_input(input)
{
    let label = input.closest("li").find("label").text();
    let name = input.attr("name");
    let validators = {
        "first_name": validate_name,
        "last_name": validate_name,
        "email": validate_email,
        "password": validate_password,
        "confirm_password": validate_confirm_password,
        "action": validate_action
    }
    if(!validators[name](input, label, name))
    {
        return false;
    }
    return true;
}
function validate_name(input, label, name)
{
    // Check if the length is at least 2
    if(input.val().length < 2)
    {
        $("p."+name+"_message").text(label + " must be atleast 2 letters");
        return false;
    }
    // Check if each character is a letter
    for(let i = 0; i < input.val().length; i++)
    {
        const charCode = input.val().charCodeAt(i);
        // Check if the character is not a letter
        if((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122))
        {
            is_valid = false;
            $("p."+name+"_message").text(label + ", only letters allowed");
            return false;
        }
    }
    return true;
}
function validate_email(input, label, name)
{
    let email = input.val();
    // Check if email is not empty
    if(!email)
    {
        $("p."+name+"_message").text(label + " must not be empty");
        return false;
    }
    // Check if email contains "@" and "."
    var atIndex = email.indexOf("@");
    var dotIndex = email.lastIndexOf(".");
    if(atIndex < 1 || dotIndex < atIndex + 2 || dotIndex + 2 >= email.length)
    {

        $("p."+name+"_message").text(label + " must be a in valid format")
        return false;
    }
    return true;
}
function validate_password(input, label, name)
{
    let password = input.val();
    // Check if password is not empty
    if(!password)
    {

        $("p."+name+"_message").text(label + " must not be empty");
        return false;
    }
    // Check if password length is at least 8 characters
    if(password.length < 8)
    {
        console.log(label)

        $("p."+name+"_message").text(label + " must be atleast 8 characters");
        return false;
    }
    let hasLetter = false;
    let hasNumber = false;
    // Check if password contains at least one letter and one number
    for(let i = 0; i < password.length; i++)
    {
        const charCode = password.charCodeAt(i);
        // Check if the character is a letter
        if((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122))
        {
            hasLetter = true;
        }
        // Check if the character is a number
        if(charCode >= 48 && charCode <= 57)
        {
            hasNumber = true;
        }
    }
    // Check if both letter and number are present
    if(!hasLetter || !hasNumber)
    {

        $("p."+name+"_message").text(label + " must contain atleast one letter and number");
        return false;
    }
    // Check if password contains special characters
    let specialCharacters = "!@#$%^&*()-_=+[{]};:',<.>/?";
    for(let i = 0; i < password.length; i++)
    {
        if(specialCharacters.includes(password[i]))
        {
            
            $("p."+name+"_message").text(label + " must not include special character");
            return false;
        }
    }
    // If all checks pass, password is valid
    return true;
}
function validate_confirm_password(input, label, name)
{
    let password = $("input[name=password]").val();
    let confirm_password = input.val();
    if(!confirm_password.length)
    {
        $("p."+name+"_message").text(label + " must not be empty");
        return false;
    }
    if(password !== confirm_password)
    {
        $("p."+name+"_message").text(label + " must be same with Password");
        return false;
    }
    return true;
}
function validate_action(input, label, name)
{
    if(input.val() === "signup" || input.val() === "login")
    {
        return true;
    }
    return false;
}