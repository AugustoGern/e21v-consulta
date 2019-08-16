<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
</head>
<link rel="stylesheet" type="text/css" href="media/css/index.css">
<script src="https://kit.fontawesome.com/3b47dd4ac9.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<style type="text/css">
	
	area:focus {
		outline: none !important;	
	}
</style>
<body>

	<?php require_once('include/header.php'); ?>

	<div style="background-image: url('media/images/mdc-18.jpg'); min-height: 330px; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -118px; background-repeat: no-repeat;" class="shadow">
		<div class="text-center my-5">
			
		</div> 
	</div>


	<h1 class="text-center"  style="margin-top: -200px;">Clique exatamente na região do desconforto</h1>

	<div class="container-fluid">
		<div class="container">
			<div class="card mb-4" style="background-color: transparent; border: transparent;">
				<div class="card-body text-center">

					<img src="media/images/musculos.png" style="height: 30%;" usemap="#Map">
					<map name="Map" id="Map">
						<!-- cabeça -->
						<area alt="" title="" href="#" shape="poly" coords="166,32,177,33,186,38,192,43,196,51,198,58,198,66,197,71,197,76,201,74,203,78,203,83,202,89,200,93,198,96,193,95,191,99,192,102,191,107,190,112,190,116,168,130,144,120,142,102,141,95,137,95,133,90,131,82,131,76,138,64,138,55,140,48,145,42,151,36" />
						<!-- braço -->
						<area alt="" title="" href="#" shape="poly" coords="53,413,56,424,59,425,61,419,62,402,64,380,68,364,78,341,85,322,92,310,98,294,100,279,101,269,107,255,110,244,107,229,106,210,104,197,101,179,96,168,91,160,79,174,64,272,57,305,49,344,44,361,32,370,25,375,22,381,16,387,11,389,9,393,24,402,19,410,15,419,13,426,20,428,25,430,27,437,32,435,42,431,44,436,48,434" />
						<!-- outro braço -->
						<area alt="" title="" href="#" shape="poly" coords="331,389,317,377,307,367,297,361,292,347,286,332,285,315,282,294,278,272,270,252,267,234,263,219,262,204,262,188,258,169,248,157,237,164,236,178,235,198,233,210,234,224,233,242,235,251,239,270,243,291,253,318,263,338,269,353,272,367,273,378,275,386,276,393,277,400,277,408,277,416,278,422,283,424,289,422,290,427,292,431,295,433,299,433,305,427,307,430,309,434,313,434,320,424,322,426,326,424" />
						<!-- tronco -->
						<area alt="" title="" href="#" shape="poly" coords="110,178,228,174,228,202,228,216,228,229,229,247,224,274,227,299,229,316,234,337,234,342,118,342" />
						<!-- perna -->
						<area alt="" title="" href="#" shape="poly" coords="118,347,172,395,173,456,169,483,165,541,164,564,166,608,162,648,166,686,166,715,162,723,128,723,122,585,112,452,108,405" />
						<!-- outra perna -->
						<area alt="" title="" href="#" shape="poly" coords="236,354,181,394,179,436,181,470,182,504,182,523,185,556,183,572,182,594,184,628,183,652,179,673,177,685,177,699,176,712,177,719,185,723,198,724,211,723,215,719,227,585,237,458,244,425,242,381" />
					</map>
				</div>
			</div>
		</div>
	</div>

	<?php require_once('include/footer.php'); ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>