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

### Otra forma de ejecutar ubuntu sin -rm
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
docker run -it --rm --name myubuntu ubuntu
```
### Otra forma de ejecutar ubuntu
```
docker run -it --name mycontainer ubuntu 
# exit
docker ps -a
docker stop mycontainer
docker start mycontainer
docker ps -a
docker exec -it mycontainer bash
# exit
docker stop mycontainer
docker exec -it mycontainer bash
```
