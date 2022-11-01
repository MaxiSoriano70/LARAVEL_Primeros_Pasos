/*var persona={
        nombres:["Cele","Nani"],
        edad: 24,
        intereses:["Ingles","Matematica"],
        saludo: function(idioma){
            if(idioma=="es"){
                alert("Hola, Soy "+this.nombres[0]+" "+this.nombres[1]);
            }
            else{
                alert("Hello, I am "+this.nombres[0]+" "+this.nombres[1]);
            }
        }
    };
    persona.saludo("en");
    */
    //alert(persona.nombres[0]);
    //document.getElementsByTagName("p");
    //document.getElementById("Titulo_1")
    //document.getElementById("Titulo_1").style.backgroundColor="#000000";
    //var elemento=document.getElementById("Titulo_1");
    //elemento.style.color="#FFFFFF";

//FILTER
/*var numeros=[1,2,3,4,5,6,7,8,9,10];
var numerosFiltrados=numeros.filter(n=>n>5);
console.log(numerosFiltrados);

var nombres=["Soriano","Nani Alzogaray","Celeste Severich"];
var nombresFiltrados=nombres.filter(nombre=>nombre.length>12);
console.log(nombresFiltrados);

var personas=[{nombre:"Celeste Severich",edad:24},{nombre:"Nani Alzogaray",edad:25}];
var personasFiltradas=personas.filter(p=>p.edad>=25);
console.log(personasFiltradas);*/

//MAP
//var numeros=[1,2,3];
/*var numerosMultiplicados=numeros.map(function(n){
    return n*2;
});*/
/*var numerosMultiplicados=numeros.map(n=>n*2);*/
//console.log(numerosMultiplicados);


//REDUCE

/*var numero=[1,2,3,4];
const reduccion=(acumulado,valorActual)=>acumulado+valorActual;*/
//console.log(typeof reduccion);
/*var valorReducido=numero.reduce(reduccion);
console.log(valorReducido);*/

/*var numero=["Hola","Celeste","Severich","XD"];
const reduccion=(acumulado,valorActual)=>acumulado+valorActual;
//console.log(typeof reduccion);
var valorReducido=numero.reduce(reduccion);
console.log(valorReducido);*/


//FIND

/*var numeros=[1,2,3,4];
var primerNumeroPar=numeros.find(n=>n%2==0);
console.log(primerNumeroPar);*/

//SOME

/*var numeros=[1,2,3,4];
var primerNumeroPar=numeros.some(n=>n%2===0);
console.log(primerNumeroPar);*/

//EVERY

/*var numeros=[1,2,3,4];
var primerNumeroPar=numeros.every(n=>n>=2);
console.log(primerNumeroPar);*/

function cargarPersona(){
    var nombre=document.getElementById("nombre").value;
    var apellido=document.getElementById("apellido").value;

    var bodyTablaPersona=document.getElementById("bodyTablaPersonas");


    // FORMA 1
    /*var elementoFila=document.createElement("tr");
    elementoFila.innerHTML="<td>"+nombre+"</td><td>"+apellido+"</td>";
    bodyTablaPersona.appendChild(elementoFila);*/


    //FORMA2
    bodyTablaPersona.innerHTML+="<tr><td>"+nombre+"</td><td>"+apellido+"</td></tr>";
}
var miIntervalo;

/*$("p").click(()=> { 
    $("#play").hide();
    $(this).val("Hola desde Jquery");
    $("p").css("background-color","blue ");
    miIntervalo = setInterval(() => {
        var contador = document.getElementById("contador").value;
        document.getElementById("contador").value = parseInt(contador) + 1;
    }, 1000);
});*/

/*$("#play").click(()=> { 
    //$("#play").hide();
    $("p").css("background-color","blue ");
    miIntervalo = setInterval(() => {
        var contador = document.getElementById("contador").value;
        document.getElementById("contador").value = parseInt(contador) + 1;
    }, 1000);
});*/

function playContador(){
    $("p").css("background-color","blue ");
    miIntervalo = setInterval(() => {
        var contador = document.getElementById("contador").value;
        document.getElementById("contador").value = parseInt(contador) + 1;
    }, 1000);
}

function stopContador() {
    clearInterval(miIntervalo);
} 
