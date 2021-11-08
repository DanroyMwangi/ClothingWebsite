$(document).ready(function (){
    if($(".admin-tool")){
        const adminContent = document.querySelectorAll(".content-area");
        adminTools.forEach(function(item,index){
            item.addEventListener("click",function(){
                $(".active").addClass("hidden");
                $(".active").removeClass("active");
                adminContent[index].classList.toggle("hidden");
                adminContent[index].classList.add("active");
            });
        });
    }
    if ($("#productImage")){
        const imageDisplay = document.querySelector("#displayProductImage");
        productImageUpload.addEventListener("change",function(){
            imageDisplay.src = URL.createObjectURL(productImageUpload.files[0]);
        });
    }
});
