const navbar = document.querySelector('#nav')

window.addEventListener('scroll', function (e) {
	const lastPosition = window.scrollY
	if (lastPosition > 50) {
		navbar.classList.add('nav-active')
	} else if (navbar.classList.contains('nav-active')) {
		navbar.classList.remove('nav-active')
	} else {
		navbar.classList.remove('nav-active')
	}
})
