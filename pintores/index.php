
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
	<title>Ejercicio Pintores</title>
    <!-- CONEXION PHP -->
  <style>
    #botonSiguiente, #botonSiguienteDos, #botonSiguienteTres, #botonSiguienteGuardar, #botonSiguienteGuardarUltimo{
        border:1px solid black;
        padding-left:5px;
        padding-right:5px;
        padding-bottom:5px;
        padding-top:5px;
        background-color: #6b6b6b;
    }

    #botonSiguiente:hover, #botonSiguienteDos:hover, #botonSiguienteTres:hover, #botonSiguienteGuardar:hover, #botonSiguienteGuardarUltimo:hover{
        background-color: #dbd9d9;
    }

    #ApareceSiguienteTres h2{
      color:green;
      text-align:center;
    }

    #testingTecno{
        text-align:center;
    }

    #thisIstheFinelDivitirorirooo  h2{
      color:green;
      text-align:center;
    }

    #contentSiguienteTres, #contentSiguienteTres2, #contentSiguienteTres3, #contentSiguienteTres4, #contentSiguienteTres5, #contentSiguienteTres6{
      color:black;
      font-size:20px;
      text-align:center;
    }

  </style>

<script >

//OBJETO PINTOR
var Pintor=function Pintor(){

  //ATRIBUTOS PINTOR
	this.nombre="";
	this.puntos=0;
	this.descripcion="";

  //METODOS PINTOR
  this.getPintores=function (){
    pintor1.nombre= document.getElementById("pintor1").value;
    pintor2.nombre= document.getElementById("pintor2").value;
    pintor3.nombre= document.getElementById("pintor3").value;
    pintor4.nombre= document.getElementById("pintor4").value;
    pintor5.nombre= document.getElementById("pintor5").value;

    var nombre1 = pintor1.nombre.toUpperCase();
    var nombre1Trimer = nombre1.trim();
    pintor1.nombre = pintor1.nombre.toUpperCase();
    pintor1.nombre = pintor1.nombre.trim();
    nombre1Trimer = nombre1Trimer.replace(/\s\s+/g, ' ');

    var nombre2 = pintor2.nombre.toUpperCase();
    var nombre2Trimer = nombre2.trim();
    pintor2.nombre = pintor2.nombre.toUpperCase();
    pintor2.nombre = pintor2.nombre.trim();
    nombre2Trimer =  nombre2Trimer.replace(/\s\s+/g, ' ');

    var nombre3 = pintor3.nombre.toUpperCase();
    var nombre3Trimer = nombre3.trim();
    pintor3.nombre = pintor3.nombre.toUpperCase();
    pintor3.nombre = pintor3.nombre.trim();
    nombre3Trimer =  nombre3Trimer.replace(/\s\s+/g, ' ');

    var nombre4 = pintor4.nombre.toUpperCase();
    var nombre4Trimer = nombre4.trim();
    pintor4.nombre = pintor4.nombre.toUpperCase();
    pintor4.nombre = pintor4.nombre.trim();
    nombre4Trimer =  nombre4Trimer.replace(/\s\s+/g, ' ');

    var nombre5 = pintor5.nombre.toUpperCase();
    var nombre5Trimer = nombre5.trim();
    pintor5.nombre = pintor5.nombre.toUpperCase();
    pintor5.nombre = pintor5.nombre.trim();
    nombre5Trimer =  nombre5Trimer.replace(/\s\s+/g, ' ');

    var nombresTodos = pintor1.nombre+ " " +pintor2.nombre+ " " + pintor3.nombre+ " " + pintor4.nombre+ " " + pintor5.nombre;

    //Si están vacios
    if(document.getElementById('pintor1').value == ""){
        document.getElementById('correctIncorrect1').style.display = "initial";
        document.getElementById('correctIncorrect1').style.backgroundColor = "red";
        document.getElementById('correctIncorrect1').innerHTML = " No puede estar vacio ";
    }else if(document.getElementById('pintor2').value == ""){
        document.getElementById('correctIncorrect2').style.display = "initial";
        document.getElementById('correctIncorrect2').style.backgroundColor = "red";
        document.getElementById('correctIncorrect2').innerHTML = " No puede estar vacio ";
    }else if(document.getElementById('pintor3').value == ""){
        document.getElementById('correctIncorrect3').style.display = "initial";
        document.getElementById('correctIncorrect3').style.backgroundColor = "red";
        document.getElementById('correctIncorrect3').innerHTML = " No puede estar vacio ";
    }else if(document.getElementById('pintor4').value == ""){
        document.getElementById('correctIncorrect4').style.display = "initial";
        document.getElementById('correctIncorrect4').style.backgroundColor = "red";
        document.getElementById('correctIncorrect4').innerHTML = " No puede estar vacio ";
    }else if(document.getElementById('pintor5').value == ""){
        document.getElementById('correctIncorrect5').style.display = "initial";
        document.getElementById('correctIncorrect5').style.backgroundColor = "red";
        document.getElementById('correctIncorrect5').innerHTML = " No puede estar vacio ";
    }else{
        //No mostrem missatge d'error
        document.getElementById('correctIncorrect1').style.display = "none";
        document.getElementById('correctIncorrect2').style.display = "none";
        document.getElementById('correctIncorrect3').style.display = "none";
        document.getElementById('correctIncorrect4').style.display = "none";
        document.getElementById('correctIncorrect5').style.display = "none";
        //Feim que tot sigui majúscules i li afegim un TRIM
        document.getElementById('pintor1').value = nombre1Trimer;
        document.getElementById('pintor2').value = nombre2Trimer;
        document.getElementById('pintor3').value = nombre3Trimer;
        document.getElementById('pintor4').value = nombre4Trimer;
        document.getElementById('pintor5').value = nombre5Trimer;

        comprobarNoIgual();
    }

    function comprobarNoIgual(){
        if(nombre1 == nombre2){
            document.getElementById('correctIncorrect1').style.display = "initial";
            document.getElementById('correctIncorrect2').style.display = "initial";
            document.getElementById('correctIncorrect1').style.backgroundColor = "red";
            document.getElementById('correctIncorrect1').innerHTML = " No pueden ser identicos";
            document.getElementById('correctIncorrect2').style.backgroundColor = "red";
            document.getElementById('correctIncorrect2').innerHTML = " No pueden ser identicos";
        }else if(nombre1 == nombre3){
          document.getElementById('correctIncorrect1').style.display = "initial";
          document.getElementById('correctIncorrect3').style.display = "initial";
          document.getElementById('correctIncorrect1').style.backgroundColor = "red";
          document.getElementById('correctIncorrect1').innerHTML = " No pueden ser identicos";
          document.getElementById('correctIncorrect3').style.backgroundColor = "red";
          document.getElementById('correctIncorrect3').innerHTML = " No pueden ser identicos";
        }else if(nombre1 == nombre4){
          document.getElementById('correctIncorrect1').style.display = "initial";
          document.getElementById('correctIncorrect4').style.display = "initial";
          document.getElementById('correctIncorrect1').style.backgroundColor = "red";
          document.getElementById('correctIncorrect1').innerHTML = " No pueden ser identicos";
          document.getElementById('correctIncorrect4').style.backgroundColor = "red";
          document.getElementById('correctIncorrect4').innerHTML = " No pueden ser identicos";
        }else if(nombre1 == nombre5){
          document.getElementById('correctIncorrect1').style.display = "initial";
          document.getElementById('correctIncorrect5').style.display = "initial";
          document.getElementById('correctIncorrect1').style.backgroundColor = "red";
          document.getElementById('correctIncorrect1').innerHTML = " No pueden ser identicos";
          document.getElementById('correctIncorrect5').style.backgroundColor = "red";
          document.getElementById('correctIncorrect5').innerHTML = " No pueden ser identicos";
        }else if(nombre2 == nombre3){
          document.getElementById('correctIncorrect2').style.display = "initial";
          document.getElementById('correctIncorrect3').style.display = "initial";
          document.getElementById('correctIncorrect3').style.backgroundColor = "red";
          document.getElementById('correctIncorrect3').innerHTML = " No pueden ser identicos";
          document.getElementById('correctIncorrect2').style.backgroundColor = "red";
          document.getElementById('correctIncorrect2').innerHTML = " No pueden ser identicos";
        }else if(nombre2 == nombre4){
          document.getElementById('correctIncorrect4').style.display = "initial";
          document.getElementById('correctIncorrect2').style.display = "initial";
          document.getElementById('correctIncorrect4').style.backgroundColor = "red";
          document.getElementById('correctIncorrect4').innerHTML = " No pueden ser identicos";
          document.getElementById('correctIncorrect2').style.backgroundColor = "red";
          document.getElementById('correctIncorrect2').innerHTML = " No pueden ser identicos";
        }else if(nombre2 == nombre5){
          document.getElementById('correctIncorrect5').style.display = "initial";
          document.getElementById('correctIncorrect2').style.display = "initial";
          document.getElementById('correctIncorrect5').style.backgroundColor = "red";
          document.getElementById('correctIncorrect5').innerHTML = " No pueden ser identicos";
          document.getElementById('correctIncorrect2').style.backgroundColor = "red";
          document.getElementById('correctIncorrect2').innerHTML = " No pueden ser identicos";
        }else if(nombre3 == nombre4){
          document.getElementById('correctIncorrect3').style.display = "initial";
          document.getElementById('correctIncorrect4').style.display = "initial";
          document.getElementById('correctIncorrect3').style.backgroundColor = "red";
          document.getElementById('correctIncorrect3').innerHTML = " No pueden ser identicos";
          document.getElementById('correctIncorrect4').style.backgroundColor = "red";
          document.getElementById('correctIncorrect4').innerHTML = " No pueden ser identicos";
        }else if (nombre3 == nombre5){
          document.getElementById('correctIncorrect3').style.display = "initial";
          document.getElementById('correctIncorrect5').style.display = "initial";
          document.getElementById('correctIncorrect3').style.backgroundColor = "red";
          document.getElementById('correctIncorrect3').innerHTML = " No pueden ser identicos";
          document.getElementById('correctIncorrect5').style.backgroundColor = "red";
          document.getElementById('correctIncorrect5').innerHTML = " No pueden ser identicos";
        }else if (nombre4 == nombre5){
          document.getElementById('correctIncorrect4').style.display = "initial";
          document.getElementById('correctIncorrect5').style.display = "initial";
          document.getElementById('correctIncorrect4').style.backgroundColor = "red";
          document.getElementById('correctIncorrect4').innerHTML = " No pueden ser identicos";
          document.getElementById('correctIncorrect5').style.backgroundColor = "red";
          document.getElementById('correctIncorrect5').innerHTML = " No pueden ser identicos";
        }else{
          document.getElementById('EscondeSiguiente').style.display = "none";
          document.getElementById('ApareceSiguiente').style.display = "initial";
          document.getElementById('check1').innerHTML = nombre1;
          document.getElementById('check2').innerHTML = nombre2;
          document.getElementById('check3').innerHTML = nombre3;
          document.getElementById('check4').innerHTML = nombre4;
          document.getElementById('check5').innerHTML = nombre5;
        }

    }
  }

    this.checkBoxTest = function (){
        //alert("ghi");
        var numBoxesChecked = document.querySelectorAll('input[type="checkbox"]:checked').length;

        if (document.getElementById("check1Box").checked && numBoxesChecked > 3) {
            document.getElementById('check1Box').checked = false;

        }else if(document.getElementById("check2Box").checked && numBoxesChecked > 3){
            document.getElementById('check2Box').checked = false;

        }else if(document.getElementById("check3Box").checked && numBoxesChecked > 3){
            document.getElementById('check3Box').checked = false;

        }else if(document.getElementById("check4Box").checked && numBoxesChecked > 3){
            document.getElementById('check4Box').checked = false;

        }else if(document.getElementById("check5Box").checked && numBoxesChecked > 3){
            document.getElementById('check5Box').checked = false;
        }
    }

    this.getSelectValuesPintores = function(){
        pintor1.nombre= document.getElementById("pintor1").value;
        pintor2.nombre= document.getElementById("pintor2").value;
        pintor3.nombre= document.getElementById("pintor3").value;
        pintor4.nombre= document.getElementById("pintor4").value;
        pintor5.nombre= document.getElementById("pintor5").value;

        var nombre1 = pintor1.nombre.toUpperCase();
        var nombre2 = pintor2.nombre.toUpperCase();
        var nombre3 = pintor3.nombre.toUpperCase();
        var nombre4 = pintor4.nombre.toUpperCase();
        var nombre5 = pintor5.nombre.toUpperCase();

        document.getElementById('ApareceSiguiente').style.display = "none";
        document.getElementById('ApareceSiguiente2').style.display = "initial";

        var listaPintoresvar = [];

        if(document.getElementById("check1Box").checked == true){
            listaPintoresvar.push(nombre1);
        }

        if(document.getElementById("check2Box").checked == true){
            listaPintoresvar.push(nombre2);
        }

        if(document.getElementById("check3Box").checked == true){
            listaPintoresvar.push(nombre3);
        }

        if(document.getElementById("check4Box").checked == true){
            listaPintoresvar.push(nombre4);
        }

        if(document.getElementById("check5Box").checked == true){
            listaPintoresvar.push(nombre5);
        }

        var sel = document.getElementById('listaPintores');
        for(var i = 0; i < listaPintoresvar.length; i++) {
            var opt = document.createElement('option');
            opt.innerHTML = listaPintoresvar[i];
            opt.value = listaPintoresvar[i];
            sel.appendChild(opt);
        }

        pintor1.getShowValuesSelect();
    }

    this.getShowValuesSelect = function(){
      var valorPintorSelected = document.getElementById("listaPintores");
      var pintorSelected = valorPintorSelected.options[valorPintorSelected.selectedIndex].value;
      pintor1.nombre= document.getElementById("pintor1").value;
      pintor2.nombre= document.getElementById("pintor2").value;
      pintor3.nombre= document.getElementById("pintor3").value;
      pintor4.nombre= document.getElementById("pintor4").value;
      pintor5.nombre= document.getElementById("pintor5").value;

      var nombre1 = pintor1.nombre.toUpperCase();
      var nombre2 = pintor2.nombre.toUpperCase();
      var nombre3 = pintor3.nombre.toUpperCase();
      var nombre4 = pintor4.nombre.toUpperCase();
      var nombre5 = pintor5.nombre.toUpperCase();

      if(pintorSelected == nombre1){
            document.getElementById('listaPintoresInsideForm').style.display = "initial";
            document.getElementById('listaPintoresInsideForm2').style.display = "none";
            document.getElementById('listaPintoresInsideForm3').style.display = "none"
            document.getElementById('listaPintoresInsideForm4').style.display = "none";
            document.getElementById('listaPintoresInsideForm5').style.display = "none";
      }else if(pintorSelected == nombre2){
            document.getElementById('listaPintoresInsideForm').style.display = "none";
            document.getElementById('listaPintoresInsideForm2').style.display = "initial";
            document.getElementById('listaPintoresInsideForm3').style.display = "none"
            document.getElementById('listaPintoresInsideForm4').style.display = "none";
            document.getElementById('listaPintoresInsideForm5').style.display = "none";
      }else if (pintorSelected == nombre3){
            document.getElementById('listaPintoresInsideForm').style.display = "none";
            document.getElementById('listaPintoresInsideForm2').style.display = "none";
            document.getElementById('listaPintoresInsideForm3').style.display = "initial"
            document.getElementById('listaPintoresInsideForm4').style.display = "none";
            document.getElementById('listaPintoresInsideForm5').style.display = "none";
      }else if (pintorSelected == nombre4){
            document.getElementById('listaPintoresInsideForm').style.display = "none";
            document.getElementById('listaPintoresInsideForm2').style.display = "none";
            document.getElementById('listaPintoresInsideForm3').style.display = "none"
            document.getElementById('listaPintoresInsideForm4').style.display = "initial";
            document.getElementById('listaPintoresInsideForm5').style.display = "none";
      }else if(pintorSelected == nombre5){
            document.getElementById('listaPintoresInsideForm').style.display = "none";
            document.getElementById('listaPintoresInsideForm2').style.display = "none";
            document.getElementById('listaPintoresInsideForm3').style.display = "none"
            document.getElementById('listaPintoresInsideForm4').style.display = "none";
            document.getElementById('listaPintoresInsideForm5').style.display = "initial";
      }

    }


    this.getOtherInfoPintores = function(){
        var booleanCheck = 0;
        var valorPintorSelected = document.getElementById("listaPintores");
        var pintorSelected = valorPintorSelected.options[valorPintorSelected.selectedIndex].value;

        pintor1.nombre= document.getElementById("pintor1").value;
        pintor2.nombre= document.getElementById("pintor2").value;
        pintor3.nombre= document.getElementById("pintor3").value;
        pintor4.nombre= document.getElementById("pintor4").value;
        pintor5.nombre= document.getElementById("pintor5").value;

        var nombre1 = pintor1.nombre.toUpperCase();
        var nombre2 = pintor2.nombre.toUpperCase();
        var nombre3 = pintor3.nombre.toUpperCase();
        var nombre4 = pintor4.nombre.toUpperCase();
        var nombre5 = pintor5.nombre.toUpperCase();

        //PINTOR 1
        if(document.getElementById('puntuacionPintor').value == ""){
          document.getElementById('correctIncorrect6').style.display = "initial";
          document.getElementById('correctIncorrect6').style.backgroundColor = "red";
          document.getElementById('correctIncorrect6').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect6').style.display = "none";
        }

        if(document.getElementById('motivoElection').value == ""){
          document.getElementById('correctIncorrect7').style.display = "initial";
          document.getElementById('correctIncorrect7').style.backgroundColor = "red";
          document.getElementById('correctIncorrect7').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect7').style.display = "none";
          booleanCheck++;
        }
        //PINTOR 2
        if(document.getElementById('puntuacionPintor2').value == ""){
          document.getElementById('correctIncorrect62').style.display = "initial";
          document.getElementById('correctIncorrect62').style.backgroundColor = "red";
          document.getElementById('correctIncorrect62').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect62').style.display = "none";
          booleanCheck++;
        }

        if(document.getElementById('motivoElection2').value == ""){
          document.getElementById('correctIncorrect72').style.display = "initial";
          document.getElementById('correctIncorrect72').style.backgroundColor = "red";
          document.getElementById('correctIncorrect72').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect72').style.display = "none";
          booleanCheck++;
        }
        //PINTOR 3
        if(document.getElementById('puntuacionPintor3').value == ""){
          document.getElementById('correctIncorrect63').style.display = "initial";
          document.getElementById('correctIncorrect63').style.backgroundColor = "red";
          document.getElementById('correctIncorrect63').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect63').style.display = "none";
          booleanCheck++;
        }

        if(document.getElementById('motivoElection3').value == ""){
          document.getElementById('correctIncorrect73').style.display = "initial";
          document.getElementById('correctIncorrect73').style.backgroundColor = "red";
          document.getElementById('correctIncorrect73').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect73').style.display = "none";
          booleanCheck++;
        }
        //PINTOR 4
        if(document.getElementById('puntuacionPintor4').value == ""){
          document.getElementById('correctIncorrect64').style.display = "initial";
          document.getElementById('correctIncorrect64').style.backgroundColor = "red";
          document.getElementById('correctIncorrect64').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect64').style.display = "none";
          booleanCheck++;
        }

        if(document.getElementById('motivoElection4').value == ""){
          document.getElementById('correctIncorrect74').style.display = "initial";
          document.getElementById('correctIncorrect74').style.backgroundColor = "red";
          document.getElementById('correctIncorrect74').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect74').style.display = "none";
          booleanCheck++;
        }
        //PINTOR 5
        if(document.getElementById('puntuacionPintor5').value == ""){
          document.getElementById('correctIncorrect65').style.display = "initial";
          document.getElementById('correctIncorrect65').style.backgroundColor = "red";
          document.getElementById('correctIncorrect65').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect65').style.display = "none";
          booleanCheck++;
        }

        if(document.getElementById('motivoElection5').value == ""){
          document.getElementById('correctIncorrect75').style.display = "initial";
          document.getElementById('correctIncorrect75').style.backgroundColor = "red";
          document.getElementById('correctIncorrect75').innerHTML = " No puede estar vacio ";
        }else{
          document.getElementById('correctIncorrect75').style.display = "none";
          booleanCheck++;
        }
              pintor1.puntos= document.getElementById("puntuacionPintor").value;
              pintor1.descripcion = document.getElementById('motivoElection').value;
              //TRIM PER LA DESCRIPCIÓ
              pintor1.descripcion = pintor1.descripcion.trim();
              //Eliminem més d'un espai
              pintor1.descripcion =   pintor1.descripcion.replace(/\s\s+/g, ' ');
              //alert(pintor1.puntos);

              pintor2.puntos= document.getElementById("puntuacionPintor2").value;
              pintor2.descripcion = document.getElementById('motivoElection2').value;
              //TRIM PER LA DESCRIPCIÓ
              pintor2.descripcion = pintor2.descripcion.trim();
              //Eliminem més d'un espai
              pintor2.descripcion =   pintor2.descripcion.replace(/\s\s+/g, ' ');
              //alert(pintor2.puntos);

              pintor3.puntos= document.getElementById("puntuacionPintor3").value;
              pintor3.descripcion = document.getElementById('motivoElection3').value;
              //TRIM PER LA DESCRIPCIÓ
              pintor3.descripcion = pintor3.descripcion.trim();
              //Eliminem més d'un espai
              pintor3.descripcion =   pintor3.descripcion.replace(/\s\s+/g, ' ');
              //alert(pintor3.puntos);

              pintor4.puntos= document.getElementById("puntuacionPintor4").value;
              pintor4.descripcion = document.getElementById('motivoElection4').value;
              //TRIM PER LA DESCRIPCIÓ
              pintor4.descripcion = pintor4.descripcion.trim();
              //Eliminem més d'un espai
              pintor4.descripcion =   pintor4.descripcion.replace(/\s\s+/g, ' ');
              //alert(pintor4.puntos);

              pintor5.puntos= document.getElementById("puntuacionPintor5").value;
              pintor5.descripcion = document.getElementById('motivoElection5').value;
              //TRIM PER LA DESCRIPCIÓ
              pintor5.descripcion = pintor5.descripcion.trim();
              //Eliminem més d'un espai
              pintor5.descripcion =   pintor5.descripcion.replace(/\s\s+/g, ' ');
              //alert(pintor5.puntos);

        if(booleanCheck>4){
            document.getElementById('ApareceSiguienteTres').style.display = "initial";
            document.getElementById('ApareceSiguiente2').style.display = "none";
            document.getElementById('contentSiguienteTres').innerHTML += "<h2> Enhorabuena, has creado los tres pintores </h2><hr/>";
            mirarPuntosPintor(pintor1.puntos, pintor2.puntos, pintor3.puntos, pintor4.puntos, pintor5.puntos);


        }else{
            document.getElementById('correctIncorrect777').style.display = "initial";
            document.getElementById('correctIncorrect777').style.backgroundColor = "red";
            document.getElementById('correctIncorrect777').innerHTML = " Has de poner datos en los tres pintores";
        }
        function mirarPuntosPintor(punto1,punto2,punto3,punto4, punto5){
          if(pintor1.puntos > 0){
              document.getElementById('contentSiguienteTres2').innerHTML += "<br/>" + "Pintor 1 - " + pintor1.nombre + "<br/>" + "Puntuacion - " + pintor1.puntos + "<br/>" + "Porque de la puntuacion - " + pintor1.descripcion + "<br/>" + "<br/>";
          }
          if(pintor2.puntos > 0){
              document.getElementById('contentSiguienteTres3').innerHTML += "<br/>" + "Pintor 2 - " + pintor2.nombre + "<br/>" + "Puntuacion - " + pintor2.puntos + "<br/>" + "Porque de la puntuacion - " + pintor2.descripcion + "<br/>" + "<br/>";
          }
          if(pintor3.puntos > 0){
              document.getElementById('contentSiguienteTres4').innerHTML += "<br/>" + "Pintor 3 - " + pintor3.nombre + "<br/>" + "Puntuacion - " + pintor3.puntos + "<br/>" + "Porque de la puntuacion - " + pintor3.descripcion + "<br/>" + "<br/>";
          }
          if(pintor4.puntos > 0){
              document.getElementById('contentSiguienteTres5').innerHTML += "<br/>" + "Pintor 4 - " + pintor4.nombre + "<br/>" + "Puntuacion - " + pintor4.puntos + "<br/>" + "Porque de la puntuacion - " + pintor4.descripcion + "<br/>" + "<br/>";
          }
          if(pintor5.puntos > 0){
              document.getElementById('contentSiguienteTres6').innerHTML += "<br/>" + "Pintor 5 - " + pintor5.nombre + "<br/>" + "Puntuacion - " + pintor5.puntos + "<br/>" + "Porque de la puntuacion - " + pintor5.descripcion + "<br/>" + "<br/>";
          }
        }

    }
      //GUARDAR EN BBDD
      this.enviarABBDD = function(){

          document.getElementById('ApareceSiguienteTres').style.display = "none";
          document.getElementById('thisIstheFinelDivitirorirooo').style.display = "initial";
          document.getElementById('thisIstheFinelDivitirorirooo').innerHTML += "<h2> Clicar boton para enviar a la BBDD de pintores </h2><hr/>";

          //Pintor 1
          document.getElementById('nombrepintor1form').value = pintor1.nombre;
          document.getElementById('puntuacionpintor1form').value = pintor1.puntos;
          document.getElementById('descripcionpintor1form').value = pintor1.descripcion;
          //Pintor 2
          document.getElementById('nombrepintor2form').value = pintor2.nombre;
          document.getElementById('puntuacionpintor2form').value = pintor2.puntos;
          document.getElementById('descripcionpintor2form').value = pintor2.descripcion;
          //Pintor 3
          document.getElementById('nombrepintor3form').value = pintor3.nombre;
          document.getElementById('puntuacionpintor3form').value = pintor3.puntos;
          document.getElementById('descripcionpintor3form').value = pintor3.descripcion;
          //Pintor 4
          document.getElementById('nombrepintor4form').value = pintor4.nombre;
          document.getElementById('puntuacionpintor4form').value = pintor4.puntos;
          document.getElementById('descripcionpintor4form').value = pintor4.descripcion;
          //Pintor 5
          document.getElementById('nombrepintor5form').value = pintor5.nombre;
          document.getElementById('puntuacionpintor5form').value = pintor5.puntos;
          document.getElementById('descripcionpintor5form').value = pintor5.descripcion;

          document.getElementById('thisIstheFinelDivitirorirooo2').style.display = "none";
          document.getElementById('botonEnviaraBBDD').style.display = "initial";
      }

      this.validateNumberInputNumber = function(objeto){
          var object = objeto;
            if(object.value > 5){
                object.value = 5;
            }
      }

      this.myAlertFunction = function(){
          confirm("Vas a introducir los pintores en la BBDD. ¿Estás de acuerdo?");
          return true;
      }
}

