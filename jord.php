<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/style.css">
    </head>
 <?php
include("js/script.js");
?> 
    
    <body>
    
        <h1>Jord Jordfugtighed</h1>
        <div class="jord">
        <div class="graf" id="grafen"></div>
       
<!-- CO2 start -->        

<svg class="co2" onclick="loadCo2()" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 400.36 408.51" style="enable-background:new 0 0 400.36 408.51;" xml:space="preserve">

<g id="Ramme">
	<path class="st1" d="M399.68,7.69"/>
	<path class="st1" d="M398.27,6.96c-0.08,0.46,0.25,0.84-0.22,0.85L5.38,9.52c-0.6,0.01-1.07,0.49-1.07,1.07v392.64"/>
	<path class="st1 ramme" d="M4.75,6.82v394.82c0,1.07-0.44,1.07,1.09,1.07h393.42c0.98-0.18,1.09-395.77,1.09-395.77
		c-0.12-1.41-0.12-1.41-0.12-1.41L5.83,5.75C5.23,5.76,4.75,6.23,4.75,6.82z"/>
	<path class="st1" d="M434.19,254.6"/>
</g>
<g id="Layer_2">
	<polygon class="st2" points="35.52,33.1 34.13,372.9 370.71,369.68 370.71,33.1 	"/>
</g>
<g id="Layer_4">
	<rect x="73.43" y="122.51" class="st3" width="326.25" height="132.09"/>
	<text transform="matrix(1 0 0 1 73.4292 233.9816)" class="st4 st5">CO</text>
	<rect x="269.13" y="184.65" class="st3" width="220.75" height="127.95"/>
	<text transform="matrix(1 0 0 1 269.1283 275.5302)" class="st4 st6">2</text>
</g>
</svg>

<!-- CO2 Slut -->
<!-- Termometer start -->

<svg class="termometer" onclick="loadTemp()" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 400.36 408.51" style="enable-background:new 0 0 400.36 408.51;" xml:space="preserve">

<g id="Ramme">
	<path class="st1" d="M399.68,7.69"/>
	<path class="st1" d="M398.27,6.96c-0.08,0.46,0.25,0.84-0.22,0.85L5.38,9.52c-0.6,0.01-1.07,0.49-1.07,1.07v392.64"/>
	<path class="st1 ramme" d="M4.75,6.82v394.82c0,1.07-0.44,1.07,1.09,1.07h393.42c0.98-0.18,1.09-395.77,1.09-395.77
		c-0.12-1.41-0.12-1.41-0.12-1.41L5.83,5.75C5.23,5.76,4.75,6.23,4.75,6.82z"/>
	<path class="st1" d="M434.19,254.6"/>
</g>
<g id="Layer_2">
	<polygon class="st2" points="35.52,33.1 34.13,372.9 370.71,369.68 370.71,33.1 	"/>
