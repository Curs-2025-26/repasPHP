<?php
// 05) Formulari únic i complet (sense email ni assignatures)
// Enunciat: crea un formulari POST amb camps:
//  - nom (obligatori, mínim 2 caràcters)
//  - torn (SELECT: mati/vesprada/online; obligatori)
//  - accepta (checkbox obligatori)
// Requisits: valida i guarda errors en $errors[]. Si hi ha errors, mostra'ls i
// deixa els valors del formulari persistents (sticky). Si és vàlid, mostra un resum.
// PISTES: $_POST, isset(), strlen(), in_array(), array d'opcions vàlides.

$errors = [];
$torn_permesos = ['mati','vesprada','online'];
$nom = $_POST['nom'] ?? '';
$torn = $_POST['torn'] ?? '';
$accepta = isset($_POST['accepta']);

// TODO: si POST, validar i omplir $errors[]
// TODO: HTML del formulari amb value/selected/checked persistents
?>
<h2>Inscripció</h2>
<!-- TODO: mostrar errors si n'hi ha i el resum si és vàlid -->
<form method="post">
  <label>Nom
    <input name="nom" value="<?= h($nom) ?>">
  </label>
  <br>
  <label>Torn
    <select name="torn">
      <?php foreach ($torn_permesos as $opt): ?>
        <option value="<?= h($opt) ?>" <?= ($opt===$torn?'selected':'') ?>><?= h($opt) ?></option>
      <?php endforeach; ?>
    </select>
  </label>
  <br>
  <label><input type="checkbox" name="accepta" <?= $accepta?'checked':''; ?>> Accepte les condicions</label>
  <br>
  <button>Enviar</button>
</form>
