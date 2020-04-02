docker build -t php-dojos .
docker run -it php-dojos php vendor/bin/phpspec run
