<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->notPath('vendor')
    ->notPath('bootstrap')
    ->notPath('storage')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php')
;

$config = new PhpCsFixer\Config();

return $config->setRules([
    '@PSR12' => true,
    'indentation_type' => true,
    'array_indentation' => true,
    'array_syntax' => ['syntax' => 'short'],
    'combine_consecutive_unsets' => true,
    'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
    'single_quote' => true,
    'blank_line_before_statement' => ['statements' => ['return']],
    'braces' => [
        'allow_single_line_closure' => true,
    ],
    'concat_space' => ['spacing' => 'one'],
    'function_typehint_space' => true,
    'single_line_comment_style' => ['comment_types' => ['hash']],
    'include' => true,
    'no_closing_tag' => true,
    'no_empty_comment' => true,
    'no_extra_blank_lines' => ['tokens' => ['curly_brace_block', 'extra', 'parenthesis_brace_block', 'square_brace_block', 'throw', 'use']],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_spaces_around_offset' => true,
    'no_unused_imports' => true,
    'no_whitespace_before_comma_in_array' => true,
    'no_trailing_whitespace_in_comment' => true,
    'object_operator_without_whitespace' => true,
    'space_after_semicolon' => true,
    'standardize_not_equals' => true,
    'ternary_operator_spaces' => true,
    'trailing_comma_in_multiline' => ['elements' => ['arrays']],
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'whitespace_after_comma_in_array' => true,
    'class_attributes_separation' => true,
])
    ->setIndent('    ')
    ->setLineEnding("\n")
    ->setFinder($finder)
;
