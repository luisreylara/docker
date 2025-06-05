## Mostrar todos los contenedores
```
docker container ls -a
```
## Mostrar todas imagenes
```
docker image ls
```
## Mostrar todos los contenedores, pero solamente el ID
```
docker container ls -aq
```
## Mostrar todas imagenes, pero solamente el ID
```
docker image ls -q
```
## Borrar todos los contenedores, y le pasamos el ID
```
docker container rm -f $(docker container ls -aq)
```
## Borrar todas imagenes, pero le pasamos el ID de cada una que existen
```
docker image rm $(docker image ls -q)
```
