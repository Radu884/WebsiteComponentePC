<!DOCTYPE html>
<html>
<head>
<title>SSD</title>
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
	   <h1 align="center">SSD</h1><hr>
	      <img src="ssd1.jpg", align="left">
	   <p1 class="example"> <font size="+2.5">Solid State Drive (SSD) Kingston A400, 240GB, 2.5", SATA III</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	    	<table>
	    		<caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>Capacitate</td>
    <td>  240 GB</td>
  </tr>
  <tr>
    <td>Interfata</td>
    <td>  SATA III</td>
  </tr>
  <tr>
    <td>Rata de transfer la citire (MB/s)</td>
    <td>500</td>
  </tr>
  <tr>
    <td>Rata de transfer la scriere (MB/s)</td>
    <td>  350</td>
    <tr>
  </tr>
   <tr>
    <td>Tip Memorie</td>
    <td>  TLC</td>
  </tr>
</table><br><br>
<p><font size="+1.5">SSD-urile Kingston imbunatatesc dramatic raspunsul sistemului dvs. la comenzi. Este de aproximativ 10x mai rapid decat un hard disk, mai fiabil si rezistent la socuri.
SSD-urile sunt mai rapide si mai silentioase decat hard disk-urile. Fara componente in miscare, SSD-urile sunt, de asemenea mai durabile. Imbunatateste performantele
SSD-urile pot creste performantele vechilor sisteme. </p></font><br><hr>
    
    <img src="ssd2.jpg", align="left">
	   <p1 class="example"> <font size="+2.5">Solid State Drive (SSD) Silicon Power A55, 512GB, 2.5", 7mm, SATA III</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	    	    <table>
          <caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>Capacitate</td>
    <td>  512 GB</td>
  </tr>
  <tr>
    <td>Interfata</td>
    <td>  SATA III</td>
  </tr>
  <tr>
    <td>Rata de transfer la citire (MB/s)</td>
    <td>800</td>
  </tr>
  <tr>
    <td>Rata de transfer la scriere (MB/s)</td>
    <td>  650</td>
    <tr>
  </tr>
   <tr>
    <td>Tip Memorie</td>
    <td>  TLC</td>
  </tr>
</table>
<p><font size="+1.5">Dedicat pentru a oferi produse de inalta calitate pentru consumatorii cu bugete medii, A55 este pozitionat ca unul dintre modelele cele mai rentabile. Cu interfata avansata SATA 3 6Gb/s si preturi accesibile, toata lumea poate avea calculatoare vechi modernizate fara a cheltui o avere. </p></font><hr><br><br><br>
   
   <img src="ssd3.jpg", align="left"  >
	   <p1 class="example"> <font size="+2.5">Solid State Drive (SSD) Samsung 870 EVO, 500GB, 2.5", SATA III</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	         <table>
          <caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>Capacitate</td>
    <td>  500 GB</td>
  </tr>
  <tr>
    <td>Interfata</td>
    <td>  SATA III</td>
  </tr>
  <tr>
    <td>Rata de transfer la citire (MB/s)</td>
    <td>1000</td>
  </tr>
  <tr>
    <td>Rata de transfer la scriere (MB/s)</td>
    <td>  800</td>
    <tr>
  </tr>
   <tr>
    <td>Tip Memorie</td>
    <td>  Samsung V-NAND 3bit MLC</td>
  </tr>
</table><br><br>
<p><font size="+1.5">870 EVO atinge limita maxima a interfetei SATA de 560/530 MB / s viteze secventiale. Utilizatorii de zi cu zi se pot bucura acum de performante SSD la nivel profesional. TurboWrite inteligent accelereaza viteza de scriere si mentine performante ridicate pe termen lung cu un buffer variabil mai mare.</p></font>
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
     document.write ("Buna " + name + ",Bine ai venit sper sa gasesti ce cauti");
       document.write ("Codul " + cod + "  este acceptat!");

window.addEventListener('scroll', () => {
          const scrollable = document.documentElement.scrollHeight - window.innerHeight;
          const scrolled = window.scrollY;

          if (Math.ceil(scrolled) === scrollable) {
            alert ('Ai ajuns jos!');
          }
    });
     const items = [
      { name: 'SSD 1', pret: 700 + ' SSD 1'},
      { name: 'SSD 2', pret: 650 + ' SSD 2'},
      { name: 'SSD 3', pret: 600 + ' SSD 3'}
    ]
       
       items.forEach((item) => {
        console.log(item.pret)
       })

     function myFunction() {
      document.getElementById("demo").innerHTML = "Preturile sunt: SSD 1: 700 lei , SSD 2: 650 lei , SSD 3: 600 lei";
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