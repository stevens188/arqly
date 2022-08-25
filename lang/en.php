<?php 
function lang($val=null) {
  $lang=[
    'html_title' => 'Servicios de dibujo en Revit',
    'quienes_somos' => '¿Quiénes somos?',
    'contact' => 'contacto.',
    'modelado_3d_description' => 'Te ayudamos con los planos de tu proyecto, modelado 3d y creación de planos. Así mismo, con cantidades de obra y, si lo requiere, podemos ayudarle con el diseño. Te enviaremos los planos en CAD, RVT y PDF.',
  ];
  if(isset($lang[$val])) {
    return $lang[$val];
  } else {
    return $val;
  }
}