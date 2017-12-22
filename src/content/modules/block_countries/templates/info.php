<?php
$cfg = new config ();
$list = array ();
if (isset ( $cfg->blocked_countries ) and is_array ( $cfg->blocked_countries )) {
	$list = $cfg->blocked_countries;
}

?>
<div class="alert alert-info">
	<p><?php translate("block_countries_instructions");?></p>
</div>
<?php if(count($list) > 0){?>
<ol>
<?php foreach($list as $country){?>
<li><?php esc($country);?></li>
<?php }?>
</ol>
<?php } else {?>
<div class="alert alert-warning">
	<p><?php translate("no_countries_found");?></p>
</div>
<?php }?>