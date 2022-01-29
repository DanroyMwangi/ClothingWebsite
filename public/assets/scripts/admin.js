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

    function addCategory(errorAlert,successAlert, spinner, text, catName, description) {
        $.ajax({
            type: 'post',
            url: 'addCategory/',
            data: {
                type:"mainCat",
                catName: $(catName).val(),
                description: $(description).val()
            },
            success: function (xhr) {
                $(spinner).hide();
                $(text).show();
                var message = (xhr);
                console.log(message);
                $(successAlert).html("Successfully worked.");
                showAlert($(successAlert));
            },
            error: function (xhr) {
                $(spinner).hide();
                $(text).show();
                $(errorAlert).html("An error has occurred, please contact the administrator.");
                showAlert($(errorAlert));
                const message = (JSON.parse(xhr.responseText))["message"];
                console.log(message);
            }
        });
    }
    if($(".categories")){
        $(".addCategoryBtn").click(function (){
            $(".cat-load-spinner").show();
            $(".cat-btn-text").hide();
            if (!($("#categoryName").val()==="") && !($("#categoryDescription").val()==="")) {
                //showAlert($(".cat-success-alert"));
                addCategory(".cat-error-alert",".cat-success-alert",".cat-load-spinner",".cat-btn-text","#categoryName","#categoryDescription");
            } else {
                $(".cat-load-spinner").hide();
                $(".cat-btn-text").show();
                //showAlert($(".cat-error-alert"));
            }
        });
    }
    function addSubCategory(errorAlert,successAlert, spinner, text, subName,allCategories, description) {
        $.ajax({
            type: 'post',
            url: 'addCategory/',
            data: {
                type:"sub",
                subName: $(subName).val(),
                allCategories: $(allCategories).val(),
                subDescription: $(description).val()
            },
            success: function (xhr) {
                $(spinner).hide();
                $(text).show();
                var message = (xhr);
                console.log(message);
                $(successAlert).html("Successfully worked.");
                showAlert($(successAlert));
            },
            error: function (xhr) {
                $(spinner).hide();
                $(text).show();
                $(errorAlert).html("An error has occurred, please contact the administrator.");
                showAlert($(errorAlert));
                const message = (JSON.parse(xhr.responseText))["message"];
                console.log(message);
            }
        });
    }
    if($(".subCategories")){
        $(".addSubBtn").click(function (){
            $(".sub-load-spinner").show();
            $(".sub-btn-text").hide();
            if (!($("#subName").val()==="") && !($("#subDescription").val()==="")) {
                //showAlert($(".cat-success-alert"));
                $(".sub-load-spinner").hide();
                $(".sub-btn-text").show();
                addSubCategory(".sub-error-alert",".sub-success-alert",".sub-load-spinner",".sub-btn-text","#subName","#allCategories","#subDescription");
            } else {
                $(".sub-load-spinner").hide();
                $(".sub-btn-text").show();
                //showAlert($(".cat-error-alert"));
            }
        });
    }
    if($(".add-form")){
        $(".addProdBtn").click(function (){
            $(".prod-load-spinner").show();
            $(".prod-btn-text").hide();
            if (!($("#productName").val()==="") && !($("#productDescription").val()==="") && !($("#productPrice").val()==="")) {
                //showAlert($(".cat-success-alert"));
                $(".prod-load-spinner").hide();
                $(".prod-btn-text").show();
                addProduct(".prod-error-alert",
                    ".prod-success-alert",
                    ".prod-load-spinner",
                    ".prod-btn-text",
                    "#productName",
                    "#productImage",
                    ".productSub",
                    "#productPrice",
                    "#productQuantity",
                    "#productDescription");
            } else {
                $(".prod-load-spinner").hide();
                $(".prod-error-alert").innerHTML = "Please fill in all the values";
                $(".prod-btn-text").show();
                //showAlert($(".cat-error-alert"));
            }
        });
    }
    function addProduct(errorAlert,successAlert, spinner, text, productName, productImage, productSub, productPrice,productQuantity, productDescription) {
        console.log(new FormData(document.querySelector("#addProductForm")))
        /*$.ajax({
            type: 'post',
            url: 'addProduct/',
            data: {
                type: "addProduct",
                productName: $(productName).val(),
                productSub: $(productSub).val(),
                productPrice: $(productPrice).val(),
                productQuantity: $(productQuantity).val(),
                productImage: $(productImage),
                productDescription: $(productDescription).val()
            },
            success: function (xhr) {
                $(spinner).hide();
                $(text).show();
                var message = (xhr);
                console.log(message);
                showAlert($(successAlert));
            },
            error: function (xhr) {
                $(spinner).hide();
                $(text).show();
                showAlert($(errorAlert));
                const message = (JSON.parse(xhr.responseText))["message"];
                console.log(message);
            }
        });*/
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
