<?php

/* Prototype file of classed PHP parser.
 * Written by Moriyoshi Koizumi, based on the work by Masato Bito.
 * This file is PUBLIC DOMAIN.
 */
class ParserDebug
{
    const YYBADCH      = 145;
    const YYMAXLEX     = 380;
    const YYTERMS      = 145;
    const YYNONTERMS   = 89;
    const YYLAST       = 969;
    const YY2TBLSTATE  = 337;
    const YYGLAST      = 412;
    const YYSTATES     = 761;
    const YYNLSTATES   = 542;
    const YYINTERRTOK  = 1;
    const YYUNEXPECTED = 32767;
    const YYDEFAULT    = -32766;

    // {{{ Tokens
    const YYERRTOK = 256;
    const T_INCLUDE = 257;
    const T_INCLUDE_ONCE = 258;
    const T_EVAL = 259;
    const T_REQUIRE = 260;
    const T_REQUIRE_ONCE = 261;
    const T_LOGICAL_OR = 262;
    const T_LOGICAL_XOR = 263;
    const T_LOGICAL_AND = 264;
    const T_PRINT = 265;
    const T_PLUS_EQUAL = 266;
    const T_MINUS_EQUAL = 267;
    const T_MUL_EQUAL = 268;
    const T_DIV_EQUAL = 269;
    const T_CONCAT_EQUAL = 270;
    const T_MOD_EQUAL = 271;
    const T_AND_EQUAL = 272;
    const T_OR_EQUAL = 273;
    const T_XOR_EQUAL = 274;
    const T_SL_EQUAL = 275;
    const T_SR_EQUAL = 276;
    const T_BOOLEAN_OR = 277;
    const T_BOOLEAN_AND = 278;
    const T_IS_EQUAL = 279;
    const T_IS_NOT_EQUAL = 280;
    const T_IS_IDENTICAL = 281;
    const T_IS_NOT_IDENTICAL = 282;
    const T_IS_SMALLER_OR_EQUAL = 283;
    const T_IS_GREATER_OR_EQUAL = 284;
    const T_SL = 285;
    const T_SR = 286;
    const T_INSTANCEOF = 287;
    const T_INC = 288;
    const T_DEC = 289;
    const T_INT_CAST = 290;
    const T_DOUBLE_CAST = 291;
    const T_STRING_CAST = 292;
    const T_ARRAY_CAST = 293;
    const T_OBJECT_CAST = 294;
    const T_BOOL_CAST = 295;
    const T_UNSET_CAST = 296;
    const T_NEW = 297;
    const T_CLONE = 298;
    const T_EXIT = 299;
    const T_IF = 300;
    const T_ELSEIF = 301;
    const T_ELSE = 302;
    const T_ENDIF = 303;
    const T_LNUMBER = 304;
    const T_DNUMBER = 305;
    const T_STRING = 306;
    const T_STRING_VARNAME = 307;
    const T_VARIABLE = 308;
    const T_NUM_STRING = 309;
    const T_INLINE_HTML = 310;
    const T_CHARACTER = 311;
    const T_BAD_CHARACTER = 312;
    const T_ENCAPSED_AND_WHITESPACE = 313;
    const T_CONSTANT_ENCAPSED_STRING = 314;
    const T_ECHO = 315;
    const T_DO = 316;
    const T_WHILE = 317;
    const T_ENDWHILE = 318;
    const T_FOR = 319;
    const T_ENDFOR = 320;
    const T_FOREACH = 321;
    const T_ENDFOREACH = 322;
    const T_DECLARE = 323;
    const T_ENDDECLARE = 324;
    const T_AS = 325;
    const T_SWITCH = 326;
    const T_ENDSWITCH = 327;
    const T_CASE = 328;
    const T_DEFAULT = 329;
    const T_BREAK = 330;
    const T_CONTINUE = 331;
    const T_GOTO = 332;
    const T_FUNCTION = 333;
    const T_CONST = 334;
    const T_RETURN = 335;
    const T_TRY = 336;
    const T_CATCH = 337;
    const T_THROW = 338;
    const T_USE = 339;
    const T_GLOBAL = 340;
    const T_STATIC = 341;
    const T_ABSTRACT = 342;
    const T_FINAL = 343;
    const T_PRIVATE = 344;
    const T_PROTECTED = 345;
    const T_PUBLIC = 346;
    const T_VAR = 347;
    const T_UNSET = 348;
    const T_ISSET = 349;
    const T_EMPTY = 350;
    const T_HALT_COMPILER = 351;
    const T_CLASS = 352;
    const T_INTERFACE = 353;
    const T_EXTENDS = 354;
    const T_IMPLEMENTS = 355;
    const T_OBJECT_OPERATOR = 356;
    const T_DOUBLE_ARROW = 357;
    const T_LIST = 358;
    const T_ARRAY = 359;
    const T_CLASS_C = 360;
    const T_METHOD_C = 361;
    const T_FUNC_C = 362;
    const T_LINE = 363;
    const T_FILE = 364;
    const T_COMMENT = 365;
    const T_DOC_COMMENT = 366;
    const T_OPEN_TAG = 367;
    const T_OPEN_TAG_WITH_ECHO = 368;
    const T_CLOSE_TAG = 369;
    const T_WHITESPACE = 370;
    const T_START_HEREDOC = 371;
    const T_END_HEREDOC = 372;
    const T_DOLLAR_OPEN_CURLY_BRACES = 373;
    const T_CURLY_OPEN = 374;
    const T_PAAMAYIM_NEKUDOTAYIM = 375;
    const T_NAMESPACE = 376;
    const T_NS_C = 377;
    const T_DIR = 378;
    const T_NS_SEPARATOR = 379;
    // }}}

    private static $yyterminals = array(
        '$EOF',
        "error",
        "T_INCLUDE",
        "T_INCLUDE_ONCE",
        "T_EVAL",
        "T_REQUIRE",
        "T_REQUIRE_ONCE",
        "','",
        "T_LOGICAL_OR",
        "T_LOGICAL_XOR",
        "T_LOGICAL_AND",
        "T_PRINT",
        "'='",
        "T_PLUS_EQUAL",
        "T_MINUS_EQUAL",
        "T_MUL_EQUAL",
        "T_DIV_EQUAL",
        "T_CONCAT_EQUAL",
        "T_MOD_EQUAL",
        "T_AND_EQUAL",
        "T_OR_EQUAL",
        "T_XOR_EQUAL",
        "T_SL_EQUAL",
        "T_SR_EQUAL",
        "'?'",
        "':'",
        "T_BOOLEAN_OR",
        "T_BOOLEAN_AND",
        "'|'",
        "'^'",
        "'&'",
        "T_IS_EQUAL",
        "T_IS_NOT_EQUAL",
        "T_IS_IDENTICAL",
        "T_IS_NOT_IDENTICAL",
        "'<'",
        "T_IS_SMALLER_OR_EQUAL",
        "'>'",
        "T_IS_GREATER_OR_EQUAL",
        "T_SL",
        "T_SR",
        "'+'",
        "'-'",
        "'.'",
        "'*'",
        "'/'",
        "'%'",
        "'!'",
        "T_INSTANCEOF",
        "'~'",
        "T_INC",
        "T_DEC",
        "T_INT_CAST",
        "T_DOUBLE_CAST",
        "T_STRING_CAST",
        "T_ARRAY_CAST",
        "T_OBJECT_CAST",
        "T_BOOL_CAST",
        "T_UNSET_CAST",
        "'@'",
        "'['",
        "T_NEW",
        "T_CLONE",
        "T_EXIT",
        "T_IF",
        "T_ELSEIF",
        "T_ELSE",
        "T_ENDIF",
        "T_LNUMBER",
        "T_DNUMBER",
        "T_STRING",
        "T_STRING_VARNAME",
        "T_VARIABLE",
        "T_NUM_STRING",
        "T_INLINE_HTML",
        "T_ENCAPSED_AND_WHITESPACE",
        "T_CONSTANT_ENCAPSED_STRING",
        "T_ECHO",
        "T_DO",
        "T_WHILE",
        "T_ENDWHILE",
        "T_FOR",
        "T_ENDFOR",
        "T_FOREACH",
        "T_ENDFOREACH",
        "T_DECLARE",
        "T_ENDDECLARE",
        "T_AS",
        "T_SWITCH",
        "T_ENDSWITCH",
        "T_CASE",
        "T_DEFAULT",
        "T_BREAK",
        "T_CONTINUE",
        "T_GOTO",
        "T_FUNCTION",
        "T_CONST",
        "T_RETURN",
        "T_TRY",
        "T_CATCH",
        "T_THROW",
        "T_USE",
        "T_GLOBAL",
        "T_STATIC",
        "T_ABSTRACT",
        "T_FINAL",
        "T_PRIVATE",
        "T_PROTECTED",
        "T_PUBLIC",
        "T_VAR",
        "T_UNSET",
        "T_ISSET",
        "T_EMPTY",
        "T_HALT_COMPILER",
        "T_CLASS",
        "T_INTERFACE",
        "T_EXTENDS",
        "T_IMPLEMENTS",
        "T_OBJECT_OPERATOR",
        "T_DOUBLE_ARROW",
        "T_LIST",
        "T_ARRAY",
        "T_CLASS_C",
        "T_METHOD_C",
        "T_FUNC_C",
        "T_LINE",
        "T_FILE",
        "T_START_HEREDOC",
        "T_END_HEREDOC",
        "T_DOLLAR_OPEN_CURLY_BRACES",
        "T_CURLY_OPEN",
        "T_PAAMAYIM_NEKUDOTAYIM",
        "T_NAMESPACE",
        "T_NS_C",
        "T_DIR",
        "T_NS_SEPARATOR",
        "'('",
        "')'",
        "';'",
        "'{'",
        "'}'",
        "'$'",
        "'`'",
        "']'",
        "'\"'"
        , "???"
    );

