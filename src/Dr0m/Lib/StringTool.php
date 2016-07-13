<?php

namespace Dr0m\Lib;

/**
 * Description of StringTool
 *
 * @author siul
 */
class StringTool
{

    static $stopWords = [
        '$', 'a', 'acaso', 'al', 'algo', 'algun', 'alguna', 'algunas', 'alguno', 'algunos',
        'ambos', 'ampleamos', 'ante', 'antes', 'aquel', 'aquella', 'aquellas', 'aquello',
        'aquellos', 'aqui', 'arriba', 'atras', 'b', 'bajo', 'bastante', 'bastantes',
        'bien', 'c', 'cabe', 'cada', 'cierta', 'ciertas', 'cierto', 'ciertos', 'como',
        'con', 'conseguir', 'consigo', 'consigue', 'consiguen', 'consigues', 'contra',
        'cual', 'cuales', 'cualquier', 'cualquiera', 'cuando', 'cuanta', 'cuanto',
        'cuya', 'cuyas', 'cuyo', 'cuyos', 'd', 'de', 'del', 'demas', 'demasiada',
        'demasiadas', 'demasiado', 'demasiados', 'dentro', 'desde', 'donde', 'dos',
        'durante', 'e', 'el', 'ella', 'ellas', 'ello', 'ellos', 'empleais', 'emplean',
        'emplear', 'empleas', 'en', 'encima', 'entonces', 'entre', 'era', 'eramos',
        'eran', 'eras', 'eres', 'es', 'esa', 'esas', 'escasa', 'escasas', 'escaso',
        'escasos', 'ese', 'eso', 'esos', 'esta', 'estaba', 'estado', 'estais', 'estamos',
        'estan', 'estas', 'este', 'estos', 'estoy', 'f', 'fin', 'fue', 'fueron',
        'fui', 'fuimos', 'g', 'gueno', 'h', 'ha', 'hace', 'haceis', 'hacemos', 'hacen',
        'hacer', 'haces', 'hacia', 'hago', 'hasta', 'hicieron', 'http', 'i', 'incluso',
        'index', 'intenta', 'intentais', 'intentamos', 'intentan', 'intentar', 'intentas',
        'intento', 'ir', 'j', 'k', 'l', 'la', 'largo', 'las', 'le', 'lo', 'los',
        'm', 'mas', 'mediante', 'mi', 'mientras', 'mio', 'mis', 'misma', 'mismas',
        'mismo', 'mismos', 'modo', 'mucha', 'muchas', 'mucho', 'muchos', 'muy', 'n',
        'ñ', 'nadie', 'ni', 'ningun', 'ninguna', 'no', 'nos', 'nosotras', 'nosotros',
        'nuestro', 'o', 'os', 'otra', 'otras', 'otro', 'otros', 'p', 'pa', 'para',
        'pero', 'poca', 'pocas', 'poco', 'pocos', 'podeis', 'podemos', 'poder', 'podria',
        'podriais', 'podriamos', 'podrian', 'podrias', 'por', 'porque', 'primero',
        'puede', 'pueden', 'puedo', 'q', 'que', 'quien', 'quienes', 'quienesquiera',
        'quienquiera', 'r', 'rt', 's', 'sabe', 'sabeis', 'sabemos', 'saben', 'saber',
        'sabes', 'se', 'segun', 'ser', 'si', 'siendo', 'sin', 'so', 'sobre', 'sois',
        'solamente', 'solo', 'somos', 'soy', 'su', 'sus', 'suyo', 't', 'tal', 'tales',
        'tambien', 'tanta', 'tantas', 'tanto', 'tantos', 'te', 'teneis', 'tenemos',
        'tener', 'tengo', 'ti', 'tiempo', 'tiene', 'tienen', 'toda', 'todas', 'todo',
        'todos', 'tras', 'tu', 'tus', 'tuyo', 'u', 'uds', 'ultimo', 'un', 'una',
        'unas', 'uno', 'unos', 'usa', 'usais', 'usamos', 'usan', 'usar', 'usas',
        'uso', 'usted', 'ustedes', 'v', 'va', 'vais', 'valor', 'vamos', 'van', 'varios',
        'vaya', 'verdad', 'verdadera', 'verdadero', 'via', 'vos', 'vosotras', 'vosotros',
        'voy', 'vuestro', 'w', 'x', 'y', 'ya', 'yo', 'z',
        'about', 'above', 'after', 'again', 'against', 'all',
        'am', 'an', 'and', 'any', 'are', 'aren\'t', 'as', 'at', 'be', 'because',
        'been', 'before', 'being', 'below', 'between', 'both', 'but', 'by', 'can\'t',
        'cannot', 'could', 'couldn\'t', 'did', 'didn\'t', 'do', 'does', 'doesn\'t',
        'doing', 'don\'t', 'down', 'during', 'each', 'few', 'for', 'from', 'further',
        'had', 'hadn\'t', 'has', 'hasn\'t', 'have', 'haven\'t', 'having', 'he', 'he\'d',
        'he\'ll', 'he\'s', 'her', 'here', 'here\'s', 'hers', 'herself', 'him', 'himself',
        'his', 'how', 'how\'s', 'i', 'i\'d', 'i\'ll', 'i\'m', 'i\'ve', 'if', 'in',
        'into', 'is', 'isn\'t', 'it', 'it\'s', 'its', 'itself', 'let\'s', 'me', 'more',
        'most', 'mustn\'t', 'my', 'myself', 'no', 'nor', 'not', 'of', 'off', 'on',
        'once', 'only', 'or', 'other', 'ought', 'our', 'ours ', 'ourselves', 'out',
        'over', 'own', 'same', 'shan\'t', 'she', 'she\'d', 'she\'ll', 'she\'s', 'should',
        'shouldn\'t', 'so', 'some', 'such', 'than', 'that', 'that\'s', 'the', 'their',
        'theirs', 'them', 'themselves', 'then', 'there', 'there\'s', 'these', 'they',
        'they\'d', 'they\'ll', 'they\'re', 'they\'ve', 'this', 'those', 'through',
        'to', 'too', 'under', 'until', 'up', 'very', 'was', 'wasn\'t', 'we', 'we\'d',
        'we\'ll', 'we\'re', 'we\'ve', 'were', 'weren\'t', 'what', 'what\'s', 'when',
        'when\'s', 'where', 'where\'s', 'which', 'while', 'who', 'who\'s', 'whom',
        'why', 'why\'s', 'with', 'won\'t', 'would', 'wouldn\'t', 'you', 'you\'d',
        'you\'ll', 'you\'re', 'you\'ve', 'your', 'yours', 'yourself', 'yourselves'
    ];

