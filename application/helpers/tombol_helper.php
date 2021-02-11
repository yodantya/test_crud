<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
function tombol($text = null)
{
    $text = ("<a href='javascript:void(0)' class='btn btn-sm btn-info' data-toggle='tooltip' data-placement='top' title='Update' onclick='edit_data(".$text.")'><i class='fa fa-check-square'></i></a>
    	<a href='javascript:void(0)' class='btn btn-sm btn-danger' data-toggle='tooltip' data-placement='top' title='Hapus' onclick='delete_data(".$text.")'><i class='glyphicon glyphicon-trash'></i></a>");
 
    return $text;
}

?>