FROM ubuntu:14.04

# Update apt-get
RUN apt-get update


# Install Nginx
RUN apt-get install -y nginx


# Install PHP
RUN apt-get install -y php5 php5-cli php5-fpm php5-mysql


# Setup Nginx
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
ADD sites-enabled/ /etc/nginx/sites-enabled/


# Setup PHP
RUN sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php5/fpm/php.ini


# Clean Useless Files
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/*


# Setup Volume and Ports
#VOLUME /usr/share/nginx/html
EXPOSE 80


COPY ./start.sh /
CMD ["/start.sh"]
