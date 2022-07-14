nombre = prompt('Ingrese su nombre');
let tiempo = new Date();

horas = tiempo.getHours();

if (horas >= 1 && horas < 12) {
    confirm(`Buenos dias, ${nombre}`)
}
else if (horas >= 12 && horas < 19) {
    confirm(`Buenos tardes, ${nombre}`)
} else {
    confirm(`Buenos noches, ${nombre}`)
}

