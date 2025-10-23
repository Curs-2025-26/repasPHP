<?php
// 04) Arrays — ordenació multicriteri
// Enunciat: amb el mateix $items, ordena per 'preu' descendent i, si empata,
// per 'cat' ascendent. Imprimeix 'cat - preu' per línia.
// PISTA: usa usort($items, function($a,$b){ ... });

$items = [
  ['cat'=>'llibre','preu'=>18.0],
  ['cat'=>'joc','preu'=>29.9],
  ['cat'=>'llibre','preu'=>22.5],
  ['cat'=>'tecnologia','preu'=>199.0],
  ['cat'=>'joc','preu'=>16.5],
];

// TODO: usort amb comparador; després imprimir cada element
