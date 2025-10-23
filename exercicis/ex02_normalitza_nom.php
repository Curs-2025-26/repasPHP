<?php
// 02) Funció “neta” — normalitza nom (sense slugify)
// Enunciat: implementa normalitzaNom($nom) que:
//  - elimine espais extres al principi/final i entre paraules
//  - pose majúscula inicial a cada paraula (accents inclosos)
//  - evite dobles espais
// PISTES: trim(), preg_replace('/\s+/', ' ', ...), mb_convert_case(..., MB_CASE_TITLE, 'UTF-8')

function normalitzaNom(string $nom): string {
  // TODO
}

$tests = ["  maria   del   mar ", "JOAN  carles", "  anna"];
echo '<!-- Escriu ací proves amb echo normalitzaNom(...) -->';
