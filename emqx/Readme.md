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