    private static $yyproduction = array(
        '$start : start',
        "start : top_statement_list",
        "top_statement_list : top_statement_list top_statement",
        "top_statement_list : /* empty */",
        "namespace_name : namespace_name_sub",
        "namespace_name_sub : T_STRING",
        "namespace_name_sub : namespace_name_sub T_NS_SEPARATOR T_STRING",
        "top_statement : statement",
        "top_statement : function_declaration_statement",
        "top_statement : class_declaration_statement",
        "top_statement : T_HALT_COMPILER '(' ')' ';'",
        "top_statement : T_NAMESPACE namespace_name ';'",
        "top_statement : T_NAMESPACE namespace_name '{' top_statement_list '}'",
        "top_statement : T_NAMESPACE '{' top_statement_list '}'",
        "top_statement : T_USE use_declarations ';'",
        "top_statement : constant_declaration ';'",
        "use_declarations : use_declarations ',' use_declaration",
        "use_declarations : use_declaration",
        "use_declaration : namespace_name",
        "use_declaration : namespace_name T_AS T_STRING",
        "use_declaration : T_NS_SEPARATOR namespace_name",
        "use_declaration : T_NS_SEPARATOR namespace_name T_AS T_STRING",
        "constant_declaration : constant_declaration ',' T_STRING '=' static_scalar",
        "constant_declaration : T_CONST T_STRING '=' static_scalar",
        "inner_statement_list : inner_statement_list inner_statement",
        "inner_statement_list : /* empty */",
        "inner_statement : statement",
        "inner_statement : function_declaration_statement",
        "inner_statement : class_declaration_statement",
        "inner_statement : T_HALT_COMPILER '(' ')' ';'",
        "statement : '{' inner_statement_list '}'",
        "statement : T_IF '(' expr ')' statement elseif_list else_single",
        "statement : T_IF '(' expr ')' ':' inner_statement_list new_elseif_list new_else_single T_ENDIF ';'",
        "statement : T_WHILE '(' expr ')' while_statement",
        "statement : T_DO statement T_WHILE '(' expr ')' ';'",
        "statement : T_FOR '(' for_expr ';' for_expr ';' for_expr ')' for_statement",
        "statement : T_SWITCH '(' expr ')' switch_case_list",
        "statement : T_BREAK ';'",
        "statement : T_BREAK expr ';'",
        "statement : T_CONTINUE ';'",
        "statement : T_CONTINUE expr ';'",
        "statement : T_RETURN ';'",
        "statement : T_RETURN expr ';'",
        "statement : T_GLOBAL global_var_list ';'",
        "statement : T_STATIC static_var_list ';'",
        "statement : T_ECHO expr_list ';'",
        "statement : T_INLINE_HTML",
        "statement : expr ';'",
        "statement : T_UNSET '(' variables_list ')' ';'",
        "statement : T_FOREACH '(' expr T_AS variable ')' foreach_statement",
        "statement : T_FOREACH '(' expr T_AS '&' variable ')' foreach_statement",
        "statement : T_FOREACH '(' expr T_AS variable T_DOUBLE_ARROW optional_ref variable ')' foreach_statement",
        "statement : T_DECLARE '(' declare_list ')' declare_statement",
        "statement : ';'",
        "statement : T_TRY '{' inner_statement_list '}' catches",
        "statement : T_THROW expr ';'",
        "statement : T_GOTO T_STRING ';'",
        "statement : T_STRING ':'",
        "catches : catch",
        "catches : catches catch",
        "catch : T_CATCH '(' name T_VARIABLE ')' '{' inner_statement_list '}'",
        "variables_list : variable",
        "variables_list : variables_list ',' variable",
        "optional_ref : /* empty */",
        "optional_ref : '&'",
        "function_declaration_statement : T_FUNCTION optional_ref T_STRING '(' parameter_list ')' '{' inner_statement_list '}'",
        "class_declaration_statement : class_entry_type T_STRING extends_from implements_list '{' class_statement_list '}'",
        "class_declaration_statement : T_INTERFACE T_STRING interface_extends_list '{' class_statement_list '}'",
        "class_entry_type : T_CLASS",
        "class_entry_type : T_ABSTRACT T_CLASS",
        "class_entry_type : T_FINAL T_CLASS",
        "extends_from : /* empty */",
        "extends_from : T_EXTENDS name",
        "interface_extends_list : /* empty */",
        "interface_extends_list : T_EXTENDS interface_list",
        "implements_list : /* empty */",
        "implements_list : T_IMPLEMENTS interface_list",
        "interface_list : name",
        "interface_list : interface_list ',' name",
        "for_statement : statement",
        "for_statement : ':' inner_statement_list T_ENDFOR ';'",
        "foreach_statement : statement",
        "foreach_statement : ':' inner_statement_list T_ENDFOREACH ';'",
        "declare_statement : statement",
        "declare_statement : ':' inner_statement_list T_ENDDECLARE ';'",
        "declare_list : T_STRING '=' static_scalar",
        "declare_list : declare_list ',' T_STRING '=' static_scalar",
        "switch_case_list : '{' case_list '}'",
        "switch_case_list : '{' ';' case_list '}'",
        "switch_case_list : ':' case_list T_ENDSWITCH ';'",
        "switch_case_list : ':' ';' case_list T_ENDSWITCH ';'",
        "case_list : /* empty */",
        "case_list : case_list T_CASE expr case_separator inner_statement_list",
        "case_list : case_list T_DEFAULT case_separator inner_statement_list",
        "case_separator : ':'",
        "case_separator : ';'",
        "while_statement : statement",
        "while_statement : ':' inner_statement_list T_ENDWHILE ';'",
        "elseif_list : /* empty */",
        "elseif_list : elseif_list T_ELSEIF '(' expr ')' statement",
        "new_elseif_list : /* empty */",
        "new_elseif_list : new_elseif_list T_ELSEIF '(' expr ')' ':' inner_statement_list",
        "else_single : /* empty */",
        "else_single : T_ELSE statement",
        "new_else_single : /* empty */",
        "new_else_single : T_ELSE ':' inner_statement_list",
        "parameter_list : non_empty_parameter_list",
        "parameter_list : /* empty */",
        "non_empty_parameter_list : optional_class_type optional_ref T_VARIABLE",
        "non_empty_parameter_list : optional_class_type optional_ref T_VARIABLE '=' static_scalar",
        "non_empty_parameter_list : non_empty_parameter_list ',' optional_class_type optional_ref T_VARIABLE",
        "non_empty_parameter_list : non_empty_parameter_list ',' optional_class_type optional_ref T_VARIABLE '=' static_scalar",
        "optional_class_type : /* empty */",
        "optional_class_type : name",
        "optional_class_type : T_ARRAY",
        "function_call_argument_list : non_empty_function_call_argument_list",
        "function_call_argument_list : /* empty */",
        "non_empty_function_call_argument_list : expr",
        "non_empty_function_call_argument_list : '&' variable",
        "non_empty_function_call_argument_list : non_empty_function_call_argument_list ',' expr",
        "non_empty_function_call_argument_list : non_empty_function_call_argument_list ',' '&' variable",
        "global_var_list : global_var_list ',' global_var",
        "global_var_list : global_var",
        "global_var : T_VARIABLE",
        "global_var : '$' variable",
        "global_var : '$' '{' expr '}'",
        "static_var_list : static_var_list ',' T_VARIABLE",
        "static_var_list : static_var_list ',' T_VARIABLE '=' static_scalar",
        "static_var_list : T_VARIABLE",
        "static_var_list : T_VARIABLE '=' static_scalar",
        "class_statement_list : class_statement_list class_statement",
        "class_statement_list : /* empty */",
        "class_statement : variable_modifiers class_variable_declaration ';'",
        "class_statement : class_constant_declaration ';'",
        "class_statement : method_modifiers T_FUNCTION optional_ref T_STRING '(' parameter_list ')' method_body",
        "method_body : ';'",
        "method_body : '{' inner_statement_list '}'",
        "variable_modifiers : non_empty_member_modifiers",
        "variable_modifiers : T_VAR",
        "method_modifiers : /* empty */",
        "method_modifiers : non_empty_member_modifiers",
        "non_empty_member_modifiers : member_modifier",
        "non_empty_member_modifiers : non_empty_member_modifiers member_modifier",
        "member_modifier : T_PUBLIC",
        "member_modifier : T_PROTECTED",
        "member_modifier : T_PRIVATE",
        "member_modifier : T_STATIC",
        "member_modifier : T_ABSTRACT",
        "member_modifier : T_FINAL",
        "class_variable_declaration : class_variable_declaration ',' T_VARIABLE",
        "class_variable_declaration : class_variable_declaration ',' T_VARIABLE '=' static_scalar",
        "class_variable_declaration : T_VARIABLE",
        "class_variable_declaration : T_VARIABLE '=' static_scalar",
        "class_constant_declaration : class_constant_declaration ',' T_STRING '=' static_scalar",
        "class_constant_declaration : T_CONST T_STRING '=' static_scalar",
        "expr_list : expr_list ',' expr",
        "expr_list : expr",
        "for_expr : /* empty */",
        "for_expr : expr_list",
        "expr : variable",
        "expr : T_LIST '(' assignment_list ')' '=' expr",
        "expr : variable '=' expr",
        "expr : variable '=' '&' variable",
        "expr : variable '=' '&' T_NEW class_name_reference ctor_arguments",
        "expr : T_NEW class_name_reference ctor_arguments",
        "expr : T_CLONE expr",
        "expr : variable T_PLUS_EQUAL expr",
        "expr : variable T_MINUS_EQUAL expr",
        "expr : variable T_MUL_EQUAL expr",
        "expr : variable T_DIV_EQUAL expr",
        "expr : variable T_CONCAT_EQUAL expr",
        "expr : variable T_MOD_EQUAL expr",
        "expr : variable T_AND_EQUAL expr",
        "expr : variable T_OR_EQUAL expr",
        "expr : variable T_XOR_EQUAL expr",
        "expr : variable T_SL_EQUAL expr",
        "expr : variable T_SR_EQUAL expr",
        "expr : variable T_INC",
        "expr : T_INC variable",
        "expr : variable T_DEC",
        "expr : T_DEC variable",
        "expr : expr T_BOOLEAN_OR expr",
        "expr : expr T_BOOLEAN_AND expr",
        "expr : expr T_LOGICAL_OR expr",
        "expr : expr T_LOGICAL_AND expr",
        "expr : expr T_LOGICAL_XOR expr",
        "expr : expr '|' expr",
        "expr : expr '&' expr",
        "expr : expr '^' expr",
        "expr : expr '.' expr",
        "expr : expr '+' expr",
        "expr : expr '-' expr",
        "expr : expr '*' expr",
        "expr : expr '/' expr",
        "expr : expr '%' expr",
        "expr : expr T_SL expr",
        "expr : expr T_SR expr",
        "expr : '+' expr",
        "expr : '-' expr",
        "expr : '!' expr",
        "expr : '~' expr",
        "expr : expr T_IS_IDENTICAL expr",
        "expr : expr T_IS_NOT_IDENTICAL expr",
        "expr : expr T_IS_EQUAL expr",
        "expr : expr T_IS_NOT_EQUAL expr",
        "expr : expr '<' expr",
        "expr : expr T_IS_SMALLER_OR_EQUAL expr",
        "expr : expr '>' expr",
        "expr : expr T_IS_GREATER_OR_EQUAL expr",
        "expr : expr T_INSTANCEOF class_name_reference",
        "expr : '(' expr ')'",
        "expr : expr '?' expr ':' expr",
        "expr : expr '?' ':' expr",
        "expr : T_ISSET '(' variables_list ')'",
        "expr : T_EMPTY '(' variable ')'",
        "expr : T_INCLUDE expr",
        "expr : T_INCLUDE_ONCE expr",
        "expr : T_EVAL '(' expr ')'",
        "expr : T_REQUIRE expr",
        "expr : T_REQUIRE_ONCE expr",
        "expr : T_INT_CAST expr",
        "expr : T_DOUBLE_CAST expr",
        "expr : T_STRING_CAST expr",
        "expr : T_ARRAY_CAST expr",
        "expr : T_OBJECT_CAST expr",
        "expr : T_BOOL_CAST expr",
        "expr : T_UNSET_CAST expr",
        "expr : T_EXIT exit_expr",
        "expr : '@' expr",
        "expr : scalar",
        "expr : T_ARRAY '(' array_pair_list ')'",
        "expr : '`' backticks_expr '`'",
        "expr : T_PRINT expr",
        "expr : T_FUNCTION optional_ref '(' parameter_list ')' lexical_vars '{' inner_statement_list '}'",
        "lexical_vars : /* empty */",
        "lexical_vars : T_USE '(' lexical_var_list ')'",
        "lexical_var_list : lexical_var_list ',' optional_ref T_VARIABLE",
        "lexical_var_list : optional_ref T_VARIABLE",
        "function_call : name '(' function_call_argument_list ')'",
        "function_call : class_name T_PAAMAYIM_NEKUDOTAYIM T_STRING '(' function_call_argument_list ')'",
        "function_call : reference_variable T_PAAMAYIM_NEKUDOTAYIM T_STRING '(' function_call_argument_list ')'",
        "function_call : static_property_with_arrays '(' function_call_argument_list ')'",
        "function_call : variable_without_objects '(' function_call_argument_list ')'",
        "class_name : T_STATIC",
        "class_name : name",
        "name : namespace_name",
        "name : T_NAMESPACE T_NS_SEPARATOR namespace_name",
        "name : T_NS_SEPARATOR namespace_name",
        "class_name_reference : class_name",
        "class_name_reference : dynamic_class_name_reference",
        "dynamic_class_name_reference : object_access_for_dcnr",
        "dynamic_class_name_reference : base_variable",
        "object_access_for_dcnr : /* empty */",
        "object_access_for_dcnr : base_variable T_OBJECT_OPERATOR object_property",
        "object_access_for_dcnr : object_access_for_dcnr T_OBJECT_OPERATOR object_property",
        "object_access_for_dcnr : object_access_for_dcnr '[' dim_offset ']'",
        "object_access_for_dcnr : object_access_for_dcnr '{' expr '}'",
        "exit_expr : /* empty */",
        "exit_expr : '(' ')'",
        "exit_expr : '(' expr ')'",
        "backticks_expr : /* empty */",
        "backticks_expr : T_ENCAPSED_AND_WHITESPACE",
        "backticks_expr : encaps_list",
        "ctor_arguments : /* empty */",
        "ctor_arguments : '(' function_call_argument_list ')'",
        "common_scalar : T_LNUMBER",
        "common_scalar : T_DNUMBER",
        "common_scalar : T_CONSTANT_ENCAPSED_STRING",
        "common_scalar : T_LINE",
        "common_scalar : T_FILE",
        "common_scalar : T_DIR",
        "common_scalar : T_CLASS_C",
        "common_scalar : T_METHOD_C",
        "common_scalar : T_FUNC_C",
        "common_scalar : T_NS_C",
        "common_scalar : T_START_HEREDOC T_ENCAPSED_AND_WHITESPACE T_END_HEREDOC",
        "common_scalar : T_START_HEREDOC T_END_HEREDOC",
        "static_scalar : common_scalar",
        "static_scalar : name",
        "static_scalar : '+' static_scalar",
        "static_scalar : '-' static_scalar",
        "static_scalar : T_ARRAY '(' static_array_pair_list ')'",
        "static_scalar : class_name T_PAAMAYIM_NEKUDOTAYIM T_STRING",
        "scalar : T_STRING_VARNAME",
        "scalar : class_constant",
        "scalar : name",
        "scalar : common_scalar",
        "scalar : '\"' encaps_list '\"'",
        "scalar : T_START_HEREDOC encaps_list T_END_HEREDOC",
        "static_array_pair_list : /* empty */",
        "static_array_pair_list : non_empty_static_array_pair_list optional_comma",
        "optional_comma : /* empty */",
        "optional_comma : ','",
        "non_empty_static_array_pair_list : non_empty_static_array_pair_list ',' static_scalar T_DOUBLE_ARROW static_scalar",
        "non_empty_static_array_pair_list : non_empty_static_array_pair_list ',' static_scalar",
        "non_empty_static_array_pair_list : static_scalar T_DOUBLE_ARROW static_scalar",
        "non_empty_static_array_pair_list : static_scalar",
        "variable : object_access",
        "variable : base_variable",
        "variable : function_call",
        "object_access : object_access_arrayable",
        "object_access : object_access_arrayable '(' function_call_argument_list ')'",
        "object_access : variable T_OBJECT_OPERATOR object_property '(' function_call_argument_list ')'",
        "object_access_arrayable : variable T_OBJECT_OPERATOR object_property",
        "object_access_arrayable : object_access_arrayable '[' dim_offset ']'",
        "object_access_arrayable : object_access_arrayable '{' expr '}'",
        "variable_without_objects : reference_variable",
        "variable_without_objects : '$' reference_variable",
        "base_variable : variable_without_objects",
        "base_variable : class_name T_PAAMAYIM_NEKUDOTAYIM '$' reference_variable",
        "base_variable : reference_variable T_PAAMAYIM_NEKUDOTAYIM '$' reference_variable",
        "base_variable : static_property_with_arrays",
        "static_property_with_arrays : class_name T_PAAMAYIM_NEKUDOTAYIM T_VARIABLE",
        "static_property_with_arrays : reference_variable T_PAAMAYIM_NEKUDOTAYIM T_VARIABLE",
        "static_property_with_arrays : class_name T_PAAMAYIM_NEKUDOTAYIM '$' '{' expr '}'",
        "static_property_with_arrays : reference_variable T_PAAMAYIM_NEKUDOTAYIM '$' '{' expr '}'",
        "static_property_with_arrays : static_property_with_arrays '[' dim_offset ']'",
        "static_property_with_arrays : static_property_with_arrays '{' expr '}'",
        "reference_variable : reference_variable '[' dim_offset ']'",
        "reference_variable : reference_variable '{' expr '}'",
        "reference_variable : T_VARIABLE",
        "reference_variable : '$' '{' expr '}'",
        "dim_offset : /* empty */",
        "dim_offset : expr",
        "object_property : T_STRING",
        "object_property : '{' expr '}'",
        "object_property : variable_without_objects",
        "assignment_list : assignment_list ',' assignment_list_element",
        "assignment_list : assignment_list_element",
        "assignment_list_element : variable",
        "assignment_list_element : T_LIST '(' assignment_list ')'",
        "assignment_list_element : /* empty */",
        "array_pair_list : /* empty */",
        "array_pair_list : non_empty_array_pair_list optional_comma",
        "non_empty_array_pair_list : non_empty_array_pair_list ',' expr T_DOUBLE_ARROW expr",
        "non_empty_array_pair_list : non_empty_array_pair_list ',' expr",
        "non_empty_array_pair_list : expr T_DOUBLE_ARROW expr",
        "non_empty_array_pair_list : expr",
        "non_empty_array_pair_list : non_empty_array_pair_list ',' expr T_DOUBLE_ARROW '&' variable",
        "non_empty_array_pair_list : non_empty_array_pair_list ',' '&' variable",
        "non_empty_array_pair_list : expr T_DOUBLE_ARROW '&' variable",
        "non_empty_array_pair_list : '&' variable",
        "encaps_list : encaps_list encaps_var",
        "encaps_list : encaps_list T_ENCAPSED_AND_WHITESPACE",
        "encaps_list : encaps_var",
        "encaps_list : T_ENCAPSED_AND_WHITESPACE encaps_var",
        "encaps_var : T_VARIABLE",
        "encaps_var : T_VARIABLE '[' encaps_var_offset ']'",
        "encaps_var : T_VARIABLE T_OBJECT_OPERATOR T_STRING",
        "encaps_var : T_DOLLAR_OPEN_CURLY_BRACES expr '}'",
        "encaps_var : T_DOLLAR_OPEN_CURLY_BRACES T_STRING_VARNAME '[' expr ']' '}'",
        "encaps_var : T_CURLY_OPEN variable '}'",
        "encaps_var_offset : T_STRING",
        "encaps_var_offset : T_NUM_STRING",
        "encaps_var_offset : T_VARIABLE",
        "class_constant : class_name T_PAAMAYIM_NEKUDOTAYIM T_STRING",
        "class_constant : reference_variable T_PAAMAYIM_NEKUDOTAYIM T_STRING"
    );

