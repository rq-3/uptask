 const mobileMenubtn = document.querySelector('#mobile-menu');
 const cerrarMenubtn = document.querySelector('#cerrar-menu');
 const sidebar = document.querySelector('.sidebar');
 if(mobileMenubtn){
    mobileMenubtn.addEventListener('click', function(){
        sidebar.classList.toggle('mostrar');
    });
 }

 if(cerrarMenubtn){
    cerrarMenubtn.addEventListener('click', function(){
        sidebar.classList.remove('mostrar');
        sidebar.classList.add('ocultar');

        setTimeout(() => {
            sidebar.classList.remove('mostrar');
            sidebar.classList.remove('ocultar');
        }, 1000);
    })
 }


 // Elimina la clase de mostrar en tamaños a tablet y mayores

 const anchoPantalla = document.body.clientWidth;
 window.addEventListener('resize', function(){
    const anchoPantalla = this.document.body.clientWidth;
    if(anchoPantalla >= 768){
        sidebar.classList.remove('mostrar');
    }
 })