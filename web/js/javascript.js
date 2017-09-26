function clickedFunction(){
	alert("Clicked");
}

//function ChangeColor(){
//	var color = document.getElementById("color").value;
//	document.getElementById("div1").style.background = color;
//}

$(document).ready(function(){
	$('#colorButton').click(function(){
		var color = $('#color').val();
		
		$('#div1').css('background-color', color);
	})
	$('#toggle').click(function(){
		$('#div3').toggle(1500);
	})
})

