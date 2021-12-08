<?php
	$muffin = (integer)$_GET['var'];

	if ($_GET['act'] == 'minus') {
		if ($muffin > 1) {
			$muffin -= 1;
		}
	}
	if ($_GET['act'] == 'plus') {
		$muffin += 1;
	}
	
?>
<span id="muffin-number"><?= $muffin ?></span>&nbsp;
<input type="hidden" name="jumlah" value="<?= $muffin ?>">