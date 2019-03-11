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
    
        <h1>Luftfugtighed</h1>
        <div class="fugt">
        <div class="graf" id="grafen"></div>
<!-- CO2 start -->        

<svg class="co2" onclick="loadCo2()" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 400.36 408.51" style="enable-background:new 0 0 400.36 408.51;" xml:space="preserve">

<g id="Ramme">
	<path class="st1" d="M399.68,7.69"/>
	<path class="st1" d="M398.27,6.96c-0.08,0.46,0.25,0.84-0.22,0.85L5.38,9.52c-0.6,0.01-1.07,0.49-1.07,1.07v392.64"/>
	<path class="st1" d="M4.75,6.82v394.82c0,1.07-0.44,1.07,1.09,1.07h393.42c0.98-0.18,1.09-395.77,1.09-395.77
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
	<path class="st1" d="M4.75,6.82v394.82c0,1.07-0.44,1.07,1.09,1.07h393.42c0.98-0.18,1.09-395.77,1.09-395.77
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
<!-- Lux Start -->
        
<svg class="jord" onclick="loadJord()" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 400.36 408.51" style="enable-background:new 0 0 400.36 408.51;" xml:space="preserve">

<g id="Ramme">
	<path class="st1" d="M399.68,7.69"/>
	<path class="st1" d="M398.27,6.96c-0.08,0.46,0.25,0.84-0.22,0.85L5.38,9.52c-0.6,0.01-1.07,0.49-1.07,1.07v392.64"/>
	<path class="st1" d="M4.75,6.82v394.82c0,1.07-0.44,1.07,1.09,1.07h393.42c0.98-0.18,1.09-395.77,1.09-395.77
		c-0.12-1.41-0.12-1.41-0.12-1.41L5.83,5.75C5.23,5.76,4.75,6.23,4.75,6.82z"/>
	<path class="st1" d="M434.19,254.6"/>
</g>
<g id="Layer_2">
	<polygon class="st2" points="35.52,33.1 34.13,372.9 370.71,369.68 370.71,33.1 	"/>
</g>
<g id="Layer_4">
	<g>
		<polygon class="st3" points="218.88,116.83 206.43,53.59 193.98,116.83 206.43,116.83 		"/>
		<polygon class="st4" points="165.3,127.85 176.08,121.62 133.68,73.08 154.51,134.08 		"/>
		<polygon class="st3" points="135.19,157.96 141.42,147.18 80.42,126.34 128.96,168.75 		"/>
		<polygon class="st4" points="124.17,199.09 124.17,186.64 60.92,199.09 124.17,211.55 		"/>
		<polygon class="st3" points="135.19,240.22 128.96,229.44 80.42,271.85 141.41,251.01 		"/>
		<polygon class="st4" points="154.52,264.11 133.68,325.11 176.08,276.56 165.3,270.34 		"/>
		<polygon class="st3" points="193.98,281.35 206.43,344.6 218.88,281.36 206.43,281.36 		"/>
		<polygon class="st4" points="247.56,270.34 236.78,276.56 279.18,325.11 258.35,264.11 		"/>
		<polygon class="st3" points="277.67,240.22 271.45,251.01 332.44,271.85 283.9,229.44 		"/>
		<polygon class="st4" points="351.94,199.09 288.69,186.64 288.7,199.09 288.69,211.54 		"/>
		<polygon class="st3" points="277.67,157.96 283.9,168.74 332.44,126.34 271.44,147.18 		"/>
		<polygon class="st4" points="258.35,134.08 279.18,73.08 236.78,121.62 247.56,127.85 		"/>
		<path class="st5" d="M206.43,123.91v150.37c41.52,0,75.19-33.66,75.19-75.19S247.96,123.91,206.43,123.91z"/>
		<path class="st6" d="M131.25,199.09c0,41.52,33.66,75.19,75.19,75.19V123.91C164.91,123.91,131.25,157.57,131.25,199.09z"/>
	</g>
</g>
</svg>

<!-- Lux Slut --> 
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
            xhttp.open("POST", "grafData.php?s=luftfugtighed&sys=IdaErin", true);
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