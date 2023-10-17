( function() {

        const btnRandom = document.getElementById("random");
        btnRandom.addEventListener("click", function(){
            generar();
        })

        function generar(){

            

            const  generateRandomString = (num) => {
                const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                let result1= Math.random().toString(36).substring(num);       
        
                return result1;
            }
        let resul = generateRandomString(6);
       let container =  document.getElementById("password");
        container.value = resul;

    // alert(generateRandomString(6));
        }

    
})();