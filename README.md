 # 💻 Pràctica de repàs PHP – UF2 (GitHub Codespaces Ready)

> 🧩 Activitat de repàs pràctic dels continguts de PHP: funcions, arrays, formularis, sessions, cookies i fitxers.

---

## 🚀 Instruccions per començar

1. **Fes clic en el botó verd “Code”**  
   → selecciona **“Open with Codespaces”**  
   → espera que es cree l’entorn (uns segons).

2. Una vegada carregat, obre el menú de **tasques** (☰ → Run Task) o el terminal i executa:
   ```bash
   php -S 0.0.0.0:8000 -t .
   ```
   S’obrirà automàticament una URL pública del tipus  
   `https://xxxx-8000.app.github.dev`

3. Ves a la URL del navegador i apareixerà la pàgina principal de la pràctica (`index.php`).

---

## 🧱 Estructura del projecte

```
practica-php/
├─ .devcontainer/          # Configuració de Codespaces (PHP 8.2)
├─ .vscode/                # Tasques i configuració per a VS Code
├─ data/
│  └─ comandes.csv         # Fitxer de dades per a l'exercici 12
├─ exercicis/
│  ├─ ex01_static_nextid.php
│  ├─ ex02_normalitza_nom.php
│  ├─ ex03_subtotals_categories.php
│  ├─ ex04_ordenacio_multicriteri.php
│  ├─ ex05_form_torn_accepta.php
│  ├─ ex06_zona_privada.php
│  ├─ ex07_compte_per_pagina_index.php
│  ├─ ex07_compte_per_pagina_productes.php
│  ├─ ex07_compte_per_pagina_contacte.php
│  ├─ ex08_select_idioma.php
│  ├─ ex09_includes_index.php
│  ├─ ex09_includes_llistat.php
│  ├─ ex10_foreach_referencia.php
│  ├─ ex11_classe_cercle.php
│  └─ ex12_comandes_per_client.php
├─ index.php               # Menú principal d'accés als exercicis
├─ common.php              # Funcions comunes i sessió
├─ cap.php / peu.php       # Capçalera i peu HTML
└─ README.md
```

---

## 🧩 Objectiu de la pràctica

Resoldre **12 exercicis curts** que repassen els conceptes clau del mòdul:

| Bloc | Exercicis | Temàtica principal |
|------|------------|--------------------|
| 🧮 Funcions i arrays bàsics | 1–3 | Funcions, `static`, arrays associatius |
| 🔢 Arrays avançats | 4 | Ordenacions amb `usort` |
| 🧾 Formularis | 5 | Validació, gestió d’errors, select i checkbox |
| 🔐 Sessions i cookies | 6–8 | Control d’accés, comptadors, idioma |
| ⚙️ Includes i modularització | 9 | `include` i reutilització de codi |
| 🧠 POO i fitxers | 10–12 | Referències, classes, fitxers CSV |

---

## 🎓 Indicacions per a l’alumnat

- **Cada alumne o grup** treballa en un *fork* o còpia del repositori.  
- Es recomana fer servir **branques** per alumne (ex. `alumne1`, `alumne2`…).  
- Guarda el progrés amb:
  ```bash
  git add .
  git commit -m "Solució exercici X"
  git push
  ```
- Pots provar cada exercici afegint `?e=01` fins a `?e=12` a la URL.  
  Exemple:  
  `https://xxxx-8000.app.github.dev/?e=05`

---

## 🧠 Objectius d’aprenentatge (resum)

| RA | Descripció |
|----|-------------|
| RA2 | Utilitza funcions, arrays i estructures modulars |
| RA3 | Gestiona formularis i dades d’usuari amb seguretat |
| RA4 | Empra sessions, cookies i fitxers en aplicacions web |

---
 
## 🧱 Enunciat dels 12 exercicis

### Grup 1

#### 01) Interpretar codi — `static`, paràmetres i ordre d’avaluació
Què imprimeix i per què?
```php
<?php
function nextId($inc = 1) {
  static $id = 10;
  $id += $inc;
  return $id;
}
echo nextId();      // A
echo " ";
echo nextId(0);     // B
echo " ";
echo nextId(5);     // C
```
Explica el paper de `static`, el valor inicial i com afecta passar `0` i `5`.

---

#### 02) Funció “neta” — normalitza nom
Implementa una funció **pura**:
- `normalitzaNom(string $nom): string` → retorne el nom amb:
  - espais extra eliminats,
  - majúscula inicial a cada paraula (p. ex. “maria del mar” → “Maria Del Mar”),
  - sense dobles espais.
Prova-la amb almenys tres casos difícils (accents, múltiples espais, majúscules mal posades).

