window.onload = function() {
    document.getElementById("boton1").onclick = insertar;
    document.getElementById("boton2").onclick = insertar;
    document.getElementById("boton3").onclick = insertar;
    document.getElementById("boton4").onclick = insertar;
    document.getElementById("boton5").onclick = insertar;
    document.getElementById("boton6").onclick = insertar;
    document.getElementById("boton7").onclick = insertar;
    document.getElementById("boton8").onclick = insertar;
    document.getElementById("boton9").onclick = insertar;
    document.getElementById("boton0").onclick = insertar;
    document.getElementById("botonMas").onclick = insertar;
    document.getElementById("botonMenos").onclick = insertar;
    document.getElementById("botonPor").onclick = insertar;
    document.getElementById("botonDividir").onclick = insertar;
    document.getElementById("botonIgual").onclick = enviar;//enviar aqui 
    document.getElementById("botonC").onclick = insertar;

    function insertar(evento) {
        const cuadro = document.getElementsByName('ans')[0];
        const valor = evento.target.value; // Obtiene el valor del botón que fue clicado

        // Actualiza el cuadro con el nuevo valor
       
            cuadro.value += valor; // Añade el valor al cuadro
        
    }
    function enviar() {
        let cuadro = document.getElementsByName("ans")[0]; // Obtiene el primer elemento con el nombre 'ans'
        let valor = cuadro.value; // Obtiene el valor del cuadro
    
       // alert(valor); // Muestra el valor en un alert

       let operador1 = valor.split(/[\+\-\*]/);
       //alert(operador1); // Muestra el valor en un alert
       const primerValor = operador1[0]; 
       const segundoValor = operador1[1];// Usar trim() para eliminar espacios en blanco
       //alert(primerValor);
       let operando = valor.match(/[\+\-\*]/);

       alert(" Operador1: "+primerValor +" Operando: "+ operando + " Operador2: "+segundoValor   ); //
       

 




    }
    

};
