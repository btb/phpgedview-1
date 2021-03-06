<?php
/**
 * File used to display Historical facts on individual page
 *
 * Each line is a GEDCOM style record to describe an event, including newline chars (\n)
 * File to be renamed : histo.xx.php where xx is language code
 *
 * $Id$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$histo[] = "1 EVEN\n2 TYPE History\n2 DATE 11 NOV 1918\n2 NOTE WW1 Armistice";
$histo[] = "1 EVEN\n2 TYPE History\n2 DATE 8 MAY 1945\n2 NOTE WW2 Armistice";
?>
