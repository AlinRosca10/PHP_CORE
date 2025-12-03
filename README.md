# Proiect PHP

![PHP Version](https://img.shields.io/badge/PHP-8%2B-blue)
![License](https://img.shields.io/badge/License-MIT-green)
![Status](https://img.shields.io/badge/Status-Active-success)

> Documentație optimizată pentru afișare pe GitHub.

Acest proiect conține exemple de cod, exerciții și funcționalități dezvoltate în PHP.

## 📁 Structură proiect

* **src/** – codul sursă
* **public/** – fișiere accesibile public (HTML, CSS, JS)
* **tests/** – teste unitare
* **README.md** – documentația proiectului

## 📌 Cerințe

* PHP 8+
* Composer (opțional)
* Server local: XAMPP / WAMP / Laragon sau server integrat PHP

## 🚀 Instalare

1. Clonează repository-ul:

   ```bash
   git clone https://github.com/user/proiect.git
   ```
2. Intră în director:

   ```bash
   cd proiect
   ```
3. Rulează proiectul:

   ```bash
   php -S localhost:8000 -t public
   ```

## 🧪 Utilizare

Exemplele de cod pot fi rulate direct în terminal sau accesate din interfața web.

## 🤝 Contribuții

Pull requests sunt binevenite. Pentru schimbări majore, te rugăm să deschizi mai întâi un issue.

## 📄 Licență

Acest proiect este disponibil sub licența MIT.

Atenția distributivă în cod (sau „atenția la detalii” în programare) este foarte importantă în special atunci când lucrăm cu operatori care pot produce ambiguități. Una dintre cele mai cunoscute capcane este folosirea operatorului de atribuire (=) în locul operatorului de comparație (== sau ===) într-o structură decizională.

# ✔ Ce se întâmplă?

În PHP, expresia:

if ($x = 5) {
    // ...
}


nu compară valoarea lui $x cu 5, ci atribie valoarea 5 variabilei $x.
Apoi, rezultatul expresiei este valoarea atribuită, adică 5, care este evaluată ca TRUE deoarece orice valoare nenulă (cu excepția stringului gol) este TRUE în context boolean.

Astfel, chiar dacă intenția programatorului era să compare:

if ($x == 5)


codul scris greșit:

if ($x = 5)


va afișa întotdeauna TRUE, deoarece atribuie 5, nu compară.

# ✔ De ce e periculos?

Acest tip de greșeală:

este greu de observat vizual (= vs ==)

poate modifica variabila fără intenție

poate produce comportament logic incorect

nu întotdeauna generează avertismente

Exact de aici apare nevoia de atenție distributivă: să observăm fiecare simbol și modul în care poate afecta logica programului.

### ✔ Cum se evită această capcană?
# 1. Folosește „Yoda conditions”
if (5 == $x) {
    ...
}


Dacă ai scrie greșit:

if (5 = $x) // eroare sintactică


→ PHP ar respinge codul.

# 2. Folosește === pentru comparații stricte

Acest lucru face codul mult mai clar, de exemplu:

if ($loggedIn === true)

# 3. Activează strict mode / warnings

Setează în php.ini sau în cod:

error_reporting(E_ALL);

# 4. Folosește lintere / code analyzers:

PHPStan

Psalm

PHP CodeSniffer

Acestea detectează automat comparațiile suspecte.

✔ Exemple clare
Greșit:
if ($ok = true) {
    echo "mereu true!";
}

Corect:
if ($ok === true) {
    echo "ok este true";
}

Greșeală clasică:
if ($a = 0) {  // atribuie 0 → evaluat ca FALSE
    echo "intrat";
}


Nu afișează nimic → greu de depistat.

Dacă vrei, poți continua cu:

🔹 alte capcane similare
🔹 exerciții de identificare a greșelilor
🔹 exemple PHP reale cu comentarii