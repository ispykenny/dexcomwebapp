<?php include('header.php'); ?>

	<div class="site-container">
		<div class="graph">
				

			<div class="avg"></div>
			<canvas id="myChart" style="height:40vh; width:80vw></canvas>

			<div class="loader">
				<svg
					 width="1000" height="1000" viewBox="0 0 1000 1000"
					 xmlns="http://www.w3.org/2000/svg" version="1.1"
					 xmlns:xlink="http://www.w3.org/1999/xlink">
					<g transform="translate(500,500)">
						<rect class="rotate-45 rotate-back" x=-5 y=-5 width=10 height=10 stroke="black" stroke-width=20 fill="none"/>
						<rect class="rotate-45 rotate" x=-50 y=-50 width=100 height=100 stroke="black" stroke-width=20 stroke-linejoin="bevel" fill="none"/>
						<g transform="translate(-50,0) rotate(-45)"><polyline class="left" points="40,-40 50,-50 -40,-50 -50,-40 -50,50 -40,40" stroke="black" stroke-width=20 fill="none"/></g>
						<g transform="translate(50,0) rotate(135)"><polyline class="right" points="40,-40 50,-50 -40,-50 -50,-40 -50,50 -40,40" stroke="black" stroke-width=20 fill="none"/></g>
						<text y=-140 text-anchor="middle" font-weight="bold" font-size="3em" font-family="sans-serif">loading...</text>
					</g>
				</svg>
			</div>
		</div>
	</div>


	<div class="graph">
		<div class="the-what" style="text-align: center;">
			<a target="_blank" href="https://twitter.com/ispykenny"><small>by kenny krosky <i class="fa fa-twitter" aria-hidden="true"></i></small></a>
		</div>
	</div>






		<div class="view"></div>
		<script src="assets/js/global.js"></script>
</body>
</html>