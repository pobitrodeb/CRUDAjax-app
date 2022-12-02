$(document).ready(function(){
    //alert()
    add_product
});
$(document).ready(function(){
    $(document).one('click','.add_product', function(e){
        e.preventDefault();
    let name    = $('#name').val();
    let price   = $('#price').val();


        $ajax({
            url:{{route('add.product')}}
        });
        
    })
});
