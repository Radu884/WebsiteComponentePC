<!DOCTYPE html>
<html>
<head>
<title>Componente PC</title>
</head>
<style>
	body{
  background-image: url("comfy.jpg"); 
  background-color: #cccccc; 
  height: 100px; 
  background-position: center; 
  background-repeat: no-repeat;
  background-size: cover;  
}
  div {
  	text-align: center;
  }
 
</style>

<body>
  <button id="logare" align="right"  onclick="location.href='index.php';" value="Logare" / ><font size="+2.5">Logare</button></font>
  <button id="Card"  align="right"  onclick="location.href='b1.php';" value="Card" / ><font size="+2.5">Card</button></font>
   

	<p align="right">
  <button id="proiect" align="right"><font size="+2.5" onclick="location.href='sp.php';" value="Card">Cumpără</button></font>
</p>
	<h1 style="font-size:40px;">Prezentare:</h1>  
	<div> <font size="+2" color="white" align="middle">Bine ați venit pe acest site, după cum puteți observa aici se pot cumpăra componente pentru pc de ultimă generație și multe alte lucruri greu de găsit pe piață, sperăm să vă placă și să gasiți ceea ce căutați! </div></font>

	<hr>
	<h1 style="font-size:40px;" align ="center"><i><font=>Componente PC</h1></i>  <button onclick="window.print()" align="middle">Print</button>
	<hr>

	    
	   
	<p><font size="+5" style="color:green">Componente:</font><br> 
		<a href="Procesoare.php"><img src="cpu.png" align="right" width="300" height="200" style="opacity:0.5" alt="Procesoare.php"></a>
		<a href="Placi Video.php"><img src="transparenttt.jpg"  width="350" height="150" style="vertical-align:middle;margin:0px 400px"></a>
        
	  <ul>
		<li><a href="Memorie RAM.php" target="_self"><font size="+3" style="color:red">Memorii RAM </a><br></li></font><br>
		<li><a href="Procesoare.php" target="_blank"><font size="+3" style="color:red">Procesoare </a><br></li></font><br>
		<li><a href="SSD.php" target="_blank"><font size="+3" style="color:red">Solid-State Drive (SSD)</a><br></li></font><br>
		<li><a href="Placi Video.php" target="_blank"><font size="+3" style="color:red">Placi Video</a><br></li></font><br>
	    <a href="Memorie RAM.php"><img src="memorieee.jpg"  width="350" height="200" style="margin:0px 700px" object-fit="cover"></a>
		<li><a href="Surse PC.php" target="_blank"><font size="+3" style="color:red">Surse PC </a></li></font><br>
		<li><a href="Placi de Sunet.php" target="_blank"><font size="+3" style="color:red">Plăci de Sunet</a><br></li></font><br>
		<li><a href="Placi de baza.php" target="_blank"><font size="+3" style="color:red">Plăci de Bază </a><br><br><br><br></li></font><br>
	 </ul>
	  <img src="1gif.gif">
      </p>
    <h1 align="center" style="color:#85e0e0;"><u>Branduri prezente<br><br><hr></h1></u>
    	 <a href="https://www.msi.com/index.php" target="_blank"> <img src="descărcare.png", align="left" style="opacity:0.5;"></a>
    	  <a href="https://www.lenovo.com/ro/ro/" target="_blank"><img src="descărcare (1).png", align="center" style="opacity:0.2;"></a>
    	  <a href="https://www.amd.com/en" target="_blank"><img src="AMD-Logo.jpg" width="600" height="150", align="right"></a>
    	   <a href="https://www.intel.com/content/www/us/en/homepage.html" target="_blank"><img src="Intel_logo_(2006-2020).svg.png" width="300" height="150", align="right"></a>
     </p>
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
    window.addEventListener('scroll', () => {
          const scrollable = document.documentElement.scrollHeight - window.innerHeight;
          const scrolled = window.scrollY;

          if (Math.ceil(scrolled) === scrollable) {
          	alert ('Ai ajuns jos!');
          }
    });
    
	</script>
  
   
   
</body>
   
</html>