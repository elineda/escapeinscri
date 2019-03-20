<?php
/**
 * Created by PhpStorm.
 * User: elineda
 * Date: 3/19/19
 * Time: 10:50 AM
 */


$grostab=$this->grostab;

$k=0;


?>
<h1>Equipe</h1>
<div class="row">
<?php for ($i=0;$i<sizeof($grostab);$i++):?>
    <div class="card col-md-3" style="margin-bottom: 1em; margin-left: 1em;">
        <div class="card-title" style="padding-top: 0.5em; text-align: center;">Equipe <?php echo $grostab[$i][0]['equipe'];?></div>
        <ul class="list-group list-group-flush">
            <?php for ($j=0;$j<sizeof($grostab[$i]);$j++):?>

                <li class="list-group-item indent"><p><?php print_r($grostab[$i][$j]['nom'])?></p> <p><?php echo $grostab[$i][$j]['formation'] ?></p></li>

            <?php endfor ?>
        </ul>
    </div>

<?php endfor; ?>
</div>