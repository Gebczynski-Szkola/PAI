const kobieta = [];
const mezczyzna = [];

const submit = document.querySelector("#submit").addEventListener("click",

    function (event) {
        event.preventDefault();

        const name = document.querySelector("#name").value;

        const mezczyzna_wypisanie = document.querySelector("#mezczyzna");
        const kobieta_wypisanie = document.querySelector("#kobieta");

        if (isNaN(name.charAt(0))) {
            const ostatnia_litera = name[name.length - 1];
            const poprawne_imie = name.charAt(0).toUpperCase() + name.slice(1).toLowerCase();

            if (ostatnia_litera == "a") {
                if (poprawne_imie == "Kuba" || poprawne_imie == "Kosma" || poprawne_imie == "Barnaba") {
                    mezczyzna.push(poprawne_imie);
                }
                else {
                    kobieta.push(poprawne_imie);
                }
            }
            else {
                mezczyzna.push(poprawne_imie);
            }

            mezczyzna.sort();
            kobieta.sort();

            kobieta_wypisanie.innerHTML = kobieta;
            mezczyzna_wypisanie.innerHTML = mezczyzna;
        }
        else {
            alert("Imie nie może się zaczynać od liczby!");
        }

        name.value = '';
    });
