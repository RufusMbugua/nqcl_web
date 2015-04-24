<!-- this is the header plugin -->

<script type="text/javascript" src="templates/admin/js/jQuery-1.7.2-min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$(".drop").click(function() {
		$("#DropDownMenu").fadeIn(800);
		$("#DropDownMenu").mouseleave(function() {
			$("#DropDownMenu").fadeOut(800);
		});
	});
});

function mdy(todaysdate) {
//calls the function mdy why to get the date
var ext = "";
switch(todaysdate.getDate()) {
	case 1:
	case 21:
	case 31:
		ext = "st";
		break;
	case 2:
	case 22:
		ext = "nd";
		break;
	case 3:
	case 23:
		ext = "rd";
		break;
	default:
		ext = "th";
		break;
}
var month = "";
switch(todaysdate.getMonth()+1) {
	case 1:
		month = "January";
		break;
	case 2:
		month = "February";
		break;
	case 3:
		month = "March";
		break;
	case 4:
		month = "April";
		break;
	case 5:
		month = "May";
		break;
	case 6:
		month = "June";
		break;
	case 7:
		month = "July";
		break;
	case 8:
		month = "August";
		break;
	case 9:
		month = "September";
		break;
	case 10:
		month = "October";
		break;
	case 11:
		month = "November";
		break;
	case 12:
		month = "December";
		break;
	default:
		month = "Error";
		break;
}
return todaysdate.getDate()+ext+" "+month+", "+todaysdate.getFullYear();
}

$(document).ready(function() {
		
	$("#viewing").click(function() {
		$("#fade").show(300);
		
		var height = 310;
		var width = 420;

		document.getElementById('housepanel').style.marginTop = (window.innerHeight - height)/3 +'px';
		document.getElementById('housepanel').style.marginLeft = (window.innerWidth - width)/2.1 +'px';
		$("#housepanel").fadeIn(800);

	});
	$("#closeButton").click(function() {
		$("#fade").hide(1000);
		$("#housepanel").fadeOut(300);
	});
	
	
});


</script>
