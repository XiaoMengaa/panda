<!DOCTYPE html>
<html>
<head>
 <title>订单处理_订单处理</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <meta name="description" content=""/>
 <meta name="format-detection" content="telephone=no" />
 <meta name=""/>
 
<link rel="stylesheet" href="/dingdan/tasp.css" />
<link href="/dingdan/orderconfirm.css" rel="stylesheet" />

<style>
#page{width:auto;}
#comm-header-inner,#content{width:950px;margin:auto;}
#logo{padding-top:26px;padding-bottom:12px;}
#header .wrap-box{margin-top:-67px;}
#logo .logo{position:relative;overflow:hidden;display:inline-block;width:140px;height:35px;font-size:35px;line-height:35px;color:#f40;}
#logo .logo .i{position:absolute;width:140px;height:35px;top:0;left:0;background:url(http://a.tbcdn.cn/tbsp/img/header/logo.png);}
</style>

</head>
<body data-spm="1">


<div id="page">

 <div id="content" class="grid-c">

  <div id="address" class="address" style="margin-top: 20px;" data-spm="2">
<form name="addrForm" id="addrForm" action="#">
<h3>确认收货地址
 <span class="manage-address">
 <a href="/home/shangcheng/more" title="管理我的收货地址"
 class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.7">管理收货地址</a>
 </span>
</h3>
<ul id="address-list" class="address-list">
     <li class="J_Addr J_MakePoint clearfix  J_DefaultAddr "  data-point-url="http://log.mmstat.com/buy.1.20">
 <s class="J_Marker marker"></s>
 <span class="marker-tip">寄送至</span>
   <div class="address-info">

 <em class="tip" style="display: none">默认地址</em>
 <a class="J_DefaultHandle set-default J_MakePoint" href="/auction/update_address_selected_status.htm?addrid=674944241" style="display: none" data-point-url="http://log.mmstat.com/buy.1.18">设置为默认收货地址</a>
 </div>
     </li>
     <li class="J_Addr J_MakePoint clearfix"
 data-point-url="http://log.mmstat.com/buy.1.20" >
 <s class="J_Marker marker"></s>
 <span class="marker-tip">寄送至</span>
   <div class="address-info">
 <a href="#" class="J_Modify modify J_MakePoint" data-point-url="#">修改本地址</a>
 <input name="address"
 class="J_MakePoint"
 type="radio"
 value="594209677"
 id="addrId_594209677"
 data-point-url="#"
 ah:params="#"
 >

 <label for="addrId_594209677" class="user-address">
     {{$message->address['sname']}} {{$message->address['cname']}}{{$message->address['sname']}} {{$message['name']}} ({{$message['name']}} 收) <em>1342407681</em></label><em class="tip" style="display: none">默认地址</em>
   <a class="J_DefaultHandle set-default J_MakePoint" style="display: none" data-point-url="#" href="#">设置为默认收货地址</a>
 </div>
   </li>
     </ul>
<ul id="J_MoreAddress" class="address-list hidden">
     
 </ul>
