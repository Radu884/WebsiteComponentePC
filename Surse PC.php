<!DOCTYPE html>
<html>
<head>
<title>Surse PC</title>
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
	   <h1 align="center">Surse PC</h1><hr>
	      <img src="sursa1.jpg", align="left">
	   <p1 class="example"> <font size="+2.5">Sursa Gigabyte GP-P750GM, 80 PLUS Gold, 750W, PFC Activ</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	    	<table>
	    		<caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>
Putere sursa (W)</td>
    <td> 750</td>
  </tr>
  <tr>
    <td>Format</td>
    <td>    ATX</td>
  </tr>
  <tr>
    <td>Rail</td>
    <td>  Single +12V Rail</td>
  </tr>
  <tr>
    <td>Numar ventilatoare</td>
    <td>    1</td>
    <tr>
  </tr>
   <tr>
    <td>Caracteristici speciale</td>
    <td>  80 PLUS GOLD
PFC Activ
OVP/OPP/SCP/UVP/OCP/OTP</td>
  </tr>
</table><br><br>
<p ><font size="+1.5">Asigura o eficienta de 90% la o incarcare de 50%. Eficienta mai buna a energiei duce la mai putine deseuri de energie, mai putina caldura si mai putin zgomot de ventilator. Si cu sprijinul procesoarelor Intel, acesta va economisi mai multa energie si mai multi bani. </p></font><br><hr>
    
    <img src="sursa2.jpg", align="left">
	   <p1 class="example"> <font size="+2.5">Sursa nJoy Woden 650, 650W Real Power, PFC Activ, 80 Plus Gold</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	    	    <table>
          <caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>
Putere sursa (W)</td>
    <td> 650</td>
  </tr>
  <tr>
    <td>Format</td>
    <td>    ATX</td>
  </tr>
  <tr>
    <td>Rail</td>
    <td>  1</td>
  </tr>
  <tr>
    <td>Numar ventilatoare</td>
    <td>    2</td>
    <tr>
  </tr>
   <tr>
    <td>Caracteristici speciale</td>
    <td>    PFC Activ
Nivel de zgomot redus 21 dB
Cabluri mansetate 50cm lungime
Protectii OCP / OVP / UVP / SCP / OPP / OTP</td>
  </tr>
</table>
<p><font size="+1.5">Woden 650 a fost special creata pentru entuziastii care doresc sa-si creeze singuri PC-ul propriu si pentru gamerii care stiu cat de important este ca un computer sa fie alimentat de o sursa puternica si stabila. Este echipata cu un ventilator silentios de 14 cm, cu turatie scazuta, a carui viteza este gestionata inteligent, monitorizand in permanenta temperatura sursei prin intermediul sistemul de senzori prezenti, astfel incat chiar si in momentele de solicitare maxima nivelul de zgomot al ventilatorului sa nu te deranjeze. </p></font><hr><br><br><br>
   
   <img src="sursa3.jpg", align="left"  >
	   <p1 class="example"> <font size="+2.5">Sursa Segotep GTR-550, 550W, PFC Activ</p1><br><br></font><hr>
	    <p2 align="center"><font size="+5">Specificatii:</p2></font>
	         <table>
          <caption><font size="+1.5">General</caption></font><br><br>
   <tr>
    <td>
Putere sursa (W)</td>
    <td> 550</td>
  </tr>
  <tr>
    <td>Format</td>
    <td>    ATX</td>
  </tr>
  <tr>
    <td>Rail</td>
    <td>  Single rail (33A)</td>
  </tr>
  <tr>
    <td>Numar ventilatoare</td>
    <td>    1</td>
    <tr>
  </tr>
   <tr>
    <td>Caracteristici speciale</td>
    <td>    Protectie: OVP
Protectie: SCP
Protectie: OCP
Eficienta: 80%
</td>
  </tr>
</table><br><br>
<p><font size="+1.5">Un ventilator de 120mm silentios controlat termic porneste la viteza maxima doar atunci cand sursa este supusa unui stres extrem, pentru ca ulterior sa incetineasca, revenind astfel la o functionare silentioasa in momentele in care sursa nu este solicitata.</p></font>
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
      { name: 'Sursa 1', pret: 650 + ' Sursa 1'},
      { name: 'Sursa 2', pret: 750 + ' Sursa 2' },
      { name: 'Sursa 3', pret: 850 + ' Sursa 3'}
    ]
       
       items.forEach((item) => {
        console.log(item.pret)
       })

     function myFunction() {
      document.getElementById("demo").innerHTML = "Preturile sunt: Sursa 1: 650 lei , Sursa 2: 750 lei , Sursa 3: 850 lei";
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