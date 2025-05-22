### Ejecuta ubuntu y entrega el prompt root
```
  docker run -it --rm ubuntu
```
### confirmar que se esta ejecutando el contenedor
```
  docker ps
```
### confirmar que se esta ejecutando el contenedor
```
  docker ps -a
```

### Otra forma de ejecutar ubuntu
```
docker run -it --rm --name myubuntu -d ubuntu
docker ps
docker exec -it myubuntu bash
# exit
docker stop myubuntu
docker ps
```
### Otra forma de ejecutar ubuntu
```
docker run -it --rm --name mycontainer ubuntu
```
