<?php

return PhpCsFixer\Config::create()
	->setUsingCache(false)
	->setRules([
		'@PSR2' => true,
		'indentation_type' => true,
		'braces' => [
			'position_after_functions_and_oop_constructs' => 'same'
		],
	])
	->setIndent("\t")
	->setLineEnding("\n")
;