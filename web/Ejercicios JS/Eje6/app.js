const goo = document.querySelector('#google')
const yah = document.querySelector('#yahoo')
const wik = document.querySelector('#wiki')
const fram = document.querySelector('#pag')

fram.name = 'fra';

goo.addEventListener('click', () => {

    goo.target = 'fra';

})
yah.addEventListener('click', () => {

    yah.target = 'fra';

})
wik.addEventListener('click', () => {

    wik.target = 'fra';

})