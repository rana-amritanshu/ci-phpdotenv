# Dotenv for CI
===============================================================================
Environment Variable setup for CI using [phpdotenv](https://github.com/vlucas/phpdotenv) (included a sample  .env.example) and .htaccess (refer to htaccess file on the root of the project).

There are two places where you can load the phpdotenv Library
1. applicaiton/config/constants.php, since this file is loaded before config.php it will be available even before the pre_system hook.
or 
2. Use Hooks to setup phpdotenv refer to the application/config/hooks.php(currently commented) and application/hooks/Env.php
for details.

Output echoed in application/controllers/Welcome.php

## Usage
- create a .env file
- copy content of .env.example to .env file

#### note: 
always include .env file in .gitignore



