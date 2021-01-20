
let color = document.querySelector("#color");

const submit = document.querySelector("#submit").addEventListener("click", function (event) {
    event.preventDefault();
    nameCheck();
    ageCheck();
});

function nameCheck() {
    const name = document.querySelector("#name").value

    const noFirstSign = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "-", "=", "+", "[", "{", "}", "]", ";", ":", "'", "|", ",", "<", ">", ".", "?"];

    const firstSign = name[0];

    if (noFirstSign.indexOf(firstSign) == -1) {
        const nameResult = document.querySelector("#nameResult");
        nameResult.innerText = "Cześć " + name;

        const nameFalse = document.querySelector("#nameFalse");
        nameFalse.innerText = "";
    }
    else {
        const nameFalse = document.querySelector("#nameFalse");
        nameFalse.innerText = "Imię nie może się zaczynać od znaku lub cyfry!"
    }
}

function ageCheck() {
    const age = document.querySelector("#age").value;
    const ageResult = document.querySelector("#ageResult");

    if (age / 2 == 0) {
        ageResult.innerText = "";
    }
    else if (age < 18) {
        ageResult.innerText = "Masz " + age + " lat. Brakuję ci " + (18 - age) + " lata do pełnoletności";
    }
    else if (age == 18) {
        ageResult.innerText = "Masz 18 lat";

    }
    else if (age > 18) {
        ageResult.innerText = "Jesteś już pełnoletni " + (age - 18) + " lat";
    }
}

