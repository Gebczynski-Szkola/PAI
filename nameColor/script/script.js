let age = document.querySelector("#age");
let color = document.querySelector("#color");
const submit = document.querySelector("#submit").addEventListener("click", function (event) {
    event.preventDefault();
    nameCheck();
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

//submit.addEventListener("click",);