build:
	docker-compose build	
up:
	docker-compose up -d
down:
	docker-compose down

migratedb:
	docker exec embroidr-app php artisan migrate --seed
 