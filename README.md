@Set up enviroment in docker

- docker-compose up -d

# Set up set in server docker:
- docker exec -it hb_future_base_php_1 bash
- composer install
- cp .env.example .env
- php artisan config:clear
- php artisan key:generate
Before migrate, check DB_HOST in file .env
    In window: DB_HOST should be name of container in docker
- php artisan migrate


