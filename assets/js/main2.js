const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')


if (navToggle) {
   navToggle.addEventListener('click', () => {
      navMenu.classList.add('show-menu')
   })
   
}
if (navClose) {
   navClose.addEventListener('click', () => {
      navMenu.classList.remove('show-menu')
   })
   
}
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () => {
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')

}
navLink.forEach(n=>n.addEventListener('click', linkAction))


const myAtropos = Atropos({
    el: '.home__images',
    shadow:false,
    highlight:false,
})


const shadowHeader = () => {
    const header = document.getElementById('header')

    this.scrollY >= 50 ? header.classList.add('shadow-header')
                       : header.classList.remove('shadow-header')

}
window.addEventListener('scroll', shadowHeader)
const select = document.querySelectorAll('.selectBtn');
const option = document.querySelectorAll('.option');
let index = 1;

select.forEach(a => {
	a.addEventListener('click', b => {
		const next = b.target.nextElementSibling;
		next.classList.toggle('toggle');
		next.style.zIndex = index++;
	})
})
option.forEach(a => {
	a.addEventListener('click', b => { 
		b.target.parentElement.classList.remove('toggle');
		const parent = b.target.closest('.select').children[0];

		parent.setAttribute('data-type', b.target.innerHTML);

		parent.innerHTML = b.target.innerHTML;
	})
});
$( function() {
    $( "#sourcedatepicker" ).datepicker();
	$( "#destinationdatepicker" ).datepicker();
} );
