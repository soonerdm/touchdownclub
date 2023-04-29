_APPLICATION_NAME ?= touchdownclub
_BUILD_ARG_USER ?= $(shell whoami)
_BUILD_ARG_UID ?= $(shell id -u)

_DEV_TAG ?= dev

.PHONY: build
build:
	docker build \
		--build-arg user=${_BUILD_ARG_USER} \
		--build-arg uid=${_BUILD_ARG_UID} \
		--tag ${_APPLICATION_NAME}:${_DEV_TAG} \
		--file ${_DEV_TAG}.Dockerfile \
		.

.PHONY: clean
clean:
	sudo rm -rf ./.mysql_data
	sudo rm -rf ./.redis_data
