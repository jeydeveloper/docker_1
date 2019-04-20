# docker_1
Docker PHP MYSQL NGINX

DOCKER

https://hackernoon.com/practical-introduction-to-docker-compose-d34e79c4c2b6

$ docker-compose up -d
$ docker-compose down
$ docker-compose start
$ docker-compose stop
$ docker-compose build
$ docker-compose logs -f db
$ docker-compose scale db=4
$ docker-compose events
$ docker-compose exec db bash

https://www.bogotobogo.com/DevOps/Docker/Docker-from-Monolithic-to-Micro-services-GCP-Kubernetes.php

https://docker-software-inc.scoop.it/topic/docker-by-docker

docker run -p 8081:8080 andyjuliadi/exampleapp:v1.0.0

https://github.com/Hyunk3l/how-to-dockerize-php-monolith

https://devops.college/the-journey-from-monolith-to-docker-to-kubernetes-part-1-f5dbd730f620

https://www.shiphp.com/blog/2018/nginx-php-fpm-with-env

https://x-team.com/blog/docker-compose-php-environment-from-scratch/

Cara import databaser:

docker exec -i docker_database_1 mysql -umyuser -psecret mydb < database/data.sql

(docker_database_1) itu adalah name dari service database/mysql container

Cara liat name dari service docker :
docker ps

https://nickjanetakis.com/blog/