</form>
</div>
<form id="J_Form" name="J_Form" action="home/dhjl/create" method="get">
 <input name='_tb_token_' type='hidden' value='IZpONoL2bm'>
 <input type="hidden" name="action" value="order/confirmOrderAction" />
 <input type="hidden" name="event_submit_do_confirm" value="1" />
 <input type="hidden" id="J_InsuranceDatas" name="insurance_datas" value="" />
 <input type="hidden" id="J_InsuranceParamCheck" name="insurance_param_check" value="" />
 <input type="hidden" name="" id="J_checkCodeUrl" value="/auction/order/check_code.htm"/>
   <input type="hidden"   name="need_not_split_sellers"  value="" />
   <input type="hidden"   name="from"  value="cart" />
   <input type="hidden"   name="cnData"  value="" />
   <input type="hidden"   name="shop_id"  value="0"  class="J_FareParam" />
   <input type="hidden"   name="cartShareTag"  value="" />
   <input type="hidden"   name="flushingPictureServiceId"  value="" />
   <input type="hidden"  id="J_channelUrl"   name="channel"  value="no-detail"  class="J_FareParam" />
   <input type="hidden"   name="cinema_id"  value="" />
   <input type="hidden"  id="item"   name="item"  value="35612993875_19614514619_1_31175333266_1704508670_0_0_0_cartCreateTime~1380269540000" />
   <input type="hidden"  id="cartId"   name="cartId"  value="35612993875" />
   <input type="hidden"  id="verticalParams"   name="verticalParams"  value="" />
   <input type="hidden"   name="cross_shop_ids"  value="" />
   <input type="hidden"   name="tmall_cross_shop_ids"  value="NULL" />
   <input type="hidden"   name="buyer_from"  value="cart"  class="J_FareParam" />
   <input type="hidden"   name="tbsc_channel_id"  value="0" />
   <input type="hidden"   name="checkCodeIds"  value="35612993875_19614514619_1_31175333266_1704508670_0_0_0_cartCreateTime~1380269540000" />
   <input type="hidden"  id="J_OrderInfoString"   name="orderInfoString"  value="1704508670:2:19614514619:31175333266:" />
   <input type="hidden"  id="J_OrderInfoStringForCod"   name="orderInfoStringForCod"  value="1704508670_2,19614514619:31175333266:35612993875" />
   <input type="hidden"   name="encryptString"  value="0A04F3D8F7EEDC813AFF8711BE47B9E5E96F6E86A391A4C2" />
   <input type="hidden"   name="secondDivisionCode"  value="422801" />
   <input type="hidden"   name="use_cod"  value="false"  class="J_FareParam" />
   <input type="hidden"   name="1704508670:2|seq"  value="b_47285539868" />
   <input type="hidden"   name="n_area"  value="422801" />
   <input type="hidden"   name="n_city"  value="422800" />
   <input type="hidden"   name="n_prov"  value="420000" />
   <input type="hidden"   name="n_state"  value="0" />
   <input type="hidden"   name="n_country"  value="1" />
   <input type="hidden"  id="defaultId"   name="defaultId"  value="674944241" />
   <input type="hidden"   name="postCode"  value="445000" />
   <input type="hidden"   name="deliverAddr"  value="湖北民族学院（信息工程学院）  男生宿舍楼5栋102" />
   <input type="hidden"   name="addressId"  value="674944241" />
   <input type="hidden"   name="deliverMobile"  value="18727717260" />
   <input type="hidden"   name="deliverName"  value="朱万雄" />
   <input type="hidden"   name="deliverPhone"  value="" />
   <input type="hidden"  id="divisionCode"   name="divisionCode"  value="422801" />
   <input type="hidden"  id="J_CodAction"   name="CodAction"  value="http://delivery.taobao.com/cod/cod_payway.htm" />
   <input type="hidden"  id="event_submit_do_cod_switcher"   name="event_submit_do_cod_switcher"  value="1" />
   <input type="hidden"  id="J_CodActionNew"   name="CodActionNew"  value="cod/codOrder_switcher_action" />
   <input type="hidden"   name="guest_buyer"  value="false" />
     <input type="hidden" id="J_sid" name="sid" value="32457704949"/>
 <input type="hidden" id="J_gmtCreate" name="gmtCreate" value="1380270550897"/>
 <input type="hidden" name="secStrNoCCode" value="6dd2fa5d614e2ced1d3189b0c2da09c0"/>

 <input type="hidden" id="J_TransferWarehouseId" name="overseasWarehouseId" value="" />
 <input type="hidden" id="J_TransferWarehouseDivisionId" name="overseasWarehouseDivisionId" value="" />

   <input type="hidden" id="paramString" value="tuan_type=0&use_cod=false&shop_id=0&item=35612993875_19614514619_1_31175333266_1704508670_0_0_0_cartCreateTime~1380269540000&buyer_from=cart&isRepost=true&"/>
 <input type="hidden" id="J_StepPayData" value='""'/>
 
   <input type="hidden" name="unity" value="1" />

<input type="hidden" name="buytraceid" value="" />
<input type="hidden" name="activity" value="" />
<input type="hidden" name="bankfrom" value="" />
<input type="hidden" name="yfx315" value="" />

