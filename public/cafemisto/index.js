$(document).ready(function(){
$("body").css({paddingBottom: function(){return $("#fixednav").height()+17;}});
if(window.location.pathname=="/index.php" || window.location.pathname=="/"){
	var bedou=document.getElementById("bedou");
	var daimei=document.getElementById("daimei");
	var ghost=document.getElementById("ghost");
	bedou.style.cursor = "pointer";
	daimei.style.cursor = "pointer";
	ghost.style.cursor = "pointer";
	bedou.addEventListener("click",function(){window.location.pathname="/BeDo_blast/index.php";});
	daimei.addEventListener("click", function(){window.location.pathname="/daimeishi_blitz/index.php";});
	ghost.addEventListener("click", function(){window.location.pathname="/GhostWriter/index.php";});
}

$("#home").css("cursor","pointer");
$("#blitz").css("cursor","pointer");
$("#blast").css("cursor","pointer");
$("#more").css("cursor","pointer");

$("#home").click(function(){
	if(window.location.pathname=="/index.php" || window.location.pathname=="/"){
		location.reload();
	}else{
		window.location.pathname="/";
	}});
	
$("#blitz").click(function(){
	event.preventDefault();
	if(window.location.pathname=="/daimeishi_blitz/index.php"){
		location.reload();
	}else{
		window.location.pathname="/daimeishi_blitz/index.php";
	}});
	
$("#blast").click(function(){
	event.preventDefault();
	if(window.location.pathname=="/BeDo_blast/index.php"){
		location.reload();
	}else{
		window.location.pathname="/BeDo_blast/index.php";
	}});
	
$("#more").click(function(){
	event.preventDefault();
	if(window.location.pathname=="/GhostWriter/index.php"){
		location.reload();
	}else{
		window.location.pathname="/GhostWriter/index.php";
	}});

const stime = new Map();
$(document).ready(function() {
	$(".scroll").each(function() {
		var name = $(this).attr('id');
		var table = $(`#${name} .bod`).attr('id');
		if($(`#${table} tr`).length>5){
			tScroll(name);
			
			$(`#${table}`).mouseover(function(){
				clearTimeout(stime.get(name));
			}).mouseout(function() {
				tScroll(name);
			});
		}
		
		$('.head').each(function() {getWidthHeader($(this).attr('id'),$(`#${$(this).attr('id')} .bod`).attr('id'));});
	});
});
function tScroll(name){
	var scrollDiv = document.getElementById(name) ?? "empty";
	if(scrollDiv=="empty"){
		return false;
	}else{
		scrollDiv.scrollTop = scrollDiv.scrollTop + 1;
		if((scrollDiv.scrollTop+200) == scrollDiv.scrollHeight){
			scrollDiv.scrollTop=0;}
		stime.set(name,setTimeout(function(){tScroll(name);},45));
	}
}

function getWidthHeader(id_header,id_scroll){
	var colCount = 0;
	$("#"+id_scroll+" tr:nth-child(1) td").each(function() {
		if ($(this).attr("colspan")){
			colCount+= +$(this).attr("colspan");
		}else{
			colCount++;
		}
	});
	
	for(var i = 1; i <= colCount; i++){
		var th_width = $("#"+id_scroll+" > tbody > tr:first-child > td:nth-child("+i+")").width();
		$("#"+id_header+" > thead th:nth-child("+i+")").css("width",th_width+"px");
	}
}
});

