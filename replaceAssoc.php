<?php

/**
 * Function para limpiar un texto, con un array asociado a muchos caracter , o frases.
 */
class getContents
{

    function strReplaceAssoc($subject)
    {

        $replace = array(
            '</div>' => "",
            '</p>' => "",
            '<p>' => "",
            '<div>' => "",
            '</di' => "",
            '<br' => '',
            '<strong>' => '',
            '</strong>' => '',
            '</' => '',
            '<img src=' => '',
            '<center>' => '',
            '</figure>' => '',
            '<figure' => '',
            '/>' => '',
            'class="foto_prin">' => '',
            '<div class="img-wrap">' => '',
            '&lt;div class=thumb&gt;' => '',
            '<div class=thumb>' => '',
            '\xC3' => ''


        );
        return str_replace(array_keys($replace), array_values($replace), $subject);
    }
}

