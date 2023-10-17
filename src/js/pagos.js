( function() {


    const btnAnticipo = document.getElementById("ansi");
    btnAnticipo.addEventListener("click", function(){
        const a = true;
        anticipo(a);
    })
    const btnAnticipo2 = document.getElementById("anno");
    btnAnticipo2.addEventListener("click", function(){
        const b = false;
        anticipo(b);
    })
    const btnFactura = document.getElementById("fasi");
    btnFactura.addEventListener("click", function(){
        const c = true;
        factura(c);
    })
    const btnFactura2 = document.getElementById("fano");
    btnFactura2.addEventListener("click", function(){
        const d = false;
        factura(d);
    })


    function anticipo(anticipo)
    {
        const inputAnticipo = document.querySelector(".campo_anticipo");
        if(anticipo == true){
            inputAnticipo.classList.add("anticipo_activo");
            inputAnticipo.classList.remove("anticipo_desactivo");
            inputAnticipo.innerHTML = `
                <input type="text" autocomplete="nope" required name="anticipo" placeholder="Cantidad">
            `;
        }
         if(anticipo == false){
            inputAnticipo.classList.add("anticipo_desactivo");
            inputAnticipo.innerHTML = '';
        }
     
    
    }
    function factura(factura)
    {
        const infactura = document.querySelector(".campo_factura");
        if(factura == true){
            infactura.classList.add("anticipo_activo");
            infactura.classList.remove("anticipo_desactivo");
            infactura.innerHTML = `
                <input type="text"  autocomplete="nope" required name="factura" placeholder="Follio Factura">
            `;
        }
         if(factura == false){
            infactura.classList.add("anticipo_desactivo");
            infactura.innerHTML = '';
        }
     
    
    }


    
})();