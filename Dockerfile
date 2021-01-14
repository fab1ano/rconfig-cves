FROM puppeteer1337/ultrabase

RUN apt-get install -y php php-cli php-gd php-curl php-mysql php-ldap php-zip php-fileinfo php-fpm

RUN apt-get install -y mariadb-server

RUN apt-get install -y nginx

ADD rconfig-3.9.2 /home/rconfig
RUN chown www-data /home/rconfig -R

RUN rm -f /etc/nginx/sites-enabled/default
ADD nginx.conf /etc/nginx/sites-enabled/rconfig

ADD entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

RUN /etc/init.d/mysql start && mysql -u root -e "UPDATE mysql.user SET plugin = '' WHERE plugin = 'unix_socket'; FLUSH PRIVILEGES;"



# TODO: do install setup

# TODO: overwrite config to disable https forwarding

ENTRYPOINT /entrypoint.sh
