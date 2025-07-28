# Examples

This directory contains examples of the most important rules defined in the pint-rules package.

## Structure

Each example file demonstrates a specific rule with:
- **✅ Correct usage** - Properly formatted code that follows the rule
- **✅ Additional examples** - More complex scenarios showing the rule in action
- **Note** - Explanation of why the rule is important

## Available Examples

1. **01_single_quote.php** - Single quote usage for strings
2. **02_array_syntax.php** - Short array syntax `[]` instead of `array()`
3. **03_binary_operator_spaces.php** - Proper spacing around binary operators
4. **04_phpdoc_align.php** - Left-aligned PHPDoc tags
5. **05_ternary_to_null_coalescing.php** - Null coalescing operator `??`
6. **06_ordered_attributes.php** - Alphabetically ordered attributes
7. **07_visibility_required.php** - Explicit visibility declarations
8. **08_return_type_declaration.php** - Return type declarations
9. **09_constant_case.php** - Uppercase constant naming
10. **10_method_argument_space.php** - Proper spacing in method arguments
11. **11_ternary_operator_spaces.php** - Spacing around ternary operators
12. **12_cast_spaces.php** - Proper spacing around type casts
13. **13_compact_nullable_typehint.php** - Compact nullable type hints
14. **14_concat_space.php** - Proper spacing in string concatenation
15. **15_no_useless_concat_operator.php** - Avoid useless concatenation
16. **16_no_unneeded_braces.php** - Remove unnecessary braces
17. **17_no_trailing_whitespace.php** - Remove trailing whitespace
18. **18_control_structure_braces.php** - Proper braces in control structures
19. **19_lowercase_keywords.php** - Lowercase PHP keywords
20. **20_void_return.php** - Void return type declarations
21. **21_ordered_interfaces.php** - Alphabetically ordered interfaces
22. **22_ordered_traits.php** - Alphabetically ordered traits
23. **23_phpdoc_trim.php** - Trim PHPDoc comments
24. **24_no_trailing_comma_in_singleline.php** - No trailing commas in single lines
25. **25_no_spaces_inside_parenthesis.php** - No spaces inside parentheses
26. **26_clean_namespace.php** - Clean namespace declarations
27. **27_protected_to_private.php** - Convert protected to private when possible
28. **28_function_typehint_space.php** - Proper spacing in function type hints
29. **29_lowercase_cast.php** - Lowercase type casts
30. **30_trim_array_spaces.php** - Trim spaces in arrays
31. **31_phpdoc_single_line_var_spacing.php** - Proper spacing in single-line PHPDoc
32. **32_phpdoc_scalar.php** - Scalar type hints in PHPDoc
33. **33_no_blank_lines_after_phpdoc.php** - No blank lines after PHPDoc
34. **34_no_space_around_double_colon.php** - No spaces around double colon
35. **35_no_spaces_after_function_name.php** - No spaces after function name
36. **36_no_spaces_around_offset.php** - No spaces around array offset
37. **37_object_operator_without_whitespace.php** - No whitespace around object operator
38. **38_switch_case_space.php** - Proper spacing in switch cases
39. **39_type_declaration_spaces.php** - Proper spacing in type declarations
40. **40_whitespace_after_comma_in_array.php** - Whitespace after comma in arrays
41. **41_phpdoc_no_empty_return.php** - No empty return in PHPDoc
42. **42_attribute_empty_parentheses.php** - Empty parentheses in attributes
43. **43_operator_linebreak.php** - Operator line breaks
44. **44_no_useless_nullsafe_operator.php** - No useless nullsafe operators
45. **45_function_declaration.php** - Function declaration formatting
46. **46_no_multiline_whitespace_around_double_arrow.php** - No multiline whitespace around double arrow
47. **47_no_trailing_whitespace_in_comment.php** - No trailing whitespace in comments
48. **48_no_whitespace_before_comma_in_array.php** - No whitespace before comma in arrays
49. **49_linebreak_after_opening_tag.php** - Line break after opening tag
50. **50_method_chaining_indentation.php** - Method chaining indentation
51. **51_no_empty_comment.php** - No empty comments
52. **52_no_empty_statement.php** - No empty statements
53. **53_no_multiple_statements_per_line.php** - No multiple statements per line
54. **54_phpdoc_line_span.php** - PHPDoc line span formatting
55. **55_combine_consecutive_unsets.php** - Combine consecutive unsets
56. **56_combine_consecutive_issets.php** - Combine consecutive issets
57. **57_control_structure_continuation_position.php** - Control structure continuation position
58. **58_list_syntax.php** - List syntax formatting
59. **59_lowercase_static_reference.php** - Lowercase static references
60. **60_magic_constant_casing.php** - Magic constant casing
61. **61_magic_method_casing.php** - Magic method casing
62. **62_native_function_casing.php** - Native function casing
63. **63_no_alternative_syntax.php** - No alternative syntax
64. **64_no_null_property_initialization.php** - No null property initialization
65. **65_nullable_type_declaration.php** - Nullable type declarations
66. **66_phpdoc_var_without_name.php** - PHPDoc var without name
67. **67_simplified_if_return.php** - Simplified if return
68. **68_switch_case_semicolon_to_colon.php** - Switch case semicolon to colon
69. **69_no_extra_blank_lines.php** - No extra blank lines
70. **70_single_space_around_construct.php** - Single space around construct
71. **71_align_multiline_comment.php** - Align multiline comments
72. **72_multiline_comment_opening_closing.php** - Multiline comment opening/closing
73. **73_single_line_comment_spacing.php** - Single line comment spacing
74. **74_short_scalar_cast.php** - Short scalar cast
75. **75_single_blank_line_at_eof.php** - Single blank line at end of file
76. **76_unary_operator_spaces.php** - Unary operator spaces
77. **77_phpdoc_indent.php** - PHPDoc indentation
78. **78_comment_to_phpdoc.php** - Convert comments to PHPDoc
79. **79_no_empty_phpdoc.php** - No empty PHPDoc
80. **80_phpdoc_add_missing_param_annotation.php** - Add missing PHPDoc parameter annotations

## Code Quality

All examples in this directory:
- ✅ Follow PSR-12 coding standards
- ✅ Pass Pint validation without issues
- ✅ Demonstrate best practices
- ✅ Are automatically formatted by Pint

## Usage

These examples can be used to:
- Understand how each rule works
- Train team members on coding standards
- Verify that your code follows the defined rules
- Reference correct formatting patterns

## Running Examples

To test these examples with Pint:

```bash
# Check formatting (should pass without issues)
./vendor/bin/pint --config=vendor/pekral/pint-rules/pint.json --test Example/

# Fix formatting (should not make any changes)
./vendor/bin/pint --config=vendor/pekral/pint-rules/pint.json Example/
```

 