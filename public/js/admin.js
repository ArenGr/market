//close the alert after 3 seconds.
$(document).ready(function(){
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
});

jQuery(".create-product-block").on("click", function(){
    jQuery(".add-new-product").toggle();
});
