( function() {

    let  btnEditaPago = document.getElementById("btnEnviar");
    btnEditaPago.addEventListener("click", function(){
       editarPago();
    })


    function editarPago(){
       
        const editor = document.getElementById("rs").value;
     
        const edita = "Pago";
        const folio = document.getElementById("fol").value;

        const fecha = new Date();
        const dia = fecha.getDate();
        const mes = fecha.getMonth();
        const anio = fecha.getFullYear();
        const hoy = anio+"-"+(mes+1)+"-"+dia;

        const hora = fecha.getHours();
        const min = fecha.getMinutes();
        const horaActual = hora+":"+min;



        const datamaster = new FormData();
        datamaster.append('editor', editor);
        datamaster.append('edita', edita);
        datamaster.append('folio', folio);
        datamaster.append('fecha', hoy);
        datamaster.append('hora', horaActual);

        apidsd(datamaster);
   
    }

    async function apidsd(e){

        const url = '${location.origin}/api/edita2';
        const respuesta = await fetch(url,{
            method: 'POST',
            body: e
        });
        
        const resultado = await respuesta.json();
        console.log(resultado);

    }
    
})();