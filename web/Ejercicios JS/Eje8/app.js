const btnPag = document.querySelector('#pag')

btnPag.addEventListener('click', () => {

    confirm(`Pag actual: ${window.location.href}`)

})