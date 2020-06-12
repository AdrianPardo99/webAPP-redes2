# webAPP-redes2
Repositorio de la app web de la ultima practica

### Para instalar en una maquina de linux ###

__Es necesario instalar lo siguiente, cabe destacar que la aplicación debe ser modificada en algunas secciones sobre todo en scripts con los paths donde estara montada la aplicación__

##Debian##

```
  # apt install python3-dev python3-pip apache2 php-dev php-dev php-* ssh --fix-broken --fix-policy --fix-missing -y #Más servidores DHCP TFTP y DNS, como su configuración, si es necesario modificar en el tftp el path de donde esta el tftpboot
  # echo "alias python='python3'" > .bash_aliases
  # ssh-keygen
  # ssh-copy-id -i /root/.ssh/id_rsa <user-default>@<ip>
  # visudo #Para añadir el www-data al sudoers con los siguiente

  www-data  ALL=(ALL:ALL) NOPASSWD: ALL

  # git clone https://github.com/AdrianPardo99/webAPP-redes2.git
  # cp webAPP
  # cp -R ./ /var/www/html/
  # chown -R www-data:www-data /var/www/html/
  # chmod -R g+s /var/www/html/
  # chmod -R g+w /var/www/html/
  # chgrp -R apache /var/www/html/

  En este caso modificar script de la carpeta /var/www/html/tftp/scripts/execute.sh en la linea de chown
```

##Fedora##

```
  # dnf -y install python-developer python-pip git httpd php-* --skip-broken #Más servidores DHCP TFTP y DNS, como su configuración con el firewall
  # ssh-keygen
  # ssh-copy-id -i /root/.ssh/id_rsa <user-default>@<ip>
  # visudo #Para añadir el apache al sudoers con los siguiente

  apache  ALL=(ALL:ALL) NOPASSWD: ALL

  # git clone https://github.com/AdrianPardo99/webAPP-redes2.git
  # cp webAPP
  # cp -R ./ /var/www/html/
  # chown -R apache:apache /var/www/html/
  # chmod -R g+s /var/www/html/
  # chmod -R g+w /var/www/html/
  # chgrp -R apache /var/www/html/

```


##Qué es?##

Es una aplicación en forma web que utiliza tanto desarrollo de un server clásico html, más el uso de un performance de php, python, bash y algunas llamadas a sistemas para fácil procesamiento desde el server, la cual permite hacer backups de routers en gns3, modificación de servicio dhcp para surtir en una topología virtual y finalmente el uso de dns el cual permite buscar el nombre de dominio desde esta app para modificar, ver status y administrar el servicio, inicialmente la app fue pensada para un sistema basado en RedHat (Fedora).
