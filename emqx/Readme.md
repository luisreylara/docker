docker-compose.yml
```
version: "5.6.1"
services:
  emqx:
    container_name: emqx
    image: emqx:5.6.1
    restart: always
    ports:
      - 18083:18083
      - 8083:8083
```

### ver 2
```
volumes:
  vol-emqx-data:
    name: foo-emqx-data
  vol-emqx-etc:
    name: foo-emqx-etc
  vol-emqx-log:
    name: foo-emqx-log


services:
  emqx:
    container_name: emqx
    image: emqx:5.6.1
    restart: always
    ports:
      - 18083:18083
      - 8083:8083

    environment:
      - "EMQX_NAME=emqx"
      - "EMQX_HOST=127.0.0.1" 
      - "EMQX_DASHBOARD__DEFAULT_USERNAME=admin"
      - "EMQX_DASHBOARD__DEFAULT_PASSWORD=Emqx2024"


    volumes:
      - vol-emqx-data:/opt/emqx/data
      - vol-emqx-etc:/opt/emqx/etc
      - vol-emqx-log:/opt/emqx/log
```

```
docker container ls -a

docker volume ls
docker volume ls -q

docker image ls
docker image ls -a
```


### comando para reiniciar

```
docker container rm -f $(docker container ls -aq)
docker volume  rm $(docker volume ls -q) -f
docker image rm -f $(docker image ls -aq)
```
