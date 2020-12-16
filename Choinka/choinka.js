const pojemnik = document.querySelector("#output");
//console.log(pojemnik);
const wysokosc = document.querySelector("#wysokosc");
const button = document.querySelector("#send");
const kolor = document.querySelector("#kolor");

button.addEventListener("click", wypiszChoinke);

let wielkosc = wysokosc.value;

function wypiszChoinke(wielkosc) {
    const level = parseInt(wysokosc.value);
    let tree = "";
    let gwiazdki = 1;
    let spacja = (level - 1);
    const kolorDrzewka = kolor.value;

    for (let i = 0; i < level; i++) {//wysokosc choinki 
        for (let k = level; k > i; k--) {
            tree += "&nbsp;";
        }
        for (let j = 0; j <= i * 2; j++) {//wypisanie gwaizdek 
            tree += "*";
        }
        tree += "<br>";
    }

    pojemnik.innerHTML = tree;
    pojemnik.style.color = kolorDrzewka;
}