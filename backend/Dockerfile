FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
# Sửa quyền thư mục cho Apache
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf
COPY . /var/www/html
WORKDIR /var/www/html
RUN chmod -R 777 storage bootstrap/cache
EXPOSE 80