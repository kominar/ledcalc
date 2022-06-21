<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://del2.aw-test.ru/wp-content/themes/alfa_led/style.css' type='text/css' media='all' />
  <script src="jquery.js"></script>
  <title></title>
</head>
<style media="screen">
	@font-face {
			font-family: Manrope-Medium;
			src: url('fonts/Manrope-Medium.ttf');
	}
</style>
<body id="body">
	<section class="section-2">
	    <div class="container">
				<?
					include($_SERVER['DOCUMENT_ROOT'] . '/calc.php');
				?>
		</div>
	</section>
</body>
</html>