    static $unwanted = [
        'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'Ae', 'Å' => 'A',
        'Æ' => 'A', 'Ă' => 'A',
        'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'ae', 'å' => 'a',
        'ă' => 'a', 'æ' => 'ae',
        'þ' => 'b', 'Þ' => 'B',
        'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E',
        'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e',
        'Ğ' => 'G', 'ğ' => 'g',
        'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'İ' => 'I', 'ı' => 'i', 'ì' => 'i',
        'í' => 'i', 'î' => 'i', 'ï' => 'i',
        'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'Oe', 'Ø' => 'O',
        'ö' => 'oe', 'ø' => 'o',
        'ð' => 'o', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
        'ț' => 't', 'Ț' => 'T',
        'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U',
        'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u',
        'Ý' => 'Y',
        'ý' => 'y', 'ý' => 'y', 'ÿ' => 'y',
        'Ž' => 'Z', 'ž' => 'z',
    ];

    /**
     * Copyright (c) 2008, David R. Nadeau, NadeauSoftware.com.
     * All rights reserved.
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 	* Redistributions of source code must retain the above copyright
     * 	  notice, this list of conditions and the following disclaimer.
     *
     * 	* Redistributions in binary form must reproduce the above
     * 	  copyright notice, this list of conditions and the following
     * 	  disclaimer in the documentation and/or other materials provided
     * 	  with the distribution.
     *
     * 	* Neither the names of David R. Nadeau or NadeauSoftware.com, nor
     * 	  the names of its contributors may be used to endorse or promote
     * 	  products derived from this software without specific prior
     * 	  written permission.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
     * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
     * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
     * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY
     * WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY
     * OF SUCH DAMAGE.
     */
    /*
     * This is a BSD License approved by the Open Source Initiative (OSI).
     * See:  http://www.opensource.org/licenses/bsd-license.php
     */

