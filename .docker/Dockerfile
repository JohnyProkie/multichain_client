FROM php:7.4.28

ARG MULTICHAIN_UID=${MULTICHAIN_UID:-1000}
ARG MULTICHAIN_GID=${MULTICHAIN_GID:-1000}

RUN apt-get update \
    && apt-get install vim sudo -y \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update \
    && apt-get install libzip-dev -y \
    && docker-php-ext-install zip


#RUN useradd --help && echo "MULTICHAIN_UID $MULTICHAIN_UID"; echo "MULTICHAIN_GID $MULTICHAIN_UID"; echo 'jj'
#
#RUN #userdel multichain_client; \
#    useradd multichain_client --shell /bin/bash --uid $MULTICHAIN_UID --user-group $MULTICHAIN_GIDU --password "" multichain_client