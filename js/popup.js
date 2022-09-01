

/*segundo popup izquierda*/
var 
    btnabrpopup = document.getElementById( 'btn-abr-popup'),
	over = document.getElementById('over'),
	pop = document.getElementById('pop'),
	btncerrpop = document.getElementById('btn-cerr-pop');

	btnabrpopup.addEventListener('click', function(){
	over.classList.add('active');
	pop.classList.add('active');
});

btncerrpop.addEventListener('click', function(a){
	a.preventDefault();
	over.classList.remove('active');
	pop.classList.remove('active');
});
/*Tercer popup izquierda*/


/*Primer popup derecha*/
var 
    btnabrpopup2 = document.getElementById( 'btn-abr-popup2'),
	over2 = document.getElementById('over2'),
	pop2 = document.getElementById('pop2'),
	btncerrpop2 = document.getElementById('btn-cerr-pop2');

	btnabrpopup2.addEventListener('click', function(){
	over2.classList.add('active');
	pop2.classList.add('active');
});

btncerrpop2.addEventListener('click', function(a){
	a.preventDefault();
	over2.classList.remove('active');
	pop2.classList.remove('active');
});

/*Segundo popup derecha*/
var 
    btnabrpopup3 = document.getElementById( 'btn-abr-popup3'),
	over3 = document.getElementById('over3'),
	pop3 = document.getElementById('pop3'),
	btncerrpop3 = document.getElementById('btn-cerr-pop3');

	btnabrpopup3.addEventListener('click', function(){
	over3.classList.add('active');
	pop3.classList.add('active');
});

btncerrpop3.addEventListener('click', function(a){
	a.preventDefault();
	over3.classList.remove('active');
	pop3.classList.remove('active');
});

/*Tercer popup derecha*/
var 
    btnabrpopup4 = document.getElementById( 'btn-abr-popup4'),
	over4 = document.getElementById('over4'),
	pop4 = document.getElementById('pop4'),
	btncerrpop4 = document.getElementById('btn-cerr-pop4');

	btnabrpopup4.addEventListener('click', function(){
	over4.classList.add('active');
	pop4.classList.add('active');
});

btncerrpop4.addEventListener('click', function(a){
	a.preventDefault();
	over4.classList.remove('active');
	pop4.classList.remove('active');
});