<input type="hidden" id="J_channelUrl" name="channel" value="no-detail" class="J_FareParam"/>
   <input type="hidden" id="J_actId" name="actId" value="" />
   <input type="hidden" name="etkv" value=""/>
   <input type="hidden" name="havePremium" value="false" />
 <input type="hidden" name="cartShareTag" value="" />
 <input type="hidden" name="flushingPictureServiceId" value="" />
           <div>
 <h3 class="dib">确认订单信息</h3>
 <table cellspacing="0" cellpadding="0" class="order-table" id="J_OrderTable" summary="统一下单订单信息区域">
 <caption style="display: none">统一下单订单信息区域</caption>
 <thead>
 <tr>
 <th class="s-title">兑换商品<hr/></th>
 <th class="s-price">单价(熊猫币)<hr/></th>
 <th class="s-amount">数量<hr/></th>
 <th class="s-agio">优惠方式(元)<hr/></th>
 <th class="s-total">小计(熊猫币)<hr/></th>
 </tr>
 </thead>
     


<tbody data-spm="3" class="J_Shop" data-tbcbid="0" data-outorderid="47285539868"  data-isb2c="false" data-postMode="2" data-sellerid="1704508670">
<tr class="first"><td colspan="5"></td></tr>
<tr class="shop blue-line">
 <td colspan="3">
   店铺：<a class="J_ShopName J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.6" href="http://store.taobao.com/shop/view_shop.htm?shop_id=104337282"
 target="_blank" title="淘米魅">熊猫商城</a>
     <span class="seller">卖家：<a href="http://member1.taobao.com/member/user_profile.jhtml?user_id=ac5831c32f47bc9267fcb75b71b5eed6" target="_blank" class="J_MakePoint" data-point-url="http://log.mmstat.com/buy.1.15">熊猫滚滚</a></span>
     <span class="J_WangWang"  data-nick="淘米魅"   data-display="inline" ></span>
    
    </td>
 <td colspan="2" class="promo">
 <div>
   <ul class="scrolling-promo-hint J_ScrollingPromoHint">
       </ul>
   </div>
 </td>
</tr>
 <tr class="item" data-lineid="19614514619:31175333266:35612993875" data-pointRate="0">
 <td class="s-title">
     <li> {{$commoditie['cname']}}</li>
          
   

    <a title="消费者保障服务，卖家承诺商品如实描述" href="#" target="_blank">
<img src="http://img03.taobaocdn.com/tps/i3/T1bnR4XEBhXXcQVo..-14-16.png"/>
</a>
    <div>
 <span style="color:gray;">卖家承诺720小时内发货</span>
 </div>
     </td>
 <td class="s-price">
   
  <span class='price '>
 <em class="style-normal-small-black J_ItemPrice"  >{{$commoditie['money']}}</em>
  </span>
<input type="hidden" name="costprice" value="630.00" class="J_CostPrice" />
</td>
 <td class="s-amount" data-point-url="">
         <input type="hidden" class="J_Quantity" value="1" name="19614514619_31175333266_35612993875_quantity"/>1
 
 </td>
 <td class="s-agio">
       <div class="J_Promotion promotion" data-point-url="">无优惠</div>
   </td>
 <td class="s-total">
   
   <span class='price '>
 <em class="style-normal-bold-red J_ItemTotal "  >{{$commoditie['money']}}</em>
  </span>
    <input id="furniture_service_list_b_47285539868" type="hidden" name="furniture_service_list_b_47285539868"/>
 </td>
</tr>



<tr class="item-service">
 <td colspan="5" class="servicearea" style="display: none"></td>
</tr>

