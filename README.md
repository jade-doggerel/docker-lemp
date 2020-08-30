# docker-lemp
A simple docker-compose for installing a LEMP stack containing:

* Nginx 1.19
* PHP 7.5-fpm with mysqli
* MySQL 8
* PhpMyAdmin 5

Based on [this guide](https://tech.osteel.me/posts/docker-for-local-web-development-part-1-a-basic-lemp-stack) by osteel.

## Usage

### 1. Clone this repo
Make a new folder and clone into this repo:
`git clone https://github.com/jade-doggerel/docker-lemp.git .`

### 2. Adjust `.env` Environment Variables
Changing the environment variables allow for easy installation of multiple instances of this compose.


| Key | Description | Default |
|-----|-------------|---------|
|PREFIX|All containers made will use this string as a prefix.|`lemp`|
|MYSQL_ROOT_PASSWORD|The MySQL root password used when creating the container.|`supertrickypassword`|
|PORT|External HTTP port to bind to Nginx.|`81`|
|SECURE_PORT|External HTTPS port to bind to Nginx.|`443`|
|PMA_PORT|External HTTP port to bind to PHPMyAdmin.|`82`|

### 3. Adjust `server_name` value in `.docker/nginx/conf.d/php.conf`
Set this to the hostname you wish to use for this application.
e.g.
```
listen      80;
listen      [::]:80;
server_name your.domain;
```

To use with localhost instead, replace these lines with:

```
listen 80 default_server;
listen [::]:80 default_server;
```

### 4. Bring it online!
Run `docker-compose up -d`. Fingers crossed!
