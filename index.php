<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Open+Sans" rel="stylesheet">
	<title>Systèmes experts</title>
	<style type="text/css">
		html, body { height: 100%; }
		body {
			background: #333;
			font-family: 'Open Sans', sans-serif;
			display: flex;
			align-items: center;
		}
		.bloc {
			background: #fefefe;
			border-radius: 30px 30px 0 0;
			padding: 50px;
		}
		.title h1 {
			margin: 30px 0;
			color: #fefefe;
			font-family: 'Indie Flower', cursive;
		}
		select, input, button {
			width: 100%;
		}
		button {
			padding: 30px;
			border-radius: 0 0 30px 30px;
			border: none;
			background: #abcdef;
			border-top: 1px solid #abcdef;
			color: #fefefe;
			cursor: pointer;
			font-weight: 700;
		}
		button:hover {
			background: #fefefe;
			color: #abcdef;
		}
	</style>
</head>
<body>
	<div class="container">

		<div class="row align-items-center title">
			<div class="col-12 text-center">
				<h1>Systèmes experts</h1>
			</div>
		</div>

		<form class="row align-items-center">
			<div class="col-12">
				<div class="row align-items-center bloc">
					<div class="col-12 col-md-6 col-lg-3 text-center">
						<div class="row align-items-center">
							<div class="col-12">
								<label>Ordre :</label>
							</div>
							<div class="col-12">
								<select name="ordre">
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 text-center">
						<div class="row align-items-center">
							<div class="col-12">
								<label>Angles droits :</label>
							</div>
							<div class="col-12">
								<input type="number" name="angles-droits">
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 text-center">
						<div class="row align-items-center">
							<div class="col-12">
								<label>Côtés de même taille :</label>
							</div>
							<div class="col-12">
								<input type="number" name="cotes">
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 text-center">
						<div class="row align-items-center">
							<div class="col-12">
								<label>Côtés de même taille :</label>
							</div>
							<div class="col-12">
								<input type="number" name="cotes">
							</div>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<button type="submit">
						ENVOYER
					</button>
				</div>
			</div>
		</form>

	</div>
</body>
</html>