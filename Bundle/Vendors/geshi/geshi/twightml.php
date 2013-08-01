<?php
/**
 * @author Keyvan Akbary <me@keyvanakbary.com>
 * @author Nigel McNie <nigel@geshi.org>
 * @author FoxP2 <foxp2projects@gmail.com>
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
        //HTML Support
        //Tags
        6 => array(
            'abbr', 'acronym', 'address', 'applet',
            'base', 'basefont', 'bdo', 'big', 'blockquote', 'body', 'br', 'button', 'b',
            'caption', 'center', 'cite', 'code', 'colgroup', 'col',
            'dd', 'del', 'dfn', 'dir', 'div', 'dl', 'dt',
            'em',
            'fieldset', 'font', 'form', 'frame', 'frameset',
            'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'hr', 'html',
            'iframe', 'ilayer', 'img', 'input', 'ins', 'isindex', 'i',
            'kbd',
            'label', 'legend', 'link', 'li',
            'map', 'meta',
            'noframes', 'noscript',
            'object', 'ol', 'optgroup', 'option',
            'param', 'pre', 'p',
            'q',
            'samp', 'script', 'select', 'small', 'span', 'strike', 'strong', 'style', 'sub', 'sup', 's',
            'table', 'tbody', 'td', 'textarea', 'text', 'tfoot', 'thead', 'th', 'title', 'tr', 'tt',
            'ul', 'u',
            'var',
        ),
        //Attributes
        7 => array(
            'abbr', 'accept-charset', 'accept', 'accesskey', 'action', 'align', 'alink', 'alt', 'archive', 'axis',
            'background', 'bgcolor', 'border',
            'cellpadding', 'cellspacing', 'char', 'charoff', 'charset', 'checked', 'cite', 'classid', 'clear', 'code', 'codebase', 'codetype', 'color', 'cols', 'colspan', 'compact', 'content', 'coords',
            'data', 'datetime', 'declare', 'defer', 'dir', 'disabled',
            'enctype',
            'face', 'for', 'frame', 'frameborder',
            'headers', 'height', 'href', 'hreflang', 'hspace', 'http-equiv',
            'ismap',
            'label', 'lang', 'language', 'link', 'longdesc',
            'marginheight', 'marginwidth', 'maxlength', 'media', 'method', 'multiple',
            'name', 'nohref', 'noresize', 'noshade', 'nowrap',
            'object', 'onblur', 'onchange', 'onclick', 'ondblclick', 'onfocus', 'onkeydown', 'onkeypress', 'onkeyup', 'onload', 'onmousedown', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onreset', 'onselect', 'onsubmit', 'onunload',
            'profile', 'prompt',
            'readonly', 'rel', 'rev', 'rowspan', 'rows', 'rules',
            'scheme', 'scope', 'scrolling', 'selected', 'shape', 'size', 'span', 'src', 'standby', 'start', 'style', 'summary',
            'tabindex', 'target', 'text', 'title', 'type',
            'usemap',
            'valign', 'value', 'valuetype', 'version', 'vlink', 'vspace',
            'width'
        ),
        //FoxP2
        8 => array(
            'id', 'class'
        )        
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
        5 => true,
        //HTML support
        6 => true,
        7 => true,
        8 => true
    ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: rgb(255, 132, 0);', //Tags
            2 => 'color: #008000;', //Filters
            3 => 'color: #0600FF;', //Functions
            4 => 'color: #804040;', //Tests
            5 => 'color: #008000;', //Operators
            6 => 'color: #000000; font-weight: bold;', //HTML Tags
            7 => 'color: #000066;', //HTML attributes
            8 => 'color: #232125; font-weight: bold;' //FoxP2
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
            -2 => 'color: #404040;', //CDATA
            -1 => 'color: #808080; font-style: italic;', //HTML Comments
            0 => 'color: #00bbdd;', //Doctype
            1 => 'color: #ddbb00;', //Entities
            2 => 'color: #009900;', //HTML
            3 => 'color: #007799;' //Twig
        ),
        'REGEXPS' => array()
    ),
    'URLS' => array(
        1 => 'http://twig.sensiolabs.org/doc/tags/{FNAMEL}.html',
        2 => 'http://twig.sensiolabs.org/doc/filters/{FNAMEL}.html',
        3 => 'http://twig.sensiolabs.org/doc/functions/{FNAMEL}.html',
        4 => 'http://twig.sensiolabs.org/doc/tests/{FNAMEL}.html',
        5 => 'http://twig.sensiolabs.org/doc/tests/{FNAMEL}.html',
        6 => '',
        7 => '',
        8 => ''
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
        -2 => false, //CDATA
        -1 => false, //HTML Comments
        0 => false, //Doctype
        1 => false, //Entities
        2 => true, //HTML
        3 => true //Twig        
    ),
    'TAB_WIDTH' => 4,
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