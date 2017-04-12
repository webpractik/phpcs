<?php

return PhpCsFixer\Config::create()
	->setUsingCache(false)
	->setRules([
		'@PSR2' => true,
		'indentation_type' => true,
		'array_syntax' => [
			'syntax' => 'short'
		],
		'binary_operator_spaces' => [
			'align_double_arrow' => false,
			'align_equals' => false,
		],
		'braces' => [
			'position_after_functions_and_oop_constructs' => 'same'
		],
	])
	->setIndent("\t")
	->setLineEnding("\n")
;