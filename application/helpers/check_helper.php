<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!function_exists('status')) {
    function check($text)
    {
        if ($text=='t') {
            $text = '<span class="label label-success" style="align: center;"><i class="fa fa-check" aria-hidden="true"></i></span>';
        }
        else {
            $text = '';
        }
       
        return $text;
    }
}