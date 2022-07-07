<?php

$paragraph = "Vestibulum in lacinia metus, Suspendisse in enim ipsum. nulla faciis.
Donec ante turpis, dictum sed magna et, dapibus faucibus odio.";

$censor = $_GET["censor"];

$paragraph_censored = str_replace($censor, '***', $paragraph)

?>

<h2>stampo la stringa : <?php echo $paragraph ?></h2>
<h2>lunghezza stringa : <?php echo strlen($paragraph) ?></h2>

<h2>stringa con censura : <?php echo  $paragraph_censored?></h2>
<h2>lunghezza stringa con censura : <?php echo strlen($paragraph_censored) ?></h2>
