<?php
    include ('php/Includes/Arrays.php')
?>

<section>
	<div class="container-fluid">
		<div class="row intro-tables">
			<div class="col-md-12">
				<h1 class="white"><span>Nuestras Últimas bodas</span></h1>
			</div>

            <?php

                $contador = 1;

                foreach ($Weddings as $wedding) {
            ?>
            <div class="col-md-4">
				<div class="intro-table <?php echo $wedding[Wedding] ?>">
					<h5 class="white heading hide-hover"><?php echo $wedding[Place] ?></h5>
					<div class="bottom">
						<h4 class="white"><?php echo $wedding[Name] ?></h4>
						<a href="<?php echo $wedding[link] ?>" class="btn btn-white-fill expand">Ver Boda</a>
					</div>
				</div>
			</div>
            <?php

                if ($contador > 4 && $Location != "Bodas" ) {
                    break;
                    }
                $contador++;
                }

            ?>
            <div class="col-md-4">
				<div class="intro-table Social">
					<h4>Síguenos en redes sociales</h4>
					<a href="#" class="btn expand" ><i class="fa fa-facebook-official"></i> Facebook</a>
					<a href="#" class="btn expand" ><i class="fa fa-instagram"></i> Instagram</a>
				</div>
			</div>
		</div>
	</div>
</section>