</g>
<g id="Layer_4">
	<g>
		<title>Layer 1</title>
		<g id="g5247">
			
				<radialGradient id="path1295_1_" cx="581.1141" cy="-244.4382" r="95.6324" fx="581.1142" fy="-243.3812" gradientTransform="matrix(0.7164 0 0 -0.6412 -242.2948 155.2752)" gradientUnits="userSpaceOnUse">
				<stop  offset="0" style="stop-color:#010101"/>
				<stop  offset="1" style="stop-color:#010101"/>
			</radialGradient>
			<path id="path1295" class="st3" d="M217.44,275.74c24.54,8.22,37.21,33.22,28.3,55.85s-36.03,34.31-60.57,26.1
				c-24.54-8.22-37.21-33.22-28.3-55.85c4.74-12.03,14.97-21.54,27.99-25.99"/>
			<path id="path1297" class="st4" d="M185.28,61.49c-0.42-8.32,6.42-15.39,15.27-15.79c8.85-0.4,16.37,6.04,16.8,14.36
				c0.02,0.31,0.02,0.58,0.02,0.89"/>
			<path id="path3576" class="st4" d="M185.1,61.71l-0.68,214.21"/>
			<path id="path3578" class="st4" d="M217.52,59.84l-0.68,216.08"/>
			
				<linearGradient id="rect2143_1_" gradientUnits="userSpaceOnUse" x1="-27.0785" y1="559.9835" x2="-33.5076" y2="559.9835" gradientTransform="matrix(15.6878 0 0 -449.7817 762.023 252066.5313)">
				<stop  offset="0" style="stop-color:#010101"/>
				<stop  offset="1" style="stop-color:#010101"/>
			</linearGradient>
			<rect id="rect2143" x="184.43" y="117.47" class="st5" width="32.41" height="157.49"/>
			<rect id="rect2947" x="232.62" y="230.43" class="st6" width="15.53" height="2.49"/>
			<rect id="rect2949" x="232.59" y="121.98" class="st7" width="15.53" height="2.49"/>
			<rect id="rect2953" x="232.66" y="214.65" class="st6" width="15.53" height="2.49"/>
			<rect id="rect2955" x="232.61" y="199.21" class="st4" width="15.53" height="2.49"/>
			<rect id="rect2957" x="232.68" y="183.39" class="st7" width="15.53" height="2.49"/>
			<rect id="rect2959" x="232.61" y="137.43" class="st7" width="15.53" height="2.49"/>
			<rect id="rect2961" x="232.37" y="168.32" class="st7" width="15.53" height="2.49"/>
			<rect id="rect2963" x="232.4" y="152.87" class="st7" width="15.53" height="2.49"/>
			<rect id="rect2965" x="232.37" y="245.72" class="st6" width="15.53" height="2.49"/>
			<rect id="rect2967" x="232.75" y="260.98" class="st6" width="15.53" height="2.49"/>
			<rect id="rect2969" x="232.4" y="106.54" class="st7" width="15.53" height="2.49"/>
			<rect id="rect2971" x="232.78" y="90.86" class="st7" width="15.53" height="2.49"/>
		</g>
	</g>
</g>
</svg>


<!-- Termometer slut -->

<!-- Luftfugtighed Start -->
        
 <?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 23.0.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg class="hum" onclick="loadHum()" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 400.36 408.51" style="enable-background:new 0 0 400.36 408.51;" xml:space="preserve">

<g id="Ramme">
	<path class="st1" d="M399.68,7.69"/>
	<path class="st1" d="M398.27,6.96c-0.08,0.46,0.25,0.84-0.22,0.85L5.38,9.52c-0.6,0.01-1.07,0.49-1.07,1.07v392.64"/>
	<path class="st1 ramme" d="M4.75,6.82v394.82c0,1.07-0.44,1.07,1.09,1.07h393.42c0.98-0.18,1.09-395.77,1.09-395.77
		c-0.12-1.41-0.12-1.41-0.12-1.41L5.83,5.75C5.23,5.76,4.75,6.23,4.75,6.82z"/>
	<path class="st1" d="M434.19,254.6"/>
</g>
<g id="Layer_2">
	<polygon class="st2" points="35.52,33.1 34.13,372.9 370.71,369.68 370.71,33.1 	"/>
