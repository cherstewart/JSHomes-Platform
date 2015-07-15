FROM php:5.6-apache
MAINTAINER Matt Ma "matt@mattmadesign.com"
ENV REFRESHED_AT 2015-07-13

ENV WORDPRESS_VERSION 4.2.2
ENV WORDPRESS_UPSTREAM_VERSION 4.2.2
ENV WORDPRESS_SHA1 d3a70d0f116e6afea5b850f793a81a97d2115039

RUN a2enmod rewrite

# install the PHP extensions
RUN \
  apt-get update && \
  docker-php-ext-install mysqli && \
  rm -rf /var/lib/apt/lists/*

# Install Wordpress
RUN \
  curl -o wordpress.tar.gz -SL https://wordpress.org/wordpress-${WORDPRESS_UPSTREAM_VERSION}.tar.gz && \
  echo "$WORDPRESS_SHA1 *wordpress.tar.gz" | sha1sum -c - && \
  mkdir -p /opt && \
  tar -xzf wordpress.tar.gz -C /opt && \
  rm -rf wordpress.tar.gz

# Symlink User's "wp-content" folder into the newly installed Wordpress
# RUN \
#   rm -rf /opt/wordpress/wp-content && \
#   cp -Rf /opt/wordpress/ /var/www/html/

# # volume for mysql database and wordpress install
# VOLUME ["/var/www/html/wp-content"]

# COPY htaccess /var/www/html/.htaccess
# RUN chown -R www-data:www-data /var/www/html/

# Define working directory.
WORKDIR /opt/wordpress

EXPOSE 80 3306

COPY start.sh /opt/wordpress/start.sh
RUN chmod +x /opt/wordpress/start.sh

# grr, ENTRYPOINT resets CMD now
ENTRYPOINT ["/opt/wordpress/start.sh"]
CMD ["apache2-foreground"]
