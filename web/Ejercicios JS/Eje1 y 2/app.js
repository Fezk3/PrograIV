const img = document.querySelector('img')
let reloj = document.querySelector('#time')
let cont = 1;

img.addEventListener("mouseover", () => {

    (cont > 4 ? cont = 1 : cont = cont)

    document.querySelector("img").src = `img/img${cont}.jpg`

    cont++;

});

setInterval(function () {

    let tiempo = new Date();

    horas = tiempo.getHours();
    minutos = tiempo.getMinutes();
    segundos = tiempo.getSeconds();

    if (horas < 10)
        horas = '0' + horas;
    if (minutos < 10)
        minutos = '0' + minutos;
    if (segundos < 10)
        segundos = '0' + segundos;

    reloj.innerHTML = horas + ' : ' + minutos + ' : ' + segundos;

}, 1000)