<tr class="blue-line" style="height: 2px;"><td colspan="5"></td></tr>
<tr class="other other-line">
 <td colspan="5">
 <ul class="dib-wrap">
 <li class="dib user-info">
 <ul class="wrap">
  <h4>&nbsp;&nbsp; &nbsp;&nbsp;熊猫滚滚是集智慧、折扣、分享于一体的社交化问答网站，面对的客户群体是爱知识、爱分享，总能找到物美又免费的商品信息的时尚男女。在熊猫滚滚即将上线，</h4>  <br>   &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;有钱就败家，没钱就来熊猫滚滚</h2>
   </ul>
 </li>
 <li class="dib extra-info">

 <div class="shoparea">
 <ul class="dib-wrap">
 <li class="dib title">店铺优惠：</li>
 <li class="dib sel"><div class="J_ShopPromo J_Promotion promotion clearfix" data-point-url="http://log.mmstat.com/buy.1.16"></div></li>
 <li class="dib fee">  <span class='price '>
 -<em class="style-normal-bold-black J_ShopPromo_Result"  >0.00</em>
  </span>
</li>
 </ul>
 </div>

 <div class="shoppointarea"></div>

   <div class="farearea">
 </div>
   <div class="extra-area">
 <ul class="dib-wrap">
 <li class="dib title">发货时间：</li>
 <li class="dib content">卖家承诺订单在买家付款后，720小时内<a href="#">发货</a></li>
 </ul>
 </div>
   
   <div class="servicearea" style="display: none"></div>
 </li>
 </ul>
 </td>
</tr>

<tr class="shop-total blue-line">
 <td colspan="5">合计(<span class="J_Exclude" style="display: none">不</span>含运费<span class="J_ServiceText" style="display: none">，服务费</span>)：
   <span class='price g_price '>
 <span>&yen;</span><em class="style-middle-bold-red J_ShopTotal"  >{{$commoditie['money']}}</em>
  </span>
  <input type="hidden" name="1704508670:2|creditcard" value="false" />
<input type="hidden" id="J_IsLadderGroup" name="isLadderGroup" value="false"/>

   </td>
</tr>
</tbody>
  <tfoot>
 <tr>
 <td colspan="5">

<div class="order-go" data-spm="4">
<div class="J_AddressConfirm address-confirm">
 <div class="kd-popup pop-back" style="margin-bottom: 40px;">
 <div class="box">
 <div class="bd">
 <div class="point-in">
   
   <em class="t">实付币：</em>  <span class='price g_price '>
 <span>&yen;</span><em class="style-large-bold-red"  id="J_ActualFee"  >{{$commoditie['money']}}</em>
  </span>
</div>

  <ul >
 <li><em>寄送至:</em><span id="J_AddrConfirm" style="word-break: break-all;">
   {{$message->address['sname']}} {{$message->address['cname']}}{{$message->address['xname']}}{{$message->address['zname']}} {{$message->address['xxdz']}}
   </span></li>
 <li><em>收货人:</em><span id="J_AddrNameConfirm">{{$message['xname']}}{{$message['phone']}}&nbsp; &nbsp;   &nbsp; &nbsp;      {{$message['bphone']}} </span></li>
 </ul>
     </div>
 </div> 
         <a href="/home/shangcheng"
 class="back J_MakePoint" target="_top"
 data-point-url="">返回商品页</a>
   <button button="button"><a id="J_Go" class=" btn-go"  data-point-url=""  type='submit' tabindex="0" title="点击此按钮，提交订单。">提交订单<b class="dpl-button"></b></a></button>
  </div>
 </div>

 <div class="J_confirmError confirm-error">
 <div class="msg J_shopPointError" style="display: none;"><p class="error">积分点数必须为大于0的整数</p></div>
 </div>


 <div class="msg" style="clear: both;">
 
 </div>
 </div>
 </td>
 </tr>
 </tfoot>
 </table>

</div>
  
 <input type="hidden" id="J_useSelfCarry" name="useSelfCarry" value="false" />
 <input type="hidden" id="J_selfCarryStationId" name="selfCarryStationId" value="0" />
 <input type="hidden" id="J_useMDZT" name="useMDZT" value="false" />
 <input type="hidden" name="useNewSplit" value="true" />
 <input type="hidden" id="J_sellerIds" name="allSellIds" value="1704508670" />
</form>
</div>

<div id="footer"></div>
</div>

</body>
<script type="text/javascript">
   var submit =document.getElementById('J_Go');
     submit.onclick=function()
     {
      if(confirm("兑换成功")){
              
      }
      
      
     }
                             
</script>
</html>