var pintor1= new Pintor();
var pintor2= new Pintor();
var pintor3= new Pintor();
var pintor4= new Pintor();
var pintor5= new Pintor();

</script>
</head>

<body>


    <div id="EscondeSiguiente">
      <h1>Por favor, introduce el nombre de cinco pintores</h1>
          <strong>Seria conveniente introducir los nombres en mayusculas:</strong></br></br>
        Pintor#1 <input type="text" id="pintor1" placeholder="Pintor" maxlength="50"> <span id="correctIncorrect1" style="border:1px solid green; display:none;">1</span><br/><br/>
        Pintor#2 <input type="text" id="pintor2" placeholder="Pintor" maxlength="50"> <span id="correctIncorrect2" style="border:1px solid green; display:none;">1</span><br/><br/>
        Pintor#3 <input type="text" id="pintor3" placeholder="Pintor" maxlength="50"> <span id="correctIncorrect3" style="border:1px solid green; display:none;">1</span><br/><br/>
        Pintor#4 <input type="text" id="pintor4" placeholder="Pintor" maxlength="50"> <span id="correctIncorrect4" style="border:1px solid green; display:none;">1</span><br/><br/>
        Pintor#5 <input type="text" id="pintor5" placeholder="Pintor" maxlength="50"> <span id="correctIncorrect5" style="border:1px solid green; display:none;">1</span><br/><br/>
        <span id="botonSiguiente" onclick="pintor1.getPintores();" style="cursor:pointer;"> Siguiente </span>
    </div>

    <div id="ApareceSiguiente" style="display:none;">
      <strong>Puedes deseleccionar uno y seleccionar otro (MAX: 3)</strong></br></br>
        <input type="checkbox" name="Pintor1" value="Pintor1" id="check1Box" onchange="pintor1.checkBoxTest(this);"/> <span id="check1"> </span><br/>
        <input type="checkbox" name="Pintor2" value="Pintor2" id="check2Box" onchange="pintor1.checkBoxTest(this);"/> <span id="check2"> </span><br/>
        <input type="checkbox" name="Pintor3" value="Pintor3" id="check3Box" onchange="pintor1.checkBoxTest(this);"/> <span id="check3"> </span><br/>
        <input type="checkbox" name="Pintor4" value="Pintor4" id="check4Box" onchange="pintor1.checkBoxTest(this);"/> <span id="check4"> </span><br/>
        <input type="checkbox" name="Pintor5" value="Pintor5" id="check5Box" onchange="pintor1.checkBoxTest(this);"/> <span id="check5"> </span><br/><br/>
        <span id="botonSiguienteDos" onclick="pintor1.getSelectValuesPintores();" style="cursor:pointer;"> Siguiente </span>
    </div>

    <div id="ApareceSiguiente2" style="display:none;">
      <strong>Selecciona el pintor a puntuar y seleccione guardar al tener los tres pintores con sus valores</strong></br></br>
        <select id="listaPintores" onchange="pintor1.getShowValuesSelect();"></select>
        <br/>
          <div id="listaPintoresInsideForm" style="display:none">
            <br/>
              <input type="number" name="puntuacion" id="puntuacionPintor" placeholder="Puntuacion de 1 ~ 5" min="1" max="5" onfocusout="pintor1.validateNumberInputNumber(this);"/> <span id="correctIncorrect6" style="border:1px solid green; display:none;">1</span><br>
              <textarea rows="4" cols="50" name="motivoElect" id="motivoElection" placeholder="Motivo de su seleccion" value=""></textarea><br><span id="correctIncorrect7" style="border:1px solid green; display:none;">1</span>
              <br/>
          </div>
          <div id="listaPintoresInsideForm2" style="display:none">
            <br/>
              <input type="number" name="puntuacion2" id="puntuacionPintor2" placeholder="Puntuacion de 1 ~ 5" min="1" max="5" onfocusout="pintor1.validateNumberInputNumber(this);"/> <span id="correctIncorrect62" style="border:1px solid green; display:none;">1</span><br>
              <textarea rows="4" cols="50" name="motivoElect" id="motivoElection2" placeholder="Motivo de su seleccion" value=""></textarea><br><span id="correctIncorrect72" style="border:1px solid green; display:none;">1</span>
              <br/>
          </div>
          <div id="listaPintoresInsideForm3" style="display:none">
            <br/>
              <input type="number" name="puntuacion3" id="puntuacionPintor3" placeholder="Puntuacion de 1 ~ 5" min="1" max="5" onfocusout="pintor1.validateNumberInputNumber(this);"/> <span id="correctIncorrect63" style="border:1px solid green; display:none;">1</span><br>
              <textarea rows="4" cols="50" name="motivoElect" id="motivoElection3" placeholder="Motivo de su seleccion" value=""></textarea><br><span id="correctIncorrect73" style="border:1px solid green; display:none;">1</span>
              <br/>
          </div>
          <div id="listaPintoresInsideForm4" style="display:none">
            <br/>
              <input type="number" name="puntuacion4" id="puntuacionPintor4" placeholder="Puntuacion de 1 ~ 5" min="1" max="5" onfocusout="pintor1.validateNumberInputNumber(this);"/> <span id="correctIncorrect64" style="border:1px solid green; display:none;">1</span><br>
              <textarea rows="4" cols="50" name="motivoElect" id="motivoElection4" placeholder="Motivo de su seleccion" value=""></textarea><br><span id="correctIncorrect74" style="border:1px solid green; display:none;">1</span>
              <br/>
          </div>
          <div id="listaPintoresInsideForm5" style="display:none">
            <br/>
              <!-- onkeypressed -->
              <input type="number" name="puntuacion5" id="puntuacionPintor5" placeholder="Puntuacion de 1 ~ 5" maxlength="1" min="1" max="5" onfocusout="pintor1.validateNumberInputNumber(this);"/> <span id="correctIncorrect65" style="border:1px solid green; display:none;">1</span><br>
              <textarea rows="4" cols="50" name="motivoElect" id="motivoElection5" placeholder="Motivo de su seleccion" value=""></textarea><br><span id="correctIncorrect75" style="border:1px solid green; display:none;">1</span>
              <br/>

          </div>
          <br><span id="botonSiguienteGuardar" onclick="pintor1.getOtherInfoPintores();" style="cursor:pointer;"> Finalizar </span><span id="correctIncorrect777" style="border:1px solid green; display:none;">1</span>
    </div>

    <div id="ApareceSiguienteTres" style="display:none;">
      <div id="contentSiguienteTres" style="border:1px solid black;"></div>
      <div id="contentSiguienteTres2" style="border:1px solid black;display:block;"></div>
      <div id="contentSiguienteTres3" style="border:1px solid black;display:block;"></div>
      <div id="contentSiguienteTres4" style="border:1px solid black;display:block;"></div>
      <div id="contentSiguienteTres5" style="border:1px solid black;display:block;"></div>
      <div id="contentSiguienteTres6" style="border:1px solid black;display:block;"></div>
      <br/>
      <span id="botonSiguienteGuardarUltimo" onclick="pintor1.enviarABBDD();" style="cursor:pointer; text-align:center; margin:0 auto;"> Enviar </span>
    </div>

    <div id="thisIstheFinelDivitirorirooo" style="display:none;">

    </div>

    <br/>

    <div id="thisIstheFinelDivitirorirooo2" style="display:none;">
        <form action="recibir.php" method="POST">
              <!-- PINTOR 1 -->
              <input type="text" name="nombre1" id="nombrepintor1form"><br>
              <input type="text" name="puntuacion1" id="puntuacionpintor1form"><br>
              <input type="text" name="descripcion1" id="descripcionpintor1form"><br>

              <!-- PINTOR 2 -->
              <input type="text" name="nombre2" id="nombrepintor2form"><br>
              <input type="text" name="puntuacion2" id="puntuacionpintor2form"><br>
              <input type="text" name="descripcion2" id="descripcionpintor2form"><br>

              <!-- PINTOR 3 -->
              <input type="text" name="nombre3" id="nombrepintor3form"><br>
              <input type="text" name="puntuacion3" id="puntuacionpintor3form"><br>
              <input type="text" name="descripcion3" id="descripcionpintor3form"><br>

              <!-- PINTOR 4 -->
              <input type="text" name="nombre4" id="nombrepintor4form"><br>
              <input type="text" name="puntuacion4" id="puntuacionpintor4form"><br>
              <input type="text" name="descripcion4" id="descripcionpintor4form"><br>

              <!-- PINTOR 5 -->
              <input type="text" name="nombre5" id="nombrepintor5form"><br>
              <input type="text" name="puntuacion5" id="puntuacionpintor5form"><br>
              <input type="text" name="descripcion5" id="descripcionpintor5form"><br>
    </div>
    <div id="testingTecno">
              <input type="submit" value="Enviar" id="botonEnviaraBBDD" onclick="pintor1.myAlertFunction();" style="font-family: monospace; text-align:center; display:none;">
    </div>
    </form>



</body>
</html>
