const addBtn = document.querySelector('#add');
const najmocniejsze = document.querySelector('#najmocniejsze');

const catA = [];
const catS = [];
const catX = [];

class carConstructor {
    constructor(a, b, c, d, e){
        this.marka = a;
        this.model = b;
        this.rocznik = c;
        this.moc = d;
        this.kolor = e;
        this.dodajRejestracje = function(){
            const rejestracja = Math.random().toString(36).substring(7);
            return rejestracja;
        }
    }
}

addBtn.addEventListener("click", function (e){
    e.preventDefault();

    const marka = document.querySelector('#marka');
    const model = document.querySelector('#model');
    const rocznik = document.querySelector('#rocznik');
    const moc = document.querySelector('#moc');
    const kolor = document.querySelector('#kolor');

    if(marka == '' || model == '' || rocznik == '' || moc == '' || kolor == ''){
        alert("Proszę poprawnie wypełnić wszystkie rubryki!");
        clearInput();
    }else{

        let car = new carConstructor(marka.value, model.value, rocznik.value, moc.value, kolor.value);

        if(car.moc > 1 && car.moc < 200){
            catA.push(car);
            addCar(car, "catA");
        }else if(car.moc >= 200 && car.moc < 500){
            catS.push(car);
            addCar(car, "catS");
        }else if(car.moc >= 500){
            catX.push(car);
            addCar(car , "catX");
        }else{
            alert("Moc nie może być ujemna");
        }
    }  

    console.log(catA);
    console.log(catS);
    console.log(catX);
});

function addCar(car, cat){
    clearInput();

    if(cat == "catA"){
        const main = document.querySelector('.catA');
        const element = document.createElement('div');
        const text = `${car.marka} ${car.model} - ${car.rocznik}, Moc: ${car.moc}, Kolor: ${car.kolor}, Numer startowy: ${car.dodajRejestracje()}`;
        const delButton = document.createElement('button');
        delButton.innerHTML = "Usuń";
        element.innerHTML = text;
        element.appendChild(delButton);
        main.appendChild(element);
        
        delButton.addEventListener('click', function () { 
            element.remove();
        });
    }else if(cat == "catS"){
        const main = document.querySelector('.catS');
        const element = document.createElement('div');
        const text = `${car.marka} ${car.model} - ${car.rocznik}, Moc: ${car.moc}, Kolor: ${car.kolor}, Numer startowy: ${car.dodajRejestracje()}`;
        const delButton = document.createElement('button');
        delButton.innerHTML = "Usuń";
        element.innerHTML = text;
        element.appendChild(delButton);
        main.appendChild(element);

        delButton.addEventListener('click', function () {
            element.remove();
        });
    }else if(cat == "catX"){
        const main = document.querySelector('.catX');
        const element = document.createElement('div');
        const text = `${car.marka} ${car.model} - ${car.rocznik}, Moc: ${car.moc}, Kolor: ${car.kolor}, Numer startowy: ${car.dodajRejestracje()}`;
        const delButton = document.createElement('button');
        delButton.innerHTML = "Usuń";
        element.innerHTML = text;
        element.appendChild(delButton);
        main.appendChild(element);
        
        delButton.addEventListener('click', function () { 
            element.remove();
        });
    }
}

function clearInput(){
    const markaC = document.querySelector('#marka').value = '';
    const modelC = document.querySelector('#model').value = '';
    const rocznikC = document.querySelector('#rocznik').value = '';
    const mocC = document.querySelector('#moc').value = '';
    const kolorC = document.querySelector('#kolor').value = '';
}


