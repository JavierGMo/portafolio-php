//Boton hamburguesa
let btnHamburguesa = document.getElementById('btn-hambur');
let iconHamburguer = document.getElementById('icon-hambur');
//Boton para mover las imagenes
let btnFlechaIzq = document.getElementById('btn-flecha-left');
let btnFlechaDer = document.getElementById('btn-flecha-right');

//Div para mostrar mis skills
let skillProgramacion = document.getElementById('skill-programacion');
let skillWeb = document.getElementById('skill-web');
let skillMoviles = document.getElementById('skill-moviles');
//divs ocultos de listas de skills
let contProgramacionS = document.getElementById('cont-list-progra');
let contWebS = document.getElementById('cont-list-web');
let contMovilesS = document.getElementById('cont-list-moviles');


//Bandera para poder desplegar el menu
let menuOculto = true;

//Lista de imagenes
let idImagen = document.getElementById('imagen-de-trabajo');
let textoTrabajos = document.getElementById('texto-de-trabajos');
let imagenesRef = [
    'assets/imgs/heroku.png',
    'assets/imgs/producto.jpg',
    'assets/imgs/ticket.png'
];
let textImagenes = [
    'Heroku',
    'Producto',
    'Tickets'
];
let indexTrabajos = 0;
let totalImagenes = imagenesRef.length-1;

//Agregar imagen
idImagen.src = imagenesRef[indexTrabajos];

textoTrabajos.innerText = textImagenes[indexTrabajos];

//Conts Skills
contProgramacionS.style.transition = "0.2s";
contWebS.style.transition = "0.2s";
contMovilesS.style.transition = "0.2s";

//Iconon de hamburguesa
//iconHamburguer.style.transition = '0.2s';


//Eventos de los botones

//Menu hamburguesa
btnHamburguesa.addEventListener('click', e=>{
    e.preventDefault();
    if(menuOculto){
        //Desplegamos el menu
        console.log(`bool ${menuOculto}`);
        document.getElementById('menu-opciones-nav').classList.remove('oculto-resw');
        iconHamburguer.classList.remove('fa-bars');
        iconHamburguer.className += ' fa-times';
        console.log(`\nIcono: ${iconHamburguer} \n`);
        menuOculto = false;
    }else{
        //Cerramos el menu
        document.getElementById('menu-opciones-nav').className += ' oculto-resw ';
        iconHamburguer.classList.remove('fa-times');
        iconHamburguer.className += ' fa-bars';
        console.log(`\nIcono: ${iconHamburguer} \n`);
        console.log(`bool ${menuOculto}`);
        menuOculto = true;
    }
    
});
//Flechas para cambiar de imagenes
btnFlechaIzq.addEventListener('click', e=>{
    e.preventDefault();
    
    --indexTrabajos;
    if(indexTrabajos<0){
        indexTrabajos = totalImagenes;
    }else if(indexTrabajos===totalImagenes){
        indexTrabajos = 0;
    }
    idImagen.src = imagenesRef[indexTrabajos];
    textoTrabajos.innerText = textImagenes[indexTrabajos];
    
    
    
});

btnFlechaDer.addEventListener('click', e=>{
    e.preventDefault();    
    if(indexTrabajos===totalImagenes){
        indexTrabajos = 0;
    }else{
        ++indexTrabajos;
    }
    idImagen.src = imagenesRef[indexTrabajos];
    textoTrabajos.innerText = textImagenes[indexTrabajos];

});

//Divs para mostrar mis habilidades

skillProgramacion.addEventListener('click', e=>{
    e.preventDefault();
    let flechaUno = document.getElementById('flecha-1');
    flechaUno.style.transition = "0.2s";
    if(screen.width < 500){
        if(contProgramacionS.classList.contains('oculto-resw')){
            contProgramacionS.classList.remove('oculto-resw');
            flechaUno.style.transform = `rotate(${-180}deg)`;
        }else{
            contProgramacionS.className = 'oculto-resw';
            flechaUno.style.transform = `rotate(${0}deg)`;
        }
    }else{
        if(contProgramacionS.classList.contains('oculto-resw')){
            contProgramacionS.classList.remove('oculto-resw');
        }
    }
    

});

skillWeb.addEventListener('click', e=>{
    e.preventDefault();
    let flechaDos = document.getElementById('flecha-2');
    flechaDos.style.transition = "0.2s";

    if(screen.width < 500){
        if(contWebS.classList.contains('oculto-resw')){
            contWebS.classList.remove('oculto-resw');
            flechaDos.style.transform = `rotate(${-180}deg)`;
        }else{
            contWebS.className = 'oculto-resw';
            flechaDos.style.transform = `rotate(${0}deg)`;
        }
    }else{
        if(contWebS.classList.contains('oculto-resw')){
            contWebS.classList.remove('oculto-resw');
        }
    }
});

skillMoviles.addEventListener('click', e=>{
    e.preventDefault();
    let flechaTres = document.getElementById('flecha-3');
    flechaTres.style.transition = "0.2s";
    if(screen.width < 500){
        if(contMovilesS.classList.contains('oculto-resw')){
            contMovilesS.classList.remove('oculto-resw');
            flechaTres.style.transform = `rotate(${-180}deg)`;
        }else{
            contMovilesS.className = 'oculto-resw';
            flechaTres.style.transform = `rotate(${0}deg)`;
        }
    }else{
        if(contMovilesS.classList.contains('oculto-resw')){
            contMovilesS.classList.remove('oculto-resw');            
        }
    }
});

