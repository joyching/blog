FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive

WORKDIR /var/www/html

RUN apt update && \
    apt install -y vim \
                   git \
                   zip \
                   curl \
                   ansible \
                   supervisor \
                   apt-utils \
                   software-properties-common

RUN add-apt-repository -y ppa:ondrej/php && \
    apt update && \
    apt install -y php7.3 \
                php7.3-fpm \
                php7.3-curl \
                php7.3-mbstring \
                php7.3-cli \
                php7.3-xml \
                php7.3-zip \
                php7.3-mysql \
                php7.3-gd \
                php-xdebug

COPY config/php/www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY config/php/php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf

# Install Composer and extensions
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer global require "hirak/prestissimo"

RUN usermod -u 1000 www-data

# Install NPM
RUN curl -sL https://deb.nodesource.com/setup_10.x | bash -

# Install Yarn
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - && \
    echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list && \
    apt update && apt install -y nodejs yarn

EXPOSE 9000

CMD ["/usr/sbin/php-fpm7.3", "-F", "-O"]
