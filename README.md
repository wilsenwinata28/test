
## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
1. Docker

### Installing
1. Clone this code
2. After finish cloning, run ```docker-compose up -d```
3. Access at ```localhost:1200```

## How to run Test Localy
1. ```docker-compose up -d```
1. ```docker exec -it bakutansiapp sh```
2. ```composer dump-autoload```
3. ```php artisan migrate```
4. ```php artisan db:seed```