    /**
     * Strip punctuation characters from UTF-8 text.
     *
     * Characters stripped from the text include characters in the following
     * Unicode categories:
     *
     * 	Separators
     * 	Control characters
     * 	Formatting characters
     * 	Surrogates
     * 	Open and close quotes
     * 	Open and close brackets
     * 	Dashes
     * 	Connectors
     * 	Numer separators
     * 	Spaces
     * 	Other punctuation
     *
     * Exceptions are made for punctuation characters that occur withn URLs
     * (such as [ ] : ; @ & ? and others), within numbers (such as . , % # '),
     * and within words (such as - and ').
     *
     * Parameters:
     * 	text		the UTF-8 text to strip
     *
     * Return values:
     * 	the stripped UTF-8 text.
     *
     * See also:
     * 	http://nadeausoftware.com/articles/2007/9/php_tip_how_strip_punctuation_characters_web_page
     */
    static function stripPunctuation($text)
    {
        $urlbrackets = '\[\]\(\)';
        $urlspacebefore = ':;\'_\*%@&?!'.$urlbrackets;
        $urlspaceafter = '\.,:;\'\-_\*@&\/\\\\\?!#'.$urlbrackets;
        $urlall = '\.,:;\'\-_\*%@&\/\\\\\?!#'.$urlbrackets;

        $specialquotes = '\'"\*<>″';

        $fullstop = '\x{002E}\x{FE52}\x{FF0E}';
        $comma = '\x{002C}\x{FE50}\x{FF0C}';
        $arabsep = '\x{066B}\x{066C}';
        $numseparators = $fullstop.$comma.$arabsep;

        $numbersign = '\x{0023}\x{FE5F}\x{FF03}';
        $percent = '\x{066A}\x{0025}\x{066A}\x{FE6A}\x{FF05}\x{2030}\x{2031}';
        $prime = '\x{2032}\x{2033}\x{2034}\x{2057}';
        $nummodifiers = $numbersign.$percent.$prime;

        return preg_replace(
            array(
            // Remove separator, control, formatting, surrogate,
            // open/close quotes.
            '/[\p{Z}\p{Cc}\p{Cf}\p{Cs}\p{Pi}\p{Pf}]/u',
            // Remove other punctuation except special cases
            '/\p{Po}(?<!['.$specialquotes.
            $numseparators.$urlall.$nummodifiers.'])/u',
            // Remove non-URL open/close brackets, except URL brackets.
            '/[\p{Ps}\p{Pe}](?<!['.$urlbrackets.'])/u',
            // Remove special quotes, dashes, connectors, number
            // separators, and URL characters followed by a space
            '/['.$specialquotes.$numseparators.$urlspaceafter.
            '\p{Pd}\p{Pc}]+((?= )|$)/u',
            // Remove special quotes, connectors, and URL characters
            // preceded by a space
            '/((?<= )|^)['.$specialquotes.$urlspacebefore.'\p{Pc}]+/u',
            // Remove dashes preceded by a space, but not followed by a number
            '/((?<= )|^)\p{Pd}+(?![\p{N}\p{Sc}])/u',
            // Remove consecutive spaces
            '/ +/',
            ), ' ', $text);
    }

    /**
     * Copyright (c) 2008, David R. Nadeau, NadeauSoftware.com.
     * All rights reserved.
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 	* Redistributions of source code must retain the above copyright
     * 	  notice, this list of conditions and the following disclaimer.
     *
     * 	* Redistributions in binary form must reproduce the above
     * 	  copyright notice, this list of conditions and the following
     * 	  disclaimer in the documentation and/or other materials provided
     * 	  with the distribution.
     *
     * 	* Neither the names of David R. Nadeau or NadeauSoftware.com, nor
     * 	  the names of its contributors may be used to endorse or promote
     * 	  products derived from this software without specific prior
     * 	  written permission.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
     * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
     * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
     * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY
     * WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY
     * OF SUCH DAMAGE.
     */
    /*
     * This is a BSD License approved by the Open Source Initiative (OSI).
     * See:  http://www.opensource.org/licenses/bsd-license.php
     */

