function changeCategory(item) {
    var name = item.value;
    $.ajax({
        type: 'GET',
        url: ,
        data: {'name': name},
        success: function(data){
            $('#id').html(data.html);
        }
    });
}
