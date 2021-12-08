<?php
	$croisant = (integer)$_GET['var'];

	if ($_GET['act'] == 'minus') {
		if ($croisant > 1) {
			$croisant -= 1;
		}
	}
	if ($_GET['act'] == 'plus') {
		$croisant += 1;
	}
	
?>
<span id="croisant-number"><?= $croisant ?></span>&nbsp;
<input type="hidden" name="jumlah" value="<?= $croisant ?>">