$(document).ready(function(){
    if($(".favourite-hollow")){
        $(".favourite-hollow").click(function (){
            $(".favourite-hollow").hide(200);
            $(".favourite-solid").show(200);
        });
        $(".favourite-solid").click(function (){
            $(".favourite-solid").hide(200);
            $(".favourite-hollow").show(200);
        });
    }
    if($(".main-img")){
        otherImgs = document.querySelectorAll(".other-image");
        otherImgs.forEach(function (item){
            $(item).mouseenter(function (){
                var mainImg = $(".product-image");
                var mainImgSrc = $(mainImg).attr("src");
                var imgSrc = $(item).attr("src");
                $(item).attr("src",""+mainImgSrc);
                $(mainImg).attr("src",""+imgSrc);
            });
            $(item).mouseleave(function (){
                var mainImg = $(".product-image");
                var mainImgSrc = $(mainImg).attr("src");
                var imgSrc = $(item).attr("src");
                $(item).attr("src",""+mainImgSrc);
                $(mainImg).attr("src",""+imgSrc);
            });
        });
    }
    if($(".registerSwitch")){
        $(".registerSwitch").click(function(){
            $(".login-form").hide();
            $(".register-form").show();
        });
    }
    if($(".loginSwitch")){
        $(".loginSwitch").click(function(){
            $(".register-form").hide();
            $(".login-form").show();
        });
    }
    if($(".login-form")){
        var is_valid = [];
        $("#loginUname").keyup(function(){
            if(validateText($("#loginUname"),$("#unameError"))){
                is_valid.push(true);
            }
        });
        $("#loginPass").keyup(function(){
            if(validateText($("#loginPass"),$("passError"))){
                is_valid.push(true);
            }
        });
        $("#loginBtn").click(function(){
            if(is_valid.length == 2){
                alert("Valid");
                $(".login-form").submit();
            }
            else{
                alert("Not valid" + is_valid);
            }
        });
    }
    if($(".reg-form")){
        var fname_is_valid = false,lname_is_valid = false,address_is_valid = false,email_is_valid = false,password_is_valid = false;
        $("#fname").keyup(function(){
            if(validateText($("#fname"),$("#nameError"))){
                fname_is_valid = true;
            }
            else{
                fname_is_valid = false;
            }
        });
        $("#lname").keyup(function(){
            if(validateText($("#lname"),$("#nameError"))){
                lname_is_valid = true;
            }
            else{
                lname_is_valid = false;
            }
        });
        $("#address").keyup(function(){
            if(validateText($("#address"),$("#addressError"))){
                address_is_valid = true;
            }
            else{
                address_is_valid = false;
            }
        });
        $("#email").keyup(function(){
            if(validateEmail($("#email"),$("#regEmailError"))){
                email_is_valid = true;
            }else{
                email_is_valid = false;
            }
        });
        $("#password").keyup(function(){
            if(validateText($("#password"),$("#regPassError"))){
                password_is_valid = true;
            }
            else{
                password_is_valid = false
            }
        });
        $("#re-password").keyup(function(){
            if($("#password").val() != $("#re-password").val()){
                $("#regPassError").html("Password mismatch.");
                $("#regPassError").removeClass("hidden");
                $("#re-password").addClass("border-red-700");
                $("#password").addClass("border-red-700");
                $("#password").removeClass("border-green-500");
                $("#re-password").removeClass("border-green-500");
            }
            else{
                $("#regPassError").hide();
                $("#re-password").removeClass("border-red-700");
                $("#password").removeClass("border-red-700");
                $("#password").addClass("border-green-500");
                $("#re-password").addClass("border-green-500");
                password_is_valid = true;;
            }
        });
        $("#regBtn").click(function(e){
            e.preventDefault();
            if(fname_is_valid == true && lname_is_valid == true && address_is_valid == true && email_is_valid == true && password_is_valid == true){
                ajaxSubmit();
            }
            else{
                showAlert($(".fill-all-error-alert"));
            }
        });
    }
});
function showAlert(alertArea){
    alertArea.show("slow");
    setTimeout(function(){
        alertArea.hide("slow");
    },3000);
}
function validateText(inputText, errorArea){
    value = inputText.val()
    if(value.length<=3 || value.length>=14){
        //errorArea.html("Invalid "+ inputText.title +".");
        errorArea.removeClass("hidden");
        inputText.addClass("border-red-700");
        inputText.removeClass("border-green-500");
        return false;
    }
    else{
        errorArea.hide();
        inputText.removeClass("border-red-700");
        inputText.addClass("border-green-500");
        return true;
    }
}
function validateEmail(email, errorArea){
    if(email.val().length <= 6){
        email.addClass("border-red-700");
        email.removeClass("border-green-500");
    }
    else{
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var is_valid = emailReg.test(email.val());
        if(is_valid){
            errorArea.addClass("hidden");
            email.removeClass("border-red-700");
            email.addClass("border-green-500");
            return true;
        }
        else{
            errorArea.removeClass("hidden");
            email.addClass("border-red-700");
            email.removeClass("border-green-500");
            return false;
        }
    }
}
function ajaxSubmit(){
    $.ajax({
        type: 'post',
        url: 'auth/saveDb/',
        data: {
            password:$("#password").val(),
            fname:$("#fname").val(),
            lname:$("#lname").val(),
            address:$("#address").val(),
            email:$("#email").val(),
            gender:$("#gender").val()},
        success: function () {
            showAlert($(".success-alert"));
        },
        error: function(xhr){
            const message = (JSON.parse(xhr.responseText))["message"];
            if(message.indexOf("Duplicate entry") >= 0){
                $(".error-alert").html("Email is already in use.");
                showAlert($(".error-alert"));
            }
            else{
                showAlert($(".error-alert"));
            }
        }
    });
} 
function activate(){
    if($("#check-terms").is(":checked")){
        $("#regBtn").removeClass("bg-red-400");
        $("#regBtn").removeClass("cursor-not-allowed");
        $("#regBtn").addClass("bg-red-700");
        $("#regBtn").removeAttr("disabled");
    }else{
        $("#regBtn").attr("disabled");
        $("#regBtn").addClass("bg-red-400");
        $("#regBtn").addClass("cursor-not-allowed");
        $("#regBtn").removeClass("bg-red-700");
    }
}