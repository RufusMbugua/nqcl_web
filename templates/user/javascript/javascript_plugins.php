<!-- Used in the Home page to slide the images -->
<script type="text/javascript" src="templates/user/js/jquery.js"></script>
<script type="text/javascript">
function booyahbitch(current){
	if(current == 4){	
		$('.cover_page').animate({left: '0px'}, 800);
	}else{
		$('.cover_page').animate({left: (current * -1000 ) + 'px'}, 800);
		//slider(current);
	}
	
}
function slider(current){
	var n = 1;
	var cn;
	if(cn == 4){
		n = 1;
		cn = n * current;
		booyahbitch(cn);
	}else{
		cn = n * current;
		booyahbitch(cn);
	}
	n++;
}
$(document).ready(function(){
	var current = 1; 
	$('#next').click(function(){
		booyahbitch(current);
		current++;
	});
});
var n = 1;
var speed = 3500;
setInterval('if (n == 4 ) {n=1;slider(n-1);}else {slider(n); n++}', speed);
</script>


<script src="templates/user/js/jquery-latest.pack.js" type="text/javascript"></script>
<script src="templates/user/js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".classA_news").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 3,
		auto:500,
		speed:1000
	});
});
</script>

<!-- this is the function to auto scroll the text in this div -->
<script type='text/javascript'>
	function ScrollDiv(){

	   if(document.getElementById('scrolling_text').scrollTop<(document.getElementById('scrolling_text').scrollHeight-document.getElementById('scrolling_text').offsetHeight)){-1
	         document.getElementById('scrolling_text').scrollTop=document.getElementById('scrolling_text').scrollTop+1
	         }
	   else {document.getElementById('scrolling_text').scrollTop=0;}
	}

	setInterval(ScrollDiv,50)
</script>   

<!-- end of files used in the slide images -->

<!-- used in the about us page -->
<script type="text/javascript" src="templates/user/js/jQuery-1.7.2-min.js"></script>

<script type="text/javascript">
     
$(document).ready(function() {
        

    $('#bigslider').css('margin-top', ($(window).height() - $('#bigslider').height())/0 + 'px');
                
                $('.guide_links ul li').click(function() {
                    $('#bigslider #pages').animate({marginLeft : -($(this).index() * $('#bigslider #pages .page').width()) + 'px'});
                    $('.guide_links ul li')
                });
    
});
</script>

<!-- end of used in about us page -->

<!-- used in all other pages -->


<script language="JavaScript">
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
</script>
