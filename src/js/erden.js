( function() {

    let btnDato = document.getElementById("btnEnviar");
        btnDato.addEventListener("click", function(){
           editar();
        })


    function editar(){

        const serv1 = document.getElementById("servicio1");
        const serv2 = document.getElementById("servicio2");
        const serv3 = document.getElementById("servicio3");
        const serv4 = document.getElementById("servicio4");
        const serv5 = document.getElementById("servicio5");
        const serv6 = document.getElementById("servicio6");
        const serv7 = document.getElementById("servicio7");
        const serv8 = document.getElementById("servicio8");
        const serv9 = document.getElementById("servicio9");
        const serv10 = document.getElementById("servicio10");
        const folio = document.getElementById("folio").value;

        if(serv1){
            console.log("PIPC");
            const id = document.getElementById('id1').value;
            const descrip = document.getElementById('descrip').value;
            const carta = document.getElementById('carta').value;
            const elaborapro = document.getElementById("elaborapro").value;
            const fechapro1 = document.getElementById("fechapro1").value;
            const fechapro2 = document.getElementById("fechapro2").value;
            const obspro = document.getElementById("obspro").value;

            const datamaster1 = new FormData();
            datamaster1.append('id', id);
            datamaster1.append('datos1', fechapro1);
            datamaster1.append('datos2', fechapro2);
            datamaster1.append('datos4', elaborapro);
            datamaster1.append('datos5', descrip);
            datamaster1.append('datos6', obspro);
            datamaster1.append('datos7', carta);
            datamaster1.append('servicio', '1');
            datamaster1.append('estado', '100');
            datamaster1.append('folio', folio);
            apidsd(datamaster1);

        }
        if(serv2){
            console.log("Capacitacion");
            const id = document.getElementById('id2').value;
            const lugar = document.getElementById('lugar').value;
            const curso = document.getElementById('curso').value;
            const elaboracap = document.getElementById("elaboracap").value;
            const diascap = document.getElementById("diascap").value;
            const obscap = document.getElementById("obscap").value;

            const datamaster2 = new FormData();
            datamaster2.append('id', id);
            datamaster2.append('datos7', lugar);
            datamaster2.append('datos8', curso);
            datamaster2.append('datos4', diascap);
            datamaster2.append('datos5', elaboracap);
            datamaster2.append('datos6', obscap);
            datamaster2.append('servicio', '2');
            datamaster2.append('estado', '100');
            datamaster2.append('folio', folio);
            apidsd(datamaster2);

        }
        if(serv3){
            console.log("Simulacro");
            const id = document.getElementById('id3').value;
            const fechasim = document.getElementById("fechasim").value;
            const elaborasim = document.getElementById("evaluasim").value;
            const obssim = document.getElementById("obssim").value;

            const datamaster3 = new FormData();
            datamaster3.append('id', id);
            datamaster3.append('datos1', fechasim);
            datamaster3.append('datos5', elaborasim);
            datamaster3.append('datos6', obssim);
            datamaster3.append('servicio', '3');
            datamaster3.append('estado', '100');
            datamaster3.append('folio', folio);
            apidsd(datamaster3);

        }
        if(serv4){
            console.log("Plan de Emergecia");
            const id = document.getElementById('id4').value;
            const elaboraplan = document.getElementById("elaboraplan").value;
            const fechaplan1 = document.getElementById("fechaplan1").value;
            const fechaplan2 = document.getElementById("fechaplan2").value;
            const obsplan = document.getElementById("obsplan").value;
            
            const datamaster4 = new FormData();
            datamaster4.append('id', id);
            datamaster4.append('datos1', fechaplan1);
            datamaster4.append('datos2', fechaplan2);
            datamaster4.append('datos5', elaboraplan);
            datamaster4.append('datos6', obsplan);
            datamaster4.append('servicio', '4');
            datamaster4.append('estado', '100');
            datamaster4.append('folio', folio);
            apidsd(datamaster4);

        }
        if(serv5){
            console.log("Dictamenes");
            const id = document.getElementById('id5').value;
            const dictamen = document.getElementById("dictamen").value;
            const obsdic = document.getElementById("obsdic").value;


            const datamaster5 = new FormData();
            datamaster5.append('id', id);
            datamaster5.append('datos4', dictamen);
            datamaster5.append('datos6', obsdic);
            datamaster5.append('servicio', '5');
            datamaster5.append('estado', '100');
            datamaster5.append('folio', folio);
            apidsd(datamaster5);

            
        }
        if(serv6){
            console.log("Gestion de Visto Bueno");
            const id = document.getElementById('id6').value;
            const fechagvb = document.getElementById("fechagvb").value;
            const fechagvb2 = document.getElementById("fechagvb2").value;
            const fechagvb3 = document.getElementById("fechagvb3").value;
            const obsgvb = document.getElementById("obsgvb").value;

            const datamaster6 = new FormData();
            datamaster6.append('id', id);
            datamaster6.append('datos1', fechagvb);
            datamaster6.append('datos2', fechagvb2);
            datamaster6.append('datos3', fechagvb3);
            datamaster6.append('datos6', obsgvb);
            datamaster6.append('servicio', '6');
            datamaster6.append('estado', '100');
            datamaster6.append('folio', folio);
            apidsd(datamaster6);
            
            
        }
        if(serv7){
            console.log("Gestion de Licencia");
            const id = document.getElementById('id7').value;
            const fechagl = document.getElementById("fechagl").value;
            const fechagl2 = document.getElementById("fechagl2").value;
            const fechagl3 = document.getElementById("fechagl3").value;
            const obsgl = document.getElementById("obsgl").value;

            const datamaster7 = new FormData();
            datamaster7.append('id', id);
            datamaster7.append('datos1', fechagl);
            datamaster7.append('datos2', fechagl2);
            datamaster7.append('datos3', fechagl3);
            datamaster7.append('datos6', obsgl);
            datamaster7.append('servicio', '7');
            datamaster7.append('estado', '100');
            datamaster7.append('folio', folio);
            apidsd(datamaster7);

        }
        if(serv8){

            console.log("Factibilidad de Giro");
            const id = document.getElementById('id8').value;
            var fechafg = document.getElementById("fechafg").value;
            var fechafg2 = document.getElementById("fechafg2").value;
            var fechafg3 = document.getElementById("fechafg3").value;
            var obsfg = document.getElementById("obsfg").value;

            const datamaster8 = new FormData();
            datamaster8.append('id', id);
            datamaster8.append('datos1', fechafg);
            datamaster8.append('datos2', fechafg2);
            datamaster8.append('datos3', fechafg3);
            datamaster8.append('datos6', obsfg);
            datamaster8.append('servicio', '8');
            datamaster8.append('estado', '100');
            datamaster8.append('folio', folio);
            apidsd(datamaster8);
            
        }
        if(serv9){
            console.log("Opinion Tecnica");
            const id = document.getElementById('id9').value;
            var fechaopt = document.getElementById("fechaopt").value;
            var fechaopt2 = document.getElementById("fechaopt2").value;
            var statopt = document.getElementById('statopt').value;
            var obsopt = document.getElementById("obsopt").value;

            const datamaster9 = new FormData();
            datamaster9.append('id', id);
            datamaster9.append('datos1', fechaopt);
            datamaster9.append('datos2', fechaopt2);
            datamaster9.append('datos4', statopt);
            datamaster9.append('datos6', obsopt);
            datamaster9.append('servicio', '9');
            datamaster9.append('estado', '100');
            datamaster9.append('folio', folio);
            apidsd(datamaster9);
       
        }
        if(serv10){

            console.log("Tramite");
            const id = document.getElementById('id10').value;
            var nombreftr = document.getElementById("nombreftr").value;
            var fechaftr = document.getElementById("fechaftr").value;
            var fechaftr2 = document.getElementById("fechaftr2").value;
            var fechaftr3 = document.getElementById("fechaftr3").value;
            var obstr = document.getElementById("obstr").value;

            const datamaster10 = new FormData();
            datamaster10.append('id', id);
            datamaster10.append('datos4', nombreftr);
            datamaster10.append('datos1', fechaftr);
            datamaster10.append('datos2', fechaftr2);
            datamaster10.append('datos3', fechaftr3);
            datamaster10.append('datos6', obstr);
            datamaster10.append('servicio', '10');
            datamaster10.append('estado', '100');
            datamaster10.append('folio', folio);
            apidsd(datamaster10);
            
        }

        async function apidsd(e){

            const url = '${location.origin}/api/edita1';
            const respuesta = await fetch(url,{
                method: 'POST',
                body: e
            });
            
            const resultado = await respuesta.json();
            console.log(resultado);
    
        }
    }

    
})();