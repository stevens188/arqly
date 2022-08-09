<?php 
function lang($val=null) {
  $lang=[
    'html_title' => 'Revit drafting service',
    'quienes_somos' => 'about Us',
    'contact' => 'contact',
    'modelado_3d_description' => 'Aqui pongo el carretazo'
  ];
  if(isset($lang[$val])) {
    return $lang[$val];
  } else {
    return $val;
  }
}