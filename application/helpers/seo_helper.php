<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('seo_friendly_string'))
{
    function seo_friendly_string($vp_string){

        $vp_string = trim($vp_string);

        $vp_string = html_entity_decode($vp_string);

        $vp_string = strip_tags($vp_string);

        $vp_string = strtolower($vp_string);

        $vp_string = preg_replace('~[^ a-z0-9_.]~', ' ', $vp_string);

        $vp_string = preg_replace('~ ~', '-', $vp_string);

        $vp_string = preg_replace('~-+~', '-', $vp_string);

        return $vp_string;
    }
}

if ( ! function_exists('get_word_limit'))
{
    function get_word_limit($str,$num){
        $str = wordwrap($str, $num);
        $str = explode("\n", $str);
        $str = $str[0] . '...';
        return $str;
    }
}