</g>
<g id="Layer_4">
	<g>
		<g>
			<path class="st3" d="M204.06,313.71c-44.29,0-80.2-36.33-80.2-81.14s37.19-92.5,81.32-132.61
				c42.41,38.97,79.08,87.8,79.08,132.61S248.35,313.71,204.06,313.71z"/>
			<path class="st4" d="M197.9,129.88c-13.04,7.09-44.35,46.49-51,59.78c-5.08,10.16-9.17,24.74-9.17,36.1
				c0,5.97-3.92,16.33,2.29,20.06c0.98,0.59,2.29,0,3.44,0c8.23,0,11.96-6.67,14.33-13.75c10.19-30.56,18.55-62.21,36.68-89.4
				c2.24-3.36,5.99-7.83,4.58-12.03"/>
			<path class="st5" d="M124.04,227.38c46.6,119.28,147.46,33.32,157.99,22.95c-4.54,24.07-21.98,45.71-44.96,56.22
				c-10.56,4.83-21.42,7.02-33.01,7.17c-6.09,0-12.18-0.69-18.11-2.08c-23.03-5.37-42.65-21.06-53.32-42.12
				c-5.58-11.02-8.29-22.53-8.75-34.85c-0.05-3.22-0.05-1.29,0.08-5.79L124.04,227.38z"/>
			<path class="st6" d="M267.19,218.02c-5.29,1.28-8.88,9.13-11.94,13.47c-4.38,6.21-6.6,37.2,7.74,34.72
				c2.18-0.38,4.84-0.38,6.68-1.74c8.24-6.07,21.67-50.85-3.95-46.42"/>
		</g>
		<g>
			<path class="st3" d="M311.46,195.35c-23.77,0-43.04-18.39-43.04-41.07s19.96-46.82,43.64-67.13
				c22.76,19.73,42.44,44.44,42.44,67.13S335.23,195.35,311.46,195.35z"/>
			<path class="st4" d="M308.16,102.3c-7,3.59-23.8,23.53-27.37,30.26c-2.73,5.14-4.92,12.52-4.92,18.28c0,3.02-2.1,8.27,1.23,10.15
				c0.53,0.3,1.23,0,1.85,0c4.42,0,6.42-3.37,7.69-6.96c5.47-15.47,9.95-31.49,19.68-45.25c1.2-1.7,3.21-3.96,2.46-6.09"/>
			<path class="st5" d="M268.52,151.65c25.01,60.38,79.13,16.86,84.78,11.62c-2.44,12.18-11.79,23.14-24.13,28.46
				c-5.67,2.45-11.5,3.55-17.71,3.63c-3.27,0-6.54-0.35-9.72-1.05c-12.36-2.72-22.89-10.66-28.61-21.32
				c-2.99-5.58-4.45-11.41-4.69-17.64c-0.03-1.63-0.03-0.65,0.04-2.93L268.52,151.65z"/>
			<path class="st6" d="M345.34,146.91c-2.84,0.65-4.76,4.62-6.41,6.82c-2.35,3.14-3.54,18.83,4.16,17.57
				c1.17-0.19,2.6-0.19,3.58-0.88c4.42-3.07,11.63-25.74-2.12-23.5"/>
		</g>
		<g>
			<path class="st3" d="M78.61,255.33c-15.98,0-28.93-14.44-28.93-32.25s13.42-36.76,29.34-52.7c15.3,15.49,28.53,34.89,28.53,52.7
				S94.59,255.33,78.61,255.33z"/>
			<path class="st4" d="M76.39,182.27c-4.71,2.82-16,18.48-18.4,23.76c-1.83,4.04-3.31,9.83-3.31,14.35c0,2.37-1.41,6.49,0.83,7.97
				c0.35,0.23,0.83,0,1.24,0c2.97,0,4.32-2.65,5.17-5.47c3.67-12.14,6.69-24.72,13.23-35.53c0.81-1.34,2.16-3.11,1.65-4.78"/>
			<path class="st5" d="M49.75,221.02c16.81,47.4,53.2,13.24,56.99,9.12c-1.64,9.57-7.93,18.16-16.22,22.34
				c-3.81,1.92-7.73,2.79-11.91,2.85c-2.2,0-4.39-0.28-6.53-0.83c-8.31-2.14-15.39-8.37-19.23-16.74
				c-2.01-4.38-2.99-8.95-3.16-13.85c-0.02-1.28-0.02-0.51,0.03-2.3L49.75,221.02z"/>
			<path class="st6" d="M101.39,217.3c-1.91,0.51-3.2,3.63-4.31,5.36c-1.58,2.47-2.38,14.78,2.79,13.8
				c0.79-0.15,1.75-0.15,2.41-0.69c2.97-2.41,7.82-20.21-1.43-18.45"/>
		</g>
	</g>
</g>
</svg>
      
<!-- Luftfugtighed Slut -->  
        
<!-- Home start -->
        
<img class="homepic" onclick="loadHome()" src="home.png" alt="Hjem knap">        
<!-- Home slut -->
 </div>         
<script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest(); 
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                   var myObj = JSON.parse(this.responseText);
                    visGraf(myObj);
                }
            };
            xhttp.open("POST", "grafData.php?s=jordfugtighed&sys=IdaErin", true);
            xhttp.send();
        }
            function visGraf(inputData){
                
                let xl = [];
                let yl = [];
                
                for(i in inputData){
                    xl.push(inputData[i].nobstime)
                    yl.push(inputData[i].nvalue)
                }
                var data = [{
                    x: xl,
                    y: yl,
                    type: 'line'
                }];
            
            Plotly.newPlot('grafen', data, {}, {showSendToCloud:true});
            }
            
            loadDoc();
            setInterval(loadDoc, 5000);

</script>
    </body>
</html>