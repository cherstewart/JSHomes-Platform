FROM phusion/baseimage:0.9.16
MAINTAINER Matt Ma "matt@mattmadesign.com"
ENV REFRESHED_AT 2015-07-02

ENV WORDPRESS_VERSION 4.2.2
ENV WORDPRESS_SHA1 d3a70d0f116e6afea5b850f793a81a97d2115039

RUN \
  sed -i 's/# \(.*multiverse$\)/\1/g' /etc/apt/sources.list && \
  apt-get -qq update && \
  apt-get -y upgrade && \
  # Basic Requirements
  apt-get -y install mysql-server mysql-client nginx php5-fpm php5-mysql php-apc pwgen python-setuptools curl git unzip && \
  # Wordpress Requirements
  apt-get -y install php5-curl php5-gd php5-intl php-pear php5-imagick php5-imap php5-mcrypt php5-memcache php5-ming php5-ps php5-pspell php5-recode php5-sqlite php5-tidy php5-xmlrpc php5-xsl && \
  rm -rf /var/lib/apt/lists/*

# Install Wordpress
RUN \
  curl -o wordpress.tar.gz -SL https://wordpress.org/wordpress-${WORDPRESS_VERSION}.tar.gz && \
  echo "$WORDPRESS_SHA1 *wordpress.tar.gz" | sha1sum -c - && \
  mkdir -p /opt && \
  tar -xzf wordpress.tar.gz -C /opt && \
  rm -rf wordpress.tar.gz

# Symlink User's "wp-content" folder into the newly installed Wordpress
RUN rm -rf /opt/wordpress/wp-content
ADD wp-config.php /opt/wordpress/

# Wordpress Initialization and Startup Script
# ADD ./start.sh /start.sh
# RUN chmod 755 /start.sh

# volume for mysql database and wordpress install
VOLUME ["/opt/wordpress/wp-content"]

RUN chown -R www-data:www-data /opt/wordpress

# Define working directory.
WORKDIR /opt/wordpress

EXPOSE 80 3306

COPY start.sh /opt/start.sh
RUN chmod +x /opt/start.sh

# CMD ["/bin/bash", "/start.sh"]
CMD ["/opt/start.sh"]
