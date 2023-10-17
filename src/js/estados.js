( function() {


    const btns1 = document.getElementById("btn1status");
    const btns2 = document.getElementById("btn2status");
    const btns3 = document.getElementById("btn3status");
    const btns4 = document.getElementById("btn4status");
    const btns5 = document.getElementById("btn5status");
    const btns6 = document.getElementById("btn6status");
    const btns7 = document.getElementById("btn7status");
    const btns8 = document.getElementById("btn8status");
    const btns9 = document.getElementById("btn9status");
    const btns10 = document.getElementById("btn10status");


    const s1 = "1";
    const s2 = "2";
    const s3 = "3";
    const s4 = "4";
    const s5 = "5";
    const s6 = "6";
    const s7 = "7";
    const s8 = "8";
    const s9 = "9";
    const s10 = "10";


    if(btns1){
        btns1.ondblclick = function(){
       tatus(btns1, s1);
    }
    }
    if(btns2){
    btns2.ondblclick = function(){
        tatus(btns2, s2);
        }
    }
     if(btns3){
    btns3.ondblclick = function(){
        tatus(btns3, s3);
        }
    }
    if(btns4){
    btns4.ondblclick = function(){
        tatus(btns4, s4);
        }
    }
    if(btns5){
        btns5.ondblclick = function(){
        tatus(btns5, s5);
        }
    }
    if(btns6){
    btns6.ondblclick = function(){
        tatus(btns6, s6);
        }
    }
    if(btns7){
    btns7.ondblclick = function(){
        tatus(btns7, s7);
        }
    }
    if(btns8){
    btns8.ondblclick = function(){
        tatus(btns8, s8);
        }
    }
    if(btns9){
    btns9.ondblclick = function(){
        tatus(btns9, s9);
        }
    }
    if(btns10){
    btns10.ondblclick = function(){
        tatus(btns10, s10);
        }
    }
    

    function tatus(e, c){
        //alert("ola alerta"+e);
        var status = e.value = "Completado";
        console.log(e.value);
        ola(status,c);
        e.classList.add("Completado");
        e.textContent = "Completado";
        e.ondblclick = function(){
            tutos(e, c);
        }

    
    }

    function tutos(e, c){
            var status = e.value = "Pendiente";
            console.log(e.value);
            ola(status, c);
            e.classList.add("Pendiente");
            e.classList.remove("Completado");
            e.textContent = "Pendiente";
            e.ondblclick = function(){
                tatus(e, c);
            }
    }
    function ola(e, c){
        //alert("estado: "+e+"contenido: "+c );
    
        //const nuevoEstado = estado === "1" ? "0" : "1";
        
        const folio = document.getElementById("ordenFolio").value;
        
   
        if(c == 1){
            //alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

            const datos1 = new FormData();
            datos1.append('folio', folio);
            datos1.append('servicio', c);
            datos1.append('estado', e);

            fetchEstado(datos1);

        }
        if(c == 2){
            //alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

            const datos2 = new FormData();
            datos2.append('folio', folio);
            datos2.append('servicio', c);
            datos2.append('estado', e);

            fetchEstado(datos2);
            
        }
        if(c == 3){
            //alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

            const datos3 = new FormData();
            datos3.append('folio', folio);
            datos3.append('servicio', c);
            datos3.append('estado', e);

            fetchEstado(datos3);

        }
        if(c == 4){
            //alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

            const datos4 = new FormData();
            datos4.append('folio', folio);
            datos4.append('servicio', c);
            datos4.append('estado', e);

            fetchEstado(datos4);

        }
        if(c == 5){
            //alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

            const datos5 = new FormData();
            datos5.append('folio', folio);
            datos5.append('servicio', c);
            datos5.append('estado', e);

            fetchEstado(datos5);

        }
        if(c == 6){
            //alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

            const datos6 = new FormData();
            datos6.append('folio', folio);
            datos6.append('servicio', c);
            datos6.append('estado', e);

            fetchEstado(datos6);
        }
        if(c == 7){
            //alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

            const datos7 = new FormData();
            datos7.append('folio', folio);
            datos7.append('servicio', c);
            datos7.append('estado', e);

            fetchEstado(datos7);

        }
        if(c == 8){
           // alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

           const datos8 = new FormData();
            datos8.append('folio', folio);
            datos8.append('servicio', c);
            datos8.append('estado', e);

            fetchEstado(datos8);

        }
        if(c == 9){
            //alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

            const datos9 = new FormData();
            datos9.append('folio', folio);
            datos9.append('servicio', c);
            datos9.append('estado', e);

            fetchEstado(datos9);

        }
        if(c == 10){
            //alert("Servicio: "+ c +"Folio: "+folio+"estado: "+e );

            const datos10 = new FormData();
            datos10.append('folio', folio);
            datos10.append('servicio', c);
            datos10.append('estado', e);

            fetchEstado(datos10);

        }
        



    }

    async function fetchEstado(e){

        const url = '${location.origin}/api/estados';
        const respuesta = await fetch(url,{
            method: 'POST',
            body: e
        });
        
        const resultado = await respuesta.json();
        
        console.log(resultado);
    }

    
})();