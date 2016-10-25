<?php

function afficherTableau($tab)
{
	$aAfficher = '[';
	$aAfficher .= implode(",", $tab);
	$aAfficher .= ']';
	echo $aAfficher;
}

?>