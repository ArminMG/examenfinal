FROM tomsik68/xampp:8
# Copiar los archivos de tu página web al contenedor
COPY ./my_web_pages /www
# Exponer el puerto SSH
EXPOSE 22
# Exponer el puerto HTTP
EXPOSE 80

#expone puerto mysql
EXPOSE 3306

# Comando para iniciar el contenedor y mantenerlo en ejecución
CMD ["bash", "-c", "/opt/lampp/lampp start && tail -f /dev/null"]
