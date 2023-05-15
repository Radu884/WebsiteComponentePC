<!DOCTYPE html>
<html>
<head>
<title>Procesoare</title>
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
    height:467px;
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

	   <h1 align="center">Procesoare</h1><hr>
	      <img src="procesor1.jpg", align="left">
	   <p1 class="example"> <font size="+2.5">Procesor Intel Core™ i9-9900K Coffee Lake, 3.60GHz, 16MB, Socket 1151</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	    	<table>
	    		<caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>
Memorie Cache</td>
    <td>64 MB</td>
  </tr>
  <tr>
    <td>Frecventa procesor (MHz)</td>
    <td>3600</td>
  </tr>
  <tr>
    <td>Numar nuclee</td>
    <td>8</td>
  </tr>
  <tr>
    <td>Putere termica (W)</td>
    <td>95</td>
    <tr>
  </tr>
   <tr>
    <td>Mod de operare (biti)</td>
    <td>  32 / 64 </td>
  </tr>
</table><br><br>
<p><font size="+1.5">Aceste procesoare cu viteza uimitoare, functii complete, si securitate integrata, sunt gata sa va preia productivitatea, creativitatea si jocurile 3D la nivelul urmator. In plus, cu ajutorul Windows 10, procesoarele Intel Core 9th Gen va permit sa va alimentati imaginatia si sa explorati noi posibilitati.</p></font><br><hr>
    
    <img src="procesor 2.jpg", align="left">
	   <p1 class="example"> <font size="+2.5">Procesor AMD Ryzen™ 9 5950X, 64MB, 4.9GHz, Socket AM4</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	    	<table>
	    		<caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>
Memorie Cache</td>
    <td>64 MB</td>
  </tr>
  <tr>
  	<td>Frecventa procesor (MHz)</td>
  	<td> 3.4 GHz</td>
  </tr>
  <tr>
    <td>Mod de operare (biti)</td>
    <td>64</td>
  </tr>
  <tr>
    <td>Numar nuclee</td>
    <td>16</td>
  </tr>
  <tr>
    <td>Putere termica (W)</td>
    <td>105</td>
  </tr>
</table>
<p><font size="+1.5">Procesoarele AMD Ryzen ™ au toate cele mai bune caracteristici pentru a va mentine in joc. Cu o mare putere de procesare vine tehnologiile de ultima ora pentru a fi suportate. Toate procesoarele AMD Ryzen ™ 5000 Series vin cu o suita completa de tehnologii concepute pentru a creste puterea de procesare a computerului, inclusiv Precision Boost 2, Precision Boost Overdrive3 si PCIe® 4.0. </p></font><hr><br><br><br>
   
   <img src="procesor 3.jpg", align="left"  >
	   <p1 class="example"> <font size="+2.5">Procesor Intel Core i9-9900 Coffee Lake, 3.10GHz, 16MB, Socket 1151</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	       <table>
          <caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>
Memorie Cache</td>
    <td>128 MB</td>
  </tr>
  <tr>
    <td>Frecventa procesor (MHz)</td>
    <td> 3.6 GHz</td>
  </tr>
  <tr>
    <td>Mod de operare (biti)</td>
    <td>64/32</td>
  </tr>
  <tr>
    <td>Numar nuclee</td>
    <td>32</td>
  </tr>
  <tr>
    <td>Putere termica (W)</td>
    <td>130</td>
  </tr>
</table><br><br>
<p><font size="+1.5">Aceste procesoare cu viteza uimitoare, functii complete, si securitate integrata, sunt gata sa va preia productivitatea, creativitatea si jocurile 3D la nivelul urmator. In plus, cu ajutorul Windows 10, procesoarele Intel Core 9th Gen va permit sa va alimentati imaginatia si sa explorati noi posibilitati.</p></font>
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
      { name: 'Procesor 1', pret: 3500 + ' Procesor 1'},
      { name: 'Procesor 2', pret: 4000 + ' Procesor 2' },
      { name: 'Procersor 3', pret: 3000 + ' Procesor 3'}
    ]
       
       items.forEach((item) => {
        console.log(item.pret)
       })

     function myFunction() {
      document.getElementById("demo").innerHTML = "Preturile sunt: Procesor 1: 3500 lei , Procesor 2: 4000 lei , Procesor 3: 3000 lei";
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
</body>
</html>