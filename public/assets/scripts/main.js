$(document).ready(function () {
    if ($(".favourite-hollow")) {
        $(".favourite-hollow").click(function () {
            $(".favourite-hollow").hide(200);
            $(".favourite-solid").show(200);
        });
        $(".favourite-solid").click(function () {
            $(".favourite-solid").hide(200);
            $(".favourite-hollow").show(200);
        });
    }
    if ($(".main-img")) {
        otherImgs = document.querySelectorAll(".other-image");
        otherImgs.forEach(function (item) {
            $(item).mouseenter(function () {
                var mainImg = $(".product-image");
                var mainImgSrc = $(mainImg).attr("src");
                var imgSrc = $(item).attr("src");
                $(item).attr("src", "" + mainImgSrc);
                $(mainImg).attr("src", "" + imgSrc);
            });
            $(item).mouseleave(function () {
                var mainImg = $(".product-image");
                var mainImgSrc = $(mainImg).attr("src");
                var imgSrc = $(item).attr("src");
                $(item).attr("src", "" + mainImgSrc);
                $(mainImg).attr("src", "" + imgSrc);
            });
        });
    }
    if ($(".registerSwitch")) {
        $(".registerSwitch").click(function () {
            $(".login-form").hide();
            $(".register-form").show();
        });
    }
    if ($(".loginSwitch")) {
        $(".loginSwitch").click(function () {
            $(".register-form").hide();
            $(".login-form").show();
        });
    }
    if ($(".login-form")) {
        /*let userIp = "";
        $.getJSON("https://ipinfo.io/json",
            function(data){
                userIp = data;
        });*/
        var uname_is_valid = false, password_is_valid = false;
        $("#loginUname").keyup(function () {
            if (validateEmail($("#loginUname"), $("#unameError"))) {
                uname_is_valid = true;
            }
        });
        $("#loginPass").keyup(function () {
            if (validateText($("#loginPass"), $("#passError"))) {
                password_is_valid = true;
            }
        });
        $("#loginBtn").click(function () {
            $(".login-load-spinner").show();
            $(".login-btn-text").hide();
            if (uname_is_valid == true && password_is_valid == true) {
                //$(".login-form").submit();
                ajaxCheck(/*userIp*/);
            } else {
                $(".login-load-spinner").hide();
                $(".login-btn-text").show();
                $(".login-error-alert").html("Fill all the values");
                showAlert($(".login-error-alert"));
            }
        });
    }
    if ($(".reg-form")) {
        var fname_is_valid = false, lname_is_valid = false, address_is_valid = false, email_is_valid = false,
            password_is_valid = false;
        $("#fname").keyup(function () {
            if (validateText($("#fname"), $("#nameError"))) {
                fname_is_valid = true;
            } else {
                fname_is_valid = false;
            }
        });
        $("#lname").keyup(function () {
            if (validateText($("#lname"), $("#nameError"))) {
                lname_is_valid = true;
            } else {
                lname_is_valid = false;
            }
        });
        $("#address").keyup(function () {
            if (validateText($("#address"), $("#addressError"))) {
                address_is_valid = true;
            } else {
                address_is_valid = false;
            }
        });
        $("#email").keyup(function () {
            if (validateEmail($("#email"), $("#regEmailError"))) {
                email_is_valid = true;
            } else {
                email_is_valid = false;
            }
        });
        $("#password").keyup(function () {
            if (validateText($("#password"), $("#regPassError"))) {
                password_is_valid = true;
            } else {
                password_is_valid = false
            }
        });
        $("#re-password").keyup(function () {
            if ($("#password").val() != $("#re-password").val()) {
                $("#regPassError").html("Password mismatch.");
                $("#regPassError").removeClass("hidden");
                $("#re-password").addClass("border-red-700");
                $("#password").addClass("border-red-700");
                $("#password").removeClass("border-green-500");
                $("#re-password").removeClass("border-green-500");
            } else {
                $("#regPassError").hide();
                $("#re-password").removeClass("border-red-700");
                $("#password").removeClass("border-red-700");
                $("#password").addClass("border-green-500");
                $("#re-password").addClass("border-green-500");
                password_is_valid = true;
                ;
            }
        });
        $("#regBtn").click(function (e) {
            $(".reg-load-spinner").show();
            $(".reg-btn-text").hide();
            e.preventDefault();
            if (fname_is_valid == true && lname_is_valid == true && address_is_valid == true && email_is_valid == true && password_is_valid == true) {
                ajaxSubmit();
            } else {
                $(".reg-load-spinner").hide();
                $(".reg-btn-text").show();
                $(".reg-error-alert").html("Fill in all the fields");
                showAlert($(".reg-error-alert"));
            }
        });
    }
});

function ajaxSubmit() {
    $.ajax({
        type: 'post',
        url: 'auth/saveDb/',
        data: {
            password: $("#password").val(),
            fname: $("#fname").val(),
            lname: $("#lname").val(),
            address: $("#address").val(),
            email: $("#email").val(),
            gender: $("#gender").val()
        },
        success: function () {
            window.location.href = "/";
            //showAlert($(".reg-success-alert"));
        },
        error: function (xhr) {
            $(".reg-load-spinner").hide();
            $(".reg-btn-text").show();
            const message = (JSON.parse(xhr.responseText))["message"];
            if (message.indexOf("Duplicate entry") >= 0) {
                $(".reg-error-alert").html("Email is already in use.");
                showAlert($(".reg-error-alert"));
            } else {
                $(".reg-error-alert").html("An error has occurred, please contact the administrator.");
                showAlert($(".reg-error-alert"));
            }
        }
    });
}

function ajaxCheck(/*userIp*/) {
    $.ajax({
        type: 'post',
        url: 'auth/checkDb/',
        data: {
            password: $("#loginPass").val(),
            uname: $("#loginUname").val(),
            //userAddress: userIp
        },
        success: function (xhr) {
            var message = (xhr);
            console.log(message);
            if (message === "udne") {
                $(".login-error-alert").html("User does not exist.");
                showAlert($(".login-error-alert"));
            } else if (message === "pdnm") {
                $(".login-error-alert").html("Check the credentials you entered.");
                showAlert($(".login-error-alert"));
            } else {
                window.location.href = "/";
            }
        },
        error: function (xhr) {
            $(".login-load-spinner").hide();
            $(".login-btn-text").show();
            $(".login-error-alert").html("An error has occurred, please contact the administrator.");
            showAlert($(".login-error-alert"));
            const message = (JSON.parse(xhr.responseText))["message"];
            console.log(message);
        }
    });
}

function activate() {
    if ($("#check-terms").is(":checked")) {
        $("#regBtn").removeClass("bg-red-400");
        $("#regBtn").removeClass("cursor-not-allowed");
        $("#regBtn").addClass("bg-red-700");
        $("#regBtn").removeAttr("disabled");
    } else {
        $("#regBtn").attr("disabled");
        $("#regBtn").addClass("bg-red-400");
        $("#regBtn").addClass("cursor-not-allowed");
        $("#regBtn").removeClass("bg-red-700");
    }
}