const header = document.querySelector(".slider-text");
const background = document.querySelector(".image-slider:nth-child(1)");


window.addEventListener("scroll", function (){
     const scroll = window.pageYOffset;
	 background.style.top = scroll / 4 + "px";
	 header.style.opacity = 3 - scroll / 150;
	 if(scroll > 100 && scroll < 300){
	  text.style.bottom = scroll/ 7 + "px";
	 }

})
