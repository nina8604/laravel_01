php = php

change_owner: #
	@sudo chown -R $(USER):$(USER) $(CURDIR)

composer_dep: #
	@docker run --rm -v $(CURDIR)/app:/app composer install

start: #start docker container
	@sudo docker-compose up -d

stop: #stop docker container
	@sudo docker-compose down


show: #show docker's containers
	@sudo docker ps

connect_php: #Connect
	@sudo docker-compose exec $(php) bash