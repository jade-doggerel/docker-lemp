# docker-lemp
A simple docker-compose for installing a LEMP stack containing:

* Nginx 1.19
* PHP 7.5-fpm with PDO and MySQLi
* MySQL 8
* PhpMyAdmin 5

Based on [this guide](https://tech.osteel.me/posts/docker-for-local-web-development-part-1-a-basic-lemp-stack) by osteel.

## Usage

### 1. Clone this repo
Make a new folder and clone into this repo:
`git clone https://github.com/jade-doggerel/docker-lemp.git .`

### 2. Adjust `.env` Environment Variables
Changing the environment variables allow for easy installation of multiple instances of this compose.

| Variable | Purpose | Default Value |
|----------|---------|---------------|
|PREFIX|All containers made will use this string as a prefix for their container names.|`lemp`|
|MYSQL_ROOT_PASSWORD|The MySQL root password.|`supertrickypassword`|
|PORT|External HTTP port to bind to Nginx.|`80`|
|SECURE_PORT|External HTTPS port to bind to Nginx.|`443`|
|PMA_PORT|External HTTP port to bind to PHPMyAdmin.|`8080`|

### 3. Adjust `server_name` value in `.docker/nginx/conf.d/php.conf`
Enter the hostname you wish to use for this application.
e.g.
```
listen      80;
listen      [::]:80;
server_name your.domain;
```

To use with localhost instead, use these lines instead:

```
listen 80 default_server;
listen [::]:80 default_server;
```

### 4. Bring it online
Run `docker-compose up -d`. Fingers crossed...

### 5. Visit your new site!
Now, witness the firepower of your fully armed and operational battle station!

## Directories
| Directory | Purpose |
|-----------|---------|
|`src/`|Put your website in here.|
|`sqldata/`|Volume used by MySQL. Don't delete this when bringing down the compose, or you'll use your database.|
|`.docker/`|Dockerfiles and configs.|


## Issues with MySQLi
If you run into any problems with MySQLi, remove all the docker images related to this compose and try again.
