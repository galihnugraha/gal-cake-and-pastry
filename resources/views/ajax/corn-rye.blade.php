<?php
	$cornrye = (integer)$_GET['var'];

	if ($_GET['act'] == 'minus') {
		if ($cornrye > 1) {
			$cornrye -= 1;
		}
	}
	if ($_GET['act'] == 'plus') {
		$cornrye += 1;
	}
	
?>
<span id="corn-rye-number"><?= $cornrye ?></span>&nbsp;
<input type="hidden" name="jumlah" value="<?= $cornrye ?>">