!function(){const e=document.querySelector(".contenido_ordenes"),n=document.querySelector(".caja_boton_servicios"),a=document.createElement("DIV"),i=document.createElement("DIV"),l=document.createElement("DIV"),t=document.createElement("DIV"),d=document.createElement("DIV"),o=document.createElement("DIV"),s=document.createElement("DIV"),c=document.createElement("DIV"),r=document.createElement("DIV"),v=document.createElement("DIV"),p=document.createElement("DIV"),m=document.querySelector("#agregar-servicio"),b=new Array;async function u(e){const n=await fetch("${location.origin}/api/service",{method:"POST",body:e}),a=await n.json();console.log(a)}m.addEventListener("click",(function(){!function(){const m=document.querySelector("#servicios").value;if(1==m){a.innerHTML='\n        <div class="servicio_caja" id="cajaServicios">\n\n        <div class="caja_amplia">\n\n            <div class="formulario_datos">\n        \n                    <p class="heading s1">Programa Interno</p>\n               \n                <div class="formulario_datos-grid">\n                <div class="salto">\n                <div class="labels">\n                    <label class="heading_pipc" for="curso">Descripcion</label>\n                    \n                    <div class="salto_radios">\n                         <input type="radio" required value="Nuevo" id="new" name="descrip">\n                            <label for="new">Nuevo</label>\n                         <input type="radio" required  value="Actualizar" id="actualizar" name="descrip">\n                            <label for="actualizar">Actualizar</label>\n                    </div>\n                    \n            \n                </div>\n\n                <div class="labels">\n                    <label class="heading_pipc" for="curso">Carta de Responsabilidad</label>\n                    <div class="salto_radios"> \n                        <input type="radio" value="Agm" id="agm" name="carta">\n                        <label for="agm">Agm</label>\n                        <input type="radio" value="Ap" id="ap" name="carta">\n                        <label for="ap">Ap</label>\n                        <input type="radio" value="Ilp" id="ilp" name="carta">\n                        <label for="ilp">Ilp</label>\n                    </div>\n                    \n                    \n                </div>\n            </div>\n\n            <div class="salto2">\n                <div class="labels">\n                        <label class="caja_p" for="elaborapro">Elabora</label>\n                        <input type="text" name="elaborapro" id="elaborapro">\n                    </div>\n\n                <div class="labels separacionpro">\n                    <label class="fecha_p" for="fechapro1">Fecha de Inicio</label>\n                    <input  class="fecha_p" type="date" id="fechapro1" name="fechapro1">\n                </div>\n                    \n\n                <div class="labels">\n                    <label  class="fecha_p" for="fechapro2">Fecha de Termino</label>\n                    <input class="fecha_p" type="date" id="fechapro2" name="fechapro2">\n                </div>\n\n            </div>\n\n                <div class="observacion">\n                    <label for="obspro"> Observaciones</label>\n                    <textarea name="obs" id="obspro" cols="35" rows="5" class="pipc_text"></textarea>\n                </div>\n          \n                </div>\n\n                \n\n            </div>\n\n        </div>\n        <div class="botones_servicios">\n        <button type="button" class="boton_elimina" id="btnBorrar"></button>\n    </div>\n\n    <input type="hidden" name="servicio" id="servicio1" value="1">\n    </div>',e.appendChild(a);document.getElementById("btnBorrar").addEventListener("click",(function(){e.removeChild(a)}))}else if(2==m){i.innerHTML='\n        <div class="servicio_caja" id="cajaServicios">\n\n        <div class="capacitacion">\n\n            <div class="formulario_datos">\n        \n                    <p class="heading s2">Capacitación</p>\n               \n                <div class="formulario_datos-grid">\n\n         \n\n                    <div class="labels">\n\n                        <div class="checkboxses">\n\n                            <div class="checked">\n                                <input type="checkbox"  class="cap" name="curso[]" id="pa" value="P.A">\n                                <label for="pa">P.A</label>\n                                <input type="checkbox" class="cap" name="curso[]" id="inc" value="INC">\n                                <label for="inc">INC</label>\n                                <input type="checkbox" class="cap" name="curso[]" id="eva" value="EVA">\n                                <label for="eva">EVA</label>\n                            </div>\n                            <div class="checked">\n                                <input type="checkbox" class="cap" name="curso[]" id="int" value="INT">\n                                <label for="int">INT</label>\n                                <input type="checkbox" class="cap" name="curso[]" id="dea" value="DEA">\n                                <label for="dea">DEA</label>\n                                <input type="checkbox" class="cap" name="curso[]" id="ped" value="PED">\n                                <label for="ped">PED</label>\n                            </div>\n                           \n                        </div>\n                        \n                    </div>\n\n                    <div class="labels">\n                        <label class="text_center" >Lugar</label>\n\n                        <div class="lugar">\n                            <input type="radio" value="Oficina" name="lugar" id="lugar1">\n                            <label class="no_margin" for="lugar1">Oficina</label>\n                            <input type="radio" value="Empresa" name="lugar" id="lugar2">\n                            <label class="no_margin" for="lugar2">Empresa</label>\n                        </div>\n                        \n                    </div>\n\n                    <div class="labels">\n                        <label for="elaboracap">Instructor</label>\n                        <input type="text" id="elaboracap" name="elaboracap">\n                    </div>\n                </div>\n\n                <div class="observacion_capacitacion">\n                   <div class="labels_textarea">\n                        <label for="diascap"> Dias programados</label>\n                        <textarea name="capdias" id="diascap" cols="30" rows="3"></textarea>\n                   </div>\n                   <div class="labels_textarea">\n                        <label for="obscap"> Observaciones</label>\n                        <textarea name="obscap" id="obscap" cols="40" rows="3"></textarea>\n                   </div>\n                </div>\n\n            </div>\n\n        </div>\n\n        <div class="botones_servicios">\n            <button class="boton_elimina" id="btnBorrar2"></button>\n        </div>\n        <input type="hidden" name="servicio" id="servicio2" value="2">\n    </div>',e.appendChild(i);document.getElementById("btnBorrar2").addEventListener("click",(function(){e.removeChild(i)}))}else if(3==m){l.innerHTML='\n        <div class="servicio_caja" id="cajaServicios">\n\n        <div class="caja_amplia">\n\n            <div class="formulario_datos">\n        \n                    <p class="heading s3">Simulacro</p>\n               \n                <div class="formulario_datos-grid">\n                    <div class="labels">\n                         <label for="fechai"> Fecha del simulacro</label>\n                         <input type="date" id="fechasim" name="fechai">\n                    </div>\n\n                    <div class="labels">\n                        <label for="evaluasim">Evalúa</label>\n                        <input type="text" id="evaluasim" name="evaluasim">\n                    </div>\n                </div>\n\n                <div class="observacion">\n                    <label for="obssim"> Observaciones</label>\n                    <textarea id="obssim" name="ob_simulacro"></textarea>\n                </div>\n\n            </div>\n\n        </div>\n\n        <div class="botones_servicios">\n            <button class="boton_elimina" id="btnBorrar3"></button>\n        </div>\n        <input type="hidden" name="servicio" id="servicio3" value="3">\n    </div>',e.appendChild(l);document.getElementById("btnBorrar3").addEventListener("click",(function(){e.removeChild(l)}))}else if(4==m){t.innerHTML='\n        <div class="servicio_caja" id="cajaServicios">\n\n        <div class="caja_amplia">\n\n            <div class="formulario_datos">\n        \n                    <p class="heading s4">Plan de Emergencia</p>\n               \n                <div class="formulario_datos-grid">\n                    <div class="labels">\n                         <label for="ela">Elabora</label>\n                         <input type="text" id="elaboraplan" name="elaboraplan">\n                    </div>\n                    <div class="labels">\n                        <label for="fechat"> Fecha Termino</label>\n                        <input type="date" id="fechaplan1" name="fechat">\n                    </div>\n                    <div class="labels">\n                         <label for="fechac"> Fecha de Entrega</label>\n                         <input type="date" id="fechaplan2" name="fechac">\n                    </div>\n                </div>\n\n                <div class="observacion">\n                    <label for="obsplan"> Observaciones</label>\n                    <textarea id="obsplan" name="ob_plan"></textarea>\n                </div>\n\n            </div>\n\n        </div>\n\n        <div class="botones_servicios">\n            <button class="boton_elimina" id="btnBorrar4"></button>\n        </div>\n\n        <input type="hidden" name="servicio" id="servicio4" value="4">\n    </div>',e.appendChild(t);document.getElementById("btnBorrar4").addEventListener("click",(function(){e.removeChild(t)}))}else if(5==m){d.innerHTML='\n        <div class="servicio_caja" id="cajaServicios">\n\n        <div class="caja_amplia">\n\n            <div class="formulario_datos">\n        \n            <p class="heading s5">Dictamenes</p>\n               \n            <div class="formulario_datos-grid">\n\n                <div class="dictamen_checkboxes">\n                    <div class="label_dic">\n                        <label for="dictamen"> Electrico</label>\n                        <input type="checkbox" id="dictamen" value="Electrico" name="dictamen">\n                    </div>\n\n                    <div class="label_dic">\n                        <label for="dictamen2"> Estructural </label>\n                        <input type="checkbox" id="dictamen2" value="Estructural" name="dictamen">\n                    </div>\n                    <div class="label_dic">\n                        <label for="dictamen3"> Gas</label>\n                        <input type="checkbox" id="dictamen3" value="Gas" name="dictamen">\n                    </div>\n                </div>\n                \n            </div>\n\n            <div class="observacion">\n                <label for="obsdic"> Observaciones</label>\n                <textarea id="obsdic" name="ob_dic"></textarea>\n            </div>\n\n            </div>\n\n        </div>\n\n        <div class="botones_servicios">\n            <button class="boton_elimina" id="btnBorrar5"></button>\n        </div>\n\n        <input type="hidden" name="servicio" id="servicio5" value="5">\n    </div>\n     \n     \n        ',e.appendChild(d);document.getElementById("btnBorrar5").addEventListener("click",(function(){e.removeChild(d)}))}else if(6==m){o.innerHTML='\n    \n    <div class="servicio_caja" id="cajaServicios">\n\n        <div class="caja_amplia">\n\n            <div class="formulario_datos">\n        \n                    <p class="heading s6">Gestion Visto Bueno</p>\n               \n                <div class="formulario_datos-grid">\n                    <div class="labels">\n                         <label for="fechagvb"> Fecha de ingreso</label>\n                         <input type="date" id="fechagvb" name="fechai">\n                    </div>\n\n                    <div class="labels">\n                        <label for="fechagvb2"> Fecha de entrega SG</label>\n                        <input type="date" id="fechagvb2" name="fechai">\n                    </div>\n                    <div class="labels">\n                         <label for="fechagvb3"> Fecha de entrega Cliente</label>\n                         <input type="date" id="fechagvb3" name="fechai">\n                    </div>\n                </div>\n\n                <div class="observacion">\n                    <label for="obsgvb"> Observaciones</label>\n                    <textarea id="obsgvb" name="ob_visto"></textarea>\n                </div>\n\n            </div>\n\n        </div>\n\n        <div class="botones_servicios">\n            <button class="boton_elimina" id="btnBorrar6"></button>\n        </div>\n\n        <input type="hidden" name="servicio" id="servicio6" value="6">\n    </div>',e.appendChild(o);document.getElementById("btnBorrar6").addEventListener("click",(function(){e.removeChild(o)}))}else if(7==m){s.innerHTML='\n        \n    <div class="servicio_caja" id="cajaServicios">\n\n        <div class="caja_amplia">\n\n            <div class="formulario_datos">\n        \n                    <p class="heading s7">Gestion de Licencia</p>\n               \n                <div class="formulario_datos-grid">\n                    <div class="labels">\n                         <label for="fechagl"> Fecha de ingreso</label>\n                         <input type="date" id="fechagl" name="datos1">\n                    </div>\n\n                    <div class="labels">\n                        <label for="fechagl2"> Fecha de entrega SG</label>\n                        <input type="date" id="fechagl2" name="datos2">\n                    </div>\n                    <div class="labels">\n                         <label for="fechagl3"> Fecha de entrega Cliente</label>\n                         <input type="date" id="fechagl3" name="datos3">\n                    </div>\n                </div>\n\n                <div class="observacion">\n                    <label for="obsgl"> Observaciones</label>\n                    <textarea id="obsgl" name="datos6"></textarea>\n                </div>\n\n            </div>\n\n        </div>\n\n        <div class="botones_servicios">\n            <button class="boton_elimina" id="btnBorrar7"></button>\n        </div>\n\n        <input type="hidden" name="servicio" id="servicio7" value="7">\n    </div>',e.appendChild(s),b[0]="Servicio 7";document.getElementById("btnBorrar7").addEventListener("click",(function(){e.removeChild(s)}))}else if(8==m){c.innerHTML='\n        \n        <div class="servicio_caja" id="cajaServicios">\n\n        <div class="caja_amplia">\n\n            <div class="formulario_datos">\n        \n                    <p class="heading s8">Factibilidad de Giro</p>\n               \n                <div class="formulario_datos-grid">\n                    <div class="labels">\n                         <label for="fechafg"> Fecha de ingreso</label>\n                         <input type="date" id="fechafg" name="fechafg">\n                    </div>\n\n                    <div class="labels">\n                        <label for="fechafg2"> Fecha de entrega SG</label>\n                        <input type="date" id="fechafg2" name="fechafg2">\n                    </div>\n                    <div class="labels">\n                         <label for="fechafg3"> Fecha de entrega Cliente</label>\n                         <input type="date" id="fechafg3" name="fechafg3">\n                    </div>\n                </div>\n\n                <div class="observacion">\n                    <label for="obsfg"> Observaciones</label>\n                    <textarea id="obsfg" name="obsfg"></textarea>\n                </div>\n\n            </div>\n\n        </div>\n\n        <div class="botones_servicios">\n            <button class="boton_elimina" id="btnBorrar8"></button>\n        </div>\n\n        <input type="hidden" name="servicio8" id="servicio8" value="8">\n\n    </div>',e.appendChild(c),b[0]="Servicio 8";document.getElementById("btnBorrar8").addEventListener("click",(function(){e.removeChild(c)}))}else if(9==m){r.innerHTML='\n        \n        <div class="servicio_caja" id="cajaServicios">\n\n        <div class="caja_amplia">\n\n            <div class="formulario_datos">\n        \n                    <p class="heading s9">Opinión Técnica</p>\n               \n                <div class="formulario_datos-grid">\n                    <div class="labels">\n                         <label for="fechaopt"> Fecha de ingreso</label>\n                         <input type="date" id="fechaopt" name="fechaopt">\n                    </div>\n\n                    <div class="labels">\n                        <label for="fechaopt2"> Fecha de Termino</label>\n                        <input type="date" id="fechaopt2" name="fechaopt2">\n                    </div>\n                    <div class="labels">\n                         <label class="text_center"> Estado</label>\n                         <div class="labelRadio">\n                            <input type="radio" id="statopt" name="statopt" value="Positivo"><label class="separacionop" for="statopt">Positivo</label>\n                            <input type="radio" id="statopt2" name="statopt" value="Negativo"><label for="statopt2">Negativo</label>\n                         </div>\n                         \n                    </div>\n                </div>\n\n                <div class="observacion">\n                    <label for="obsopt"> Observaciones</label>\n                    <textarea id="obsopt" name="obsopt"></textarea>\n                </div>\n\n            </div>\n\n        </div>\n\n        <div class="botones_servicios">\n            <button class="boton_elimina" id="btnBorrar9"></button>\n        </div>\n\n        <input type="hidden" name="servicio9" id="servicio9" value="9">\n\n    </div>',e.appendChild(r),b[0]="Servicio 9";document.getElementById("btnBorrar9").addEventListener("click",(function(){e.removeChild(r)}))}else if(10==m){v.innerHTML='\n        \n        <div class="servicio_caja" id="cajaServicios">\n\n        <div class="caja_amplia">\n\n            <div class="formulario_datos">\n        \n                    <p class="heading s10">Trámite</p>\n               \n                <div class="formulario_datos-grid">\n\n                    <div class="labels">\n                         <label for="nombreftr">Nombre</label>\n                         <input type="text" id="nombreftr" name="nombreftr">\n                    </div>\n\n                    <div class="labels">\n                         <label for="fechaftr"> Fecha de ingreso</label>\n                         <input type="date" id="fechaftr" name="fechaftr">\n                    </div>\n\n                    <div class="labels">\n                        <label for="fechaftr2"> Fecha de entrega SG</label>\n                        <input type="date" id="fechaftr2" name="fechaftr2">\n                    </div>\n                    <div class="labels">\n                         <label for="fechaftr3"> Fecha de entrega Cliente</label>\n                         <input type="date" id="fechaftr3" name="fechaftr3">\n                    </div>\n                </div>\n\n                <div class="observacion">\n                    <label for="obstr"> Observaciones</label>\n                    <textarea id="obstr" name="obstr"></textarea>\n                </div>\n\n            </div>\n\n        </div>\n\n        <div class="botones_servicios">\n            <button class="boton_elimina" id="btnBorrar10"></button>\n        </div>\n\n        <input type="hidden" name="servicio10" id="servicio10" value="10">\n\n    </div>',e.appendChild(v);document.getElementById("btnBorrar10").addEventListener("click",(function(){e.removeChild(v)}))}if(m){p.innerHTML='\n        <div class="contenedor-sm">\n\n        <button type="submit" id="btnEnviar" class="btn_formularios">Registrar</button>\n\n        </div>\n        \n        ',n.appendChild(p),document.getElementById("btnEnviar").addEventListener("click",(function(){!function(){let e=document.querySelectorAll(".servicio_caja"),n=0;!function(e){const n=document.getElementById("servicio1"),a=document.getElementById("servicio2"),i=document.getElementById("servicio3"),l=document.getElementById("servicio4"),t=document.getElementById("servicio5"),d=document.getElementById("servicio6"),o=document.getElementById("servicio7"),s=document.getElementById("servicio8"),c=document.getElementById("servicio9"),r=document.getElementById("servicio10"),v=document.getElementById("folio").value;if(n){console.log("PIPC");const e=document.querySelector('input[name="descrip"]:checked').value,n=document.querySelector('input[name="carta"]:checked').value,a=document.getElementById("elaborapro").value,i=document.getElementById("fechapro1").value,l=document.getElementById("fechapro2").value,t=document.getElementById("obspro").value,d=new FormData;d.append("datos1",i),d.append("datos2",l),d.append("datos4",a),d.append("datos5",e),d.append("datos6",t),d.append("datos7",n),d.append("servicio","1"),d.append("estado","100"),d.append("folio",v),u(d)}if(a){console.log("Capacitacion");const e=document.querySelector('input[name="lugar"]:checked').value,n=document.querySelectorAll('input[name="curso[]"]:checked');for(var p=[],m=0;m<n.length;m++)p[m]=n[m].value;const a=document.getElementById("elaboracap").value,i=document.getElementById("diascap").value,l=document.getElementById("obscap").value,t=new FormData;t.append("datos7",e),t.append("datos8",p),t.append("datos4",i),t.append("datos5",a),t.append("datos6",l),t.append("servicio","2"),t.append("estado","100"),t.append("folio",v),u(t)}if(i){console.log("Simulacro");const e=document.getElementById("fechasim").value,n=document.getElementById("evaluasim").value,a=document.getElementById("obssim").value,i=new FormData;i.append("datos1",e),i.append("datos5",n),i.append("datos6",a),i.append("servicio","3"),i.append("estado","100"),i.append("folio",v),u(i)}if(l){console.log("Plan de Emergecia");const e=document.getElementById("elaboraplan").value,n=document.getElementById("fechaplan1").value,a=document.getElementById("fechaplan2").value,i=document.getElementById("obsplan").value,l=new FormData;l.append("datos1",n),l.append("datos2",a),l.append("datos5",e),l.append("datos6",i),l.append("servicio","4"),l.append("estado","100"),l.append("folio",v),u(l)}if(t){console.log("Dictamenes");const e=document.querySelectorAll('input[name="dictamen"]:checked');var b=[];for(m=0;m<e.length;m++)b[m]=e[m].value;const n=document.getElementById("obsdic").value,a=new FormData;a.append("datos4",b),a.append("datos6",n),a.append("servicio","5"),a.append("estado","100"),a.append("folio",v),u(a)}if(d){console.log("Gestion de Visto Bueno");const e=document.getElementById("fechagvb").value,n=document.getElementById("fechagvb2").value,a=document.getElementById("fechagvb3").value,i=document.getElementById("obsgvb").value,l=new FormData;l.append("datos1",e),l.append("datos2",n),l.append("datos3",a),l.append("datos6",i),l.append("servicio","6"),l.append("estado","100"),l.append("folio",v),u(l)}if(o){console.log("Gestion de Licencia");const e=document.getElementById("fechagl").value,n=document.getElementById("fechagl2").value,a=document.getElementById("fechagl3").value,i=document.getElementById("obsgl").value,l=new FormData;l.append("datos1",e),l.append("datos2",n),l.append("datos3",a),l.append("datos6",i),l.append("servicio","7"),l.append("estado","100"),l.append("folio",v),u(l)}if(s){console.log("Factibilidad de Giro");var f=document.getElementById("fechafg").value,g=document.getElementById("fechafg2").value,h=document.getElementById("fechafg3").value,y=document.getElementById("obsfg").value;const e=new FormData;e.append("datos1",f),e.append("datos2",g),e.append("datos3",h),e.append("datos6",y),e.append("servicio","8"),e.append("estado","100"),e.append("folio",v),u(e)}if(c){console.log("Opinion Tecnica");var E=document.getElementById("fechaopt").value,_=document.getElementById("fechaopt2").value,B=document.querySelector('input[name="statopt"]:checked').value,I=document.getElementById("obsopt").value;const e=new FormData;e.append("datos1",E),e.append("datos2",_),e.append("datos4",B),e.append("datos6",I),e.append("servicio","9"),e.append("estado","100"),e.append("folio",v),u(e)}if(r){console.log("Tramite");var x=document.getElementById("nombreftr").value,j=document.getElementById("fechaftr").value,k=document.getElementById("fechaftr2").value,C=document.getElementById("fechaftr3").value,F=document.getElementById("obstr").value;const e=new FormData;e.append("datos4",x),e.append("datos1",j),e.append("datos2",k),e.append("datos3",C),e.append("datos6",F),e.append("servicio","10"),e.append("estado","100"),e.append("folio",v),u(e)}}(e.length);for(let a=0;a<e.length;a++)e[a].addEventListener("click",()=>{e[a].classList.contains("btn_agregar")?n--:e[a].classList.contains("boton_elimina")?n++:n=0})}()}))}}()}))}();