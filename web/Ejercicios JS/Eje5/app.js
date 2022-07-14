const btn = document.querySelector('#app');
const imgCont = document.querySelector('#imgCont');

btn.addEventListener('click', () => {

    let imge = document.createElement('img');
    imge.src = 'samus.jpg';
    imgCont.append(imge);

})
