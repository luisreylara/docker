# docker
All about my docker projects

```
docker ps
```
>muestra los contenedores ejecutandose

```
docker ps -a
```
>muestra los contenedores instalados

```
docker stop <id>
```
>detiene el <id> del contenedor ejecutandose (docker ps)


```
docker start <id>
```
>inicia el contenedor que previamente se ha descargado (docker ps -a)


```
docker run ubuntu
```
>descarga la imagen y monta el contenedor UBUNTU

```
docker run -it ubuntu 
```
>descarga la imagen y monta el contenedor y muestra el prompt de UBUNTU

```
docker exec -it <id> bash
```
>el contenedor YA debe de existir y con esta instruccion entra a la SHELL del contenedor


```
docker container stop <id>
```
>detiene el contenedor <id> ejecutandose

```
docker container start <id>
```
>inicia el contenedor <id> detenedo

## Comandos de Linux
```
cat /etc/os-release
```
>muestra detalles del sistema operativo en el contenedor

