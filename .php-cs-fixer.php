<?php

return (new PhpCsFixer\Config())
    ->setUsingCache(false)
    ->setRules([
        '@PSR12'                 => true,
        'indentation_type'       => true,
        '@PhpCsFixer'            => true,
        'array_syntax'           => [
            'syntax' => 'short',
        ],
        'binary_operator_spaces' => [],
        'braces'                 => [
            'position_after_functions_and_oop_constructs' => 'same',
        ],
    ]);
