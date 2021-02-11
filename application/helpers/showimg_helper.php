<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
function showimg($text)
{
    $text = '<img src="../../petugas_damkar/upload/'.$text.'" style="width:80px;">';
    return $text;
}

?>