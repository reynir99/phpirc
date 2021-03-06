<?php
/**
 * Example config.php
 *
 * @author Gussi <gussi@gussi.is>
 */

$config = array(
	'server'			=> array(
		'host'				=> 'irc.lolnet.is',
		'port'				=> '6667',
		'nick'				=> 'phpirc',
		'user'				=> 'phpirc',
		'real'				=> 'lolnet.is',
		'echo'				=> TRUE,
	),

	'module'			=> array(
		'ping'				=> TRUE,
		'nickchange'		=> TRUE,
		'autojoin'			=> array('#phpirc'),
	),
);
