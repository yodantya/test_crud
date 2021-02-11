<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

function detail($text)
{
    $text = ("<a href='tampillaporan/data_lokasi/$text' target='_blank' data-toggle='tooltip' data-placement='top' title='Detail Lokasi'>Detail Lokasi</a>");
 
    return $text;
}

?>