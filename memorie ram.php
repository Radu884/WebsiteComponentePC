<!DOCTYPE html>
<html>
<head>
<title>Memorie RAM</title>
</head>
<style> 
      table, th, td {
  border: 2px solid black;
  padding: 2px;
}
   body{
    background-color:azure;
    transition: all 2.5s ease;
   }
   h1{
    background-color:purple;
   }
   caption{
    text-align:left;
   }
   td {
    height:30px;
    width:300px;
   }
   img{
    height:480px;
   } 
</style>

<body>
    <button id="logare" align="right"  onclick="location.href='index.php';" value="Logare" / ><font size="+2.5">Logare</button></font>
  <button id="Card"  align="right"  onclick="location.href='b1.php';" value="Card" / ><font size="+2.5">Card</button></font>
   
  <p align="right">
  <button id="proiect" align="right"><font size="+2.5" onclick="location.href='sp.php';" value="Card">Cumpără</button></font>
</p>
   
   <button onclick="myFunction()">Pret</button>
    <p id="demo"></p> 
      <input type="button" value="Schimba culoarea" onclick="allinone()">
      <button onclick="kek1()">Sa vezi mai bine</button>
       <select onchange="color(this.value)">
            <option value="">Color</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="pink">Pink</option>
            <option value="purple">Purple</option>
            <option value="black">Black</option>
            <option value="red">Red</option>
            <option value="yellow">Yellow</option>
        </select>


	   <h1 align="center">Memorii RAM </h1><hr>
	      <img src="memorie 1.jpg", align="left"  >
	   <p1 class="example"> <font size="+2.5">Memorie HyperX Fury Black 8GB, DDR4, 3200MHz, CL16, 1.35V</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	    	<table>
	    		<caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>Tip memorie:</td>
    <td>DDR4</td>
  </tr>
  <tr>
    <td>Capacitate:</td>
    <td>8 GB</td>
  </tr>
  <tr>
    <td>Frecventa (MHz):</td>
    <td>3200 MHz</td>
  </tr>
  <tr>
    <td>Module:</td>
    <td>Single Channel</td>
  </tr>
</table><br><br>
<p><font size="+1.5">HyperX FURY DDR4 ajunge la cea mai mare frecventa publicata, pana la 3466MHz, oferind un impuls Plug N Play pentru jocuri, editare video si redare. FURY DDR4 este pregatit pentru XMP si disponibil in viteze de 2400 MHz – 3466 MHz, latente CL15–16, capacitati de un singur modul de 4 GB – 16 GB si seturi de kit de 16 GB – 64 GB </p></font><br><hr>
    

    <img src="corsair memorie.jpg", align="left">
	   <p1 class="example"> <font size="+2.5">Memorie Corsair Vengeance RGB PRO 16GB, DDR4, 3600MHz, CL18, Dual Channel Kit</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	    	<table>
	    		<caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>Tip memorie:</td>
    <td>DDR4</td>
  </tr>
  <tr>
  	<td>Standard</td>
  	<td>PC4-28800</td>
  </tr>
  <tr>
    <td>Capacitate:</td>
    <td>16 GB</td>
  </tr>
  <tr>
    <td>Frecventa (MHz):</td>
    <td>3600 MHz</td>
  </tr>
  <tr>
    <td>Module:</td>
    <td>Dual Channel</td>
  </tr>
</table>
<p><font size="+1.5">Software-ul CORSAIR iCUE aduce la viata sistemul dumneavoastra cu ajutorul controlului iluminarii dinamice RGB, sincronizata cu toate produsele compatibile cu iCUE, inclusiv memorii RAM, ventilatoare, benzi LED RGB, tastaturi, mouse-uri si multe altele. Personalizati zeci de profiluri de iluminare prestabilite, experimentati o mare varietate de culori reglabile si reglati luminozitatea LED-ului pentru a se potrivi perfect cu sistemul dvs. </p></font><hr><br>
   
   <img src="memorie 4.jpg", align="left"  >
	   <p1 class="example"> <font size="+2.5">Memorie Patriot Viper 3 8GB (2x4GB) DIMM, DDR3, 1600MHz, CL9, 1.5V, XMP, Radiator negru</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	    	<table>
	    		<caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>Tip memorie:</td>
    <td>DDR4</td>
  </tr>
  <tr>
  	<td>Standard</td>
  	<td>PC3-12800</td>
  </tr>
  <tr>
    <td>Capacitate:</td>
    <td>8 GB</td>
  </tr>
  <tr>
    <td>Frecventa (MHz):</td>
    <td>1600 MHz</td>
  </tr>
  <tr>
    <td>Module:</td>
    <td>Dual Channel</td>
  </tr>
</table><br><br>
<p><font size="+1.5">Memorie Patriot Viper 3 8GB (2x4GB) DIMM, DDR3 ajunge la cea mai mare frecventa publicata, pana la 3466MHz, oferind un impuls Plug N Play pentru jocuri, editare video si redare. FURY DDR4 este pregatit pentru XMP si disponibil in viteze de 2400 MHz – 3466 MHz, latente CL15–16, capacitati de un singur modul de 4 GB – 16 GB si seturi de kit de 16 GB – 64 GB </p></font>


</body>
<script type="text/javascript">
   var x = document.getElementById("proiect");
x.addEventListener("click", myFunction);
x.addEventListener("click", someOtherFunction);

function myFunction() {
  alert ("Buna!");
}

function someOtherFunction() {
  alert ("Alege o metoda de plata!");
}     

      var name = window.prompt("Cum te cheama?");
     var cod =  window.prompt("Daca introduci codul primit primesti reducere");
     document.write ("Buna " + name + ",Bine ai venit sper sa gasesti ce cauti! ");
     document.write ("Codul " + cod + "  este acceptat!");

window.addEventListener('scroll', () => {
          const scrollable = document.documentElement.scrollHeight - window.innerHeight;
          const scrolled = window.scrollY;

          if (Math.ceil(scrolled) === scrollable) {
            alert ('Ai ajuns jos!');
          }
    });
     const items = [
      { name: 'Memorie 1', pret: 1000 + ' Memorie 1'},
      { name: 'Memorie 2', pret: 800 + ' Memorie 2' },
      { name: 'Memorie 3', pret: 2100 + ' Memorie 3'}
    ]
       
       items.forEach((item) => {
        console.log(item.pret)
       })

     function myFunction() {
      document.getElementById("demo").innerHTML = "Preturile sunt: Memorie 1: 1000 lei , Memorie 2: 800 lei , Memorie 3: 2100 lei";
     }
      
      function lol1(){

            document.body.style.backgroundColor='yellow';
               }
       function lol2(){
        document.body.style.backgroundColor='orange';
          }
      function lol3(){
        alert('Alege ce culoare vrei')
      }
      function allinone (){
        lol1();
        lol2();
        lol3();
      }
      
     
    
   function kek1() {
  var x = document.querySelectorAll(".example");
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].style.backgroundColor = "red";
  }
   if (i=1) {
    x[i].style.backgroundColor = "green";
   } 
   if (i=2) {
    x[i].style.backgroundColor = "orange";
   } 
   
}     
    function color(value) {
      document.body.style.backgroundColor= value;
    }
      

</script>
</html>