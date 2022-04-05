window.onload=function(){
	function slider_wrapper (slider) {
		let slides = slider.getElementsByClassName("slider__slide");
		let navlinks 	= slider.getElementsByClassName("slider__navlink");
		let currentSlide = 0;

		// Arrow buttons
		slider.querySelector("#slider_nav-button--next").addEventListener("click", () => {
	    changeSlide(currentSlide + 1)
		});

		slider.querySelector("#slider_nav-button--prev").addEventListener("click", () => {
	    changeSlide(currentSlide - 1)
		});
		// End arrow buttons

		function changeSlide(moveTo) {
	    if (moveTo >= slides.length) {moveTo = 0;}
	    if (moveTo < 0) {moveTo = slides.length - 1;}
	    
	    slides[currentSlide].classList.toggle("active");
	    navlinks[currentSlide].classList.toggle("active");
	    slides[moveTo].classList.toggle("active");
	    navlinks[moveTo].classList.toggle("active");
	    
	    currentSlide = moveTo;

	    slider.querySelectorAll('.slider__navlink').forEach((bullet, bulletIndex) => {
			    bullet.addEventListener('click', () => {
			        if (currentSlide !== bulletIndex) {
			            changeSlide(bulletIndex);
			        }
			    })
			})
		}

		setInterval(() => {
			changeSlide(currentSlide + 1)
		}, 2000);
	}

	const sliders = document.getElementsByClassName("slider-container");
	for (let i = 0; i < sliders.length; i++){
		slider_wrapper(sliders[i]);
	}
}
