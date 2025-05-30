# docker network
---
## visualizamos las redes
```
docker network ls
```
## Creamos una red netA
```
docker network create netA
```
## Creamos una red netB
```
docker network create netB
```
## Inspeccionamos una red mediante el ID, oy observamos que no existe CONTENEDOR asignado a esta RED
```
docker network inspect <id>
```
## Agregar un contenedor a una red
```
docker network connect <nombre_red> <idcontainer>
```
## Mostramos las redes y sus respectivos ID's
```
docker network ls
```
## Inspeccionamos una red mediante el ID, oy observamos que SI existe CONTENEDOR asignado a esta RED
```
docker network inspect <id>
```