    /**
     * Strip symbol characters from UTF-8 text.
     *
     * Characters stripped from the text include characters in the following
     * Unicode categories:
     *
     * 	Modifier symbols
     * 	Private use symbols
     * 	Math symbols
     * 	Other symbols
     *
     * Exceptions are made for math symbols embedded within numbers (such as
     * + - /), math symbols used within URLs (such as = ~), units of measure
     * symbols, and ideograph parts.  Currency symbols are not removed.
     *
     * Parameters:
     * 	text		the UTF-8 text to strip
     *
     * Return values:
     * 	the stripped UTF-8 text.
     *
     * See also:
     * 	http://nadeausoftware.com/articles/2007/09/php_tip_how_strip_symbol_characters_web_page
     */
    static function stripSymbols($text)
    {
        $plus = '\+\x{FE62}\x{FF0B}\x{208A}\x{207A}';
        $minus = '\x{2012}\x{208B}\x{207B}';

        $units = '\\x{00B0}\x{2103}\x{2109}\\x{23CD}';
        $units .= '\\x{32CC}-\\x{32CE}';
        $units .= '\\x{3300}-\\x{3357}';
        $units .= '\\x{3371}-\\x{33DF}';
        $units .= '\\x{33FF}';

        $ideo = '\\x{2E80}-\\x{2EF3}';
        $ideo .= '\\x{2F00}-\\x{2FD5}';
        $ideo .= '\\x{2FF0}-\\x{2FFB}';
        $ideo .= '\\x{3037}-\\x{303F}';
        $ideo .= '\\x{3190}-\\x{319F}';
        $ideo .= '\\x{31C0}-\\x{31CF}';
        $ideo .= '\\x{32C0}-\\x{32CB}';
        $ideo .= '\\x{3358}-\\x{3370}';
        $ideo .= '\\x{33E0}-\\x{33FE}';
        $ideo .= '\\x{A490}-\\x{A4C6}';

        return preg_replace(
            array(
            // Remove modifier and private use symbols.
            '/[\p{Sk}\p{Co}]/u',
            // Remove math symbols except + - = ~ and fraction slash
            '/\p{Sm}(?<!['.$plus.$minus.'=~\x{2044}])/u',
            // Remove + - if space before, no number or currency after
            '/((?<= )|^)['.$plus.$minus.']+((?![\p{N}\p{Sc}])|$)/u',
            // Remove = if space before
            '/((?<= )|^)=+/u',
            // Remove + - = ~ if space after
            '/['.$plus.$minus.'=~]+((?= )|$)/u',
            // Remove other symbols except units and ideograph parts
            '/\p{So}(?<!['.$units.$ideo.'])/u',
            // Remove consecutive white space
            '/ +/',
            ), ' ', $text);
    }

    /**
     * Copyright (c) 2008, David R. Nadeau, NadeauSoftware.com.
     * All rights reserved.
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 	* Redistributions of source code must retain the above copyright
     * 	  notice, this list of conditions and the following disclaimer.
     *
     * 	* Redistributions in binary form must reproduce the above
     * 	  copyright notice, this list of conditions and the following
     * 	  disclaimer in the documentation and/or other materials provided
     * 	  with the distribution.
     *
     * 	* Neither the names of David R. Nadeau or NadeauSoftware.com, nor
     * 	  the names of its contributors may be used to endorse or promote
     * 	  products derived from this software without specific prior
     * 	  written permission.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
     * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
     * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
     * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY
     * WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY
     * OF SUCH DAMAGE.
     */
    /*
     * This is a BSD License approved by the Open Source Initiative (OSI).
     * See:  http://www.opensource.org/licenses/bsd-license.php
     */

