.PHONY: start-devenv stop-devenv clear-devenv build-devenv
DEFAULT_TARGET: start-devenv

VERSION_TAG ?= $(shell git rev-parse --short HEAD)

APP_NAME = sdp-web
DEVENV_DOCKER_COMPOSE = docker-compose -p $(APP_NAME) -f $(shell pwd)/docker-compose.yml
PROD_DOCKER_COMPOSE = docker-compose -p $(APP_NAME) -f $(shell pwd)/docker-compose-prd.yml

BACKEND_CONTAINER = $(APP_NAME)_backend_1
MYSQL_CONTAINER = $(APP_NAME)_rds_1
MYSQL_CREDENTIALS = -uroot -pROOT_PASSWORD
MYSQL_DATABASE = $(APP_NAME)_wp
MYSQL_OPTIONS = $(MYSQL_CONTAINER) mysql $(MYSQL_CREDENTIALS) $(MYSQL_DATABASE)

start-devenv:
	$(DEVENV_DOCKER_COMPOSE) up -d

stop-devenv:
	$(DEVENV_DOCKER_COMPOSE) kill

clear-devenv:
	$(DEVENV_DOCKER_COMPOSE) down -v --remove-orphans

build-devenv:
	$(DEVENV_DOCKER_COMPOSE) build

mysql-devenv:
	docker exec -it $(MYSQL_OPTIONS)

start-webproxy:
	start.sh \

start-webcontainers:
	docker run -d -e VIRTUAL_HOST=your.domain.com \
              -e LETSENCRYPT_HOST=your.domain.com \
              -e LETSENCRYPT_EMAIL=your.email@your.domain.com \
              --network=webproxy \
              --name my_app \
              httpd:alpine

start-prod:
	.start.sh \
	docker run -d -e VIRTUAL_HOST=your.domain.com \
              -e LETSENCRYPT_HOST=your.domain.com \
              -e LETSENCRYPT_EMAIL=your.email@your.domain.com \
              --network=webproxy \
              --name my_app \
              httpd:alpine \
	$(PROD_DOCKER_COMPOSE) up -d

stop-prod:
	$(PROD_DOCKER_COMPOSE) kill

clear-prod:
	$(PROD_DOCKER_COMPOSE) down -v --remove-orphans

build-prod:
	$(PROD_DOCKER_COMPOSE) build

mysql-prod:
	docker exec -it $(MYSQL_OPTIONS)


