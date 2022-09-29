<?php
	$link = "https://storage.googleapis.com/gweb-uniblog-publish-prod/images/play_10_year-keyword_asset-.max-1000x1000.max-1000x1000.png";

	$content = file_get_contents($link);

	$parse = parse_url($link);

	$basename = basename($parse["path"]);

	$file = fopen($basename, "w+");

	fwrite($file, $content);

	fclose($file);
?>

<img src="<?=$basename?>">