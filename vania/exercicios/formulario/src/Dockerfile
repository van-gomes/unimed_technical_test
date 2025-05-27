FROM php:8.3-apache

# Instala dependências e o driver ODBC da Microsoft
RUN apt-get update && apt-get install -y \
    gnupg2 \
    unixodbc \
    unixodbc-dev \
    curl \
    libcurl4-openssl-dev \
    libxml2-dev \
    libssl-dev \
    apt-transport-https \
    lsb-release \
    gnupg \
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/10/prod.list > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get update && ACCEPT_EULA=Y apt-get install -y msodbcsql18 \
    && pecl install sqlsrv pdo_sqlsrv \
    && docker-php-ext-enable sqlsrv pdo_sqlsrv

# Copia os arquivos do projeto
COPY . /var/www/html/
