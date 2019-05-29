php = php
db=db
change_owner: #
	@sudo chown -R $(USER):$(USER) $(CURDIR)

composer_dep: #
	@docker run --rm -v $(CURDIR)/app:/app composer install

start: #start docker container
	@sudo docker-compose up -d

stop: #stop docker container
	@sudo docker-compose down

composer_dump: # autoload seed
	@sudo docker-compose exec $(php) composer dump-autoload

#create_seeder: #Create seeder and autoload seed - I variant
#	@sudo docker-compose exec $(php) php artisan make:seeder $('name')TableSeeder && make composer_dump

create_seeder: seeder composer_dump #Create seeder and autoload seed - II variant
	@echo "Seeder created"

seeder: #Create seeder
	@sudo docker-compose exec $(php) php artisan make:seeder $(name)TableSeeder

show: #show docker's containers
	@sudo docker ps

connect_php: #Connect
	@sudo docker-compose exec $(php) bash

connect_db: #Connect
	@sudo docker-compose exec $(db) bash

fresh: #Fresh DB
	@sudo docker-compose exec $(php) php artisan migrate:fresh --seed
