# Интеграция Symfony и Mercure
## Запуск сервера

Запустить сервер Symfony:
```bash
symfony server:start --no-tls
```

В отдельной вкладке терминала запустить docker-образ Mercure:
```bash
docker-compose up
```

## Тестирование
Открыть http://127.0.0.1:8000/ и открыть консоль разработчика.

Выполнить команду публикации тестового пуша:
```bash
php bin/console app:mercure:publish-test
```
В консоли браузера должен появиться объект типа:
```json
{ "status": "2022-12-21T14:29:31+00:00" }
```