The following are **Code Dojos** from the book [**Agile Technical Practices Distilled**](https://www.amazon.co.uk/Agile-Technical-Practices-Distilled-Mastering/dp/1793412375). I will be practising them
tdd style as I go through the book.

Completed exercises to date:
* FizzBuzz
* Leap Year
* Nth Fibonacci
* Stats Calculator
* Roman Numerals
* Prime factors
* String to boolean calculator

If you pull this repository, you will need to retrieve its dependencies 
via composer (phpspec) and run the test suite:

```bash
vendor/bin/phpspec run --format=pretty
```

Docker

If you don't want to install php locally, I've added a Dockerfile and a
docker-compose file so that you can build tests on the fly via a docker
container.

```bash
docker-compose up -d
docker exec -it -u www-data dojos composer install
```

Then run the tests
```bash
docker exec -it -u www-data dojos vendor/bin/phpspec run --format=pretty
```
