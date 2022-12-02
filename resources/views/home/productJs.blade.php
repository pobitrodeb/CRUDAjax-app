<script>
//     $(document).ready(function(){
//     alert()
// });
$(document).ready(function(){
    $(document).one('click','.add_product', function(e){
        e.preventDefault();
    let name    = $('#name').val();
    let price   = $('#price').val();
        // console.log(name+price);
        $ajax({
            url:{{route('add.product')}}
            method: 'post', 
            data:{name:name,price:price},
            success:function(res){

            },error:function(err)
            {

            }

        });
        
    })
});

</script>