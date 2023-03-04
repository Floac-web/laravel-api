
Api на Laravel https://laravel-php-api.000webhostapp.com/api
реалізовано:
- реєстрація POST https://laravel-php-api.000webhostapp.com/api/register :
-необхідні поля: {
    "name": "test12",
    "email": "testEmail12@gmai.com",
    "password": "123",
    "password_confirmation": "123"
}

- авторизація POST https://laravel-php-api.000webhostapp.com/api/login:
-необхідні поля: {
    "email": "testEmail@gmai.com",
    "password": "123"
}
-приклад відповіді(200):{
    "status": true,
    "user": {
        "id": 1,
        "name": "test",
        "email": "testEmail@gmai.com",
        "api_token": "2|ZgL8pKZefWd5qygiBVXBjvSOHCCSkRXXtOtdXHlH",
        "created_at": "2023-02-22T17:35:04.000000Z",
        "updated_at": "2023-03-04T22:01:24.000000Z"
    }
}
- створення заказу POST https://laravel-php-api.000webhostapp.com/api/orders:
-необхідне поле в headers: {
    Autorization: Bearer + api_token(приходить при успішному логіні)
}
-необхідні поля тіла: {
    "subject": "title",
    "message": "Lorem ipsum"
}
- взяття всіх заказів GET https://laravel-php-api.000webhostapp.com/api/orders:
-необхідне поле в headers: {
    Autorization: Bearer + api_token(приходить при успішному логіні)
}
-приклад відповіді(200):{
    "status": true,
    "orders": [
        {
            "id": 1,
            "subject": "title",
            "message": "Lorem ipsum",
            "user_id": 1,
            "created_at": "2023-02-22T18:45:59.000000Z",
            "updated_at": "2023-02-22T18:45:59.000000Z"
        },
        {
            "id": 2,
            "subject": "title",
            "message": "Lorem ipsum",
            "user_id": 1,
            "created_at": "2023-03-04T21:57:30.000000Z",
            "updated_at": "2023-03-04T21:57:30.000000Z"
        }
    ]
}
