<?php

/**
 * @author Keyvan Akbary <me@keyvanakbary.com>
 * @version 1.0.1
 */
$language_data = array(
    'LANG_NAME' => 'Twig',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('{#' => '#}'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        //TWIG
        //Tags
        1 => array(
            'autoescape', 'endautoescape', 'block', 'endblock', 'do', 'extends',
            'embed', 'endembed',
            'filter', 'endfilter', 'for', 'endfor', 'from', 'flush', 'if', 'else', 'elseif', 'endif',
            'import', 'include', 'macro', 'endmacro', 'raw', 'endraw', 'set',
            'spaceless', 'sandbox', 'endsandbox', 'endspaceless', 'use', 'verbatim', 'endverbatim'
        ),
        //Filters
        2 => array(
            'abs', 'batch', 'capitalize', 'convert_encoding', 'date', 'date_modify', 'default', 'escape',
            'first', 'format', 'join', 'json_encode', 'keys', 'last', 'length', 'lower', 'nl2br', 'number_format', 'merge',
            'raw', 'replace', 'reverse', 'slice', 'sort', 'split', 'striptags', 'title', 'trim', 'upper',
            'url_encode'
        ),
        //Functions
        3 => array(
            'attribute', 'block', 'constant', 'cycle', 'date', 'dump', 'include', 'parent', 'random', 'range', 'template_from-string'
        ),
        //Tests
        4 => array(
            'constant', 'defined', 'divisibleby', 'empty', 'even', 'iterable', 'null',
            'odd', 'sameas'
        ),
        //Operators
        5 => array(
            'in', 'is', 'is not' ,'and', 'or', 'not'
        ),
    ),
    'SYMBOLS' => array(
        '+', '-', '/', '%', '/', '*', '**', //Math operators
        '==', '!=', '<', '>', '>=', '<=', '===', //Logic operators
        '..', '|', '~', '[', ']', '.', '?', ':', '(', ')', //Other
        '=' //HTML (attributes)
    ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        //Twig
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true
    ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0600FF;', //Tags
            2 => 'color: #008000;', //Filters
            3 => 'color: #0600FF;', //Functions
            4 => 'color: #804040;', //Tests
            5 => 'color: #008000;' //Operators
        ),
        'COMMENTS' => array(
            'MULTI' => 'color: #008080; font-style: italic;'
        ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
        ),
        'BRACKETS' => array(
            0 => 'color: #D36900;'
        ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
        ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
        ),
        'METHODS' => array(
            1 => 'color: #006600;'
        ),
        'SYMBOLS' => array(
            0 => 'color: #D36900;'
        ),
        'SCRIPT' => array(
            0 => '',
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #009000;'
        ),
        'REGEXPS' => array(
            0 => 'color: #00aaff;'
        )
    ),
    'URLS' => array(
        1 => 'http://twig.sensiolabs.org/doc/tags/{FNAMEL}.html',
        2 => 'http://twig.sensiolabs.org/doc/filters/{FNAMEL}.html',
        3 => 'http://twig.sensiolabs.org/doc/functions/{FNAMEL}.html',
        4 => 'http://twig.sensiolabs.org/doc/tests/{FNAMEL}.html',
        5 => '',
    ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(),
    'REGEXPS' => array(),
    'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
    'SCRIPT_DELIMITERS' => array(
        -2 => array(
            '<![CDATA[' => ']]>'
        ),
        -1 => array(
            '<!--' => '-->'
        ),
        0 => array(
            '<!DOCTYPE' => '>'
        ),
        1 => array(
            '&' => ';'
        ),
        2 => array(
            '<' => '>'
        ),
        3 => array(
            '{{' => '}}',
            '{' => '}'
        ),
    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        1 => false,
        2 => false
    ),
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            2 => array(
                'DISALLOWED_BEFORE' => '(?<=&lt;|&lt;\/)',
                'DISALLOWED_AFTER' => '(?=\s|\/|&gt;)',
            )
        )
    )
);
?>