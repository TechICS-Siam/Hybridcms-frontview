<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('uploadFile')) {
    function uploadFile($path, $filename,$type = "*")
    {
        $typesArray = [
            'image' => 'gif|jpg|png|jpeg',
            '*' => '*',
        ];

        $config['upload_path'] = $path;
        $config['allowed_types'] = $typesArray[$type];
        $config['overwrite'] = false;
        $config['overwrite'] = false;
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';

        $CI = &get_instance();

        $CI->load->library('upload', $config);

        $CI->upload->initialize($config);

        if($CI->upload->do_upload($filename)){

            return $CI->upload->data()['file_name'];
        }else{
            return false;
        }


    }
}

if (!function_exists('uploadFileWithCustomName')) {

    function uploadFileWithCustomName($path, $filename, $title ,$type = "*")
    {
        $typesArray = [
            'image' => 'gif|jpg|png|jpeg',
            '*' => '*',
        ];

        // $new_name = 'Tech-ICS-'. $title .'-' .$_FILES[$filename]['name'];
        $file_ext = pathinfo($_FILES[$filename]["name"], PATHINFO_EXTENSION);
        $new_name = ''. $title . '.';
        $new_name .= $file_ext;

        $config['file_name'] = $new_name;
        $config['upload_path'] = $path;
        $config['allowed_types'] = $typesArray[$type];
        $config['overwrite'] = false;
        $config['overwrite'] = false;
        $config['max_size'] = '';
        $config['max_width'] = '';
        $config['max_height'] = '';

        $CI = &get_instance();

        $CI->load->library('upload', $config);

        $CI->upload->initialize($config);

        if($CI->upload->do_upload($filename)){

            return $CI->upload->data()['file_name'];
        }else{
            return false;
        }
    }
}