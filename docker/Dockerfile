FROM drupal:8-apache
# Install packages
#RUN rm /bin/sh && ln -s /bin/bash /bin/sh && \
RUN apt-get update && apt-get install -y \
    curl \
    vim \
    mysql-client

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \
    ln -s /root/.composer/vendor/bin/drush /usr/local/bin/drush 

# Install Drush
RUN composer require drupal/console:~1.0 --prefer-dist --optimize-autoloader && \
    composer global require drush/drush && \
    composer global update

# Download console.
#RUN curl https://drupalconsole.com/installer -L -o drupal.phar

# Install console.
#RUN mv drupal.phar /usr/local/bin/drupal && \
#     chmod +x /usr/local/bin/drupal 

# Install XDEBUG
RUN pecl install -f xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini;

# Clean repository
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# File Change root folder Example(docroot) 
COPY ./Drupal8/apache-drupal.conf /etc/apache2/sites-enabled/000-default.conf

##CMD
CMD ["apache2-foreground"]