---

#### 03) Arrays — sub-totals per categoria
Donat:
```php
$items = [
  ['cat'=>'llibre','preu'=>18.0],
  ['cat'=>'joc','preu'=>29.9],
  ['cat'=>'llibre','preu'=>22.5],
  ['cat'=>'tecnologia','preu'=>199.0],
  ['cat'=>'joc','preu'=>16.5],
];
```
Genera un **resum**:
```
llibre: 40.5
joc: 46.4
tecnologia: 199.0
TOTAL: 285.9
```
(Format amb 1 decimal és suficient.)

---
### Grup 2. 

#### 04) Arrays — ordenació multicriteri
Amb el mateix `$items`, mostra’ls **ordenats**:
1. per `preu` descendent,  
2. a igual preu, per `cat` ascendent.  
Imprimeix una línia per element: `cat - preu`.

---

#### 05) Formulari únic i complet (sense email ni assignatures)
Fes un formulari `POST` amb camps:
- `nom` (obligatori, mínim 2 caràcters),
- `torn` (**SELECT**: “mati”, “vesprada”, “online”; obligatori),
- `accepta` (**CHECKBOX** d’acceptació obligatori).

**Requisits:**
- Valida al servidor, acumula errors en `$errors[]` (missatges clars i no típics).
- Recarrega el formulari amb **valors persistents** (“sticky form”) si hi ha errors.
- Si és vàlid, mostra un **resum** amb les dades netes.

*(Pista: usa `isset()`, comprova longitud amb `strlen()`, i valida que `torn` siga un dels valors permesos).*

---

#### 06) Control d’accés bàsic (sessions)
Només es pot accedir a `zona_privada.php` si existeix `$_SESSION['usuari']`.  
Si no, redirigeix a `login.php` amb `header('Location: login.php');`.

---

### Grupo 3

#### 07) Comptador independent per pàgina (sessions)
Crea `index.php`, `productes.php`, `contacte.php` i fes que cadascuna tinga el **propi** comptador amb `$_SESSION`.  
Ex.: `Has visitat productes.php 3 vegades.`

> *Implementació separada en:*  
> `ex07_compte_per_pagina_index.php`, `ex07_compte_per_pagina_productes.php`, `ex07_compte_per_pagina_contacte.php`.

---

#### 08) Selecció d’idioma (cookies)
Formulari amb “Valencià / Castellà”. Desa en cookie `idioma` (30 dies).  
A cada càrrega mostra:
```
Idioma actual: valencià
```
Si no hi ha cookie, mostra “no definit” i el formulari.

---

#### 09) Includes — cap/peu/contingut
Crea `cap.php`, `peu.php`, `llistat.php` i un `ex09_includes_index.php` que els **incloga**.  
`ex09_includes_llistat.php` rep `$items` i genera `<li>` dinàmics.  
Explica (en comentari) `include` vs `require`.

---

### Grup 4

#### 10) Interpretar codi — foreach amb referència
Què imprimirà i per què?
```php
<?php
$nums = [2,4,6];
foreach ($nums as &$n) $n += 1;
print_r($nums);
```

---

#### 11) POO bàsica — classe Cercle
Defineix `class Cercle` amb propietat privada `$radi`, constructor i mètode `area()` (`π * r^2`).  
Crea un cercle de radi 3 i mostra l’àrea amb 2 decimals.

---

#### 12) Fitxer — comandes per client (fitxer proporcionat)
**Proporcionem** `data/comandes.csv` (punt i coma):
```
# client;comanda;unitats;preu_unitari
ACME;A001;2;19.95
ACME;A002;1;5
FOO;F100;3;10.5
BAR;B777;1;199.99
# línia malformada:
ACME;BADLINE;X;12
FOO;F101;2;9.25
;INCOMPLETA;1;3
```
**Demana:**
- Ignora línies buides, que comencen per `#` o malformades.
- Calcula **total per client** i mostra’ls descendentment:
```
BAR: 199.99
ACME: 44.9
FOO: 50.0
```
Mostra també el **TOTAL GLOBAL**.

---

## 🧠 Consells finals
- Posa `session_start()` al principi dels fitxers que usen sessió.
- Les cookies només estan disponibles en `$_COOKIE` **després** de recarregar.
- Valida **al servidor**  .
- Usa `isset()`, `empty()`, `filter_var()`, `explode()`, `usort()`, `number_format()`, `include/require`.
- Comentaris breus per explicar decisions (p. ex. línia malformada).


---

## 🧩 Autoria
CIPFP Batoi · Mòdul **Desenvolupament web en entorn servidor**  
Basat en l’entorn **PHP 8.2 + Codespaces**
