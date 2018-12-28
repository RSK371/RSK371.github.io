$(document).ready(function () {
	$("#submitbutton").click(function (ev) {
        ev.preventDefault() 
        if ($(this).attr("value") == "button1") {
        $("#myform").submit();
        }
    });
	$("#selectorname").change(function (){
		$(".selectors").hide();
		if($(this).val() == 'disc') {
			$("#disc").show();
		}
		else if($(this).val() == 'book') {
			$("#book").show();
        }
        else if($(this).val() == 'furniture') {
            $("#furniture").show();
        }
        else if($(this).val() == 'nselected') {
            $(".selectors").hide();
		}
	});
});
