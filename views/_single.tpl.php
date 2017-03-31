<?php 
require_once("views/_header.tpl.php");
?>
<div class="row">
	<?php foreach($results as $key => $einzelbeitrag){ ?>	
		<div class="col-md- col-sm- col-xs-12">
			<img class="img-responsive" src="<?php echo $einzelBeitrag['beitragsbild'];?>" alt="Beitragsbild">
				<div class="pic-wrapper">
					<img class="img-responsive" src="<?php echo $einzelbeitrag['beitragsbild']; ?>" alt="Beitragsbild">
					<div class="overlayer">
						Testausgabe auf dem Bild
					</div>
				
				</div>
			<div class="col-xs-12">
				<div class="text-small meta">
					<?php echo date("d.m.Y", strtotime($einzelbeitrag['erstellt'])); ?>
					<?php echo $einzelbeitrag['benutzername']; ?>
				<div>
					<span class="category">
						<p>Kategorie(n): <?php echo implode(" | ", $einzelbeitrag['kategorien']) ;?></p>
					</span>
				</div>
				</div>
				<div class="text-big title text-center">
					<h3><?php echo $einzelbeitrag['titel']; ?></h3>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<?php 
require_once("views/_footer.tpl.php");
?>