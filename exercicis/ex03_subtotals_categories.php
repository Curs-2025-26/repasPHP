<?php
// 03) Arrays — sub-totals per categoria
// Enunciat: donat l'array $items, calcula el total per cada categoria i el total global.
// Imprimeix línies com:
//   llibre: 40.5
//   joc: 46.4
//   tecnologia: 199.0
//   TOTAL: 285.9
// PISTES: recorre $items, usa un array $totals[$cat] i després array_sum($totals).

$items = [
  ['cat'=>'llibre','preu'=>18.0],
  ['cat'=>'joc','preu'=>29.9],
  ['cat'=>'llibre','preu'=>22.5],
  ['cat'=>'tecnologia','preu'=>199.0],
  ['cat'=>'joc','preu'=>16.5],
];

// TODO: calcula $totals i el global, i imprimeix-los