    /**
     * Strip numbers and number-related characters from UTF-8 text.
     *
     * Characters stripped from the text include all digits, currency symbols,
     * and periods or commas surrounded by digits.  Fractions and supercripts
     * are removed, along with roman numerals (if they use the special Unicode
     * characters).  Letters, punctuation, and other symbols are left as-is.
     *
     * Parameters:
     * 	text		the UTF-8 text to strip
     *
     * Return values:
     * 	the stripped UTF-8 text.
     *
     * See also:
     * 	http://nadeausoftware.com/articles/2007/10/php_tip_how_strip_numbers_web_page
     */
    static function stripNumbers($text)
    {
        $urlchars = '\.,:;\'=+\-_\*%@&\/\\\\?!#~\[\]\(\)';
        $notdelim = '\p{L}\p{M}\p{N}\p{Pc}\p{Pd}'.$urlchars;
        $predelim = '((?<=[^'.$notdelim.'])|^)';
        $postdelim = '((?=[^'.$notdelim.'])|$)';

        $fullstop = '\x{002E}\x{FE52}\x{FF0E}';
        $comma = '\x{002C}\x{FE50}\x{FF0C}';
        $arabsep = '\x{066B}\x{066C}';
        $numseparators = $fullstop.$comma.$arabsep;
        $plus = '\+\x{FE62}\x{FF0B}\x{208A}\x{207A}';
        $minus = '\x{2212}\x{208B}\x{207B}\p{Pd}';
        $slash = '[\/\x{2044}]';
        $colon = ':\x{FE55}\x{FF1A}\x{2236}';
        $units = '%\x{FF05}\x{FE64}\x{2030}\x{2031}';
        $units .= '\x{00B0}\x{2103}\x{2109}\x{23CD}';
        $units .= '\x{32CC}-\x{32CE}';
        $units .= '\x{3300}-\x{3357}';
        $units .= '\x{3371}-\x{33DF}';
        $units .= '\x{33FF}';
        $percents = '%\x{FE64}\x{FF05}\x{2030}\x{2031}';
        $ampm = '([aApP][mM])';

        $digits = '[\p{N}'.$numseparators.']+';
        $sign = '['.$plus.$minus.']?';
        $exponent = '([eE]'.$sign.$digits.')?';
        $prenum = $sign.'[\p{Sc}#]?'.$sign;
        $postnum = '([\p{Sc}'.$units.$percents.']|'.$ampm.')?';
        $number = $prenum.$digits.$exponent.$postnum;
        $fraction = $number.'('.$slash.$number.')?';
        $numpair = $fraction.'(['.$minus.$colon.$fullstop.']'.$fraction.')*';

        return preg_replace(
            array(
            // Match delimited numbers
            '/'.$predelim.$numpair.$postdelim.'/u',
            // Match consecutive white space
            '/ +/u',
            ), ' ', $text);
    }

    /**
     * Calcula las keywords
     *  - Normaliza el texto
     *  - Lo separa por espacios
     *  - Quita stopWords
     *  - Cuenta las palabras
     *
     * @param string $text
     * @param array $stopWords
     * @param integer $wordsKeywords Maximo tres
     * @param boolean $lowercase
     * @return array ['casa' => 2]
     */
    static function keywords($text, array $stopWords = array(), $wordsKeywords = 1, $lowercase = true)
    {
        $normalizeText = self::normalize($text, $lowercase);

        $words = mb_split('[\s\n\r\t][\s\n\r\t]*', $normalizeText);

        if (!empty($stopWords))
            $words = array_values(array_diff($words, $stopWords));

        if ($wordsKeywords > 1)
        {
            $newWords = [];
            //$rest = $count % $wordsKeywords;
            $count = count($words);
            for($x = 0; $x < $count, ($x + $wordsKeywords - 1) < $count; $x+=$wordsKeywords)
            {
                if ($wordsKeywords == 2)
                    $newWords[] = $words[$x].' '.$words[$x+1];
                else
                    $newWords[] = $words[$x].' '.$words[$x+1].' '.$words[$x+2];
            }
            $words = $newWords;
        }

        return array_count_values($words);
    }

    /**
     * Normaliza texto
     *  - Retira signos de puntuación
     *  - Retira símbolos
     *  - Retira números
     *  - Normaliza caracteres
     *
     * @param string $text
     * @param boolean $lowercase
     * @return string
     */
    static function normalize($text, $lowercase = true)
    {
        $text = html_entity_decode($text);

        $clearText = self::stripNumbers(self::stripSymbols(self::stripPunctuation($text)));

        return self::normalizeChars($clearText, $lowercase);
    }

    /**
     * Normaliza caracteres
     *  - Convierte a minúsculas
     *  - Retira espacio al inicio y al final
     *  - Quita todo tipo de acentos
     *
     * @param string $text
     * @param boolean $lowercase
     * @return string
     */
    static function normalizeChars($text, $lowercase = true)
    {
        if ($lowercase === true)
            $textLower = trim(mb_strtolower($text, 'UTF-8'));
        else
            $textLower = trim($text);

        return strtr($textLower, self::$unwanted);
    }

    /**
     * Cuenta cuantas veces se encontraron las palabras del arreglo
     *
     * @param string $text
     * @param array $words
     * @return integer
     */
    static function countWords($text, array $words)
    {
        $count = 0;

        foreach ($words as $word)
        {
            $wordClean = trim($word, '"\'');
            $wordPattern = preg_quote($wordClean);

            if (strlen($word) > strlen($wordClean))
            {
                $count += intval(preg_match_all('+(\b|$|^)'.$wordPattern.'(\b|$|^)+im', $text));
            }
            elseif (substr_count($wordClean, ' ') > 0)
            {
                $count += intval(preg_match_all('+'.$wordPattern.'+im', $text));
            }
            else
            {
                $count += intval(preg_match_all('+(\b|$|^)'.$wordPattern.'+im', $text));
            }
        }

        return $count;
    }

