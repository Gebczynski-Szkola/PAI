const submit = document.querySelector("#submit").addEventListener("click",

    function (event) {
        event.preventDefault();
        nameCheck();
        ageCheck();
        colorCheck();
    });

function nameCheck() {
    const name = document.querySelector("#name").value
    const nameFalse = document.querySelector("#nameFalse");
    const nameResult = document.querySelector("#nameResult");
    const noFirstSign = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "-", "=", "+", "[", "{", "}", "]", ";", ":", "'", "|", ",", "<", ">", ".", "?"];

    const firstSign = name[0];


    if (name.length > 3) {
        if (noFirstSign.indexOf(firstSign) == -1) {
            nameResult.innerText = "Cześć " + name + ",";
            nameFalse.innerText = "";
        }
        else {
            nameFalse.innerText = "Imię nie może się zaczynać od znaku lub cyfry!"
        }
    }
    else if (name.length < 3) {
        nameFalse.innerText = "Imię musi mieć więcej niż 3 litery"
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

function colorCheck() {
    const color = document.querySelector("#color").value;
    const result = document.querySelector("#result");

    const firstColor = color[0];
    const firstSign = "#";

    if (firstSign == firstColor && color.length == 7) {
        result.style.borderColor = color;
    }
    else {
        result.style.borderColor = "transparent";
    }
}

