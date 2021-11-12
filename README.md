# Test task PHP
## Task:
- Based on csv file create a MySQL database with a proper structure which you find as most appropriate.
- Once done please import data from resultset.csv file into your database. 
- PHP script should take 10 latest articles from your database but with the assumption that each article should belong to a different section.
- The list of 10 records should be displayed on the frontend in a responsive layout.
## Installation

1. Clone repository
```shell
git clone https://github.com/0mandrock1/test_task_php_2021.git
```
2. Istall composer's .env 
```shell
composer install
```
3. Create database and write into .env
```dotenv
### Database
DB_HOST     = ""
DB_NAME     = ""
DB_USER     = ""
DB_PASSWORD = ""
```
4. Use files from `common/sql` for creating tables and indexes 
```shell
mysql -u $USER -p $DATABASENAME < common/sql/articles.sql
mysql -u $USER -p $DATABASENAME < common/sql/sections.sql
mysql -u $USER -p $DATABASENAME < common/sql/indexes.sql
```
5. Use `common/import.php` to seed database from `resultset.csv`
```shell
php common/import.php
```
6. Set your server's path to `web/`
7. Go to index of your local site

![View](https://i.postimg.cc/MKC2QRNk/2021-11-12-06-01-28.png "Site view")
