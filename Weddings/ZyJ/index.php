<?php
    $ROOT = '../../';
    include ('../../php/Includes/Header.php');
?>

<section class="WeddingDescription">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 Content">
                <div class="Wedding" id="<?php echo $wedding[Wedding] ?>">
					<div class="Icon">
						<img src="../../img/Camara.png" alt="icono camara" ><br><br>
						<a href="pics/1.jpg" class="ViewButton fresco"
							data-fresco-group='<?php echo $wedding[Wedding] ?>'
							data-fresco-caption="<?php echo $wedding[Place] ?>">
                        Ver la galeria
                        </a>
						<a href='pics/2.jpg'  class="fresco" data-fresco-group='Z & J'  data-fresco-caption="2/10  K 6 J, Yautepec, Morelos, Morelos" /></a>
						<a href='pics/3.jpg'  class="fresco" data-fresco-group='Z & J'  data-fresco-caption="3/10  K 6 J, Yautepec, Morelos, Morelos" /></a>
						<a href='pics/4.jpg'  class="fresco" data-fresco-group='Z & J'  data-fresco-caption="4/10  K 6 J, Yautepec, Morelos, Morelos" /></a>
						<a href='pics/5.jpg'  class="fresco" data-fresco-group='Z & J'  data-fresco-caption="5/10  K 6 J, Yautepec, Morelos, Morelos" /></a>
						<a href='pics/6.jpg'  class="fresco" data-fresco-group='Z & J'  data-fresco-caption="6/10  K 6 J, Yautepec, Morelos, Morelos" /></a>
						<a href='pics/7.jpg'  class="fresco" data-fresco-group='Z & J'  data-fresco-caption="7/10  K 6 J, Yautepec, Morelos, Morelos" /></a>
						<a href='pics/8.jpg'  class="fresco" data-fresco-group='Z & J'  data-fresco-caption="8/10  K 6 J, Yautepec, Morelos, Morelos" /></a>
						<a href='pics/9.jpg'  class="fresco" data-fresco-group='Z & J'  data-fresco-caption="9/10  K 6 J, Yautepec, Morelos, Morelos" /></a>
						<a href='pics/10.jpg' class="fresco" data-fresco-group='Z & J'  data-fresco-caption="10/10 K 6 J, Yautepec, Morelos, Morelos" /></a>
					</div>
				</div>
				<div class="Description">
					<h3><span>Z <b>&</b> J</span></h3>
					<p><?php echo $wedding[Place] ?></p>
				</div>
			</div>
			<div class="col-md-12 Intro">
				<p>“Los detalles Pinterest hicieron que esa boda fuera romántica y dulce”</p>
			</div>
			<div class="col-md-12 HistoryExtras">
				<h1 class="white"><span>La Historia</span></h1>
				<div class="col-md-9 History">
					<p>Azul Marino, un toque de rosa y dorado, además de una mesa con agua fresca de mandarina y un globo terráqueo para que los invitados puedan dejar un mensaje a los novios fueron los detalles Pinterest hicieron que esa boda fue romántica y dulce.</p>
				</div>
				<div class="col-md-3 Extras">
					<h2><span>Datos Interesantes</span></h2>
					<table>
						<tr>
							<td>Invitados:</td>
							<td>60 personas</td>
						</tr>
						<tr>
							<td>Decoración:</td>
							<td>Méxicana</td>
						</tr>
						<tr>
							<td>Locación:</td>
							<td>Hacienda, Los Laureles</td>
						</tr>
						<tr>
							<td>Comida:</td>
							<td>Méxicana</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
    $ROOT = '../../';
    include ('../../php/Includes/Footer.php')
?>
