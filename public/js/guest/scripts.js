function changeCategory(item) {
    var dataId = $('#category').attr("data-url");
    var category_id = item.value;
    $.ajax({
        type: 'GET',
        url: dataId,
        data: {'category_id': category_id},
        success: function(data){
            var data = data.products;
            var result = '';
            $.each(data, function(key, value) {
                result += '<div class="col-sm-4 pt-5 pb-5 d-flex justify-content-center" id="all_products"> <div class="card"> <div class="head"> <div class="likes"> <p><i class="fa fa-heart mr-1"></i>212</p> </div> <div class="discount"> <button>30% off</button> </div> </div> <div class="product"> <img src="'+value.image+'" height="190"> </div> <div class="text"> <div class="title"> <h2>'+value.price+' <span>$</span></h2> <h3>'+value.name+'</h3> <p class="text-muted">'+value.description+'</p> </div> </div> <div class="footer"> <div class="action"> <button>Buy Now</button> </div> <div class="cart"> <button><ion class="ion-ios-basket"></ion> Add to cart</button> </div> </div> </div></div>';
            });
            if (!result) {
                $("#cards").html('<p class="col-sm-12 text-center text-danger" style="font-size:30px">Sorry, no products at the moment by this category (:</p>');
                return 0;
            }
            $("#cards").html(result);
        }
    });
}
