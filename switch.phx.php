<?php 
/*
 * description: swich for PHx
 * reason:      The internal select modifier of PHx does not provide a default option
 * usage:       [+string:switch=`xx:{{Chunk}}|yy:[*DocVar*]|default:[+TemplateVar+]+]
 */

$switches = explode('|', $options);
$default = '';
foreach ($switches as $switch) {
	$switch = explode(':', $switch);
	if ($switch[0] == $output) {
		return $switch[1];
	} elseif ($switch[0] == 'default') {
		$default = $switch[1];
	}
}
return $default;
?>
