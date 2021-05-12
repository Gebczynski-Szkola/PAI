const addBtn = document.querySelector('#add');
const najmocniejsze = document.querySelector('#najmocniejsze');
const tabela = [];

addBtn.addEventListener("click", function (e){
    e.preventDefault();

    const marka = document.querySelector('#marka');
    const model = document.querySelector('#model');
    const rocznik = document.querySelector('#rocznik');
    const moc = document.querySelector('#moc');
    const kolor = document.querySelector('#kolor');

    let car = {
        marka: marka.value,
        model: model.value,
        rocznik: rocznik.value,
        moc: moc.value,
        kolor: kolor.value,
        dodajRejestracje: function(){
            const rejestracja = Math.random().toString(36).substring(7);
            return rejestracja;
        }
    }
    tabela.push(car);

    const markaC = document.querySelector('#marka').value = '';
    const modelC = document.querySelector('#model').value = '';
    const rocznikC = document.querySelector('#rocznik').value = '';
    const mocC = document.querySelector('#moc').value = '';
    const kolorC = document.querySelector('#kolor').value = '';

    const main = document.querySelector('.main');
    const element = document.createElement('p');
    const text = `${car.marka} ${car.model} - ${car.rocznik}, Moc: ${car.moc}, Kolor: ${car.kolor}, Numer startowy: ${car.dodajRejestracje()}`;
    element.innerHTML = text;
    main.appendChild(element);


    console.log(text);
    console.log(tabela);
});

najmocniejsze.addEventListener('click', function (){
    if(tabela.length <= 0){
        alert("Brak aut w bazie danych!");
    }else{
        
    }
} )


