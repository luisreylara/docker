
![docker_vs_virtualizacion](https://github.com/user-attachments/assets/51f1b8b5-8d68-4790-ae3c-db89324f4f65)
> [Docker vs Virtulizacion](https://github.com/luisreylara/docker/blob/main/docker_vs_virtualizacion.PNG)

* Visualiza los contenedores descargados
```
docker ps
```
* Muestra los contenedores ejecutandose
```
docker ps -a
```
* Muestra los contenedores instalados

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
docker image ls -aq
```
>muestra los id's de las imágenes descargadas


```
docker image rm -f $(docker image ls -aq)
```
>elimina todas las imagenes descargadas

```
docker container ls -aq
```
>muestra los ID's de todos los contenedores descargados

```
docker container rm -f $(docker container ls -aq)
```
>elimina todos los contenedores descargados






## Comandos de Linux
```
cat /etc/os-release
```
>muestra detalles del sistema operativo en el contenedor

