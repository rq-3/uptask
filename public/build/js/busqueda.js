function search_thing(){let e=document.getElementById("searchbar").value;e=e.toLowerCase();let t=document.getElementsByClassName("cliente");for(i=0;i<t.length;i++)t[i].innerHTML.toLowerCase().includes(e)?t[i].style.display="flex":t[i].style.display="none"}function search_order(){let e=document.getElementById("searchbar").value;e=e.toLowerCase();let t=document.getElementsByClassName("ordenes");for(i=0;i<t.length;i++)t[i].innerHTML.toLowerCase().includes(e)?t[i].style.display="flex":t[i].style.display="none"}function search_pay(){let e=document.getElementById("searchbar").value;e=e.toLowerCase();let t=document.getElementsByClassName("trabajo_caja");for(i=0;i<t.length;i++)t[i].innerHTML.toLowerCase().includes(e)?t[i].style.display="flex":t[i].style.display="none"}