    private static $yytranslate = array(
            0,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,   47,  144,  145,  141,   46,   30,  145,
          136,  137,   44,   41,    7,   42,   43,   45,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,   25,  138,
           35,   12,   37,   24,   59,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,   60,  145,  143,   29,  145,  142,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  139,   28,  140,   49,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,  145,  145,  145,  145,
          145,  145,  145,  145,  145,  145,    1,    2,    3,    4,
            5,    6,    8,    9,   10,   11,   13,   14,   15,   16,
           17,   18,   19,   20,   21,   22,   23,   26,   27,   31,
           32,   33,   34,   36,   38,   39,   40,   48,   50,   51,
           52,   53,   54,   55,   56,   57,   58,   61,   62,   63,
           64,   65,   66,   67,   68,   69,   70,   71,   72,   73,
           74,  145,  145,   75,   76,   77,   78,   79,   80,   81,
           82,   83,   84,   85,   86,   87,   88,   89,   90,   91,
           92,   93,   94,   95,   96,   97,   98,   99,  100,  101,
          102,  103,  104,  105,  106,  107,  108,  109,  110,  111,
          112,  113,  114,  115,  116,  117,  118,  119,  120,  121,
          122,  123,  124,  125,  126,  145,  145,  145,  145,  145,
          145,  127,  128,  129,  130,  131,  132,  133,  134,  135
    );

    private static $yyaction = array(
           56,   57,  366,   58,   59,-32766,-32766,-32766,  255,   60,
        -32767,-32767,-32767,-32767,   99,  100,  101,  102,  103,  862,
           55,-32766,    0,-32766,-32766,   43,  107,  108,  109,  110,
          111,  112,  113,  114,  115,  116,  117,  340,   46,   61,
           62,  522,-32766,-32766,-32766,   63,   45,   64,  240,  241,
           65,   66,   67,   68,   69,   70,   71,   72,-32766,  253,
           73,  343,  367,  719,  721,   54,  807,  808,  368,  825,
          862,-32766,  588,  122,  809,   51,   26,  369,  265,  370,
          417,  371,  490,  372,  636,  492,  373,  498,  279,  656,
           38,   39,  374,  346,  344,   40,  376,  344,   74,  121,
          302,  345,  276,  377,  378, -107,  377,  378,  379,  380,
          381,  354,  426,  610,  383,  426,  610,  383,  384,  385,
          813,  814,  815,  810,  811,  259,-32766,   83,   84,   85,
          390,  816,  812,  338,   75,  124,  595,  520,  446,  279,
          263,   33,  267,   42,  120,   86,   87,   88,   89,   90,
           91,   92,   93,   94,   95,   96,   97,   98,   99,  100,
          101,  102,  103,  104,  105,  106,  866,  254,  688,  689,
          690,  687,  686,  685,-32766,  862,-32766,-32766,-32766,  894,
          547,  896,  895,  249,-32766,  512,  247,-32766,-32766,-32766,
          507,-32766,-32766,-32766,-32766,-32766,  344,  637,-32766,   53,
          547,   52,-32766,-32766,-32766,  377,  378,-32766,-32766,  407,
        -32766,  586,-32766,  785,  426,  610,  383,-32766,  675,  301,
        -32766,  211,  303,  547,  209,  355,  250,-32766,  862,  246,
        -32766,-32766,-32766,  785,-32766,  125,-32766,  279,-32766,  862,
          231,-32766,  123,  317,  279,-32766,-32766,-32766,-32766,-32766,
        -32766,-32766,  467,-32766,  268,-32766,  785,  104,  105,  106,
        -32766,  254,  390,-32766,  364,  338,  547,  282,   20,  252,
        -32766,-32766,-32766,-32766,-32766,-32766,  262,-32766,  119,-32766,
          118,-32766,  483,  215,-32766,  489,   27,  421,-32766,-32766,
        -32766,-32766,-32766,-32766,-32766,  680,-32766,  279,-32766,  785,
           81,  243,  862,-32766,  854,  818,-32766,  818,  279,  547,
          483,  885,  248,-32766,  665,  214,-32766,-32766,-32766,  862,
        -32766,  674,-32766,  680,-32766,  424,  608,-32766,-32766,-32766,
        -32766,-32766,-32766,-32766,-32766,-32766,-32766,-32766,  855,-32766,
          557,-32766,  785,  101,  102,  103,-32766,  885,-32766,-32766,
          556,  212,  547,  585,  609,  233,-32766,  499,  500,-32766,
        -32766,-32766,  205,-32766,  830,-32766,  656,-32766,  359,  131,
        -32766,  404,  199,  283,-32766,-32766,-32766,-32766,-32766,-32766,
        -32766,  200,-32766,  232,-32766,  785,   21,  201,  279,-32766,
          132,  307,-32766,  210,  777,  547,  677,  541,  245,-32766,
          553,  523,-32766,-32766,-32766,  207,-32766,  284,-32766,  206,
        -32766,  204,  527,-32766,  537,  532,  829,-32766,-32766,-32766,
        -32766,-32766,-32766,-32766,  606,-32766,  528,-32766,  785,  536,
          525,  599,-32766,  540,  128,-32766,  254,  127,  547,  511,
          824,  244,-32766,  548,  547,-32766,-32766,-32766,  515,-32766,
          508,-32766,  496,-32766,  464,  443,-32766,  363,  778,  478,
        -32766,-32766,-32766,-32766,-32766,-32766,-32766,  779,-32766,-32766,
        -32766,  785,  442,  436,  264,-32766,  274,  434,-32766,  409,
          563,  547,-32766,-32766,-32766,-32766,  561,  890,-32766,-32766,
        -32766,  427,-32766,  413,-32766,  349,-32766,  350,-32766,-32766,
        -32766,-32766,-32766,-32766,-32766,-32766,-32766,-32766,-32766,-32766,
          399,-32766,  400,-32766,  785,  412, -137,  234,-32766,  402,
          453,-32766,  514,  506,  547,  425,  415,  504,-32766,  497,
          480,-32766,-32766,-32766,  280,-32766,  885,-32766,  281,-32766,
          452,  493,-32766,  611,  273,  502,-32766,-32766,-32766,-32766,
        -32766,-32766,-32766,  275,-32766,  612,-32766,  785,   41,  469,
          817,-32766,  208,  456,-32766,   47,  292,  547,  213, -244,
           34,-32766,   36,  857,-32766,-32766,-32766,    0,-32766,    0,
        -32766,   44,-32766,  266,    0,-32766,    0,    0,    0,-32766,
        -32766,-32766,-32766,-32766,-32766,-32766,    0,-32766,  468,-32766,
          785,  291,  293,  320,  294,   35,  321,-32766,  856,-32766,
            0,  406,  339,  340,    0,  547,   31,   48,  518,-32766,
           32,  459,-32766,-32766,-32766,  403,-32766,  348,-32766,  342,
        -32766,  344,  277,-32766,  800,-32766,-32766,-32766,-32766,-32766,
          377,  378,-32766,-32766,  258,-32766,  257,-32766,  785,  426,
          610,  383,-32766,  256,  242,-32766,  239,  238,  547,  230,
          229,  198,-32766,  134,  133,-32766,-32766,-32766,  126,-32766,
           80,-32766,  356,-32766,   79,   78,-32766,   77,   76,   30,
        -32766,-32766,-32766,  583,-32766,-32766,-32766,   29,-32766,   37,
        -32766,  785,  419,  471,  477,-32766,  513,  772,-32766,  780,
          783,  547,  784,  843,  806,-32766,  844,   19,-32766,-32766,
        -32766,   25,-32766,   28,-32766,  304,-32766,  476,  517,-32766,
          752,  759,  801,-32766,-32766,-32766,  581,-32766,-32766,-32766,
          781,-32766,  782,-32766,  785,  823,   23,   22,-32766,   24,
          756,-32766,  755,  454,  547,  872,  308,  867,-32766,  574,
          587,-32766,-32766,-32766,  632,-32766,  624,-32766,  622,-32766,
          202,  203,-32766,  631,  626,  639,-32766,-32766,-32766,  579,
        -32766,-32766,-32766,  344,-32766,  576,-32766,  785,-32766,-32766,
        -32766,  597,  377,  378,-32766,  584,  582,  807,  808,  580,
          589,  426,  610,  383,-32766,  809,-32766,-32766,-32766,-32766,
        -32766,-32767,-32767,-32767,-32767,  590,  552,  598,  531,  530,
          344,  375,-32766,-32766,   50,   49,  300,  344,  375,  377,
          378,  571,  667,  300,  130,  129,  377,  378,  382,  610,
          383,   82,  521,  524,  529,  382,  610,  383,  533,  534,
          449,  813,  814,  815,  810,  811,  329,  278,  539,  773,
          344,  375,  816,  812,  278,  555,  300,  344,  798,  377,
          378,  847,  554,-32766,-32766,-32766,  377,  378,  382,  610,
          383,  859,-32766,-32766,-32766,  426,  610,  383,  861,-32766,
          891,-32766,-32766,-32766,-32766,-32766,  344,  278,-32766,  344,
        -32766,-32766,-32766,-32766,  892,  377,  378,  893,  377,  378,
          629,  344,  775,  630,  426,  610,  383,  426,  610,  383,
          377,  378,  863,    0,  889,    0,  797,  344,  846,  426,
          610,  383,  858,  344,  860,  487,  377,  378,    0,    0,
            0,  572,  377,  378,  341,  426,  610,  383,    0,    0,
            0,  426,  610,  383,    0,    0,  678,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,  602,    0,    0,    0,    0,    0,  607
    );

    private static $yycheck = array(
            2,    3,    4,    5,    6,    8,    9,   10,   61,   11,
           35,   36,   37,   38,   39,   40,   41,   42,   43,   72,
           60,   24,    0,   26,   27,   12,   13,   14,   15,   16,
           17,   18,   19,   20,   21,   22,   23,  135,    7,   41,
           42,  139,    8,    9,   10,   47,    7,   49,   50,   51,
           52,   53,   54,   55,   56,   57,   58,   59,   24,   61,
           62,   63,   64,   50,   51,   60,   68,   69,   70,   71,
           72,  103,   74,    7,   76,   77,   78,   79,  118,   81,
            7,   83,   80,   85,   25,   86,   88,    7,  141,  121,
           92,   93,   94,   95,   95,   97,   98,   95,  100,  139,
          102,  103,    7,  104,  105,  137,  104,  105,  110,  111,
          112,   25,  113,  114,  115,  113,  114,  115,  120,  121,
          122,  123,  124,  125,  126,  127,    8,    8,    9,   10,
          132,  133,  134,  135,  136,   25,  138,  139,    7,  141,
          142,  136,  144,   24,  139,   26,   27,   28,   29,   30,
           31,   32,   33,   34,   35,   36,   37,   38,   39,   40,
           41,   42,   43,   44,   45,   46,   70,   48,  103,  104,
          105,  106,  107,  108,   64,   72,    8,    9,   10,   70,
           70,   72,   73,   30,   74,   84,   30,   77,   78,   79,
            7,   81,   24,   83,   26,   85,   95,  138,   88,   60,
           70,   60,   92,   93,   94,  104,  105,   97,   98,    7,
          100,  138,  102,  103,  113,  114,  115,   64,  138,    7,
          110,   12,    7,   70,    7,  139,   30,   74,   72,    7,
           77,   78,   79,  103,   81,  139,   83,  141,   85,   72,
            7,   88,  139,   72,  141,   92,   93,   94,  138,  139,
           97,   98,   75,  100,   75,  102,  103,   44,   45,   46,
           64,   48,  132,  110,    7,  135,   70,   60,  137,   30,
           74,    8,    9,   77,   78,   79,    7,   81,  139,   83,
          139,   85,   96,   12,   88,   65,   66,  120,   92,   93,
           94,  138,  139,   97,   98,  109,  100,  141,  102,  103,
          129,  130,   72,   64,   72,  128,  110,  128,  141,   70,
           96,   75,   30,   74,   72,   12,   77,   78,   79,   72,
           81,  138,   83,  109,   85,  118,  140,   88,    8,    9,
           10,   92,   93,   94,  138,  139,   97,   98,   72,  100,
          138,  102,  103,   41,   42,   43,   64,   75,  103,  110,
          138,   12,   70,  138,  140,   30,   74,   65,   66,   77,
           78,   79,   12,   81,  128,   83,  121,   85,  119,   12,
           88,  141,   12,  141,   92,   93,   94,  138,  139,   97,
           98,   12,  100,  141,  102,  103,  137,   12,  141,   64,
           90,   91,  110,   12,  137,   70,  138,  139,   30,   74,
          138,  139,   77,   78,   79,   12,   81,  141,   83,   12,
           85,   12,   25,   88,   25,   25,  144,   92,   93,   94,
          138,  139,   97,   98,   30,  100,   25,  102,  103,   25,
           25,   25,   64,   25,   25,  110,   48,   60,   70,   67,
           70,   30,   74,   70,   70,   77,   78,   79,   70,   81,
           70,   83,   70,   85,   70,   70,   88,   95,   72,  101,
           92,   93,   94,  138,  139,   97,   98,   72,  100,  103,
          102,  103,   70,   70,  118,   64,  117,   70,  110,   79,
           70,   70,    8,    9,   10,   74,   70,   70,   77,   78,
           79,   70,   81,   70,   83,   70,   85,   70,   24,   88,
           26,   27,   28,   92,   93,   94,  138,  139,   97,   98,
           70,  100,   70,  102,  103,   70,   72,   87,   64,   72,
           72,  110,   72,   72,   70,   71,   87,   72,   74,   72,
           72,   77,   78,   79,   75,   81,   75,   83,   75,   85,
           87,   89,   88,  114,  116,   89,   92,   93,   94,  138,
          139,   97,   98,  116,  100,  114,  102,  103,  136,   99,
          128,   64,  119,  137,  110,  119,  131,   70,  119,  131,
          136,   74,  136,  140,   77,   78,   79,   -1,   81,   -1,
           83,  119,   85,  118,   -1,   88,   -1,   -1,   -1,   92,
           93,   94,  138,  139,   97,   98,   -1,  100,  131,  102,
          103,  131,  131,  131,  131,  136,  131,  110,  140,   64,
           -1,  135,  135,  135,   -1,   70,  136,  136,   82,   74,
          136,  136,   77,   78,   79,  136,   81,  136,   83,  136,
           85,   95,  136,   88,  137,  138,  139,   92,   93,   94,
          104,  105,   97,   98,  136,  100,  136,  102,  103,  113,
          114,  115,   64,  136,  136,  110,  136,  136,   70,  136,
          136,  136,   74,  136,  136,   77,   78,   79,  136,   81,
          136,   83,  137,   85,  136,  136,   88,  136,  136,  136,
           92,   93,   94,  138,  139,   97,   98,  136,  100,  136,
          102,  103,  137,  137,  137,   64,  137,  137,  110,  137,
          137,   70,  137,  137,  137,   74,  137,  137,   77,   78,
           79,  137,   81,  137,   83,  137,   85,  137,  137,   88,
          137,  137,  137,   92,   93,   94,  138,  139,   97,   98,
          137,  100,  137,  102,  103,  137,  137,  137,   64,  137,
          137,  110,  137,  137,   70,  137,  137,  140,   74,  138,
          138,   77,   78,   79,  138,   81,  138,   83,  138,   85,
           41,   42,   88,  138,  138,  138,   92,   93,   94,  138,
          139,   97,   98,   95,  100,  138,  102,  103,    8,    9,
           10,  138,  104,  105,  110,  138,  138,   68,   69,  138,
          138,  113,  114,  115,   24,   76,   26,   27,   28,   29,
           30,   31,   32,   33,   34,  138,  138,  138,  138,  138,
           95,   96,  138,  139,  138,  138,  101,   95,   96,  104,
          105,  138,  140,  101,  139,  139,  104,  105,  113,  114,
          115,  139,  139,  139,  139,  113,  114,  115,  139,  139,
          121,  122,  123,  124,  125,  126,  127,  132,  139,  142,
           95,   96,  133,  134,  132,  140,  101,   95,  140,  104,
          105,  140,  140,    8,    9,   10,  104,  105,  113,  114,
          115,  140,    8,    9,   10,  113,  114,  115,  140,   24,
          140,   26,   27,   28,   29,   30,   95,  132,   24,   95,
           26,   27,   28,   29,  140,  104,  105,  140,  104,  105,
          140,   95,  140,  140,  113,  114,  115,  113,  114,  115,
          104,  105,  140,   -1,  143,   -1,  143,   95,  143,  113,
          114,  115,  143,   95,  143,  143,  104,  105,   -1,   -1,
           -1,  140,  104,  105,  140,  113,  114,  115,   -1,   -1,
           -1,  113,  114,  115,   -1,   -1,  140,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,  140,   -1,   -1,   -1,   -1,   -1,  140
    );

