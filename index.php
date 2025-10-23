<?php
require __DIR__.'/common.php';
require __DIR__.'/cap.php';

$map = [
  '01' => 'ex01_static_nextid.php',
  '02' => 'ex02_normalitza_nom.php',
  '03' => 'ex03_subtotals_categories.php',
  '04' => 'ex04_ordenacio_multicriteri.php',
  '05' => 'ex05_form_torn_accepta.php',
  '06' => 'ex06_zona_privada.php',
  '07i'=> 'ex07_compte_per_pagina_index.php',
  '07p'=> 'ex07_compte_per_pagina_productes.php',
  '07c'=> 'ex07_compte_per_pagina_contacte.php',
  '08' => 'ex08_select_idioma.php',
  '09i'=> 'ex09_includes_index.php',
  '09l'=> 'ex09_includes_llistat.php',
  '10' => 'ex10_foreach_referencia.php',
  '11' => 'ex11_classe_cercle.php',
  '12' => 'ex12_comandes_per_client.php',
];

$k = $_GET['e'] ?? null;
echo '<h1>Pràctica PHP (BASE)</h1>';
if ($k && isset($map[$k])) {
  require __DIR__.'/exercicis/'.$map[$k];
} else {
  echo '<p>Tria un exercici al menú de dalt o afegeix <code>?e=01</code> a la URL.</p>';
  echo '<p><em>Aquesta és la versió BASE sense solucions. Completa els fitxers d\'exercicis/</em></p>';
}

require __DIR__.'/peu.php';
