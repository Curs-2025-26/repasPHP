<?php
// common.php — helpers & session bootstrap
if (session_status() === PHP_SESSION_NONE) { session_start(); }
// Helper per escapar HTML
function h(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
