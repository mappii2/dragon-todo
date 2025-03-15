# Docker関連のコマンド
up:
	docker compose up -d

down:
	docker compose down
restart:
	docker compose restart
bash:
	docker compose exec laravel-backend bash

build:
	docker compose build

ps:
	docker compose ps

logs:
	docker compose logs -f
migrate:
	docker compose exec laravel-backend php artisan migrate

migrate-fresh:
	docker compose exec laravel-backend php artisan migrate:fresh

migrate-fresh-seed:
	docker compose exec laravel-backend php artisan migrate:fresh --seed

seed:
	docker compose exec laravel-backend php artisan db:seed

tinker:
	docker compose exec laravel-backend php artisan tinker

route-list:
	docker compose exec laravel-backend php artisan route:list

cache-clear:
	docker compose exec laravel-backend php artisan cache:clear
	docker compose exec laravel-backend php artisan config:clear
	docker compose exec laravel-backend php artisan route:clear
	docker compose exec laravel-backend php artisan view:clear

key-generate:
	docker compose exec laravel-backend php artisan key:generate

storage-link:
	docker compose exec laravel-backend php artisan storage:link

db:
	docker compose exec db mysql -u laravel -psecret laravel
