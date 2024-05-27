<!DOCTYPE html>
<html>

<head>
	<title>
		How to take screenshot of
		a div using JavaScript?
	</title>

	<!-- Include from the CDN -->
	<script src=
"https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js">
	</script>

	<!-- Include locally otherwise -->
	<!-- <script src='html2canvas.js'></script> -->

	<style>
		#photo {
			border: 4px solid green;
			padding: 4px;
		}
	</style>
</head>

<body>
	<img src="" alt="" srcset="">
	<div id="photo">
		<h1>GeeksforGeeks</h1>
		Hello everyone! This is a
		trial page for taking a
		screenshot.
		<br><br>
		This is a dummy button!
		<button> Dummy</button>
		<br><br>
		Click the button below to
		take a screenshot of the div.
		<br><br>

		<!-- Define the button
		that will be used to
		take the screenshot -->
		<button onclick="takeshot()">
			Take Screenshot
		</button>
	</div>
	<h1>Screenshot:</h1>
	<div id="output"></div>

	<script type="text/javascript">
		function dataURItoBlob(dataURI) {
			var byteString = atob(dataURI.split(',')[1]);
			var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];

			// write the bytes of the string to an ArrayBuffer
			var ab = new ArrayBuffer(byteString.length);
			var ia = new Uint8Array(ab);
			for (var i = 0; i < byteString.length; i++) {
				ia[i] = byteString.charCodeAt(i);
			}

			return new Blob([ab], {type: mimeString});

		}
		// Define the function
		// to screenshot the div
		function takeshot() {
			let div = document.getElementById('photo');

			// Use the html2canvas
			// function to take a screenshot
			// and append it
			// to the output div
			html2canvas(div).then(
				function (canvas) {
					document
					.getElementById('output')
					.appendChild(canvas);
					const dataURL = dataURItoBlob(canvas.toDataURL());
					console.log(dataURL);
					
				})
		}
	</script>
</body>

</html>
