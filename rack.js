(function()
{
	var previousOffset = window.pageYOffset;
	var previousRotate = 0;
	
	$(window).scroll(function()
   {
	     const ratio = 0.3;
		 const offset = window.pageYOffset;
		 var degree = ((offset - previousOffset) * ratio + previousRotate) % 360;
		 
		 
		 $("#rack").css("transform","rotate("+ degree + "deg)");
		 previousRotate = degree;
		 previousOffset = offset;
		 
   });
	
}())