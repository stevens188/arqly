<?php 
function lang($val=null) {
  $lang=[
    'html_title' => 'Services Bla bla',
    'quienes_somos' => 'about Us',
    'modelado_3d_description' => 'Aqui pongo el carretazo'
  ];
  if(isset($lang[$val])) {
    return $lang[$val];
  } else {
    return $val;
  }
}