    private static $yybase = array(
            0,  715,  722,  755,  791,  794,    2,   -1,  101,  828,
          762,  536,  822,  806,  678,  678,  678,  678,  678,  387,
          401,  390,  390,  389,  390,  405,   -2,   -2,   -2,  411,
          368,  368,  368,  368,  368,  368,  368,  368,  631,  588,
          545,  497,  110,  325,  282,  153,  196,  239,  674,  674,
          674,  674,  674,  674,  674,  674,  674,  674,  674,  674,
          674,  674,  674,  674,  674,  674,  674,  674,  674,  674,
          674,  674,  674,  674,  674,  674,  674,  674,  674,  674,
          674,  454,  674,  674,  674,  674,  674,  674,  674,  674,
          674,  674,  674,  674,  674,  674,  674,  674,  674,  674,
          674,  674,  674,  674,  674,  674,  674,  674,  674,  674,
          674,  674,  674,  674,  674,  674,  674,  674,  674,  674,
          674,  674,  674,  674,  674,  674,  674,  674,  674,  674,
          674,  674,  674,  674,  674,   59,  652,  651,  648,  647,
          643,  583,  584,  585,  574,  570,  430,  578,  462,  740,
          772,  409,  738,  731,  721,  718,  682,  607,  580,  446,
          782,  468,  433,  576,  581,  119,  119,  119,  119,  119,
          119,  119,  119,  119,  119,  119,  118,  263,  320,  320,
          320,  320,  320,  320,  320,  320,  320,  320,  320,  320,
          320,  320,  320,   34,   34,  168,   -3,  474,  719,  719,
          719,  719,  719,  719,  719,  719,  719,  719,  719,  719,
          719,  719,  719,  719,  719,  719,  864,  855,  770,  770,
          770,  770,   13,  -25,  -25,  -25,  -25,  214,  186,  167,
          167,  167,  103,  -53,  156,  444,  302,  302,  247,  247,
          247,  247,  247,  247,  247,  247,  247,  247,  247,  247,
          247,  247,  247,  247,  247,  247,  -32,  -32,  -32,  179,
          236,  272,  245,  459,   96,   96,   96,  463,  432,  461,
          213,  213,  213,  366,  366,  366,  366,  366,  -98,  692,
          171,  171,  109,  686,  685,  435,  480,    5,  473,  475,
          -40,  407,  403,  402,  385,  249,  452,  760,  456,  763,
          477,  477,  242,  242,   86,  220,  292,   59,  258,  202,
          438,  139,  612,  423,  212,  215,   73,  207,  262,  141,
          232,  266,  131,  606,  605,  603,  426,  757,  141,  177,
          141,  141,  608,  600,   80,  183,  602,  257,  374,  374,
          374,  460,  394,  422,  394,  447,  394,  434,  445,  428,
          437,   39,  359,  394,  671,  670,  358,  460,  434,  394,
          394,  217,  457,  394,  394,   22,  542,  541,  406,  539,
          481,  538,  491,  534,  440,  442,  693,  429,  441,  521,
          520,  518,  489,  425,  524,  551,  476,  427,  470,  484,
          478,  388,  356,  543,  471,  356,  472,  465,  400,  669,
          360,  439,  369,  555,  692,  707,  373,  421,  517,  532,
          677,   66,  375,  510,  453,  416,  356,  448,  356,  668,
          694,  523,  356,  560,  417,  377,  485,  399,  388,  388,
          388,  469,  562,   31,  436,  781,  553,  779,  563,  565,
          775,  566,  436,  553,  567,  773,  384,  535,  269,  525,
          438,  467,  410,  350,  667,   95,  357,  356,  771,  556,
          356,  356,  695,  676,  397,  557,  458,  432,  370,  496,
          356,  683,  569,   95,  593,  595,  637,  699,  493,  700,
          393,  443,  598,  382,  362,  356,  356,  754,  356,  528,
          627,  599,  626,  625,  455,  451,  381,  209,  380,  527,
          404,  372,  616,  395,  339,  449,  559,  450,  303,  378,
          356,  611,  618,  709,  271,  508,  386,  408,  620,  609,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,    0,    0,
            0,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,   -2,
           -2,   -2,   -2,   -2,   -2,   -2,   -2,  119,  119,  119,
          119,  119,  119,  119,  119,  119,  119,  119,  119,  119,
          119,  119,  119,  119,  119,  119,  119,  119,  119,  119,
          119,  119,  119,  119,  119,  119,  119,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,  119,  119,
          119,  119,  119,  119,  119,  119,  119,  119,  119,  119,
          119,  119,  119,  119,  119,  119,  119,  119,  119,  119,
          130,  130,  130,  130,  130,  130,  130,  130,  130,  130,
          130,  130,  130,  130,  130,  130,  130,  130,  119,  119,
          119,  119,  119,  119,  356,  213,  213,  213,  213,   65,
           65,  130,  130,  130,  130,  130,  130,   65,  213,  213,
          130,  130,  130,  130,  130,  130,  130,  130,  130,  130,
          130,  130,  130,  130,  130,  130,  130,  130,  130,  130,
          130,  171,  171,  171,  130,  171,  230,  230,  230,  171,
          171,  171,    0,    0,    0,  130,  130,  130,  130,  130,
          374,  230,    0,    0,    0,  230,  230,  141,  139,    0,
          141,  141,    0,  232,  266,  232,  266,  356,  300,  300,
          300,  300,  374,  374,    0,    0,    0,    0,    0,    0,
            0,    0,  543,    0,   66,  517,    0,    0,    0,    0,
            0,    0,    0,    0,    0,  222,  222,  356,  233,  356,
            0,    0,    0,    0,  233,  356,    0,    0,  356
    );

    private static $yydefault = array(
            3,32767,32767,    1,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,  100,   93,  105,   92,  101,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,  332,
          116,  116,  116,  116,  116,  116,  116,  116,32767,32767,
        32767,32767,32767,32767,32767,  292,32767,32767,  157,  157,
          157,32767,  322,  322,  322,  322,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,  337,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,  335,
        32767,32767,32767,32767,32767,  215,  216,  218,  219,  156,
          117,  323,  155,  336,  119,  334,  183,  185,  232,  184,
          161,  166,  167,  168,  169,  170,  171,  172,  173,  174,
          175,  176,  160,  212,  211,  181,  182,  186,  289,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,  292,
        32767,32767,32767,32767,32767,32767,  188,  187,  203,  204,
          201,  202,  159,  205,  206,  207,  208,  139,  139,  331,
          331,  331,32767,32767,32767,  140,  195,  196,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,  252,  252,  252,  112,  112,  112,32767,
        32767,32767,  112,  260,32767,32767,32767,32767,32767,  262,
          190,  191,  189,32767,32767,32767,32767,32767,32767,32767,
          261,32767,32767,32767,32767,  306,  311,  300,  306,  306,
          250,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,  102,  104,32767,32767,32767,
          285,  311,32767,32767,32767,32767,32767,  346,32767,  307,
        32767,32767,32767,32767,32767,32767,32767,32767,  306,32767,
          309,  310,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,   63,  257,   63,  243,   63,  263,32767,   73,
           71,  291,   75,   63,   91,   91,  234,   54,  263,   63,
           63,  291,32767,   63,   63,32767,32767,32767,    5,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,    4,32767,32767,  308,
        32767,  199,  178,  244,32767,  180,  248,  251,32767,32767,
        32767,   18,  128,32767,32767,32767,32767,32767,32767,32767,
        32767,  158,32767,32767,   20,32767,  124,32767,   61,32767,
        32767,32767,  329,32767,32767,  283,32767,32767,  192,  193,
          194,  303,32767,  115,  355,32767,  356,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,  106,32767,
          278,32767,32767,  126,32767,   74,32767,  341,32767,32767,
          162,  118,32767,32767,32767,32767,32767,32767,32767,32767,
           62,32767,32767,   76,32767,32767,32767,32767,32767,32767,
          108,  296,32767,32767,32767,  340,  339,32767,  120,32767,
        32767,32767,32767,32767,32767,32767,32767,  151,32767,32767,
        32767,32767,32767,32767,  110,  294,32767,32767,32767,32767,
          338,32767,32767,32767,  149,32767,32767,32767,32767,32767,
           25,   25,    3,    3,  131,   25,   98,   25,   25,  131,
           91,   91,   25,   25,   25,   25,   25,   25,   25,   25,
           25,   25
    );

    private static $yygoto = array(
          148,  170,  170,  170,  170,  170,  170,  170,  170,  137,
          138,  139,  143,  151,  180,  173,  159,  174,  175,  169,
          169,  169,  169,  171,  171,  171,  171,  165,  166,  167,
          168,  178,  739,  740,  391,  742,  762,  763,  764,  765,
          766,  767,  768,  770,  707,  140,  141,  142,  144,  145,
          146,  147,  149,  150,  176,  177,  179,  195,  196,  197,
          216,  217,  218,  219,  220,  221,  223,  224,  225,  226,
          236,  237,  270,  271,  272,  428,  429,  430,  181,  182,
          183,  184,  185,  186,  187,  188,  189,  190,  191,  152,
          153,  154,  155,  172,  156,  193,  157,  158,  160,  194,
          161,  162,  192,  135,  163,  164,  450,  450,  450,  450,
          450,  450,  450,  450,  450,  450,  450,  450,  450,  450,
          450,  450,  450,  450,  438,  439,  441,  444,  472,  474,
          475,  297,  551,  551,  551,  463,  491,  393,  393,  393,
          393,  393,  393,  751,  358,  318,  393,  393,  393,  393,
          393,  393,  393,  393,  393,  393,  393,  393,  393,  393,
          393,  786,  786,  786,  655,  655,  655,  401,  401,  312,
          655,  550,  550,  550,  437,  440,  445,  397,  397,  397,
          332,  619,  619,  614,  620,  495,  451,  451,  451,  451,
          451,  451,  451,  451,  451,  451,  451,  451,  451,  451,
          451,  451,  451,  451,  869,  789,  414,  788,  311,  311,
          311,  269,  850,  850,  850,  261,  684,  394,  394,  394,
          394,  394,  394,  868,  868,  868,  394,  394,  394,  394,
          394,  394,  394,  394,  394,  394,  394,  394,  394,  394,
          394,  396,  396,  396,  288,  288,  288,  288,  288,  288,
          592,  324,  593,  288,  288,  288,  288,  288,  288,  288,
          288,  288,  288,  288,  288,  288,  288,  288,  289,  289,
          289,    5,  360,  465,  519,   14,  473,    6,    7,  328,
          328,  328,    8,    9,   10,   15,   16,   11,   17,   12,
           18,   13,  796,  795,  319,    1,    2,  558,  330,  331,
          422,  422,  422,  416,  460,  295,  298,  299,  663,  418,
          418,  392,  395,  325,  327,  457,  461,  470,  333,  485,
          486,  488,  336,  510,  819,  819,  819,  819,  819,  819,
          819,  819,  819,  819,  819,  819,  819,  819,  819,  819,
          819,  819,  565,  671,  627,  821,  822,  564,  669,  628,
          651,  837,  505,  696,  694,  653,  835,  695,  692,  549,
          549,  549,  535,  601,  832,  705,  228,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,  638,  625,  623,
          623,  621,  623,  526,  398,  645,  641,  313,    0,  408,
          884,  884,    0,    0,    0,    0,  466,    0,  887,  884,
            0,    0,  251,  494,    0,    0,  509,  516,    0,    0,
          887,  887
    );

