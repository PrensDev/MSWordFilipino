window.onscroll = function() {myFunction()};

	var navbar = document.getElementById("navbar");
	var left = document.getElementById("left");
	var sticky = navbar.offsetTop;

	function myFunction() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky");
			left.classList.add("fixed");
		} 
		else {
			navbar.classList.remove("sticky");
			left.classList.remove("fixed");
			}
	}