    /**
     * Limpia un texto delimitado o un arreglo
     *  - Normaliza caracteres
     *  - Quita elementos vacíos
     *  - Ordena los elementos
     *
     * @param mixed $list array|string
     * @param string $delimiter
     * @param boolean $returnArray
     * @return mixed string|array
     */
    static function clearList($list, $delimiter = ',', $returnArray = false)
    {
        if (!is_array($list))
            $items = explode($delimiter, $list);
        else
            $items = $list;

        $itemsUnique = array_map('self::normalizeChars', array_unique($items));

        $itemsClean = array_filter($itemsUnique, 'strlen');

        asort($itemsClean);

        if (true === $returnArray)
            $resul = $itemsClean;
        else
            $resul = implode($delimiter.' ', $itemsClean);

        return $resul;
    }

    /**
     * Obtiene un arreglo de un texto
     *  - Quita elementos vacíos
     *  - Ordena los elementos
     *
     * @param array|string $list
     * @param string $delimiter
     * @return array
     */
    static function toArray($list, $delimiter = ',')
    {
        if (!is_array($list))
            $items = explode($delimiter, $list);
        else
            $items = $list;

        $itemsUnique = array_unique($items);

        $itemsClean = array_filter($itemsUnique, 'strlen');

        asort($itemsClean);

        return $itemsClean;
    }

    /**
     * Merge keywords array
     *
     * @param array $array1
     * @param array $array2
     * @param array $_ [optional] Variable list of arrays to merge.
     * @return array
     */
    static function mergeKeywords(array $array1, array $array2 = null, array $_ = null)
    {
        $keywords = array();
        foreach (func_get_args() as $arg)
        {
            foreach ($arg as $word => $count)
            {
                if (array_key_exists($word, $keywords))
                    $keywords[$word] = $keywords[$word] + $count;
                else
                    $keywords[$word] = $count;
            }
        }

        return $keywords;
    }

    /**
     * Calcula el peso de las keywords
     *
     * @param array $keywords
     * @param integer $weights
     * @param integer $number
     * @param string $exclude
     * @param boolean $excludeDefault
     * @return array
     */
    static function weighingKeywords(array $keywords, $weights = 5, $number = 0, $exclude = '', $excludeDefault = true)
    {
        if (empty($keywords))
            return [];

        if (true === $excludeDefault)
            $keywords = array_diff_key($keywords, array_count_values(self::$stopWords));

        if (!empty($exclude))
            $keywords = array_diff_key($keywords, self::keywords($exclude));

        if ($number > 0)
        {
            arsort($keywords);
            $keywords = array_splice($keywords, 0, $number);
        }

        $max = max($keywords);
        $multiplier = ($max > $weights) ? $weights / $max : 1;

        foreach ($keywords as &$count)
            $count = ceil($count * $multiplier);

        return $keywords;
    }

    /**
     * Construye una búsqueda compatible con MATCH de mysql
     *
     * @param array $query
     * @param array $opcionalQuery
     * @param array $excludeQuery
     * @param string $exactPhraseQuery
     * @return string
     */
    static function searchToMatch(array $query = [], $exactPhraseQuery = '', array $opcionalQuery = [], array $excludeQuery = [])
    {
        array_walk($query, function (&$word)
        {
            if (empty($word))
                unset($word);
            else
                $word = '+'.$word;
        });

        array_walk($excludeQuery, function (&$word)
        {
            if (empty($word))
                unset($word);
            else
                $word = '-'.$word;
        });

        if (!empty($exactPhraseQuery))
            $query[] = '+"'.$exactPhraseQuery.'"';

        $opcionalQuery = array_filter($opcionalQuery, 'strlen');
        if (!empty($opcionalQuery))
        {
            reset($opcionalQuery);
            $opcionalQuery[key($opcionalQuery)] = '+('.$opcionalQuery[key($opcionalQuery)];
            end($opcionalQuery);
            $idx = key($opcionalQuery);
            $opcionalQuery[$idx] = $opcionalQuery[$idx].')';
        }

        $search = implode(' ', array_merge($query, $opcionalQuery, $excludeQuery));

        return $search;
    }

}
