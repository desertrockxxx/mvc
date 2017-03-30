<?php 
require_once("views/_header.tpl.php");
?>
<div class="row">
	<?php foreach($results as $key => $einzelbeitrag){ ?>	
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="teaser-box">
				<img class="img-responsive" src="<?php echo $einzelbeitrag['beitragsbild']; ?>" alt="Beitragsbild">
				<div class="text-small meta">
					<?php echo date("d.m.Y", strtotime($einzelbeitrag['erstellt'])); ?>
					<?php echo $einzelbeitrag['benutzername']; ?>
				</div>
				<div class="text-big title">
					<h3><?php echo $einzelbeitrag['titel']; ?></h3>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<?php 
require_once("views/_footer.tpl.php");
?>