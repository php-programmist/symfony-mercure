# Интеграция Symfony и Mercure
## Установка зависимостей
```bash
composer install
```
## Запуск сервисов
```bash
docker-compose up
```

## Тестирование
Открыть http://127.0.0.1:8080/ и открыть консоль разработчика.

Выполнить команду публикации тестового пуша:
```bash
php bin/console app:mercure:publish-test
```
В консоли браузера должен появиться объект типа:
```json
{ "status": "2022-12-21T14:29:31+00:00" }
```