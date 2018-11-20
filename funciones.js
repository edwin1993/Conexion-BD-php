function ver(){

document.write("hola mundo::::::!!!");	

}

 function myFunction() {
    document.getElementById("demo").innerHTML = "este es un ejemplo de onliclick";
  }


  


  function operaciones(){

	var valor1;
	var valor2;

	valor1 = prompt("Ingrese el primer valor","");
	valor2 = prompt("Ingrese el segundo valor","");

	var suma  = parseInt(valor1) + parseInt(valor2 );
	var resta = parseInt(valor1) - parseInt(valor2 );
	var multi = parseInt(valor1) * parseInt(valor2 );
	var divis = parseInt(valor1) / parseInt(valor2 ); 

	document.write("<br>");
	document.write("la suma es:");
	document.write(suma);
	document.write("<br>");
	document.write("la resta es: ");
	document.write(resta);
	document.write("<br>");
	document.write("la multiplicacion es:");
	document.write(multi);
	document.write("<br>");
	document.write("la division es: ");	
	document.write(divis);
	document.write("<br>");


  }



