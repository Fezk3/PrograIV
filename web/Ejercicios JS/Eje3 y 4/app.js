const campoId = document.querySelector('#id');
const campoNomb = document.querySelector('#nombre');
const campoMail = document.querySelector('#email');
const campoTel = document.querySelector('#tel');

campoId.addEventListener('focusout', () => {

    let id = campoId.value;
    let len = Math.ceil(Math.log(id + 1) / Math.LN10);

    if (id !== ' ') {

        if (isNaN(id) || len < 9 || len > 10) {
            campoId.value = " ";
            campoId.style.backgroundColor = 'red';
            alert('El id debe ser numerico y tener 9 digitos');

        } else {
            campoId.style.backgroundColor = 'white';
        }

    }

})

campoTel.addEventListener('focusout', () => {

    let num = campoTel.value;

    if (num !== ' ') {

        if (isNaN(num)) {
            campoTel.value = " ";
            campoTel.style.backgroundColor = 'red';
            alert('El telefono debe ser numerico');
        } else {
            campoTel.style.backgroundColor = 'white';
        }

    }

})

const soloLetr = (cad) => {

    if (!/[^a-zA-Z]/.test(cad)) {
        return false
    }
    return true

}
campoNomb.addEventListener('focusout', () => {

    let nombre = campoNomb.value;

    campoNomb.value = campoNomb.value.toUpperCase();

    if (nombre !== ' ') {

        if (soloLetr(nombre)) {

            alert('El nombre solo debe tenre letras');
            campoNomb.value = '';
            campoNomb.style.backgroundColor = 'red';

        } else {
            campoNomb.style.backgroundColor = 'white';
        }


    }

})

campoMail.addEventListener('focusout', () => {

    let mail = campoMail.value;

    if (mail !== ' ') {

        if (!mail.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        )) {
            campoMail.value = ''
            campoMail.style.backgroundColor = 'red';
            alert('Correo invalido, debe de tener: letras, @ y .')
        } else {
            campoMail.style.backgroundColor = 'white';
        }

    }

})


// Tabla

const btn = document.querySelector('#enviar');
const tbb = document.querySelector('#info');
const tb = document.querySelector('table');

// btn guardar
btn.addEventListener('click', () => {

    let fila = tbb.insertRow(0);

    let col1 = fila.insertCell(0);
    let col2 = fila.insertCell(1);
    let col3 = fila.insertCell(2);
    let col4 = fila.insertCell(3);
    let col5 = fila.insertCell(4);

    col1.innerHTML = campoNomb.value;
    col2.innerHTML = campoId.value;
    col3.innerHTML = campoMail.value;
    col4.innerHTML = campoTel.value;
    col5.innerHTML = '<button class="del">Eliminar</button>';


})

// click en el btn eliminar de una fila especifica
const delFil = (e) => {

    if (!e.target.classList.contains('del')) {
        return
    }

    const btn = e.target;

    btn.closest('tr').remove();

}
tb.addEventListener('click', delFil);


// hover en fila cambia color
const cambCol = (e) => {

    e.target.closest('tr').style.backgroundColor = 'rgb(16, 146, 221)'

}
const restCol = (e) => {

    e.target.closest('tr').style.backgroundColor = 'rgb(255, 255, 255)'

}
tb.addEventListener('mouseover', cambCol)
tb.addEventListener('mouseout', restCol)


// Boton cantidad de elementos del form
const btnCant = document.querySelector('#canti')
const form = document.querySelector('.formu')


btnCant.addEventListener('click', () => {

    alert(`Cantidad de elementos del form es de: ${form.childElementCount}`)

})
