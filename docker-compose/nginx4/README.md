## Esta práctica usaremos argumentos y volúmenes
----

## Para esta practica agregar los tres archivos
> * [docker-compose.yml](https://github.com/luisreylara/docker/blob/main/docker-compose/nginx4/docker-compose.yml)
> * [DockerFile](https://github.com/luisreylara/docker/blob/main/docker-compose/nginx4/DockerFile)
>> * Crear una carpeta html y meter este archivo dentro de esta. [index.html](https://github.com/luisreylara/docker/blob/main/docker-compose/nginx4/index.html)

## Ejecutar el siguiente comando 
```
docker-compose up -d --build
```

>[!NOTE]
>
> * Cuando modifiquemos solamente docker-compose.yml, entonces ejecutar **docker-compose up -d**
>> * Cuando modifiquemos solamente DockerFile, entonces ejecutar **docker-compose up -d --build**

>[!TIP]
>
>Modificar el archivo index.html y los cambios se reflejan en automático.
