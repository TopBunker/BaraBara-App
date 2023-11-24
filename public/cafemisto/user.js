function signin(){
  	var request;
    event.preventDefault();
      	
    if (request) {request.abort();}
      
    var $form = $(this);
    var $inputs = $form.find("input,button");
    var serializedData = $form.serialize();
      	   
    $inputs.prop("disabled", true);
      	
    request = $.ajax({
        url: "/phip/signin.php",
        type: "post",
        data: serializedData
    });
      
    request.done(function (response, textStatus, jqXHR){
        if(response=="1"){
            $('#login').modal('hide');
            $("#is_logged").load(location.href + " #is_logged");
        }else{
            if(response=="2"){
                alert("ログインできませんでした. Please try again.");
            }
        }
    });
      	
    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown);
    	});
      
    request.always(function () {
        $inputs.prop("disabled", false);
    });
}

function signup(){ 
    var request;
    event.preventDefault();

    if (request) {request.abort();}
      
    var pone = $("#password").val();
   	var ptwo = $("#verify").val();
    if(pone!=ptwo){
        alert("パスワードが一致していません/passwords don't match");
    }else{
        var $form = $(this);
        var $inputs = $form.find("input,button");
      
      	var serializedData = $form.serialize();
      	   
      	$inputs.prop("disabled", true);
      	
      	request = $.ajax({
        	url: "/phip/form.php",
        	type: "post",
        	data: serializedData
    	});
      
      	request.done(function (response, textStatus, jqXHR){
        	alert(response);
          	$('#register').modal('hide');
    	});
      	
      	request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown);
    	});
      
      	request.always(function () {
        $inputs.prop("disabled", false);
    	});
    }
 }
 
function rate(rating){
  	var request;
	var $lesson = $(".pdf-frame").html();     	
      
    request = $.ajax({
        url: "/phip/rate.php",
        type: "post",
        data: { rate: rating, content: $lesson}
    });
      
    request.done(function (response, textStatus, jqXHR){
        if(response=="2"){
            alert("最初にログインしてください");
        }else{
            var $rt = Number($("#rating").text());
            var $r = Number(rating)*20;
            var $enter = ($rt + $r)/2;
            $("#fig").text($enter+"%");
            $("#rating").text($enter);
        }
     
    });
      	
    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
      
    request.always(function () {
        $inputs.prop("disabled", false);
    });
}
