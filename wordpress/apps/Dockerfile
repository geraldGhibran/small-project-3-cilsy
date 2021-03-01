FROM ubuntu:bionic
RUN apt-get update
RUN apt-get install -y nginx php-fpm php-mysql nano systemd
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf
RUN sed -i -e "s/;\?daemonize\s*=\s*yes/daemonize = no/g" /etc/php/7.2/fpm/php-fpm.conf
#COPY FILE
COPY . /var/www/html/
#RUN cd /var/www/html && wget http://wordpress.org/latest.zip && unzip latest.zip
# Nginx config
RUN rm /etc/nginx/sites-enabled/default
ADD ./wordpress.conf /etc/nginx/sites-available/
RUN ln -s /etc/nginx/sites-available/wordpress.conf /etc/nginx/sites-enabled/wordpress.conf
RUN nginx -t

RUN chmod -R 775 /var/www/html/ && chown -R root:www-data /var/www/html
RUN chmod -R 775 /var/www/html/* && chown -R root:www-data /var/www/html/*

#RUN ln -s /var/lib/mysql/mysql.sock /tmp/mysql.sock
#RUN service mysql restart

EXPOSE 80
# RUN PHP and NGINX
CMD service php7.2-fpm start && nginx

