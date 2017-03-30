<?php 
require_once("views/_header.tpl.php");
?>

<div class="row">
    
    <?php foreach($results as $key => $einzelBeitrag){ ?>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="teaser-box">
            <img class="img-responsive" src="<?php echo $einzelBeitrag['beitragsbild'] ;?>" alt="beitragsbild">
            <div class="text-small meta">
                <?php echo date("d.m.Y", strtotime($einzelBeitrag['erstellt'])) ;?>
                <?php echo $einzelBeitrag['benutzername'];?>
            </div>
            <div class="text-big title">
                <h3><?php echo $einzelBeitrag['titel'];?></h3>
            </div>
        </div>
    </div>
    <?php } ?>
    
</div>

<?php 
require_once("views/_footer.tpl.php");
?>