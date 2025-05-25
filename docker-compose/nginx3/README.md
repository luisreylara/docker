## Esta práctica meteremos el una variable y su contenido dentro del contenedor 
----

## Para esta practica agregar los dos archivos
> * [docker-compose.yml](https://github.com/luisreylara/docker/blob/main/docker-compose/nginx3/docker-compose.yml)
> * [DockerFile](https://github.com/luisreylara/docker/blob/main/docker-compose/nginx3/DockerFile)

## Ejecutar el siguiente comando 
```
docker-compose up -d --build
```
## Abrir el contenedor de manera iteractiva
```
docker container ls
docker exec -it <ID> /bin/sh
```

## Dentro del contenedor, es decir del sistema operativo
```
echo $MyVariable
```
