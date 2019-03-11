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
<!-- Jordfugt Start -->

        
<svg class="jord" onclick="loadJord()" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 400.36 408.51" style="enable-background:new 0 0 400.36 408.51;" xml:space="preserve">

<g id="ydreRamme_x28_ikkeFarves_x29_">
</g>
<g id="Ramme">
</g>
<g id="Layer_2">
	<path class="st10" d="M396.02,10.27"/>
	<path class="st10" d="M394.62,9.55c-0.08,0.46,0.25,0.84-0.22,0.84L5.33,12.09c-0.59,0.01-1.06,0.48-1.06,1.06v390.1"/>
	<path class="st10 ramme" d="M4.71,9.41v392.27c0,1.06-0.44,1.06,1.08,1.06H395.6c0.97-0.18,1.08-393.21,1.08-393.21
		c-0.12-1.4-0.12-1.4-0.12-1.4L5.77,8.34C5.18,8.35,4.71,8.83,4.71,9.41z"/>
	<path class="st10" d="M430.21,255.59"/>
	<polygon class="st12" points="35.19,35.52 33.82,373.12 367.31,369.92 367.31,35.52 	"/>
	<g>
		<path class="st13" d="M211.38,124.18v-66.1L206.15,61c-25.36,14.11-40.5,37.73-40.5,63.19c0,23.46,12.87,45.36,34.73,59.69v-59.69
			H211.38z"/>
		<path class="st14" d="M222.39,124.18v59.69c21.87-14.33,34.73-36.23,34.73-59.69c0-25.46-15.14-49.08-40.5-63.19l-5.24-2.91v66.1
			H222.39z"/>
		<path class="st13" d="M281.64,192.93l47.13-28.81l-5.11-3.14c-11.02-6.77-22.93-10.35-34.46-10.35c-9.83,0-18.95,2.53-27.1,7.51
			c-16.18,9.89-25.98,28.29-26.97,50.04l40.88-24.99L281.64,192.93z"/>
		<path class="st14" d="M329.01,170.25l-0.24-6.12l-47.13,28.81l5.63,9.73l-40.88,24.98c9.3,4.63,19.05,7.06,28.54,7.06
			c9.83,0,18.95-2.53,27.1-7.51C319.9,216.28,329.99,194.99,329.01,170.25z"/>
		<path class="st14" d="M141.12,192.93l-47.13-28.81l-0.24,6.12c-0.97,24.74,9.12,46.04,26.99,56.96c8.15,4.98,17.27,7.51,27.1,7.51
			c9.49,0,19.24-2.43,28.54-7.06l-40.88-24.98L141.12,192.93z"/>
		<path class="st13" d="M146.75,183.2l40.88,24.99c-0.98-21.76-10.79-40.15-26.97-50.04c-8.15-4.98-17.27-7.51-27.1-7.51
			c-11.53,0-23.45,3.58-34.46,10.35l-5.11,3.14l47.13,28.81L146.75,183.2z"/>
		<polygon class="st15" points="281.64,192.93 276.02,183.2 235.13,208.19 222.39,215.97 222.39,183.87 222.39,124.18 211.38,124.18 
			200.37,124.18 200.37,183.87 200.37,215.97 187.64,208.19 146.75,183.2 141.12,192.93 135.5,202.66 176.38,227.65 200.37,242.32 
			200.37,258.78 211.38,258.78 222.39,258.78 222.39,242.32 246.39,227.65 287.27,202.66 		"/>
		<polygon class="st16" points="200.37,258.78 160.1,258.78 167.56,335.65 211.38,335.65 211.38,258.78 		"/>
		<polygon class="st17" points="211.38,335.65 255.21,335.65 262.66,258.78 222.39,258.78 211.38,258.78 		"/>
	</g>
	<g>
		<path class="st18" d="M210.45,325.07c-11.43,0-20.69-9.09-20.69-20.3s9.59-23.14,20.98-33.17c10.94,9.75,20.4,21.96,20.4,33.17
			S221.87,325.07,210.45,325.07z"/>
		<path class="st19" d="M208.86,279.08c-3.36,1.77-11.44,11.63-13.15,14.95c-1.31,2.54-2.36,6.19-2.36,9.03
			c0,1.49-1.01,4.09,0.59,5.02c0.25,0.15,0.59,0,0.89,0c2.12,0,3.09-1.67,3.7-3.44c2.63-7.64,4.78-15.56,9.46-22.36
			c0.58-0.84,1.54-1.96,1.18-3.01"/>
		<path class="st20" d="M189.81,303.47c12.02,29.84,38.04,8.33,40.75,5.74c-1.17,6.02-5.67,11.43-11.6,14.06
			c-2.72,1.21-5.53,1.76-8.51,1.79c-1.57,0-3.14-0.17-4.67-0.52c-5.94-1.34-11-5.27-13.75-10.54c-1.44-2.76-2.14-5.64-2.26-8.72
			c-0.01-0.81-0.01-0.32,0.02-1.45L189.81,303.47z"/>
		<path class="st21" d="M226.73,301.13c-1.36,0.32-2.29,2.28-3.08,3.37c-1.13,1.55-1.7,9.31,2,8.69c0.56-0.09,1.25-0.1,1.72-0.43
			c2.13-1.52,5.59-12.72-1.02-11.61"/>
	</g>
</g>
</svg>

<!-- Jordfugt Slut --> 
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