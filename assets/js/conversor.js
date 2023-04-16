
//Variables a ulizar

let form = document.querySelector('.form')
let initialMoney = document.querySelector('#initialmoney')
let finalMoney = document.querySelector('#finalmoney')
let initialValue = document.querySelector('#initialvalue')
let finalValue = document.querySelector('#finalvalue')

//Clase para el conversor de monedas

class Conversor {
    constructor(initialValue, initialMoney, finalMoney) {
        this.initialMoney = initialMoney
        this.finalMoney = finalMoney
        this.initialValue = parseFloat(initialValue)
    }

    conversion() {
        if(this.initialMoney === 'pound') {
            if(this.finalMoney === 'euro') {
                return this.initialValue * 1.12
            }
            else if(this.finalMoney === 'dollar'){
                return this.initialValue * 1.24
            }
        }
        else if(this.initialMoney === 'dollar') {
            if(this.finalMoney === 'pound') {
                return this.initialValue * 0.80
            }
            else if(this.finalMoney === 'euro') {
                return this.initialValue * 0.90
            }
        }
        else if(this.initialMoney === 'euro') {
            if(this.finalMoney === 'dollar'){
                return this.initialValue * 1.11
            }
            else if(this.finalMoney === 'pound') {
                return this.initialValue * 0.89
            }
        }
    }
}

//Función para mostrar errores

function createError(message) {
    let error = document.createElement('p')
        error.textContent = message
        error.classList.add('text-danger')
        return error
}

//Función de conversión de divisas

form.addEventListener('submit', (e) => {
    e.preventDefault();
    let result
    let regex = /^\d+(\.\d+)?$/
    if (initialMoney.value === finalMoney.value) {
        let error = createError('Debes utilizar divisas distintas en el conversor')
        form.appendChild(error)
        return false
    }
    else if(!regex.test(initialValue.value)) {
        let error = createError('El valor debe ser un número')
        initialValue.parentElement.appendChild(error)
    }
    else {
        let conversor = new Conversor(initialValue.value, initialMoney.value, finalMoney.value)
        result = conversor.conversion()
    }
    
    finalValue.value = result.toString()
})