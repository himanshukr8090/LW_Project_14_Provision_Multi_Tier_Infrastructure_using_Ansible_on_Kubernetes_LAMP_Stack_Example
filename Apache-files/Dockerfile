FROM ubuntu:20.04

RUN apt update && DEBIAN_FRONTEND=noninteractive apt install -y apache2 php libapache2-mod-php && \
    apt clean && rm -rf /var/lib/apt/lists/*

COPY index.php /var/www/html/index.php

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]