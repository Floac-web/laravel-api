
Api на Laravel https://laravel-php-api.000webhostapp.com/api
реалізовано:
<li> реєстрація POST https://laravel-php-api.000webhostapp.com/api/register</li>
 <p>необхідні поля: <code> {
    "name": "test12",
    "email": "testEmail12@gmai.com",
    "password": "123",
    "password_confirmation": "123"
}</code></p>

<li> авторизація POST https://laravel-php-api.000webhostapp.com/api/login</li>
<p>необхідні поля: <code> {
    "email": "testEmail@gmai.com",
    "password": "123"
} </code></p>
<p>приклад відповіді(200): <code>{
    "status": true,
    "user": {
        "id": 1,
        "name": "test",
        "email": "testEmail@gmai.com",
        "api_token": "2|ZgL8pKZefWd5qygiBVXBjvSOHCCSkRXXtOtdXHlH",
        "created_at": "2023-02-22T17:35:04.000000Z",
        "updated_at": "2023-03-04T22:01:24.000000Z"
    }
}</code></p>
<li> створення заказу POST https://laravel-php-api.000webhostapp.com/api/orders</li>
<p>необхідне поле в headers: <code>{
    Autorization: Bearer + api_token(приходить при успішному логіні)
}</code></p>
<p>необхідні поля тіла:<code> {
    "subject": "title",
    "message": "Lorem ipsum"
}</code></p>
<li> взяття всіх заказів GET https://laravel-php-api.000webhostapp.com/api/orders</li>
<p>необхідне поле в headers:<code> {
    Autorization: Bearer + api_token(приходить при успішному логіні)
}</code></p>
<p>приклад відповіді(200):<code>{
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
}</code></p>
