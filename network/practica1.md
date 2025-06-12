## ver los comandos de network
```
docker network
```

## ver las redes existentes
```
docker network ls
```

## crear 2 contenedores sin red, por default le asigna brigde
```
docker run -it --name alpine1 -d alpine:3.22
```
```
docker run -it --name alpine2 -d alpine:3.22
```
## Inspeccionar las redes existentes en BRIDGE
```
docker network inspect bridge
```

## Ingresar a sistema operativo alpine y revisar la ip asignada
```
docker exec -it alpine1 sh
```
> ip a
## Crear una red "alpine-red" con driver BRIDGE
```
docker network create --driver bridge red-alpine
```
## Verificar la red creada
```
docker network ls 
```
## Crear 3 contenedores que se incluyan en la red "red-alpine" 
```
docker run -dit --name alpine11 --network red-alpine  alpine:3.22
```
```
docker run -dit --name alpine12 --network red-alpine  alpine:3.22
```
```
docker run -dit --name alpine13 --network red-alpine  alpine:3.22 
```
## Crear 1 contenedor que NO se incluya en la red "red-alpine" 
```
docker run -dit --name alpine3  alpine:3.22 
```
## Inspeccionar ambas redes: red-alpine, bridge
```
docker network inspect bridge
```
```
docker network inspect red-alpine
```

## Ingresar a alpine3 y verificar que pueda hacer ping con alpine11 y alpine22
```
docker exec -it alpine3 sh
```
* > ping alpine11
* > ping alpine12
## Ingresar a alpine11 y verificar que pueda hacer ping con alpine11 y alpine22
```
docker exec -it alpine11 sh
```
* > ping alpine12
* > ping alpine13
* > ip a

