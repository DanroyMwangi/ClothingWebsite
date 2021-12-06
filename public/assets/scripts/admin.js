$(document).ready(function () {
    if ($("#adminLoginForm")) {
        let email_is_valid = false, password_is_valid = false;
        $("#adminLoginEmail").keyup(function () {
            if (validateEmail($("#adminLoginEmail"), $("#adminEmailError"))) {
                email_is_valid = true;
            }
        });
        $("#adminLoginPass").keyup(function () {
            if (validateText($("#adminLoginPass"), $("#adminPassError"))) {
                password_is_valid = true;
            }
        });
        $("#adminLoginBtn").click(function () {
            $(".login-load-spinner").show();
            $(".login-btn-text").hide();
            if (email_is_valid == true && password_is_valid == true) {
                //$(".login-form").submit();
                ajaxCheck(".login-error-alert",".login-load-spinner", ".login-btn-text","#adminLoginPass","#adminLoginEmail");
            } else {
                $(".login-load-spinner").hide();
                $(".login-btn-text").show();
                $(".login-error-alert").html("Fill all the values");
                showAlert($(".login-error-alert"));
            }
        });
    }
    function ajaxCheck(alert, spinner, text, password, username) {
        $.ajax({
            type: 'post',
            url: 'admin/checkDb/',
            data: {
                password: $(password).val(),
                uname: $(username).val(),
                //userAddress: userIp
            },
            success: function (xhr) {
                var message = (xhr);
                console.log(message);
                if (message === "udne") {
                    $(alert).html("User does not exist.");
                    showAlert($(alert));
                    $(spinner).hide();
                    $(text).show();
                } else if (message === "pdnm") {
                    $(alert).html("Check the credentials you entered.");
                    showAlert($(alert));
                    $(spinner).hide();
                    $(text).show();
                } else {
                    window.location.href = "/admin/dash";
                }
            },
            error: function (xhr) {
                $(spinner).hide();
                $(text).show();
                $(alert).html("An error has occurred, please contact the administrator.");
                showAlert($(alert));
                const message = (JSON.parse(xhr.responseText))["message"];
                console.log(message);
            }
        });
    }

    if($(".admin-tool")){
        const adminTools = document.querySelectorAll(".admin-tool");
        const adminContent = document.querySelectorAll(".content-area");
        adminTools.forEach(function(item,index){
            $(item).click(function(){
                document.querySelector(".active").classList.add("hidden");
                document.querySelector(".active").classList.remove("active");
                adminContent[index].classList.toggle("hidden");
                adminContent[index].classList.add("active");
            });
        });
    }
    if($("#productImage")){
        const productImageUpload =  document.querySelector("#productImage");
        const imageDisplay = document.querySelector("#displayProductImage");
        $(productImageUpload).change(function(){
            imageDisplay.src = URL.createObjectURL(productImageUpload.files[0]);
        });
    }
});
