//close the alert after 3 seconds.
$(document).ready(function(){
    setTimeout(function() {
        $(".alert").alert('close');
    }, 3000);
});

function changeCategory(item) {
    var dataId = $('#category').attr("data-url");
    var name = item.value;
    $.ajax({
        type: 'GET',
        url: dataId,
        data: {'name': name},
        success: function(data){
            $('#id').html(data.prod);
        }
    });
}
