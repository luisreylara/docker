# Vistamos la web y buscamos postgres
> * docker hub https://hub.docker.com/

## Ejecutamos el contenedor (cualquier de las 2 opciones)
```
docker run --name some-postgres -dp 5432:5432 -e POSTGRES_PASSWORD=password  postgres
```
## opción 2:
```
docker container run --name some-postgres -dp 5432:5432 -e POSTGRES_PASSWORD=password  postgres
```
