<?php
	$brioche = (integer)$_GET['var'];

	if ($_GET['act'] == 'minus') {
		if ($brioche > 1) {
			$brioche -= 1;
		}
	}
	if ($_GET['act'] == 'plus') {
		$brioche += 1;
	}
	
?>
<span id="brioche-number"><?= $brioche ?></span>&nbsp;
<input type="hidden" name="jumlah" value="<?= $brioche ?>">