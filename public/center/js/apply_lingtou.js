// JavaScript Document
$(document).ready(function(){
	$("#make_head_friendly_reminder1").show();
	$("#make_head_friendly_reminder2").hide();
	
	$("#editor").summernote({
		height: 300,                 // set editor height
		minHeight: null,             // set minimum height of editor
		maxHeight: null,             // set maximum height of editor
		focus: true
	});
});

function make_head_friendly_reminder_onClick(value){
	if(value == 1){
		$("#make_head_friendly_reminder1").hide();
		$("#make_head_friendly_reminder2").show();
	}
	if(value == 2){
		$("#make_head_friendly_reminder1").show();
		$("#make_head_friendly_reminder2").hide();
	}
}