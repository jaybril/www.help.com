/**
 * Created by jaybril on 15/11/26.
 */
var showMyCart=function(){
    //$(" .mycart-ul").stop();
    //$(" .mycart-rrow").stop();
    $(" .mycart-rrow").show();
    $(" .mycart-ul").show();
}
var hideMyCart=function(){
    //$(" .mycart-ul").stop();
    //$(" .mycart-rrow").stop();
    $(" .mycart-rrow").hide();
    $(" .mycart-ul").hide();
}




/*取消订单-btn*/
var cancelOrder=function(){
    layer.confirm(
        '确定取消订单吗？',
        {btn:['是','否']},
        function(){

        },
        function(){

        }
    )
}
/*订单改价*/
var changeOrderPrice=function(){

}