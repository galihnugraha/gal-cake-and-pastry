<?php
	$baguette = (integer)$_GET['var'];

	if ($_GET['act'] == 'minus') {
		if ($baguette > 1) {
			$baguette -= 1;
		}
	}
	if ($_GET['act'] == 'plus') {
		$baguette += 1;
	}
	
?>
<span id="baguette-number"><?= $baguette ?></span>&nbsp;
<input type="hidden" name="jumlah" value="<?= $baguette ?>">