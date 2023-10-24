# Simple project on Creating a Blog Using Laravel

This repository contains the source code and materials related to the "Laravel Blog Creation" course. 
The course is designed for learning how to create a blog using [Laravel](https://laravel.com/) with [Docker](https://www.docker.com/) containers

## Html template
[edica.html](https://www.bootstrapdash.com/product/edica)

## Use

1. Clone repo:
   ```bash
   git clone git@github.com:zyab1ik/LearnLaravelProject.git
   
2. Create .env файл bases .env.example
3. Go to the root directory:
    ```bash
    cd LearnLaravelProject
4. Up containers:
    ```bash
    ./vendor/bin/sail up -d
5. Make migration
   ```bash
   ./vendor/bin/sail artisan migrate
6. Open http://localhost

### License
This project is distributed under the MIT License. Details can be found in the [LICENSE.md](https://www.mit.edu/~amini/LICENSE.md) file.
