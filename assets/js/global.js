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


var orderCenterTab=function(){
    layer.tab({
        area:['600px','300px'],
        tab:[
            {
            title:'全部订单',
            content:'全部订单'
            },
            {
                title:'抢单中',
                content:'抢单中'
            },
            {
                title:'进行中',
                content:'进行中'
            },
            {
                title:'已完成',
                content:'已完成'
            },
            {
                title:'问题件',
                content:'问题件'
            }
        ]
    });
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