// JavaScript Document
$(document).ready(function(){
	$("#syjh").css({"border-bottom":"4px solid #e94842"});
	
	
	/****
	*
        <li id="syjh">商业计划</li>
        <li id="ysjtc">盈利模式</li>
        <li id="fkdp">项目团队</li>
	*
	*	三个模块切换JS代码
	****/
	$("#syjh").click(function(){
		$(this).css({"border-bottom":"4px solid #e94842"});
		$("#ysjtc").css({"border-bottom":"0px solid #e94842"});
		$("#fkdp").css({"border-bottom":"0px solid #e94842"});
		$("#dzxy").css({"border-bottom":"0px solid #e94842"});
		$("#xmpl").css({"border-bottom":"0px solid #e94842"});
		$("#fhbb").css({"border-bottom":"0px solid #e94842"});
		
		$("#content_details_syjh").attr("class","show");
		$("#content_details_ysjtc").attr("class","hide");
		$("#content_details_fkdp").attr("class","hide");
		$("#content_details_dzxy").attr("class","hide");
		$("#content_details_xmpl").attr("class","hide");
		$("#content_details_fhbb").attr("class","hide");		
	});
	$("#ysjtc").click(function(){
		$(this).css({"border-bottom":"4px solid #e94842"});
		$("#syjh").css({"border-bottom":"0px solid #e94842"});
		$("#fkdp").css({"border-bottom":"0px solid #e94842"});
		$("#dzxy").css({"border-bottom":"0px solid #e94842"});
		$("#xmpl").css({"border-bottom":"0px solid #e94842"});
		$("#fhbb").css({"border-bottom":"0px solid #e94842"});
		
		$("#content_details_syjh").attr("class","hide");
		$("#content_details_ysjtc").attr("class","show");
		$("#content_details_fkdp").attr("class","hide");
		$("#content_details_dzxy").attr("class","hide");
		$("#content_details_xmpl").attr("class","hide");
		$("#content_details_fhbb").attr("class","hide");
	});
	$("#fkdp").click(function(){
		$(this).css({"border-bottom":"4px solid #e94842"});
		$("#ysjtc").css({"border-bottom":"0px solid #e94842"});
		$("#syjh").css({"border-bottom":"0px solid #e94842"});
		$("#dzxy").css({"border-bottom":"0px solid #e94842"});
		$("#xmpl").css({"border-bottom":"0px solid #e94842"});
		$("#fhbb").css({"border-bottom":"0px solid #e94842"});
		
		$("#content_details_syjh").attr("class","hide");
		$("#content_details_ysjtc").attr("class","hide");
		$("#content_details_fkdp").attr("class","show");
		$("#content_details_dzxy").attr("class","hide");
		$("#content_details_xmpl").attr("class","hide");
		$("#content_details_fhbb").attr("class","hide");
	});
	$("#dzxy").click(function(){
		$(this).css({"border-bottom":"4px solid #e94842"});
		$("#ysjtc").css({"border-bottom":"0px solid #e94842"});
		$("#syjh").css({"border-bottom":"0px solid #e94842"});
		$("#fkdp").css({"border-bottom":"0px solid #e94842"});
		$("#xmpl").css({"border-bottom":"0px solid #e94842"});
		$("#fhbb").css({"border-bottom":"0px solid #e94842"});
		
		$("#content_details_syjh").attr("class","hide");
		$("#content_details_ysjtc").attr("class","hide");
		$("#content_details_fkdp").attr("class","hide");
		$("#content_details_dzxy").attr("class","show");
		$("#content_details_xmpl").attr("class","hide");
		$("#content_details_fhbb").attr("class","hide");
	});
	$("#xmpl").click(function(){
		$(this).css({"border-bottom":"4px solid #e94842"});
		$("#ysjtc").css({"border-bottom":"0px solid #e94842"});
		$("#syjh").css({"border-bottom":"0px solid #e94842"});
		$("#fkdp").css({"border-bottom":"0px solid #e94842"});
		$("#dzxy").css({"border-bottom":"0px solid #e94842"});
		$("#fhbb").css({"border-bottom":"0px solid #e94842"});
		
		$("#content_details_syjh").attr("class","hide");
		$("#content_details_ysjtc").attr("class","hide");
		$("#content_details_fkdp").attr("class","hide");
		$("#content_details_dzxy").attr("class","hide");
		$("#content_details_xmpl").attr("class","show");
		$("#content_details_fhbb").attr("class","hide");
	});
	$("#fhbb").click(function(){
		$(this).css({"border-bottom":"4px solid #e94842"});
		$("#ysjtc").css({"border-bottom":"0px solid #e94842"});
		$("#syjh").css({"border-bottom":"0px solid #e94842"});
		$("#fkdp").css({"border-bottom":"0px solid #e94842"});
		$("#dzxy").css({"border-bottom":"0px solid #e94842"});
		$("#xmpl").css({"border-bottom":"0px solid #e94842"});
		
		$("#content_details_syjh").attr("class","hide");
		$("#content_details_ysjtc").attr("class","hide");
		$("#content_details_fkdp").attr("class","hide");
		$("#content_details_dzxy").attr("class","hide");
		$("#content_details_xmpl").attr("class","hide");
		$("#content_details_fhbb").attr("class","show");
		fhbb_report();
	});
	
	/****
	* 分红报表
	****/
});
//分红报表
function fhbb_report(){
	var myChart = echarts.init(document.getElementById("fhbb_report"));
	option = {
		title : {
			text: '当月盈利报表',
			subtext: '该报表每月10号进行数据更新'
		},
		tooltip : {
			trigger: 'axis'
		},
		legend: {
			data:['经营收入','毛利润值']
		},
		calculable : true,
		xAxis : [
			{
				type : 'category',
				boundaryGap : false,
				data : ['1号','2号','3号','4号','5号','6号','7号','8号','9号','10号','11号','12号','13号','14号','15号','16号','17号','18号','19号','20号','21号','22号','23号','24号','25号','26号','27号','28号','29号','30号']
			}
		],
		yAxis : [
			{
				type : 'value',
				axisLabel : {
					formatter: '{value} 元'
				}
			}
		],
		series : [
			{
				name:'经营收入',
				type:'line',
				data:[1100, 1300, 1400, 1700, 2300, 3000, 4000, 4500, 4300, 4800, 4900, 5000, 5200, 4900, 4800, 4900, 5000, 5200, 4900, 4800, 4900, 5000, 5200, 4900, 4800, 4900, 5000, 5200, 4900, 4800],
				markPoint : {
					data : [
						{type : 'max', name: '最大值'},
						{type : 'min', name: '最小值'}
					]
				},
				markLine : {
					data : [
						{type : 'average', name: '平均值'}
					]
				}
			},
			{
				name:'毛利润值',
				type:'line',
				data:[110, 130, 140, 170, 230, 300, 400, 450, 430, 480, 490, 500, 520, 490, 480, 490, 500, 520, 490, 480, 490, 500, 500, 490, 480, 400, 500, 500, 490, 480],
				markPoint : {
					data : [
						{type : 'max', name: '最大值'},
						{type : 'min', name: '最小值'}
					]
				},
				markLine : {
					data : [
						{type : 'average', name : '平均值'}
					]
				}
			}
		]
	};
						
	myChart.setOption(option);
}
//项目介绍更多内容的按钮的点击事件之行的方法
function xmjs_height(value){
	//alert($("#xmjs_height").css("height"));
	//alert(value.value);
	if($("#xmjs_height").css("height") == "78px"){
		$("#xmjs_height").removeClass("xmjs_height78px");
		value.value = "隐藏";
	}else{
		$("#xmjs_height").attr("class","content_details_syjh_yhxq xmjs_height78px");
		value.value = "展开";
	}
}
//现有店铺概括更多内容的按钮的点击事件之行的方法
function xydpgk_height(value){
	//alert($("#xmjs_height").css("height"));
	//alert(value.value);
	if($("#xydpgk_height").css("height") == "78px"){
		$("#xydpgk_height").removeClass("xmjs_height78px");
		value.value = "隐藏";
	}else{
		$("#xydpgk_height").attr("class","content_details_syjh_yhxq xmjs_height78px");
		value.value = "展开";
	}
}
//风控调查报告更多内容的按钮的点击事件之行的方法
function fkdc_height(value){
	//alert($("#xmjs_height").css("height"));
	//alert(value.value);
	if($("#fkdc_height").css("height") == "78px"){
		$("#fkdc_height").removeClass("xmjs_height78px");
		value.value = "隐藏";
	}else{
		$("#fkdc_height").attr("class","content_details_syjh_yhxq xmjs_height78px");
		value.value = "展开";
	}
}