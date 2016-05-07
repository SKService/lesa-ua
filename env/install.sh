docker pull mysql
docker pull wordpress

docker run \
--name wpdb \
-e MYSQL_ROOT_PASSWORD=root \
-e MYSQL_DATABASE=wordpress \
-e MYSQL_USER=wordpress \
-e MYSQL_PASSWORD=wp_root \
-d \
mysql

docker run \
--name wp \
-e WORDPRESS_DB_PASSWORD=wp_root \
--link wpdb:mysql \
-p 80:80 \
-d \
wordpress