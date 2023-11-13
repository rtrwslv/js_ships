<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="flex justify-center mt-5" id="oldFormDiv">
        <form id="oldForm" class="w-full max-w-md bg-white shadow-md rounded px-4 pt-4 pb-8 mb-4">
        <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Заголовок</label>
                    <input id="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="regNum">Регистрационный номер</label>
                    <input id="regNum" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Цена</label>
                    <input id="price" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">Фото</label>
                    <input id="photo" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Номер телефона</label>
                    <input id="phone" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Электронная почта</label>
                    <input id="email" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Описание</label>
                    <textarea id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Следующий шаг
                    </button>
                </div>
        </form>
    </div>

    <div class="flex justify-center mt-5" id="newFormDiv" style="display: none;">
        <form id="newForm" class="w-full max-w-md bg-white shadow-md rounded px-4 pt-4 pb-8 mb-4">
        <div class="mb-4" id="newFields">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="usage">Тип эксплуатации</label>
            <select id="usage" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="Коммерческое">Коммерческое</option>
                <option value="Некоммерческое">Некоммерческое</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="selfPropelled">Самоходность</label>
            <select id="selfPropelled" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="Самоходное">Самоходное</option>
                <option value="плавучий объект">плавучий объект</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="docs">Действующие документы</label>
            <select id="docs" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="Да">Да</option>
                <option value="Нет">Нет</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="registered">Находилось ли на учете</label>
            <select id="registered" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="Да">Да</option>
                <option value="Нет">Нет</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="registeredLast5">Находилось ли на учете за последние 5 лет</label>
            <select id="registeredLast5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="Да">Да</option>
                <option value="Нет">Нет</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="shipSize">Размерность судна</label>
            <select id="shipSize" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="Полноразмерное">Полноразмерное</option>
                <option value="Маломерное">Маломерное</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="buildYear">Год постройки</label>
            <input id="buildYear" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="buildAddress">Адрес постройки</label>
            <input id="buildAddress" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="callSign">Позывной</label>
            <input id="callSign" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="projectAuthor">Автор проекта</label>
            <input id="projectAuthor" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="projectNumber">Номер проекта</label>
            <input id="projectNumber" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required/>
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Следующий шаг
            </button>
        </div>
        </form>
    </div>

    <script>
    var dictionary = {};

    var oldForm = document.getElementById('oldForm');
    var newFormDiv = document.getElementById('newFormDiv');
    var oldFormDiv = document.getElementById('oldFormDiv');

    oldForm.addEventListener('submit', function(event) {
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

        let data = {
                "title": title,
                "regNum": regNum,
                "price": price,
                "photo": document.getElementById('photo').files[0],
                "phone": phone,
                "email": email,
                "description": description,
            };
        console.log(data);


        oldFormDiv.style.display = "none";
        newFormDiv.style.display = "flex";

        return false;
    });

    document.getElementById('newForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // New form validation and data collection here

        alert('Форма успешно отправлена');
    });
    </script>
</x-app-layout>
