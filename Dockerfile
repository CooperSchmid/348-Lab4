<<<<<<< HEAD
FROM php:7.4-apache
COPY . /var/www/html/
EXPOSE 80
=======
FROM gcc:latest
COPY . .
RUN make
CMD ["./check_odd"]
>>>>>>> 2d1cc0f (Dockerized C program)
