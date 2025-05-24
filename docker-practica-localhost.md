## Abrir un navegador con localhost
## Ejecutar el siguiente comando
```
docker run -d -p 80:80 docker/getting-started
docker container run -d -p 80:80 docker/getting-started
```
>You'll notice a few flags being used. Here's some more info on them:

>> * -d - run the container in detached mode (in the background)
>> * -p 80:80 - map port 80 of the host to port 80 in the container
>> * docker/getting-started - the image to use

## Listar los contenedores que se estan ejecutando
```
docker container ls
```

## Detener el contenedor docker/getting-started
```
docker container stop ID
```

# Volver a ejectuar el contenedor con cualquier de estas formas:
```
docker container run -d -p 8080:80 docker/getting-started
docker container run -dp 8080:80 docker/getting-started
```
## Abrir un navegador en localhost:8080
