FROM php:5.6-apache
MAINTAINER Matt Ma "matt@mattmadesign.com"
ENV REFRESHED_AT 2015-07-15

ENV WORDPRESS_VERSION 4.2.2
ENV WORDPRESS_SHA1 d3a70d0f116e6afea5b850f793a81a97d2115039

RUN a2enmod rewrite

# install the PHP extensions
RUN \
	apt-get -qq update && \
	apt-get -y upgrade && \
	apt-get install -y vim wget && \
	docker-php-ext-install mysqli && \
	rm -rf /var/lib/apt/lists/*

# Install Wordpress
RUN \
	curl -o wordpress.tar.gz -SL https://wordpress.org/wordpress-${WORDPRESS_VERSION}.tar.gz && \
	echo "$WORDPRESS_SHA1 *wordpress.tar.gz" | sha1sum -c - && \
	mkdir -p /opt && \
	tar -xzf wordpress.tar.gz -C /opt && \
	rm -rf wordpress.tar.gz

# Symlink User's "wp-content" folder into the newly installed Wordpress
RUN \
  # rm -rf /opt/wordpress/wp-content && \
  cp -fr /opt/wordpress/* /var/www/html/ && \
  chown -R www-data:www-data /var/www/html/

# # volume for mysql database and wordpress install
# VOLUME ["/var/www/html/wp-content"]

# Define working directory.
WORKDIR /var/www/html/

EXPOSE 80 3306

COPY htaccess /var/www/html/.htaccess
COPY start.sh /var/www/html/start.sh
RUN chmod +x /var/www/html/start.sh

# grr, ENTRYPOINT resets CMD now
ENTRYPOINT ["/var/www/html/start.sh"]
CMD ["apache2-foreground"]
