FROM debian:latest
LABEL maintainer="vinicius alcantara"
WORKDIR /var/www/html/curriculo
RUN apt-get update -y && \
    apt-get install -y apache2 apache2-utils ssl-cert && \
    apt-get install -y libapache2-mod-php php php-common php-curl php-dev php-gd php-cli php-mysql && \
    apt-get clean all && rm -rf /var/www/html/index.html /etc/apache2/sites-available/000-default.conf
COPY ./config-apache/curriculo.conf /etc/apache2/sites-available
COPY . .
RUN a2ensite curriculo.conf
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
EXPOSE 80
ENTRYPOINT ["apachectl"]
CMD ["-D", "FOREGROUND"]

    

