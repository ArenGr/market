function changeCategory(input) {
    var url = $('#category').attr("data-url");
    var categoryName = input.value;
    $.ajax({
        type: 'GET',
        url: url,
        data: {'categoryName': categoryName},
        success: function(response){
            // console.log(response); debugger;
            // $('#id').html(response);
            return response;
        }
    });
}
