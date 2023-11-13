document.getElementById('formAd').addEventListener('submit', function(event) {
    event.preventDefault();

    var title = document.getElementById('title').value;
    var regNum = document.getElementById('regNum').value;
    var price = document.getElementById('price').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var description = document.getElementById('description').value;

    if (title == "" || regNum == "" || price == "" || phone == "" || email == "" || description == "") {
        alert('Все поля должны быть заполнены');
        return false;
    }

    var phonePattern = /^((\+7|7|8)+([0-9]){10})$/; 
    if (!phonePattern.test(phone)) {
        alert('Номер телефона должен быть действительным российским номером');
        return false;
    }

    var pricePattern = /^\d+$/;
    if (!pricePattern.test(price)) {
        alert('Цена должна быть числом');
        return false;
    }

    var emailPattern = /[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm;
    if (!emailPattern.test(email)) {
        alert('Email должен быть валидным');
        return false;
    }

    alert('Форма успешно отправлена');
});