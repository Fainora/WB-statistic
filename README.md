WB интеграция

1. Скачиваем проект с репозитория
2. Создаем файл .env и копируем содержимое из .env.example
3. Устанавливаем в .env значение API_URL и API_TOKEN
4. Создаем контейнер в докере: docker-compose up -d --build
5. Переходим в контейнер: docker exec -it WbStatistic-php bash
6. Устанавливаем composesr: composer install
7. Генерируем ключ: php artisan key:generate
8. Запускаем миграции: php artisan migrate
9. Команда для проверки и добавления данных (ежедневно):
php artisan wb:importdata > /dev/null 2>&1 &

Просмотр логов: storage/logs/laravel.log  
Для запуска Docker: docker-compose up -d  
Посмотреть команды планировщика задач: php artisan schedule:list  
Удалить контейнеры, сеть по умолчанию и базу данных: docker compose down --volumes

Для проверки полученных данных необходимо подключиться к БД клиент и там смотреть.
127.0.0.1:3307 - локально
