exec := bash exec

build:
	vendor/bin/sail build

restart: down up

up:
	vendor/bin/sail up -d

down:
	docker-compose down --remove-orphans

migrate:
	$(exec) artisan migrate

rollback:
	$(exec) artisan migrate:rollback

optimize:
	$(exec) artisan optimize:clear

test:
	$(exec) artisan test

seed:
	$(exec) artisan db:seed

ci:
	$(exec) composer install

cu:
	$(exec) composer update

watch:
	$(exec) npm run watch

prod:
	$(exec) npm run prod

perm:
	sudo chgrp -R www-data storage bootstrap/cache
	sudo chmod -R ug+rwx storage bootstrap/cache