    private static $yygcheck = array(
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   35,   35,   35,   35,
           35,   35,   35,   35,   35,   35,   35,   35,   35,   35,
           35,   35,   35,   35,   47,   47,   47,   47,   47,   47,
           47,   43,    8,    8,    8,   21,   21,   35,   35,   35,
           35,   35,   35,   59,   59,    4,   35,   35,   35,   35,
           35,   35,   35,   35,   35,   35,   35,   35,   35,   35,
           35,   35,   35,   35,   35,   35,   35,    4,    4,   26,
           35,    7,    7,    7,   76,   76,   76,   74,   74,   74,
           58,   35,   35,   35,   35,   35,   68,   68,   68,   68,
           68,   68,   68,   68,   68,   68,   68,   68,   68,   68,
           68,   68,   68,   68,   85,    4,    4,    4,   70,   70,
           70,   77,   71,   71,   71,   77,   57,   68,   68,   68,
           68,   68,   68,   71,   71,   71,   68,   68,   68,   68,
           68,   68,   68,   68,   68,   68,   68,   68,   68,   68,
           68,   68,   68,   68,   69,   69,   69,   69,   69,   69,
           29,   27,   29,   69,   69,   69,   69,   69,   69,   69,
           69,   69,   69,   69,   69,   69,   69,   69,   69,   69,
           69,   13,   46,   36,   36,   13,   42,   13,   13,   69,
           69,   69,   13,   13,   13,   13,   13,   13,   13,   13,
           13,   13,   75,   75,   69,    2,    2,   11,   69,   69,
           28,   28,   28,   28,   28,   28,   43,   43,   49,   28,
           28,   28,   28,   28,   28,   28,   28,   28,   28,   28,
           28,   28,   28,   28,   78,   78,   78,   78,   78,   78,
           78,   78,   78,   78,   78,   78,   78,   78,   78,   78,
           78,   78,   12,   12,   12,   12,   12,   12,   12,   12,
           12,   12,   12,   12,   12,   12,   12,   12,   12,    6,
            6,    6,   44,   34,   82,   60,   40,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,   30,   -1,   30,
           87,   87,   -1,   -1,   -1,   -1,   30,   -1,   87,   87,
           -1,   -1,   30,   30,   -1,   -1,   30,   30,   -1,   -1,
           87,   87
    );

    private static $yygbase = array(
            0,    0, -227,    0, -133,    0,  358,  170,  131,    0,
            0,   -4,  143, -250,    0,  -29,    0,    0,    0,    0,
            0,   86,    0,    0,    0,    0,  118,   12,   71,  228,
           43,    0,    0,    0,    6,  -92,   16,    0,    0,    0,
         -163,    0,    2, -224,   55,    0,   10,   93,    0,    5,
            0,    0,    0,    0,    0,    0,    0,  -19,  -50, -111,
            7,    0,    0,    0,    0,    0,    0,    0,  -12,   15,
          -45,  -41,    0,    0,  -76,   27,  121,  -52,  126,    0,
            0,    0,    3,    0,    0,  -27,    0,  130,    0
    );

    private static $yygdefault = array(
        -32768,  365,    3,  544,  787,  386,  568,  569,  570,  314,
          309,  559,  481,    4,  566,  136,  305,  573,  306,  501,
          575,  410,  577,  578,  315,  316,  411,  323,  222,  591,
          503,  322,  594,  357,  600,  310,  447,  387,  352,  462,
          227,  420,  455,  296,  538,  448,  353,  432,  433,  664,
          672,  362,  335,  334,  484,  676,  235,  683,  326,  347,
          706,  769,  771,  423,  405,  479,  337,  841,  388,  285,
          286,  389,  791,  290,  840,  431,  435,  260,  828,  482,
          826,  361,  875,  839,  287,  870,  351,  886,  458
    );

    private static $yylhs = array(
            0,    1,    2,    2,    4,    5,    5,    3,    3,    3,
            3,    3,    3,    3,    3,    3,    9,    9,   11,   11,
           11,   11,   10,   10,   13,   13,   14,   14,   14,   14,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,   33,   33,
           34,   27,   27,   30,   30,    7,    8,    8,   37,   37,
           37,   38,   38,   41,   41,   39,   39,   42,   42,   22,
           22,   29,   29,   32,   32,   31,   31,   23,   23,   23,
           23,   43,   43,   43,   44,   44,   20,   20,   16,   16,
           18,   18,   17,   17,   19,   19,   36,   36,   45,   45,
           45,   45,   46,   46,   46,   47,   47,   48,   48,   48,
           48,   24,   24,   49,   49,   49,   25,   25,   25,   25,
           40,   40,   50,   50,   50,   55,   55,   51,   51,   54,
           54,   56,   56,   57,   57,   57,   57,   57,   57,   52,
           52,   52,   52,   53,   53,   26,   26,   21,   21,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   65,   65,   66,   66,   67,   67,
           67,   67,   67,   68,   68,   35,   35,   35,   59,   59,
           72,   72,   73,   73,   73,   73,   73,   61,   61,   61,
           64,   64,   64,   60,   60,   78,   78,   78,   78,   78,
           78,   78,   78,   78,   78,   78,   78,   12,   12,   12,
           12,   12,   12,   62,   62,   62,   62,   62,   62,   79,
           79,   82,   82,   81,   81,   81,   81,   28,   28,   28,
           83,   83,   83,   84,   84,   84,   71,   71,   74,   74,
           74,   74,   70,   70,   70,   70,   70,   70,   69,   69,
           69,   69,   76,   76,   75,   75,   75,   58,   58,   85,
           85,   85,   63,   63,   86,   86,   86,   86,   86,   86,
           86,   86,   77,   77,   77,   77,   87,   87,   87,   87,
           87,   87,   88,   88,   88,   80,   80
    );

    private static $yylen = array(
            1,    1,    2,    0,    1,    1,    3,    1,    1,    1,
            4,    3,    5,    4,    3,    2,    3,    1,    1,    3,
            2,    4,    5,    4,    2,    0,    1,    1,    1,    4,
            3,    7,   10,    5,    7,    9,    5,    2,    3,    2,
            3,    2,    3,    3,    3,    3,    1,    2,    5,    7,
            8,   10,    5,    1,    5,    3,    3,    2,    1,    2,
            8,    1,    3,    0,    1,    9,    7,    6,    1,    2,
            2,    0,    2,    0,    2,    0,    2,    1,    3,    1,
            4,    1,    4,    1,    4,    3,    5,    3,    4,    4,
            5,    0,    5,    4,    1,    1,    1,    4,    0,    6,
            0,    7,    0,    2,    0,    3,    1,    0,    3,    5,
            5,    7,    0,    1,    1,    1,    0,    1,    2,    3,
            4,    3,    1,    1,    2,    4,    3,    5,    1,    3,
            2,    0,    3,    2,    8,    1,    3,    1,    1,    0,
            1,    1,    2,    1,    1,    1,    1,    1,    1,    3,
            5,    1,    3,    5,    4,    3,    1,    0,    1,    1,
            6,    3,    4,    6,    3,    2,    3,    3,    3,    3,
            3,    3,    3,    3,    3,    3,    3,    2,    2,    2,
            2,    3,    3,    3,    3,    3,    3,    3,    3,    3,
            3,    3,    3,    3,    3,    3,    3,    2,    2,    2,
            2,    3,    3,    3,    3,    3,    3,    3,    3,    3,
            3,    5,    4,    4,    4,    2,    2,    4,    2,    2,
            2,    2,    2,    2,    2,    2,    2,    2,    2,    1,
            4,    3,    2,    9,    0,    4,    4,    2,    4,    6,
            6,    4,    4,    1,    1,    1,    3,    2,    1,    1,
            1,    1,    0,    3,    3,    4,    4,    0,    2,    3,
            0,    1,    1,    0,    3,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    3,    2,    1,    1,    2,
            2,    4,    3,    1,    1,    1,    1,    3,    3,    0,
            2,    0,    1,    5,    3,    3,    1,    1,    1,    1,
            1,    4,    6,    3,    4,    4,    1,    2,    1,    4,
            4,    1,    3,    3,    6,    6,    4,    4,    4,    4,
            1,    4,    0,    1,    1,    3,    1,    3,    1,    1,
            4,    0,    0,    2,    5,    3,    3,    1,    6,    4,
            4,    2,    2,    2,    1,    2,    1,    4,    3,    3,
            6,    3,    1,    1,    1,    3,    3
    );

    /* Debug Mode */
    protected function yyprintln($msg) {
        echo $msg, "\n";
    }

    private function YYTRACE_NEWSTATE($state, $sym) {
        $this->yyprintln(
            '% State ' . $state
          . ', Lookahead ' . ($sym < 0 ? '--none--' : self::$yyterminals[$sym])
        );
    }

    private function YYTRACE_READ($sym) {
        $this->yyprintln('% Reading ' . self::$yyterminals[$sym]);
    }

    private function YYTRACE_SHIFT($sym) {
        $this->yyprintln('% Shift ' . self::$yyterminals[$sym]);
    }

    private function YYTRACE_ACCEPT() {
        $this->yyprintln('% Accepted.');
    }

    private function YYTRACE_REDUCE($n) {
        $this->yyprintln('% Reduce by (' . $n . ') ' . self::$yyproduction[$n]);
    }

    private function YYTRACE_POP($state) {
        $this->yyprintln('% Recovering, uncovers state ' . $state);
    }

    private function YYTRACE_DISCARD($sym) {
        $this->yyprintln('% Discard ' . self::$yyterminals[$sym]);
    }

    protected $yyval;
    protected $yyastk;
    protected $yysp;
    protected $yyaccept;

    /**
     * Parses PHP code into a node tree and prints out debugging information.
     *
     * @param Lexer    $lex           A lexer
     * @param callback $errorCallback Function to be passed a message in case of an error.
     *
     * @return array Array of statements
     */
    public function parse(Lexer $lex, $errorCallback) {
        $this->yyastk = array();
        $yysstk = array();
        $this->yysp = 0;

        $yystate = 0;
        $yychar = -1;

        $yylval = null;
        $yysstk[$this->yysp] = 0;
        $yyerrflag = 0;

        for (;;) {
            $this->YYTRACE_NEWSTATE($yystate, $yychar);
            if (self::$yybase[$yystate] == 0) {
                $yyn = self::$yydefault[$yystate];
            } else {
                if ($yychar < 0) {
                    if (($yychar = $lex->lex($yylval)) < 0)
                        $yychar = 0;
                    $yychar = $yychar < self::YYMAXLEX ?
                        self::$yytranslate[$yychar] : self::YYBADCH;
                    $this->YYTRACE_READ($yychar);
                }
                if ((($yyn = self::$yybase[$yystate] + $yychar) >= 0
                     && $yyn < self::YYLAST && self::$yycheck[$yyn] == $yychar
                     || ($yystate < self::YY2TBLSTATE
                        && ($yyn = self::$yybase[$yystate + self::YYNLSTATES]
                            + $yychar) >= 0
                        && $yyn < self::YYLAST
                        && self::$yycheck[$yyn] == $yychar))
                    && ($yyn = self::$yyaction[$yyn]) != self::YYDEFAULT) {
                    /*
                     * >= YYNLSTATE: shift and reduce
                     * > 0: shift
                     * = 0: accept
                     * < 0: reduce
                     * = -YYUNEXPECTED: error
                     */
                    if ($yyn > 0) {
                        /* shift */
                        $this->YYTRACE_SHIFT($yychar);
                        ++$this->yysp;

                        $yysstk[$this->yysp] = $yystate = $yyn;
                        $this->yyastk[$this->yysp] = $yylval;
                        $yychar = -1;

                        if ($yyerrflag > 0)
                            --$yyerrflag;
                        if ($yyn < self::YYNLSTATES)
                            continue;

                        /* $yyn >= YYNLSTATES means shift-and-reduce */
                        $yyn -= self::YYNLSTATES;
                    } else {
                        $yyn = -$yyn;
                    }
                } else {
                    $yyn = self::$yydefault[$yystate];
                }
            }

            for (;;) {
                /* reduce/error */
                if ($yyn == 0) {
                    /* accept */
                    $this->YYTRACE_ACCEPT();
                    return $this->yyval;
                } elseif ($yyn != self::YYUNEXPECTED) {
                    /* reduce */
                    $this->YYTRACE_REDUCE($yyn);
                    $this->{'yyn' . $yyn}();

                    /* Goto - shift nonterminal */
                    $this->yysp -= self::$yylen[$yyn];
                    $yyn = self::$yylhs[$yyn];
                    if (($yyp = self::$yygbase[$yyn] + $yysstk[$this->yysp]) >= 0
                         && $yyp < self::YYGLAST
                         && self::$yygcheck[$yyp] == $yyn) {
                        $yystate = self::$yygoto[$yyp];
                    } else {
                        $yystate = self::$yygdefault[$yyn];
                    }

                    ++$this->yysp;

                    $yysstk[$this->yysp] = $yystate;
                    $this->yyastk[$this->yysp] = $this->yyval;
                } else {
                    /* error */
                    switch ($yyerrflag) {
                    case 0:
                        $errorCallback(
                            'Parse error:'
                            . ' Unexpected token ' . self::$yyterminals[$yychar]
                            . ' on line ' . $lex->getLine()
                        );
                    case 1:
                    case 2:
                        $yyerrflag = 3;
                        /* Pop until error-expecting state uncovered */
                        while (!(($yyn = self::$yybase[$yystate] + self::YYINTERRTOK) >= 0
                                 && $yyn < self::YYLAST
                                 && self::$yycheck[$yyn] == self::YYINTERRTOK
                                 || ($yystate < self::YY2TBLSTATE
                                    && ($yyn = self::$yybase[$yystate + self::YYNLSTATES] + self::YYINTERRTOK) >= 0
                                    && $yyn < self::YYLAST
                                    && self::$yycheck[$yyn] == self::YYINTERRTOK))) {
                            if ($this->yysp <= 0) {
                                return false;
                            }
                            $yystate = $yysstk[--$this->yysp];
                            $this->YYTRACE_POP($yystate);
                        }
                        $yyn = self::$yyaction[$yyn];
                        $this->YYTRACE_SHIFT(self::YYINTERRTOK);
                        $yysstk[++$this->yysp] = $yystate = $yyn;
                        break;

                    case 3:
                        $this->YYTRACE_DISCARD($yychar);
                        if ($yychar == 0) {
                            return false;
                        }
                        $yychar = -1;
                        break;
                    }
                }

                if ($yystate < self::YYNLSTATES)
                    break;
                /* >= YYNLSTATES means shift-and-reduce */
                $yyn = $yystate - self::YYNLSTATES;
            }
        }
    }

    private function yyn0() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn1() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn2() {
         if (is_array($this->yyastk[$this->yysp-(2-2)])) { $this->yyval = array_merge($this->yyastk[$this->yysp-(2-1)], $this->yyastk[$this->yysp-(2-2)]); } else { $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; }; 
    }

    private function yyn3() {
         $this->yyval = array(); 
    }

    private function yyn4() {
         $this->yyval = new Node_Name(array('parts' => $this->yyastk[$this->yysp-(1-1)])); 
    }

