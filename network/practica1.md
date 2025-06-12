docker network ls

docker run -it --name alpine1 -d alpine:3.22
docker run -it --name alpine2 -d alpine:3.22
docker network inspect bridge

docker exec -it alpine1 sh 
> ip a

docker network create --driver bridge red-alpine

docker network ls 

docker network inspect bridge
docker network inspect red-alpine

docker run -dit --name alpine11 --network red-alpine  alpine:3.22 
docker run -dit --name alpine12 --network red-alpine  alpine:3.22 
docker run -dit --name alpine13 --network red-alpine  alpine:3.22 

docker run -dit --name alpine3  alpine:3.22 

docker exec -it alpine3 sh
> ping alpine11
> ping alpine12

docker exec -it alpine11 sh
> ping alpine12
> ping alpine13
> ip a

docker exec -it alpine1 sh  
