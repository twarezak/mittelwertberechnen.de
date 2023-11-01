### Docker
    docker exec -it mittelwertberechnende_php_1 bash
    
    $ chmod 777 storage/logs/ storage/framework/cache/ storage/framework/sessions/ storage/framework/views
### Deploy
    dep deploy | ./vendor/bin/dep deploy

## Localhost
    $ docker-compose up -d
    $ npm run watch

http://127.0.0.1:8022

