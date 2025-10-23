<?php
// 08) Selecció d’idioma (cookies, 30 dies)
// Enunciat: formulari amb Valencià/Castellà; guarda cookie 'idioma' 30 dies i
// mostra 'Idioma actual: X'. Si no hi ha cookie, 'no definit'.
// PISTES: setcookie('idioma', $valor, time()+30*24*60*60, '/'); i després redirigir per GET.

// TODO: processament POST i setcookie + redirecció
$idioma = $_COOKIE['idioma'] ?? null;
echo "<p>Idioma actual: ".h($idioma ?? 'no definit')."</p>";
?>
<form method="post">
  <label><input type="radio" name="idioma" value="valencia"> Valencià</label>
  <label><input type="radio" name="idioma" value="castella"> Castellà</label>
  <button>Guardar</button>
</form>
