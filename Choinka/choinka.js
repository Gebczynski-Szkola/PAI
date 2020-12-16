const pojemnik = document.querySelector("#output");
//console.log(pojemnik);
const wysokosc = document.querySelector("#wysokosc");
const button = document.querySelector("#send");

button.addEventListener("click", wypiszChoinke);

let wielkosc = wysokosc.value;

function wypiszChoinke(wielkosc) {
    const level = parseInt(wysokosc.value);
    let tree = "";

    for (let i = 1; i <= level + 1; i++) {//wysokosc choinki 
        for (let j = 1; j < i; j++) {//wypisanie gwaizdek 
            tree += "*";
        }
        for (let k = 1; k <= 1; k++) {
            tree += "&nbsp;"
        }
        tree += "<br>";
    }

    pojemnik.innerHTML = tree;
}