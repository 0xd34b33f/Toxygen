# Default features:
---
* Мененджер данных (Добавлять, модифицировать и удалять данные) в mysql.
* Менеджер юзеров (Создавать аккаунт, удалять аккаунт). Работать с корзиной можно без авторизации. Чтобы завалидировать корзину надо авторизоваться.
* Корзина. Должна содержать список товаров, которые хочет приобрести покупатель. Также цена, количество каждого предмета и общая стоимость. Должна быть кнопка проверки для архивации(**???**) заказа.
* Категории и связанные продукты. Как и на любом сайте магазине вы можете заказывать товары по категориям. Категория может содержать несколько товаров, но товар может принадлежать больше чем к одной категории. **ЗАРАНЕЕ ПРОДУМАТЬ БАЗУ ДАННЫХ**
* Целевая страницы. Эта страница является витриной вашего сайта. Она должна быть привлекательной и интуитивно понятной, так чтобы клиенты захотели купить товар.
Для этого страница может содержать раздел подключения, создание учетной записи, корзин и предварительный просмотр несколько статей и категорий. **ОРГАНИЗАЦИЯ МОДУЛЕЙ УЛУЧШИТ ОПЫТ ПОЛЬЗОВАТЕЛЯ**
* Админка. В этом разделе должна быть возможность дать эксклюзивный доступ для нескольких пользователей. Эти пользователи смогут добавлять, изменять, удалять статьи, категории и пользователей.

Таким образом, пользователь должен иметь возможность зарегистрироваться, подключиться, добавить товары в свою корзину и
подтвердить свой заказ. После подтверждения заказ должен быть виден администрации
раздела.
---
# BONUSES:
---
* Управление запасами товаров.
* Детализация товаров (цвет размер и т.д.)
* Продвинутая информация о пользователе
* CAPTCHA
* API
* Графики, генерация статистики
* Генерация чека для печати
* Регистрации, подключение через Oauth
---
# SUBMISSION:
---
* **author файл**
* index.php и install.php. index.php - входная точка сайта. install.php создаст базу данных и все что нужно для инициализации веб сайта.
* Размер всего проекта должен быть не больше 5 МБ
* **ВСЕ БЕСПОЛЕЗНЫЕ ФАЙЛЫ УБРАТЬ НАХЕР**
