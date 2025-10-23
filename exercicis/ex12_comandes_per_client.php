<?php
// 12) Fitxer — comandes per client (data/comandes.csv)
// Enunciat: llig el CSV (amb ;) ignorant línies buides, comentaris (#) i malformades.
// Calcula total per client (unitats * preu_unitari), ordena descendent i mostra-ho.
// També mostra el TOTAL GLOBAL.
// PISTES: fopen/fgets/fclose, explode(';', ...), is_numeric(), arsort().

$path = __DIR__.'/../data/comandes.csv';
// TODO: obrir fitxer, parsejar línies, omplir array de totals i imprimir resultats
