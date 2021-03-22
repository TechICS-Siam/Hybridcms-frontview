<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('image_exception')) {

    function image_exception($filename, $required_width, $required_height, $required_size, $redirect)
    {
        $CI = &get_instance();

        $data = getimagesize($filename);
        $size = $data['bits'];
        if($size > $required_size ) {
            setOldValues($CI->input->post());
            setAlertData('warning', 'Sorry. Photo Error Your Image size is ' . $size . ', Required Image Size is <b>'. $required_size.'</b> ');
            redirect($redirect);
        }

        $width = $data[0];
        if($width > $required_width ) {
            setOldValues($CI->input->post());
            setAlertData('warning', 'Sorry. Photo Error! Your Image Width is '. $width.' pixels, Required Image Width is <b>'.$required_width.'</b> pixels');
            redirect($redirect);
        }
        $height = $data[1];
        if($height > $required_height ) {
            setOldValues($CI->input->post());
            setAlertData('warning', 'Sorry. Photo Error! Your Image Height is '. $height.' pixels, Required Image Height is <b>'. $required_height .'</b> pixels ');
            redirect($redirect);
        }        
    }
}
