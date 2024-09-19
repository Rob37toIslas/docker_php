# Descarga la imagen de ubuntu 
FROM ubuntu:22.04
#Actualizar
RUN apt-get update && apt-get upgrade
#Modulo php
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y php && apt-get clean
#Copiar la carpeta 
COPY ./app /home/app
#Establecer directorio de trabajo
WORKDIR /home/app
#Abrir el puerto 8080 
EXPOSE 8080
#Ejecutar la aplicacion Web
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/home/app"]