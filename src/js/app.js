
/*PARA QUE LA BARRA DE NAVEGACION APAREZCA Y DESAPAREZCA, Y EL DARK MODE*/
document.addEventListener("DOMContentLoaded", function(){
    eventListener();

    darkMode();
});

function darkMode(){

    const prefiereDarkMode = window.matchMedia(("prefers-color-scheme: dark"));
    //console.log(prefiereDarkMode.matches); --> Por consola podemos ver true o false

    if(prefiereDarkMode.matches){
        document.body.classList.add("dark-mode");
    }else{
        document.body.classList.remove("dark-mode");
    }

    prefiereDarkMode.addEventListener("change", function(){
        if(prefiereDarkMode.matches){
            document.body.classList.add("dark-mode");
        }else{
            document.body.classList.remove("dark-mode");
        }
    });

    const botonDarkMode = document.querySelector(".dark-mode-boton");

    botonDarkMode.addEventListener("click", function(){
        document.body.classList.toggle("dark-mode");
    });
}

function eventListener(){
    const mobileMenu = document.querySelector(".mobile-menu");

    mobileMenu.addEventListener("click", navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector(".navegacion");

    /*    if(navegacion.classList.contains("mostrar")){
        navegacion.classList.remove("mostrar");
    }else{                                          -------> ESTO ES LO MISMO QUE LA LINEA 20
        navegacion.classList.add("mostrar");
    }*/

    navegacion.classList.toggle("mostrar");
}