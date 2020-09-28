function enable_button()
{
    var submit_button = document.getElementById("register-submitting");

	submit_button.style.color = "#090333";
	submit_button.disabled = false;
}

function display_image(input)
{
    if(input.files && input.files[0])
	{
		var to_get = new FileReader();
		to_get.onload = function(e)
									{
                                    $('#personal-photo').attr('src', e.target.result).width(270).height(270);
                                    $("#clear-image").css("display","block");
									}
	to_get.readAsDataURL(input.files[0]);
	}
}

/*function reset_image(input)
{
    if(document.getElementById("personal-photo").src != "" || document.getElementById("personal-photo").src == "images/question_mark.png")
	{
	document.getElementById("personal-photo").src = "images/question_mark.png";
	$("#clear-image").css("display","none");
	return false;
	}

}*/