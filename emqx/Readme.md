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

### emqx acl mongodb
```
ervices:

  mongo:
    container_name: mongo
    image: mongo:4.4
    restart: always
    environment:
      TZ: "America/Argentina/Buenos_Aires"
      MONGO_INITDB_ROOT_USERNAME: "user"
      MONGO_INITDB_ROOT_PASSWORD: "password"
    volumes:
      - ./mongodata:/data/db
    ports:
      - 27017:27017



  emqx:
    container_name: emqx
    image: emqx/emqx:4.2.3
    restart: always
    ports:
      - 18083:18083
      - 8083:8083

   # volumes:
   #   - vol-emqx-data:/opt/emqx/data
   #   - vol-emqx-etc:/opt/emqx/etc
   #   - vol-emqx-log:/opt/emqx/log
   # 
    links:
      - mongo

    environment: 
      
      EMQX_NAME: ioticos-gl
      EMQX_HOST: 127.0.0.1

      TZ: "America/Argentina/Cordoba"

      # DEFAULT DASH PASS
      EMQX_DASHBOARD__DEFAULT_USER__PASSWORD: "emqxdashpass"

      EMQX_ALLOW_ANONYMOUS: "false"

      # MONGO CONNECTION
      EMQX_AUTH__MONGO__TYPE: single
      EMQX_AUTH__MONGO__TOPOLOGY__POOL_SIZE: 1
      EMQX_AUTH__MONGO__TOPOLOGY__MAX_OVERFLOW: 0

      EMQX_AUTH__MONGO__SERVER: "mongo:27017"
      EMQX_AUTH__MONGO__POOL: 8

      EMQX_AUTH__MONGO__LOGIN: "user"
      EMQX_AUTH__MONGO__PASSWORD: "password"
      EMQX_AUTH__MONGO__AUTH_SOURCE: admin

      EMQX_AUTH__MONGO__DATABASE: "iotgl"
      EMQX_AUTH__MONGO__AUTH_QUERY__COLLECTION: "emqxauthrules"

      EMQX_AUTH__MONGO__SUPER_QUERY__COLLECTION: "emqxauthrules"
      EMQX_AUTH__MONGO__SUPER_QUERY__SUPER_FIELD: "is_superuser"
      EMQX_AUTH__MONGO__SUPER_QUERY__SELECTOR: "username=%u"
      EMQX_AUTH__MONGO__SUPER_QUERY: "off"

      EMQX_AUTH__MONGO__AUTH_QUERY__PASSWORD_HASH: plain
      EMQX_AUTH__MONGO__AUTH_QUERY__PASSWORD_FIELD: "password"
      EMQX_AUTH__MONGO__AUTH_QUERY__SELECTOR: "username=%u"
      EMQX_AUTH__MONGO__ACL_QUERY: "on"
      EMQX_AUTH__MONGO__ACL_QUERY__COLLECTION: "emqxauthrules"
      EMQX_AUTH__MONGO__ACL_QUERY__SELECTOR: "username=%u"
      EMQX_LISTENER__TCP__EXTERNAL__MAX_CONNECTIONS: 1000


```

