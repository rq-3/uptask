document.getElementById("btnEnviar").addEventListener("click",(function(){!function(){const e=document.getElementById("rs").value,t=document.getElementById("fol").value,n=new Date,a=n.getDate(),o=n.getMonth(),d=n.getFullYear()+"-"+(o+1)+"-"+a,i=n.getHours(),c=n.getMinutes(),l=i+":"+c,g=new FormData;g.append("editor",e),g.append("edita","Pago"),g.append("folio",t),g.append("fecha",d),g.append("hora",l),async function(e){const t=await fetch("${location.origin}/api/edita2",{method:"POST",body:e}),n=await t.json();console.log(n)}(g)}()}));