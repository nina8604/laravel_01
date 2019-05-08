php=php

start: #start docker container for LOCAL ENV
    @sudo docker-compose up -d

stop: #stop docker container
    @sudo docker-compose down

show: #show docker's containers
	@sudo docker ps

connect_app: #Connect
    @docker-compose exec $(php) bash