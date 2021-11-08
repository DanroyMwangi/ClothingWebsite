function showAlert(alertArea) {
    alertArea.show("slow");
    setTimeout(function () {
        alertArea.hide("slow");
    }, 3000);
}

function validateText(inputText, errorArea) {
    value = inputText.val()
    if (value.length <= 3 || value.length >= 14) {
        //errorArea.html("Invalid "+ inputText.title +".");
        errorArea.removeClass("hidden");
        inputText.addClass("border-red-700");
        inputText.removeClass("border-green-500");
        return false;
    } else {
        errorArea.hide();
        inputText.removeClass("border-red-700");
        inputText.addClass("border-green-500");
        return true;
    }
}

function validateEmail(email, errorArea) {
    if (email.val().length <= 6) {
        email.addClass("border-red-700");
        email.removeClass("border-green-500");
    } else {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var is_valid = emailReg.test(email.val());
        if (is_valid) {
            errorArea.addClass("hidden");
            email.removeClass("border-red-700");
            email.addClass("border-green-500");
            return true;
        } else {
            errorArea.removeClass("hidden");
            email.addClass("border-red-700");
            email.removeClass("border-green-500");
            return false;
        }
    }
}