    private function yyn5() {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn6() {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn7() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn8() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn9() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn10() {
         YYACCEPT; 
    }

    private function yyn11() {
         $this->yyval = new Node_Stmt_Namespace(array('ns' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn12() {
         $this->yyval = array(new Node_Stmt_Namespace(array('ns' => $this->yyastk[$this->yysp-(5-2)])), $this->yyastk[$this->yysp-(5-4)]); 
    }

    private function yyn13() {
         $this->yyval = array(new Node_Stmt_Namespace(array('ns' => null)), $this->yyastk[$this->yysp-(4-3)]); 
    }

    private function yyn14() {
         $this->yyval = new Node_Stmt_Use(array('uses' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn15() {
         $this->yyval = new Node_Stmt_Const(array('consts' => $this->yyastk[$this->yysp-(2-1)])); 
    }

    private function yyn16() {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn17() {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn18() {
         $this->yyval = new Node_Stmt_UseUse(array('ns' => $this->yyastk[$this->yysp-(1-1)], 'alias' => null)); 
    }

    private function yyn19() {
         $this->yyval = new Node_Stmt_UseUse(array('ns' => $this->yyastk[$this->yysp-(3-1)], 'alias' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn20() {
         $this->yyval = new Node_Stmt_UseUse(array('ns' => $this->yyastk[$this->yysp-(2-2)], 'alias' => null)); 
    }

    private function yyn21() {
         $this->yyval = new Node_Stmt_UseUse(array('ns' => $this->yyastk[$this->yysp-(4-2)], 'alias' => $this->yyastk[$this->yysp-(4-4)])); 
    }

    private function yyn22() {
         $this->yyastk[$this->yysp-(5-1)][] = new Node_Stmt_ConstConst(array('name' => $this->yyastk[$this->yysp-(5-3)], 'value' => $this->yyastk[$this->yysp-(5-5)])); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn23() {
         $this->yyval = array(new Node_Stmt_ConstConst(array('name' => $this->yyastk[$this->yysp-(4-2)], 'value' => $this->yyastk[$this->yysp-(4-4)]))); 
    }

    private function yyn24() {
         if (is_array($this->yyastk[$this->yysp-(2-2)])) { $this->yyval = array_merge($this->yyastk[$this->yysp-(2-1)], $this->yyastk[$this->yysp-(2-2)]); } else { $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; }; 
    }

    private function yyn25() {
         $this->yyval = array(); 
    }

    private function yyn26() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn27() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn28() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn29() {
         error('__halt_compiler() can only be used from the outermost scope'); 
    }

    private function yyn30() {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn31() {
         $this->yyval = new Node_Stmt_If(array('cond' => $this->yyastk[$this->yysp-(7-3)], 'stmts' => is_array($this->yyastk[$this->yysp-(7-5)]) ? $this->yyastk[$this->yysp-(7-5)] : array($this->yyastk[$this->yysp-(7-5)]), 'elseifList' => $this->yyastk[$this->yysp-(7-6)], 'else' => $this->yyastk[$this->yysp-(7-7)])); 
    }

    private function yyn32() {
         $this->yyval = new Node_Stmt_If(array('cond' => $this->yyastk[$this->yysp-(10-3)], 'stmts' => $this->yyastk[$this->yysp-(10-6)], 'elseifList' => $this->yyastk[$this->yysp-(10-7)], 'else' => $this->yyastk[$this->yysp-(10-8)])); 
    }

    private function yyn33() {
         $this->yyval = new Node_Stmt_While(array('cond' => $this->yyastk[$this->yysp-(5-3)], 'stmts' => is_array($this->yyastk[$this->yysp-(5-5)]) ? $this->yyastk[$this->yysp-(5-5)] : array($this->yyastk[$this->yysp-(5-5)]))); 
    }

    private function yyn34() {
         $this->yyval = new Node_Stmt_Do(array('stmts' => is_array($this->yyastk[$this->yysp-(7-2)]) ? $this->yyastk[$this->yysp-(7-2)] : array($this->yyastk[$this->yysp-(7-2)]), 'cond' => $this->yyastk[$this->yysp-(7-5)])); 
    }

    private function yyn35() {
         $this->yyval = new Node_Stmt_For(array('init' => $this->yyastk[$this->yysp-(9-3)], 'cond' => $this->yyastk[$this->yysp-(9-5)], 'loop' => $this->yyastk[$this->yysp-(9-7)], 'stmts' => is_array($this->yyastk[$this->yysp-(9-9)]) ? $this->yyastk[$this->yysp-(9-9)] : array($this->yyastk[$this->yysp-(9-9)]))); 
    }

    private function yyn36() {
         $this->yyval = new Node_Stmt_Switch(array('cond' => $this->yyastk[$this->yysp-(5-3)], 'caseList' => $this->yyastk[$this->yysp-(5-5)])); 
    }

    private function yyn37() {
         $this->yyval = new Node_Stmt_Break(array('num' => null)); 
    }

    private function yyn38() {
         $this->yyval = new Node_Stmt_Break(array('num' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn39() {
         $this->yyval = new Node_Stmt_Continue(array('num' => null)); 
    }

    private function yyn40() {
         $this->yyval = new Node_Stmt_Continue(array('num' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn41() {
         $this->yyval = new Node_Stmt_Return(array('expr' => null)); 
    }

    private function yyn42() {
         $this->yyval = new Node_Stmt_Return(array('expr' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn43() {
         $this->yyval = new Node_Stmt_Global(array('vars' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn44() {
         $this->yyval = new Node_Stmt_Static(array('vars' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn45() {
         $this->yyval = new Node_Stmt_Echo(array('exprs' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn46() {
         $this->yyval = new Node_Stmt_InlineHTML(array('value' => $this->yyastk[$this->yysp-(1-1)])); 
    }

    private function yyn47() {
         $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn48() {
         $this->yyval = new Node_Stmt_Unset(array('vars' => $this->yyastk[$this->yysp-(5-3)])); 
    }

    private function yyn49() {
         $this->yyval = new Node_Stmt_Foreach(array('expr' => $this->yyastk[$this->yysp-(7-3)], 'keyVar' => null, 'byRef' => false, 'valueVar' => $this->yyastk[$this->yysp-(7-5)], 'stmts' => is_array($this->yyastk[$this->yysp-(7-7)]) ? $this->yyastk[$this->yysp-(7-7)] : array($this->yyastk[$this->yysp-(7-7)]))); 
    }

    private function yyn50() {
         $this->yyval = new Node_Stmt_Foreach(array('expr' => $this->yyastk[$this->yysp-(8-3)], 'keyVar' => null, 'byRef' => true, 'valueVar' => $this->yyastk[$this->yysp-(8-6)], 'stmts' => is_array($this->yyastk[$this->yysp-(8-8)]) ? $this->yyastk[$this->yysp-(8-8)] : array($this->yyastk[$this->yysp-(8-8)]))); 
    }

    private function yyn51() {
         $this->yyval = new Node_Stmt_Foreach(array('expr' => $this->yyastk[$this->yysp-(10-3)], 'keyVar' => $this->yyastk[$this->yysp-(10-5)], 'byRef' => $this->yyastk[$this->yysp-(10-7)], 'valueVar' => $this->yyastk[$this->yysp-(10-8)], 'stmts' => is_array($this->yyastk[$this->yysp-(10-10)]) ? $this->yyastk[$this->yysp-(10-10)] : array($this->yyastk[$this->yysp-(10-10)]))); 
    }

    private function yyn52() {
         $this->yyval = new Node_Stmt_Declare(array('declares' => $this->yyastk[$this->yysp-(5-3)], 'stmts' => is_array($this->yyastk[$this->yysp-(5-5)]) ? $this->yyastk[$this->yysp-(5-5)] : array($this->yyastk[$this->yysp-(5-5)]))); 
    }

    private function yyn53() {
         $this->yyval = array(); /* means: no statement */ 
    }

    private function yyn54() {
         $this->yyval = new Node_Stmt_TryCatch(array('stmts' => $this->yyastk[$this->yysp-(5-3)], 'catches' => $this->yyastk[$this->yysp-(5-5)])); 
    }

    private function yyn55() {
         $this->yyval = new Node_Stmt_Throw(array('expr' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn56() {
         $this->yyval = new Node_Stmt_Goto(array('name' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn57() {
         $this->yyval = new Node_Stmt_Label(array('name' => $this->yyastk[$this->yysp-(2-1)])); 
    }

    private function yyn58() {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn59() {
         $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn60() {
         $this->yyval = new Node_Stmt_Catch(array('type' => $this->yyastk[$this->yysp-(8-3)], 'var' => substr($this->yyastk[$this->yysp-(8-4)], 1), 'stmts' => $this->yyastk[$this->yysp-(8-7)])); 
    }

    private function yyn61() {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn62() {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn63() {
         $this->yyval = false; 
    }

    private function yyn64() {
         $this->yyval = true; 
    }

    private function yyn65() {
         $this->yyval = new Node_Stmt_Func(array('byRef' => $this->yyastk[$this->yysp-(9-2)], 'name' => $this->yyastk[$this->yysp-(9-3)], 'params' => $this->yyastk[$this->yysp-(9-5)], 'stmts' => $this->yyastk[$this->yysp-(9-8)])); 
    }

    private function yyn66() {
         $this->yyval = new Node_Stmt_Class(array('type' => $this->yyastk[$this->yysp-(7-1)], 'name' => $this->yyastk[$this->yysp-(7-2)], 'extends' => $this->yyastk[$this->yysp-(7-3)], 'implements' => $this->yyastk[$this->yysp-(7-4)], 'stmts' => $this->yyastk[$this->yysp-(7-6)])); 
    }

    private function yyn67() {
         $this->yyval = new Node_Stmt_Interface(array('name' => $this->yyastk[$this->yysp-(6-2)], 'extends' => $this->yyastk[$this->yysp-(6-3)], 'stmts' => $this->yyastk[$this->yysp-(6-5)])); 
    }

    private function yyn68() {
         $this->yyval = 0; 
    }

    private function yyn69() {
         $this->yyval = Node_Stmt_Class::MODIFIER_ABSTRACT; 
    }

    private function yyn70() {
         $this->yyval = Node_Stmt_Class::MODIFIER_FINAL; 
    }

    private function yyn71() {
         $this->yyval = null; 
    }

    private function yyn72() {
         $this->yyval = $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn73() {
         $this->yyval = array(); 
    }

    private function yyn74() {
         $this->yyval = $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn75() {
         $this->yyval = array(); 
    }

    private function yyn76() {
         $this->yyval = $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn77() {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn78() {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn79() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn80() {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn81() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn82() {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn83() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn84() {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn85() {
         $this->yyval = array(new Node_Stmt_DeclareDeclare(array('key' => $this->yyastk[$this->yysp-(3-1)], 'value' => $this->yyastk[$this->yysp-(3-3)]))); 
    }

    private function yyn86() {
         $this->yyastk[$this->yysp-(5-1)][] = new Node_Stmt_DeclareDeclare(array('key' => $this->yyastk[$this->yysp-(5-3)], 'value' => $this->yyastk[$this->yysp-(5-5)])); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn87() {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn88() {
         $this->yyval = $this->yyastk[$this->yysp-(4-3)]; 
    }

    private function yyn89() {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn90() {
         $this->yyval = $this->yyastk[$this->yysp-(5-3)]; 
    }

    private function yyn91() {
         $this->yyval = array(); 
    }

    private function yyn92() {
         $this->yyastk[$this->yysp-(5-1)][] = new Node_Stmt_Case(array('cond' => $this->yyastk[$this->yysp-(5-3)], 'stmts' => $this->yyastk[$this->yysp-(5-5)])); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn93() {
         $this->yyastk[$this->yysp-(4-1)][] = new Node_Stmt_Case(array('cond' => null, 'stmts' => $this->yyastk[$this->yysp-(4-4)])); $this->yyval = $this->yyastk[$this->yysp-(4-1)]; 
    }

    private function yyn94() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn95() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn96() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn97() {
         $this->yyval = $this->yyastk[$this->yysp-(4-2)]; 
    }

    private function yyn98() {
         $this->yyval = array();
    }

    private function yyn99() {
         $this->yyastk[$this->yysp-(6-1)][] = new Node_Stmt_ElseIf(array('cond' => $this->yyastk[$this->yysp-(6-4)], 'stmts' => is_array($this->yyastk[$this->yysp-(6-6)]) ? $this->yyastk[$this->yysp-(6-6)] : array($this->yyastk[$this->yysp-(6-6)]))); $this->yyval = $this->yyastk[$this->yysp-(6-1)]; 
    }

    private function yyn100() {
         $this->yyval = array(); 
    }

    private function yyn101() {
         $this->yyastk[$this->yysp-(7-1)][] = new Node_Stmt_ElseIf(array('cond' => $this->yyastk[$this->yysp-(7-4)], 'stmts' => $this->yyastk[$this->yysp-(7-7)])); $this->yyval = $this->yyastk[$this->yysp-(7-1)]; 
    }

    private function yyn102() {
         $this->yyval = null; 
    }

    private function yyn103() {
         $this->yyval = new Node_Stmt_Else(array('stmts' => is_array($this->yyastk[$this->yysp-(2-2)]) ? $this->yyastk[$this->yysp-(2-2)] : array($this->yyastk[$this->yysp-(2-2)]))); 
    }

    private function yyn104() {
         $this->yyval = null; 
    }

    private function yyn105() {
         $this->yyval = new Node_Stmt_Else(array('stmts' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn106() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn107() {
         $this->yyval = array(); 
    }

    private function yyn108() {
         $this->yyval = array(new Node_Stmt_FuncParam(array('type' => $this->yyastk[$this->yysp-(3-1)], 'name' => substr($this->yyastk[$this->yysp-(3-3)], 1), 'byRef' => $this->yyastk[$this->yysp-(3-2)], 'default' => null))); 
    }

    private function yyn109() {
         $this->yyval = array(new Node_Stmt_FuncParam(array('type' => $this->yyastk[$this->yysp-(5-1)], 'name' => substr($this->yyastk[$this->yysp-(5-3)], 1), 'byRef' => $this->yyastk[$this->yysp-(5-2)], 'default' => $this->yyastk[$this->yysp-(5-5)]))); 
    }

    private function yyn110() {
         $this->yyastk[$this->yysp-(5-1)][] = new Node_Stmt_FuncParam(array('type' => $this->yyastk[$this->yysp-(5-3)], 'name' => substr($this->yyastk[$this->yysp-(5-5)], 1), 'byRef' => $this->yyastk[$this->yysp-(5-4)], 'default' => null)); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn111() {
         $this->yyastk[$this->yysp-(7-1)][] = new Node_Stmt_FuncParam(array('type' => $this->yyastk[$this->yysp-(7-3)], 'name' => substr($this->yyastk[$this->yysp-(7-5)], 1), 'byRef' => $this->yyastk[$this->yysp-(7-4)], 'default' => $this->yyastk[$this->yysp-(7-7)])); $this->yyval = $this->yyastk[$this->yysp-(7-1)]; 
    }

    private function yyn112() {
         $this->yyval = null; 
    }

    private function yyn113() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn114() {
         $this->yyval = 'array'; 
    }

    private function yyn115() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn116() {
         $this->yyval = array(); 
    }

    private function yyn117() {
         $this->yyval = array(new Node_Expr_FuncCallArg(array('value' => $this->yyastk[$this->yysp-(1-1)], 'byRef' => false))); 
    }

    private function yyn118() {
         $this->yyval = array(new Node_Expr_FuncCallArg(array('value' => $this->yyastk[$this->yysp-(2-2)], 'byRef' => true))); 
    }

    private function yyn119() {
         $this->yyastk[$this->yysp-(3-1)][] = new Node_Expr_FuncCallArg(array('value' => $this->yyastk[$this->yysp-(3-3)], 'byRef' => false)); $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn120() {
         $this->yyastk[$this->yysp-(4-1)][] = new Node_Expr_FuncCallArg(array('value' => $this->yyastk[$this->yysp-(4-4)], 'byRef' => true)); $this->yyval = $this->yyastk[$this->yysp-(4-1)]; 
    }

    private function yyn121() {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn122() {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn123() {
         $this->yyval = new Node_Variable(array('name' => substr($this->yyastk[$this->yysp-(1-1)], 1))); 
    }

    private function yyn124() {
         $this->yyval = new Node_Variable(array('name' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn125() {
         $this->yyval = new Node_Variable(array('name' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn126() {
         $this->yyastk[$this->yysp-(3-1)][] = new Node_Stmt_StaticVar(array('name' => substr($this->yyastk[$this->yysp-(3-3)], 1), 'default' => null)); $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn127() {
         $this->yyastk[$this->yysp-(5-1)][] = new Node_Stmt_StaticVar(array('name' => substr($this->yyastk[$this->yysp-(5-3)], 1), 'default' => $this->yyastk[$this->yysp-(5-5)])); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn128() {
         $this->yyval = array(new Node_Stmt_StaticVar(array('name' => substr($this->yyastk[$this->yysp-(1-1)], 1), 'default' => null))); 
    }

    private function yyn129() {
         $this->yyval = array(new Node_Stmt_StaticVar(array('name' => substr($this->yyastk[$this->yysp-(3-1)], 1), 'default' => $this->yyastk[$this->yysp-(3-3)]))); 
    }

    private function yyn130() {
         $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn131() {
         $this->yyval = array(); 
    }

    private function yyn132() {
         $this->yyval = new Node_Stmt_Property(array('type' => $this->yyastk[$this->yysp-(3-1)], 'props' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn133() {
         $this->yyval = new Node_Stmt_ClassConst(array('consts' => $this->yyastk[$this->yysp-(2-1)])); 
    }

    private function yyn134() {
         $this->yyval = new Node_Stmt_ClassMethod(array('type' => $this->yyastk[$this->yysp-(8-1)], 'byRef' => $this->yyastk[$this->yysp-(8-3)], 'name' => $this->yyastk[$this->yysp-(8-4)], 'params' => $this->yyastk[$this->yysp-(8-6)], 'stmts' => $this->yyastk[$this->yysp-(8-8)])); 
    }

    private function yyn135() {
         $this->yyval = null; 
    }

    private function yyn136() {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn137() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn138() {
         $this->yyval = Node_Stmt_Class::MODIFIER_PUBLIC; 
    }

    private function yyn139() {
         $this->yyval = Node_Stmt_Class::MODIFIER_PUBLIC; 
    }

    private function yyn140() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn141() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn142() {
         Node_Stmt_Class::verifyModifier($this->yyastk[$this->yysp-(2-1)], $this->yyastk[$this->yysp-(2-2)]); $this->yyval = $this->yyastk[$this->yysp-(2-1)] | $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn143() {
         $this->yyval = Node_Stmt_Class::MODIFIER_PUBLIC; 
    }

    private function yyn144() {
         $this->yyval = Node_Stmt_Class::MODIFIER_PROTECTED; 
    }

    private function yyn145() {
         $this->yyval = Node_Stmt_Class::MODIFIER_PRIVATE; 
    }

    private function yyn146() {
         $this->yyval = Node_Stmt_Class::MODIFIER_STATIC; 
    }

    private function yyn147() {
         $this->yyval = Node_Stmt_Class::MODIFIER_ABSTRACT; 
    }

    private function yyn148() {
         $this->yyval = Node_Stmt_Class::MODIFIER_FINAL; 
    }

    private function yyn149() {
         $this->yyastk[$this->yysp-(3-1)][] = new Node_Stmt_PropertyProperty(array('name' => substr($this->yyastk[$this->yysp-(3-3)], 1), 'default' => null)); $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn150() {
         $this->yyastk[$this->yysp-(5-1)][] = new Node_Stmt_PropertyProperty(array('name' => substr($this->yyastk[$this->yysp-(5-3)], 1), 'default' => $this->yyastk[$this->yysp-(5-5)])); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn151() {
         $this->yyval = array(new Node_Stmt_PropertyProperty(array('name' => substr($this->yyastk[$this->yysp-(1-1)], 1), 'default' => null))); 
    }

    private function yyn152() {
         $this->yyval = array(new Node_Stmt_PropertyProperty(array('name' => substr($this->yyastk[$this->yysp-(3-1)], 1), 'default' => $this->yyastk[$this->yysp-(3-3)]))); 
    }

    private function yyn153() {
         $this->yyastk[$this->yysp-(5-1)][] = new Node_Stmt_ClassConstConst(array('name' => $this->yyastk[$this->yysp-(5-3)], 'value' => $this->yyastk[$this->yysp-(5-5)])); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn154() {
         $this->yyval = array(new Node_Stmt_ClassConstConst(array('name' => $this->yyastk[$this->yysp-(4-2)], 'value' => $this->yyastk[$this->yysp-(4-4)]))); 
    }

    private function yyn155() {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn156() {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn157() {
         $this->yyval = array(); 
    }

    private function yyn158() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn159() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn160() {
         $this->yyval = new Node_Expr_List(array('assignList' => $this->yyastk[$this->yysp-(6-3)], 'expr' => $this->yyastk[$this->yysp-(6-6)])); 
    }

    private function yyn161() {
         $this->yyval = new Node_Expr_Assign(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn162() {
         $this->yyval = new Node_Expr_AssignRef(array('var' => $this->yyastk[$this->yysp-(4-1)], 'refVar' => $this->yyastk[$this->yysp-(4-4)])); 
    }

    private function yyn163() {
         $this->yyval = new Node_Expr_Assign(array('var' => $this->yyastk[$this->yysp-(6-1)], 'expr' => new Node_Expr_New(array('class' => $this->yyastk[$this->yysp-(6-5)], 'args' => $this->yyastk[$this->yysp-(6-6)])))); 
    }

    private function yyn164() {
         $this->yyval = new Node_Expr_New(array('class' => $this->yyastk[$this->yysp-(3-2)], 'args' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn165() {
         $this->yyval = new Node_Expr_Clone(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn166() {
         $this->yyval = new Node_Expr_AssignPlus(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn167() {
         $this->yyval = new Node_Expr_AssignMinus(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn168() {
         $this->yyval = new Node_Expr_AssignMul(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn169() {
         $this->yyval = new Node_Expr_AssignDiv(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn170() {
         $this->yyval = new Node_Expr_AssignConcat(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn171() {
         $this->yyval = new Node_Expr_AssignMod(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn172() {
         $this->yyval = new Node_Expr_AssignBinAnd(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn173() {
         $this->yyval = new Node_Expr_AssignBinOr(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn174() {
         $this->yyval = new Node_Expr_AssignBinXor(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn175() {
         $this->yyval = new Node_Expr_AssignShiftLeft(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn176() {
         $this->yyval = new Node_Expr_AssignShiftRight(array('var' => $this->yyastk[$this->yysp-(3-1)], 'expr' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn177() {
         $this->yyval = new Node_Expr_PostInc(array('var' => $this->yyastk[$this->yysp-(2-1)])); 
    }

    private function yyn178() {
         $this->yyval = new Node_Expr_PreInc(array('var' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn179() {
         $this->yyval = new Node_Expr_PostDec(array('var' => $this->yyastk[$this->yysp-(2-1)])); 
    }

    private function yyn180() {
         $this->yyval = new Node_Expr_PreDec(array('var' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn181() {
         $this->yyval = new Node_Expr_BooleanOr(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn182() {
         $this->yyval = new Node_Expr_BooleanAnd(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn183() {
         $this->yyval = new Node_Expr_LogicalOr(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn184() {
         $this->yyval = new Node_Expr_LogicalAnd(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn185() {
         $this->yyval = new Node_Expr_LogicalXor(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn186() {
         $this->yyval = new Node_Expr_BinaryOr(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn187() {
         $this->yyval = new Node_Expr_BinaryAnd(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn188() {
         $this->yyval = new Node_Expr_BinaryXor(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn189() {
         $this->yyval = new Node_Expr_Concat(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn190() {
         $this->yyval = new Node_Expr_Plus(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn191() {
         $this->yyval = new Node_Expr_Minus(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn192() {
         $this->yyval = new Node_Expr_Mul(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn193() {
         $this->yyval = new Node_Expr_Div(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn194() {
         $this->yyval = new Node_Expr_Mod(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn195() {
         $this->yyval = new Node_Expr_ShiftLeft(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn196() {
         $this->yyval = new Node_Expr_ShiftRight(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn197() {
         $this->yyval = new Node_Expr_UnaryPlus(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn198() {
         $this->yyval = new Node_Expr_UnaryMinus(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn199() {
         $this->yyval = new Node_Expr_BooleanNot(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn200() {
         $this->yyval = new Node_Expr_BinaryNot(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn201() {
         $this->yyval = new Node_Expr_Identical(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn202() {
         $this->yyval = new Node_Expr_NotIdentical(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn203() {
         $this->yyval = new Node_Expr_Equal(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn204() {
         $this->yyval = new Node_Expr_NotEqual(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn205() {
         $this->yyval = new Node_Expr_Smaller(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn206() {
         $this->yyval = new Node_Expr_SmallerOrEqual(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn207() {
         $this->yyval = new Node_Expr_Greater(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn208() {
         $this->yyval = new Node_Expr_GreaterOrEqual(array('left' => $this->yyastk[$this->yysp-(3-1)], 'right' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn209() {
         $this->yyval = new Node_Expr_InstanceOf(array('expr' => $this->yyastk[$this->yysp-(3-1)], 'class' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn210() {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn211() {
         $this->yyval = new Node_Expr_Ternary(array('cond' => $this->yyastk[$this->yysp-(5-1)], 'if' => $this->yyastk[$this->yysp-(5-3)], 'else' => $this->yyastk[$this->yysp-(5-5)])); 
    }

    private function yyn212() {
         $this->yyval = new Node_Expr_Ternary(array('cond' => $this->yyastk[$this->yysp-(4-1)], 'if' => null, 'else' => $this->yyastk[$this->yysp-(4-4)])); 
    }

    private function yyn213() {
         $this->yyval = new Node_Expr_Isset(array('vars' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn214() {
         $this->yyval = new Node_Expr_Empty(array('var' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn215() {
         $this->yyval = new Node_Expr_Include(array('expr' => $this->yyastk[$this->yysp-(2-2)], 'type' => Node_Expr_Include::TYPE_INCLUDE)); 
    }

    private function yyn216() {
         $this->yyval = new Node_Expr_Include(array('expr' => $this->yyastk[$this->yysp-(2-2)], 'type' => Node_Expr_Include::TYPE_INCLUDE_ONCE)); 
    }

    private function yyn217() {
         $this->yyval = new Node_Expr_Eval(array('expr' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn218() {
         $this->yyval = new Node_Expr_Include(array('expr' => $this->yyastk[$this->yysp-(2-2)], 'type' => Node_Expr_Include::TYPE_REQUIRE)); 
    }

    private function yyn219() {
         $this->yyval = new Node_Expr_Include(array('expr' => $this->yyastk[$this->yysp-(2-2)], 'type' => Node_Expr_Include::TYPE_REQUIRE_ONCE)); 
    }

    private function yyn220() {
         $this->yyval = new Node_Expr_IntCast(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn221() {
         $this->yyval = new Node_Expr_DoubleCast(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn222() {
         $this->yyval = new Node_Expr_StringCast(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn223() {
         $this->yyval = new Node_Expr_ArrayCast(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn224() {
         $this->yyval = new Node_Expr_ObjectCast(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn225() {
         $this->yyval = new Node_Expr_BoolCast(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn226() {
         $this->yyval = new Node_Expr_UnsetCast(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn227() {
         $this->yyval = new Node_Expr_Exit(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn228() {
         $this->yyval = new Node_Expr_ErrorSupress(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn229() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn230() {
         $this->yyval = new Node_Expr_Array(array('items' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn231() {
         $this->yyval = new Node_Expr_ShellExec(array('parts' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn232() {
         $this->yyval = new Node_Expr_Print(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn233() {
         $this->yyval = new Node_Expr_LambdaFunc(array('byRef' => $this->yyastk[$this->yysp-(9-2)], 'params' => $this->yyastk[$this->yysp-(9-4)], 'useVars' => $this->yyastk[$this->yysp-(9-6)], 'stmts' => $this->yyastk[$this->yysp-(9-8)])); 
    }

    private function yyn234() {
         $this->yyval = array(); 
    }

    private function yyn235() {
         $this->yyval = $this->yyastk[$this->yysp-(4-3)]; 
    }

    private function yyn236() {
         $this->yyastk[$this->yysp-(4-1)][] = new Node_Expr_LambdaFuncUse(array('var' => substr($this->yyastk[$this->yysp-(4-4)], 1), 'byRef' => $this->yyastk[$this->yysp-(4-3)])); $this->yyval = $this->yyastk[$this->yysp-(4-1)]; 
    }

    private function yyn237() {
         $this->yyval = array(new Node_Expr_LambdaFuncUse(array('var' => substr($this->yyastk[$this->yysp-(2-2)], 1), 'byRef' => $this->yyastk[$this->yysp-(2-1)]))); 
    }

    private function yyn238() {
         $this->yyval = new Node_Expr_FuncCall(array('func' => $this->yyastk[$this->yysp-(4-1)], 'args' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn239() {
         $this->yyval = new Node_Expr_StaticCall(array('class' => $this->yyastk[$this->yysp-(6-1)], 'func' => $this->yyastk[$this->yysp-(6-3)], 'args' => $this->yyastk[$this->yysp-(6-5)])); 
    }

    private function yyn240() {
         $this->yyval = new Node_Expr_StaticCall(array('class' => $this->yyastk[$this->yysp-(6-1)], 'func' => $this->yyastk[$this->yysp-(6-3)], 'args' => $this->yyastk[$this->yysp-(6-5)])); 
    }

    private function yyn241() {
        
            if ($this->yyastk[$this->yysp-(4-1)] instanceof Node_Expr_StaticPropertyFetch) {
                $this->yyval = new Node_Expr_StaticCall(array('class' => $this->yyastk[$this->yysp-(4-1)]->class, 'func' => $this->yyastk[$this->yysp-(4-1)]->name, 'args' => $this->yyastk[$this->yysp-(4-3)]));
            } elseif ($this->yyastk[$this->yysp-(4-1)] instanceof Node_Expr_ArrayDimFetch) {
                $this->yyastk[$this->yysp-(4-2)] = $this->yyastk[$this->yysp-(4-1)]; // $2 is just a temporary variable. Nothing to do with the '('
                while ($this->yyastk[$this->yysp-(4-2)]->var instanceof Node_Expr_ArrayDimFetch) {
                    $this->yyastk[$this->yysp-(4-2)] = $this->yyastk[$this->yysp-(4-2)]->var;
                }

                $this->yyval = new Node_Expr_StaticCall(array('class' => $this->yyastk[$this->yysp-(4-2)]->var->class, 'func' => $this->yyastk[$this->yysp-(4-1)], 'args' => $this->yyastk[$this->yysp-(4-3)]));
                $this->yyastk[$this->yysp-(4-2)]->var = new Node_Variable(array('name' => $this->yyastk[$this->yysp-(4-2)]->var->name));
            } else {
                throw new Exception;
            }
          
    }

    private function yyn242() {
         $this->yyval = new Node_Expr_FuncCall(array('func' => $this->yyastk[$this->yysp-(4-1)], 'args' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn243() {
         $this->yyval = 'static'; 
    }

    private function yyn244() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn245() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn246() {
         $this->yyastk[$this->yysp-(3-3)]->resolveType(Node_Name::RELATIVE); $this->yyval = $this->yyastk[$this->yysp-(3-3)]; 
    }

    private function yyn247() {
         $this->yyastk[$this->yysp-(2-2)]->resolveType(Node_Name::ABSOLUTE); $this->yyval = $this->yyastk[$this->yysp-(2-2)]; 
    }

    private function yyn248() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn249() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn250() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn251() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn252() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn253() {
         $this->yyval = new Node_Expr_PropertyFetch(array('var' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn254() {
         $this->yyval = new Node_Expr_PropertyFetch(array('var' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn255() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => $this->yyastk[$this->yysp-(4-1)], 'dim' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn256() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => $this->yyastk[$this->yysp-(4-1)], 'dim' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn257() {
         $this->yyval = null; 
    }

    private function yyn258() {
         $this->yyval = null; 
    }

    private function yyn259() {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn260() {
         $this->yyval = array(); 
    }

    private function yyn261() {
         $this->yyval = array(Node_Scalar_String::parseEscapeSequences($this->yyastk[$this->yysp-(1-1)])); 
    }

    private function yyn262() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn263() {
         $this->yyval = array(); 
    }

    private function yyn264() {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn265() {
         $this->yyval = new Node_Scalar_LNumber(array('value' => (int) $this->yyastk[$this->yysp-(1-1)])); 
    }

    private function yyn266() {
         $this->yyval = new Node_Scalar_DNumber(array('value' => (double) $this->yyastk[$this->yysp-(1-1)])); 
    }

    private function yyn267() {
         $this->yyval = Node_Scalar_String::create($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn268() {
         $this->yyval = new Node_Scalar_LineConst(array()); 
    }

    private function yyn269() {
         $this->yyval = new Node_Scalar_FileConst(array()); 
    }

    private function yyn270() {
         $this->yyval = new Node_Scalar_DirConst(array()); 
    }

    private function yyn271() {
         $this->yyval = new Node_Scalar_ClassConst(array()); 
    }

    private function yyn272() {
         $this->yyval = new Node_Scalar_MethodConst(array()); 
    }

    private function yyn273() {
         $this->yyval = new Node_Scalar_FuncConst(array()); 
    }

    private function yyn274() {
         $this->yyval = new Node_Scalar_NSConst(array()); 
    }

    private function yyn275() {
         $this->yyval = new Node_Scalar_String(array('value' => Node_Scalar_String::parseEscapeSequences($this->yyastk[$this->yysp-(3-2)]), 'isBinary' => false, 'type' => '\'' === $this->yyastk[$this->yysp-(3-1)][3] ? Node_Scalar_String::SINGLE_QUOTED : Node_Scalar_String::DOUBLE_QUOTED)); 
    }

    private function yyn276() {
         $this->yyval = new Node_Scalar_String(array('value' => '', 'isBinary' => false, 'type' => Node_Scalar_String::SINGLE_QUOTED)); 
    }

    private function yyn277() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn278() {
         $this->yyval = new Node_Expr_ConstFetch(array('name' => $this->yyastk[$this->yysp-(1-1)])); 
    }

    private function yyn279() {
         $this->yyval = new Node_Expr_UnaryPlus(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn280() {
         $this->yyval = new Node_Expr_UnaryMinus(array('expr' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn281() {
         $this->yyval = new Node_Expr_Array(array('items' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn282() {
         $this->yyval = new Node_Expr_ClassConstFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn283() {
         $this->yyval = new Node_Scalar_String(array('value' => $this->yyastk[$this->yysp-(1-1)], 'isBinary' => false, 'type' => Node_Scalar_String::SINGLE_QUOTED)); 
    }

    private function yyn284() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn285() {
         $this->yyval = new Node_Expr_ConstFetch(array('name' => $this->yyastk[$this->yysp-(1-1)])); 
    }

    private function yyn286() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn287() {
         $this->yyval = new Node_Scalar_Encapsed(array('parts' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn288() {
         $this->yyval = new Node_Scalar_Encapsed(array('parts' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn289() {
         $this->yyval = array(); 
    }

    private function yyn290() {
         $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn291() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn292() {
        $this->yyval = $this->yyastk[$this->yysp];
    }

    private function yyn293() {
         $this->yyastk[$this->yysp-(5-1)][] = new Node_Expr_ArrayItem(array('key' => $this->yyastk[$this->yysp-(5-3)], 'value' => $this->yyastk[$this->yysp-(5-5)], 'byRef' => false)); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn294() {
         $this->yyastk[$this->yysp-(3-1)][] = new Node_Expr_ArrayItem(array('key' => null, 'value' => $this->yyastk[$this->yysp-(3-3)], 'byRef' => false)); $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn295() {
         $this->yyval = array(new Node_Expr_ArrayItem(array('key' => $this->yyastk[$this->yysp-(3-1)], 'value' => $this->yyastk[$this->yysp-(3-3)], 'byRef' => false))); 
    }

    private function yyn296() {
         $this->yyval = array(new Node_Expr_ArrayItem(array('key' => null, 'value' => $this->yyastk[$this->yysp-(1-1)], 'byRef' => false))); 
    }

    private function yyn297() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn298() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn299() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn300() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn301() {
         $this->yyval = new Node_Expr_FuncCall(array('func' => $this->yyastk[$this->yysp-(4-1)], 'args' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn302() {
         $this->yyval = new Node_Expr_MethodCall(array('var' => $this->yyastk[$this->yysp-(6-1)], 'name' => $this->yyastk[$this->yysp-(6-3)], 'args' => $this->yyastk[$this->yysp-(6-5)])); 
    }

    private function yyn303() {
         $this->yyval = new Node_Expr_PropertyFetch(array('var' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn304() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => $this->yyastk[$this->yysp-(4-1)], 'dim' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn305() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => $this->yyastk[$this->yysp-(4-1)], 'dim' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn306() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn307() {
         $this->yyval = new Node_Variable(array('name' => $this->yyastk[$this->yysp-(2-2)])); 
    }

    private function yyn308() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn309() {
         $this->yyval = new Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(4-1)], 'name' => $this->yyastk[$this->yysp-(4-4)])); 
    }

    private function yyn310() {
         $this->yyval = new Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(4-1)], 'name' => $this->yyastk[$this->yysp-(4-4)])); 
    }

    private function yyn311() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn312() {
         $this->yyval = new Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => substr($this->yyastk[$this->yysp-(3-3)], 1))); 
    }

    private function yyn313() {
         $this->yyval = new Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => substr($this->yyastk[$this->yysp-(3-3)], 1))); 
    }

    private function yyn314() {
         $this->yyval = new Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(6-1)], 'name' => $this->yyastk[$this->yysp-(6-5)])); 
    }

    private function yyn315() {
         $this->yyval = new Node_Expr_StaticPropertyFetch(array('class' => $this->yyastk[$this->yysp-(6-1)], 'name' => $this->yyastk[$this->yysp-(6-5)])); 
    }

    private function yyn316() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => $this->yyastk[$this->yysp-(4-1)], 'dim' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn317() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => $this->yyastk[$this->yysp-(4-1)], 'dim' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn318() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => $this->yyastk[$this->yysp-(4-1)], 'dim' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn319() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => $this->yyastk[$this->yysp-(4-1)], 'dim' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn320() {
         $this->yyval = new Node_Variable(array('name' => substr($this->yyastk[$this->yysp-(1-1)], 1))); 
    }

    private function yyn321() {
         $this->yyval = new Node_Variable(array('name' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn322() {
         $this->yyval = null; 
    }

    private function yyn323() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn324() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn325() {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn326() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn327() {
         $this->yyastk[$this->yysp-(3-1)][] = $this->yyastk[$this->yysp-(3-3)]; $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn328() {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn329() {
         $this->yyval = $this->yyastk[$this->yysp-(1-1)]; 
    }

    private function yyn330() {
         $this->yyval = $this->yyastk[$this->yysp-(4-3)]; 
    }

    private function yyn331() {
         $this->yyval = null; 
    }

    private function yyn332() {
         $this->yyval = array(); 
    }

    private function yyn333() {
         $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn334() {
         $this->yyastk[$this->yysp-(5-1)][] = new Node_Expr_ArrayItem(array('key' => $this->yyastk[$this->yysp-(5-3)], 'value' => $this->yyastk[$this->yysp-(5-5)], 'byRef' => false)); $this->yyval = $this->yyastk[$this->yysp-(5-1)]; 
    }

    private function yyn335() {
         $this->yyastk[$this->yysp-(3-1)][] = new Node_Expr_ArrayItem(array('key' => null, 'value' => $this->yyastk[$this->yysp-(3-3)], 'byRef' => false)); $this->yyval = $this->yyastk[$this->yysp-(3-1)]; 
    }

    private function yyn336() {
         $this->yyval = array(new Node_Expr_ArrayItem(array('key' => $this->yyastk[$this->yysp-(3-1)], 'value' => $this->yyastk[$this->yysp-(3-3)], 'byRef' => false))); 
    }

    private function yyn337() {
         $this->yyval = array(new Node_Expr_ArrayItem(array('key' => null, 'value' => $this->yyastk[$this->yysp-(1-1)], 'byRef' => false))); 
    }

    private function yyn338() {
         $this->yyastk[$this->yysp-(6-1)][] = new Node_Expr_ArrayItem(array('key' => $this->yyastk[$this->yysp-(6-3)], 'value' => $this->yyastk[$this->yysp-(6-6)], 'byRef' => true)); $this->yyval = $this->yyastk[$this->yysp-(6-1)]; 
    }

    private function yyn339() {
         $this->yyastk[$this->yysp-(4-1)][] = new Node_Expr_ArrayItem(array('key' => null, 'value' => $this->yyastk[$this->yysp-(4-4)], 'byRef' => true)); $this->yyval = $this->yyastk[$this->yysp-(4-1)]; 
    }

    private function yyn340() {
         $this->yyval = array(new Node_Expr_ArrayItem(array('key' => $this->yyastk[$this->yysp-(4-1)], 'value' => $this->yyastk[$this->yysp-(4-4)], 'byRef' => true))); 
    }

    private function yyn341() {
         $this->yyval = array(new Node_Expr_ArrayItem(array('key' => null, 'value' => $this->yyastk[$this->yysp-(2-2)], 'byRef' => true))); 
    }

    private function yyn342() {
         $this->yyastk[$this->yysp-(2-1)][] = $this->yyastk[$this->yysp-(2-2)]; $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn343() {
         $this->yyastk[$this->yysp-(2-1)][] = Node_Scalar_String::parseEscapeSequences($this->yyastk[$this->yysp-(2-2)]); $this->yyval = $this->yyastk[$this->yysp-(2-1)]; 
    }

    private function yyn344() {
         $this->yyval = array($this->yyastk[$this->yysp-(1-1)]); 
    }

    private function yyn345() {
         $this->yyval = array(Node_Scalar_String::parseEscapeSequences($this->yyastk[$this->yysp-(2-1)]), $this->yyastk[$this->yysp-(2-2)]); 
    }

    private function yyn346() {
         $this->yyval = new Node_Variable(array('name' => substr($this->yyastk[$this->yysp-(1-1)], 1))); 
    }

    private function yyn347() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => new Node_Variable(array('name' => substr($this->yyastk[$this->yysp-(4-1)], 1))), 'dim' => $this->yyastk[$this->yysp-(4-3)])); 
    }

    private function yyn348() {
         $this->yyval = new Node_Expr_PropertyFetch(array('var' => new Node_Variable(array('name' => substr($this->yyastk[$this->yysp-(3-1)], 1))), 'name' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn349() {
         $this->yyval = new Node_Variable(array('name' => $this->yyastk[$this->yysp-(3-2)])); 
    }

    private function yyn350() {
         $this->yyval = new Node_Expr_ArrayDimFetch(array('var' => new Node_Variable(array('name' => $this->yyastk[$this->yysp-(6-2)])), 'dim' => $this->yyastk[$this->yysp-(6-4)])); 
    }

    private function yyn351() {
         $this->yyval = $this->yyastk[$this->yysp-(3-2)]; 
    }

    private function yyn352() {
         $this->yyval = new Node_Scalar_String(array('value' => $this->yyastk[$this->yysp-(1-1)], 'isBinary' => false, 'type' => Node_Scalar_String::SINGLE_QUOTED)); 
    }

    private function yyn353() {
         $this->yyval = new Node_Scalar_LNumber(array('value' => (int) $this->yyastk[$this->yysp-(1-1)])); 
    }

    private function yyn354() {
         $this->yyval = new Node_Variable(array('name' => substr($this->yyastk[$this->yysp-(1-1)], 1))); 
    }

    private function yyn355() {
         $this->yyval = new Node_Expr_ClassConstFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)])); 
    }

    private function yyn356() {
         $this->yyval = new Node_Expr_ClassConstFetch(array('class' => $this->yyastk[$this->yysp-(3-1)], 'name' => $this->yyastk[$this->yysp-(3-3)])); 
    }
}
