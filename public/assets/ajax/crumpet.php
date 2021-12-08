<?php
	$crumpet = (integer)$_GET['var'];

	if ($_GET['act'] == 'minus') {
		if ($crumpet > 1) {
			$crumpet -= 1;
		}
	}
	if ($_GET['act'] == 'plus') {
		$crumpet += 1;
	}
	
?>
<span id="crumpet-number"><?= $crumpet ?></span>&nbsp;
<input type="hidden" name="jumlah" value="<?= $crumpet ?>">