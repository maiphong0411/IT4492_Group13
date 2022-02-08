@Set up enviroment in docker

- docker-compose up -d

# Set up set in server docker:
- docker exec -it "name of container" bash
- composer install
- cp .env.example .env
- php artisan config:clear
- php artisan key:generate
Before migrate, check DB_HOST in file .env
    In window: DB_HOST should be name of container in docker
- php artisan migrate

Viết code (Repo and service): 
Có 3 phần : controller, service, repository
- Repository sẽ lưu trong thư mực App\Repositories dùng để tương tác với database
- Service: sẽ lưu trong thư mục App\Services\Api dùng để sử lý các logic 
- Controller: sẽ lưu trong App\Http\Controllers\Api trả dữ liệu về cho người dùng 

# truongtest
