FROM httpd:alpine3.17

COPY app.conf /usr/local/apache2/conf/app.conf

RUN printf "Include conf/app.conf\n" >> /usr/local/apache2/conf/httpd.conf