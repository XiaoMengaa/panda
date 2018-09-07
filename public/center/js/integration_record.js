// JavaScript Document
$(document).ready(function(){
	$(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd",
		language: "zh-CN",
        autoclose: true,
        todayBtn: true,
		startView: 2,
		minView: 2,
        startDate: "2015-01-01 10:00",
        minuteStep: 10
    });
});