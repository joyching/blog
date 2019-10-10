# Blog

## Develop with Docker

### System Requirements
To be able to run Smart EBike api you have to meet the following requirements:
* [docker](https://www.docker.com)
* [docker-compose](https://docs.docker.com/compose/)

### RUN

1. Clone repository
```
$ git clone git@github.com:joyching/forum.git
```

2. Copy `.env.example` to `.env` and modify according to your environment (make sure database host set to `DB_HOST=mysql`)
```
$ cp .env.example .env
```

3. Start environment
```
$ docker-compose up -d
```

4. Build project
```
$ docker-compose exec web ./dockerfiles/forum/bin/preparation.sh
```
If your .env is settled `DOCKER_NGINX_80=4567`, and now you can browse the site at [http://localhost:4567](http://localhost:4567)

5. Stop environment
```
$ docker-compose down
```
