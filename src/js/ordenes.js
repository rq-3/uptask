( function() {
  const container = document.querySelector('.contenido_ordenes');
  const formularioServicio = document.querySelector('.caja_boton_servicios');
           const s1 = document.createElement('DIV');
           const s2 = document.createElement('DIV');
           const s3 = document.createElement('DIV');
           const s4 = document.createElement('DIV');
           const s5 = document.createElement('DIV');
           const s6 = document.createElement('DIV');
           const s7 = document.createElement('DIV');
           const s8 = document.createElement('DIV');
           const s9 = document.createElement('DIV');
           const s10 = document.createElement('DIV');
           const btn = document.createElement('DIV');
    const nuevoServicioBtn = document.querySelector('#agregar-servicio');
    const indice = new Array();


    nuevoServicioBtn.addEventListener('click', function(){
        obtenerServicios();
       
    });


    function obtenerServicios(){

      const servicioSeleccion = document.querySelector('#servicios').value;
      
      if(servicioSeleccion == 1){
        s1.innerHTML = `
        <div class="servicio_caja" id="cajaServicios">

        <div class="caja_amplia">

            <div class="formulario_datos">
        
                    <p class="heading s1">Programa Interno</p>
               
                <div class="formulario_datos-grid">
                <div class="salto">
                <div class="labels">
                    <label class="heading_pipc" for="curso">Descripcion</label>
                    
                    <div class="salto_radios">
                         <input type="radio" required value="Nuevo" id="new" name="descrip">
                            <label for="new">Nuevo</label>
                         <input type="radio" required  value="Actualizar" id="actualizar" name="descrip">
                            <label for="actualizar">Actualizar</label>
                    </div>
                    
            
                </div>

                <div class="labels">
                    <label class="heading_pipc" for="curso">Carta de Responsabilidad</label>
                    <div class="salto_radios"> 
                        <input type="radio" value="Agm" id="agm" name="carta">
                        <label for="agm">Agm</label>
                        <input type="radio" value="Ap" id="ap" name="carta">
                        <label for="ap">Ap</label>
                        <input type="radio" value="Ilp" id="ilp" name="carta">
                        <label for="ilp">Ilp</label>
                    </div>
                    
                    
                </div>
            </div>

            <div class="salto2">
                <div class="labels">
                        <label class="caja_p" for="elaborapro">Elabora</label>
                        <input type="text" name="elaborapro" id="elaborapro">
                    </div>

                <div class="labels separacionpro">
                    <label class="fecha_p" for="fechapro1">Fecha de Inicio</label>
                    <input  class="fecha_p" type="date" id="fechapro1" name="fechapro1">
                </div>
                    

                <div class="labels">
                    <label  class="fecha_p" for="fechapro2">Fecha de Termino</label>
                    <input class="fecha_p" type="date" id="fechapro2" name="fechapro2">
                </div>

            </div>

                <div class="observacion">
                    <label for="obspro"> Observaciones</label>
                    <textarea name="obs" id="obspro" cols="35" rows="5" class="pipc_text"></textarea>
                </div>
          
                </div>

                

            </div>

        </div>
        <div class="botones_servicios">
        <button type="button" class="boton_elimina" id="btnBorrar"></button>
    </div>

    <input type="hidden" name="servicio" id="servicio1" value="1">
    </div>`;
 
    
        container.appendChild(s1);


        const btnBorrar = document.getElementById("btnBorrar");
        
        btnBorrar.addEventListener("click", function(){
            container.removeChild(s1);
        })

       
        
      }else if(servicioSeleccion == 2){
        s2.innerHTML = `
        <div class="servicio_caja" id="cajaServicios">

        <div class="capacitacion">

            <div class="formulario_datos">
        
                    <p class="heading s2">Capacitación</p>
               
                <div class="formulario_datos-grid">

         

                    <div class="labels">

                        <div class="checkboxses">

                            <div class="checked">
                                <input type="checkbox"  class="cap" name="curso[]" id="pa" value="P.A">
                                <label for="pa">P.A</label>
                                <input type="checkbox" class="cap" name="curso[]" id="inc" value="INC">
                                <label for="inc">INC</label>
                                <input type="checkbox" class="cap" name="curso[]" id="eva" value="EVA">
                                <label for="eva">EVA</label>
                            </div>
                            <div class="checked">
                                <input type="checkbox" class="cap" name="curso[]" id="int" value="INT">
                                <label for="int">INT</label>
                                <input type="checkbox" class="cap" name="curso[]" id="dea" value="DEA">
                                <label for="dea">DEA</label>
                                <input type="checkbox" class="cap" name="curso[]" id="ped" value="PED">
                                <label for="ped">PED</label>
                            </div>
                           
                        </div>
                        
                    </div>

                    <div class="labels">
                        <label class="text_center" >Lugar</label>

                        <div class="lugar">
                            <input type="radio" value="Oficina" name="lugar" id="lugar1">
                            <label class="no_margin" for="lugar1">Oficina</label>
                            <input type="radio" value="Empresa" name="lugar" id="lugar2">
                            <label class="no_margin" for="lugar2">Empresa</label>
                        </div>
                        
                    </div>

                    <div class="labels">
                        <label for="elaboracap">Instructor</label>
                        <input type="text" id="elaboracap" name="elaboracap">
                    </div>
                </div>

                <div class="observacion_capacitacion">
                   <div class="labels_textarea">
                        <label for="diascap"> Dias programados</label>
                        <textarea name="capdias" id="diascap" cols="30" rows="3"></textarea>
                   </div>
                   <div class="labels_textarea">
                        <label for="obscap"> Observaciones</label>
                        <textarea name="obscap" id="obscap" cols="40" rows="3"></textarea>
                   </div>
                </div>

            </div>

        </div>

        <div class="botones_servicios">
            <button class="boton_elimina" id="btnBorrar2"></button>
        </div>
        <input type="hidden" name="servicio" id="servicio2" value="2">
    </div>`;
        
        
        container.appendChild(s2);

        
        const btnBorrar = document.getElementById("btnBorrar2");
        
        btnBorrar.addEventListener("click", function(){
           
            container.removeChild(s2);
    
        })


      }else if(servicioSeleccion == 3){
        s3.innerHTML = `
        <div class="servicio_caja" id="cajaServicios">

        <div class="caja_amplia">

            <div class="formulario_datos">
        
                    <p class="heading s3">Simulacro</p>
               
                <div class="formulario_datos-grid">
                    <div class="labels">
                         <label for="fechai"> Fecha del simulacro</label>
                         <input type="date" id="fechasim" name="fechai">
                    </div>

                    <div class="labels">
                        <label for="evaluasim">Evalúa</label>
                        <input type="text" id="evaluasim" name="evaluasim">
                    </div>
                </div>

                <div class="observacion">
                    <label for="obssim"> Observaciones</label>
                    <textarea id="obssim" name="ob_simulacro"></textarea>
                </div>

            </div>

        </div>

        <div class="botones_servicios">
            <button class="boton_elimina" id="btnBorrar3"></button>
        </div>
        <input type="hidden" name="servicio" id="servicio3" value="3">
    </div>`;
        
        container.appendChild(s3);

        const btnBorrar = document.getElementById("btnBorrar3");
        
        btnBorrar.addEventListener("click", function(){
           
            container.removeChild(s3);
    
        })
        
      }else if(servicioSeleccion == 4){
        s4.innerHTML = `
        <div class="servicio_caja" id="cajaServicios">

        <div class="caja_amplia">

            <div class="formulario_datos">
        
                    <p class="heading s4">Plan de Emergencia</p>
               
                <div class="formulario_datos-grid">
                    <div class="labels">
                         <label for="ela">Elabora</label>
                         <input type="text" id="elaboraplan" name="elaboraplan">
                    </div>
                    <div class="labels">
                        <label for="fechat"> Fecha Termino</label>
                        <input type="date" id="fechaplan1" name="fechat">
                    </div>
                    <div class="labels">
                         <label for="fechac"> Fecha de Entrega</label>
                         <input type="date" id="fechaplan2" name="fechac">
                    </div>
                </div>

                <div class="observacion">
                    <label for="obsplan"> Observaciones</label>
                    <textarea id="obsplan" name="ob_plan"></textarea>
                </div>

            </div>

        </div>

        <div class="botones_servicios">
            <button class="boton_elimina" id="btnBorrar4"></button>
        </div>

        <input type="hidden" name="servicio" id="servicio4" value="4">
    </div>`;

        container.appendChild(s4);

        const btnBorrar = document.getElementById("btnBorrar4");
        
        btnBorrar.addEventListener("click", function(){
           
            container.removeChild(s4);
    
        })
        

      }else if(servicioSeleccion == 5){

        s5.innerHTML = `
        <div class="servicio_caja" id="cajaServicios">

        <div class="caja_amplia">

            <div class="formulario_datos">
        
            <p class="heading s5">Dictamenes</p>
               
            <div class="formulario_datos-grid">

                <div class="dictamen_checkboxes">
                    <div class="label_dic">
                        <label for="dictamen"> Electrico</label>
                        <input type="checkbox" id="dictamen" value="Electrico" name="dictamen">
                    </div>

                    <div class="label_dic">
                        <label for="dictamen2"> Estructural </label>
                        <input type="checkbox" id="dictamen2" value="Estructural" name="dictamen">
                    </div>
                    <div class="label_dic">
                        <label for="dictamen3"> Gas</label>
                        <input type="checkbox" id="dictamen3" value="Gas" name="dictamen">
                    </div>
                </div>
                
            </div>

            <div class="observacion">
                <label for="obsdic"> Observaciones</label>
                <textarea id="obsdic" name="ob_dic"></textarea>
            </div>

            </div>

        </div>

        <div class="botones_servicios">
            <button class="boton_elimina" id="btnBorrar5"></button>
        </div>

        <input type="hidden" name="servicio" id="servicio5" value="5">
    </div>
     
     
        `;

        
        container.appendChild(s5);

        const btnBorrar = document.getElementById("btnBorrar5");
        
        btnBorrar.addEventListener("click", function(){
           
            container.removeChild(s5);
    
        })
        

      }else if(servicioSeleccion == 6){

        s6.innerHTML = `
    
    <div class="servicio_caja" id="cajaServicios">

        <div class="caja_amplia">

            <div class="formulario_datos">
        
                    <p class="heading s6">Gestion Visto Bueno</p>
               
                <div class="formulario_datos-grid">
                    <div class="labels">
                         <label for="fechagvb"> Fecha de ingreso</label>
                         <input type="date" id="fechagvb" name="fechai">
                    </div>

                    <div class="labels">
                        <label for="fechagvb2"> Fecha de entrega SG</label>
                        <input type="date" id="fechagvb2" name="fechai">
                    </div>
                    <div class="labels">
                         <label for="fechagvb3"> Fecha de entrega Cliente</label>
                         <input type="date" id="fechagvb3" name="fechai">
                    </div>
                </div>

                <div class="observacion">
                    <label for="obsgvb"> Observaciones</label>
                    <textarea id="obsgvb" name="ob_visto"></textarea>
                </div>

            </div>

        </div>

        <div class="botones_servicios">
            <button class="boton_elimina" id="btnBorrar6"></button>
        </div>

        <input type="hidden" name="servicio" id="servicio6" value="6">
    </div>`;

        container.appendChild(s6);

        const btnBorrar = document.getElementById("btnBorrar6");
        
        btnBorrar.addEventListener("click", function(){
           
            container.removeChild(s6);
    
        })
        

      }else if(servicioSeleccion == 7){

        s7.innerHTML = `
        
    <div class="servicio_caja" id="cajaServicios">

        <div class="caja_amplia">

            <div class="formulario_datos">
        
                    <p class="heading s7">Gestion de Licencia</p>
               
                <div class="formulario_datos-grid">
                    <div class="labels">
                         <label for="fechagl"> Fecha de ingreso</label>
                         <input type="date" id="fechagl" name="datos1">
                    </div>

                    <div class="labels">
                        <label for="fechagl2"> Fecha de entrega SG</label>
                        <input type="date" id="fechagl2" name="datos2">
                    </div>
                    <div class="labels">
                         <label for="fechagl3"> Fecha de entrega Cliente</label>
                         <input type="date" id="fechagl3" name="datos3">
                    </div>
                </div>

                <div class="observacion">
                    <label for="obsgl"> Observaciones</label>
                    <textarea id="obsgl" name="datos6"></textarea>
                </div>

            </div>

        </div>

        <div class="botones_servicios">
            <button class="boton_elimina" id="btnBorrar7"></button>
        </div>

        <input type="hidden" name="servicio" id="servicio7" value="7">
    </div>`;

        container.appendChild(s7);
        indice[0] = 'Servicio 7';

        const btnBorrar = document.getElementById("btnBorrar7");
        
        btnBorrar.addEventListener("click", function(){
           
            container.removeChild(s7);

        })
        

      }else if(servicioSeleccion == 8){
        s8.innerHTML = `
        
        <div class="servicio_caja" id="cajaServicios">

        <div class="caja_amplia">

            <div class="formulario_datos">
        
                    <p class="heading s8">Factibilidad de Giro</p>
               
                <div class="formulario_datos-grid">
                    <div class="labels">
                         <label for="fechafg"> Fecha de ingreso</label>
                         <input type="date" id="fechafg" name="fechafg">
                    </div>

                    <div class="labels">
                        <label for="fechafg2"> Fecha de entrega SG</label>
                        <input type="date" id="fechafg2" name="fechafg2">
                    </div>
                    <div class="labels">
                         <label for="fechafg3"> Fecha de entrega Cliente</label>
                         <input type="date" id="fechafg3" name="fechafg3">
                    </div>
                </div>

                <div class="observacion">
                    <label for="obsfg"> Observaciones</label>
                    <textarea id="obsfg" name="obsfg"></textarea>
                </div>

            </div>

        </div>

        <div class="botones_servicios">
            <button class="boton_elimina" id="btnBorrar8"></button>
        </div>

        <input type="hidden" name="servicio8" id="servicio8" value="8">

    </div>`;

        container.appendChild(s8);
        indice[0] = 'Servicio 8';
        //console.log("servicio: "+idx);
     

        const btnBorrar = document.getElementById("btnBorrar8");
        
        btnBorrar.addEventListener("click", function(){
           
            container.removeChild(s8);
    
        })
  

      }else if(servicioSeleccion == 9){
        s9.innerHTML = `
        
        <div class="servicio_caja" id="cajaServicios">

        <div class="caja_amplia">

            <div class="formulario_datos">
        
                    <p class="heading s9">Opinión Técnica</p>
               
                <div class="formulario_datos-grid">
                    <div class="labels">
                         <label for="fechaopt"> Fecha de ingreso</label>
                         <input type="date" id="fechaopt" name="fechaopt">
                    </div>

                    <div class="labels">
                        <label for="fechaopt2"> Fecha de Termino</label>
                        <input type="date" id="fechaopt2" name="fechaopt2">
                    </div>
                    <div class="labels">
                         <label class="text_center"> Estado</label>
                         <div class="labelRadio">
                            <input type="radio" id="statopt" name="statopt" value="Positivo"><label class="separacionop" for="statopt">Positivo</label>
                            <input type="radio" id="statopt2" name="statopt" value="Negativo"><label for="statopt2">Negativo</label>
                         </div>
                         
                    </div>
                </div>

                <div class="observacion">
                    <label for="obsopt"> Observaciones</label>
                    <textarea id="obsopt" name="obsopt"></textarea>
                </div>

            </div>

        </div>

        <div class="botones_servicios">
            <button class="boton_elimina" id="btnBorrar9"></button>
        </div>

        <input type="hidden" name="servicio9" id="servicio9" value="9">

    </div>`;

      container.appendChild(s9);
        indice[0] = 'Servicio 9';
        //console.log("servicio: "+idx);
     

        const btnBorrar = document.getElementById("btnBorrar9");
        
        btnBorrar.addEventListener("click", function(){
           
            container.removeChild(s9);
    
        })

      }else if(servicioSeleccion == 10){
        s10.innerHTML = `
        
        <div class="servicio_caja" id="cajaServicios">

        <div class="caja_amplia">

            <div class="formulario_datos">
        
                    <p class="heading s10">Trámite</p>
               
                <div class="formulario_datos-grid">

                    <div class="labels">
                         <label for="nombreftr">Nombre</label>
                         <input type="text" id="nombreftr" name="nombreftr">
                    </div>

                    <div class="labels">
                         <label for="fechaftr"> Fecha de ingreso</label>
                         <input type="date" id="fechaftr" name="fechaftr">
                    </div>

                    <div class="labels">
                        <label for="fechaftr2"> Fecha de entrega SG</label>
                        <input type="date" id="fechaftr2" name="fechaftr2">
                    </div>
                    <div class="labels">
                         <label for="fechaftr3"> Fecha de entrega Cliente</label>
                         <input type="date" id="fechaftr3" name="fechaftr3">
                    </div>
                </div>

                <div class="observacion">
                    <label for="obstr"> Observaciones</label>
                    <textarea id="obstr" name="obstr"></textarea>
                </div>

            </div>

        </div>

        <div class="botones_servicios">
            <button class="boton_elimina" id="btnBorrar10"></button>
        </div>

        <input type="hidden" name="servicio10" id="servicio10" value="10">

    </div>`;

        container.appendChild(s10);

        const btnBorrar = document.getElementById("btnBorrar10");
        
        btnBorrar.addEventListener("click", function(){
           
            container.removeChild(s10);
    
        })
  

      }



      if(servicioSeleccion){

        btn.innerHTML = `
        <div class="contenedor-sm">

        <button type="submit" id="btnEnviar" class="btn_formularios">Registrar</button>

        </div>
        
        `;




        formularioServicio.appendChild(btn);


        
        let btnDato = document.getElementById("btnEnviar");
        btnDato.addEventListener("click", function(){
           cuentaFormularios();
            //datosFormularios();
           //apidsd();
        })
        
      }
      
    }

    function cuentaFormularios(){
       
        let botones=document.querySelectorAll(".servicio_caja");
        let valor=0;
        let contador=0;
       // alert("valor: "+ botones.length);   
        datosFormularios(botones.length);
        
        for(let i=0; i<botones.length;i++){
            botones[i].addEventListener("click", ()=>{
                if(botones[i].classList.contains("btn_agregar")){
                    contador--;
                }else if(botones[i].classList.contains("boton_elimina")){
                   contador++;
                }else{
                    contador=0;
                }
                valor.innerText=contador;
            })
        }
    }

   function datosFormularios(e){

       // const datamaster = new FormData();
 
        //alert(" "+ e); 
        
        //alert(" "+ serv);
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
            const descrip = document.querySelector('input[name="descrip"]:checked').value;
            const carta = document.querySelector('input[name="carta"]:checked').value;
            const elaborapro = document.getElementById("elaborapro").value;
            const fechapro1 = document.getElementById("fechapro1").value;
            const fechapro2 = document.getElementById("fechapro2").value;
            const obspro = document.getElementById("obspro").value;

            const datamaster1 = new FormData();
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
           // const curso = document.getElementById("chkcurso").value;
            const lugar = document.querySelector('input[name="lugar"]:checked').value;
            const curso = document.querySelectorAll('input[name="curso[]"]:checked');
            var a = [];
            for(var i=0; i<curso.length; i++){
                a[i] = curso[i].value;
            }
            const elaboracap = document.getElementById("elaboracap").value;
            const diascap = document.getElementById("diascap").value;
            const obscap = document.getElementById("obscap").value;

            const datamaster2 = new FormData();
            datamaster2.append('datos7', lugar);
            datamaster2.append('datos8', a);
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
            const fechasim = document.getElementById("fechasim").value;
            const elaborasim = document.getElementById("evaluasim").value;
            const obssim = document.getElementById("obssim").value;

            const datamaster3 = new FormData();
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
            const elaboraplan = document.getElementById("elaboraplan").value;
            const fechaplan1 = document.getElementById("fechaplan1").value;
            const fechaplan2 = document.getElementById("fechaplan2").value;
            const obsplan = document.getElementById("obsplan").value;
            
            const datamaster4 = new FormData();
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
            const dictamen = document.querySelectorAll('input[name="dictamen"]:checked');
            var b = [];
            for(var i=0; i<dictamen.length; i++){
                b[i] = dictamen[i].value;
            }
            const obsdic = document.getElementById("obsdic").value;


            const datamaster5 = new FormData();
            datamaster5.append('datos4', b);
            datamaster5.append('datos6', obsdic);
            datamaster5.append('servicio', '5');
            datamaster5.append('estado', '100');
            datamaster5.append('folio', folio);
            apidsd(datamaster5);

            
        }
        if(serv6){
            console.log("Gestion de Visto Bueno");
            const fechagvb = document.getElementById("fechagvb").value;
            const fechagvb2 = document.getElementById("fechagvb2").value;
            const fechagvb3 = document.getElementById("fechagvb3").value;
            const obsgvb = document.getElementById("obsgvb").value;

            const datamaster6 = new FormData();
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
            const fechagl = document.getElementById("fechagl").value;
            const fechagl2 = document.getElementById("fechagl2").value;
            const fechagl3 = document.getElementById("fechagl3").value;
            const obsgl = document.getElementById("obsgl").value;

            const datamaster7 = new FormData();
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
            var fechafg = document.getElementById("fechafg").value;
            var fechafg2 = document.getElementById("fechafg2").value;
            var fechafg3 = document.getElementById("fechafg3").value;
            var obsfg = document.getElementById("obsfg").value;

            const datamaster8 = new FormData();
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
            var fechaopt = document.getElementById("fechaopt").value;
            var fechaopt2 = document.getElementById("fechaopt2").value;
            var statopt = document.querySelector('input[name="statopt"]:checked').value;
            var obsopt = document.getElementById("obsopt").value;

            const datamaster9 = new FormData();
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
            var nombreftr = document.getElementById("nombreftr").value;
            var fechaftr = document.getElementById("fechaftr").value;
            var fechaftr2 = document.getElementById("fechaftr2").value;
            var fechaftr3 = document.getElementById("fechaftr3").value;
            var obstr = document.getElementById("obstr").value;

            const datamaster10 = new FormData();
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
      
    }

    async function apidsd(e){

        const url = '${location.origin}/api/service';
        const respuesta = await fetch(url,{
            method: 'POST',
            body: e
        });
        
        const resultado = await respuesta.json();
        console.log(resultado);

    }

  

})();

