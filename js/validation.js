let form = document.getElementById('applicationForm');

const colorGreen = '1px solid #60ff6c'
const colorRed = '1px solid #ff7171'

form.addEventListener('submit', function (event) {
    event.preventDefault();
    if (!validateForm()) {
        return false;
    } 
    console.log('Валидация пройдена успешно успешно!')
});

function validateForm() {
    let name = document.getElementById('name');
    let tel = document.getElementById('tel');
    let email = document.getElementById('email');

    name.style.border = colorGreen
    tel.style.border = colorGreen
    email.style.border = colorGreen

    const str = tel.value
    const response = []

    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (name.value === '') {
        response.push('Пожалуйста, введите ваше имя')
        name.style.border = colorRed
    }

    if (tel.value === '') {
        response.push('Пожалуйста, введите ваш телефон')
        tel.style.border = colorRed
    }

    if (str.length < 17 && str.length > 0) {
        response.push('Пожалуйста, введите правильно ваш телефон')
        tel.style.border = colorRed
    }
    if (!emailPattern.test(email.value)) {
        response.push('Пожалуйста, введите правильный email')
        email.style.border = colorRed
    }

    if (response.length > 0) {
        for (let i of response) {
            console.log(i)
        }
        return false;
    }
    return true;
}