<?php
// 06) Control d’accés bàsic (sessions)
// Enunciat: només es pot accedir si existeix $_SESSION['usuari']; sinó, redirigeix a login (o a ?e=05).
// Afegeix també un enllaç 'Tancar sessió' que buide la sessió i redirigisca.
// PISTA: header('Location: ...'); exit;  i després session_destroy() + cookie si cal.

// TODO: comprova sessió, redirigeix si falta, i implementa el logout
echo "<p><!-- Zona privada: mostra ací el nom de l'usuari de la sessió --></p>";
