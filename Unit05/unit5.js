function checkIsBlank(){
	$(":input").each(function(){
		if($(this).val() === ""){
			alert("Some fields have been left blank!");
			return false;
		}
	});
}
