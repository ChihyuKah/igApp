#Troubleshooting

So after all the troubleshooting I had I'm finally able to continue with my progress.

1)
First when making a new applic and you know you want a registery use:

laravel new 'name of project' --auth incase you already made an applic
use php artisan ui:auth (not php artisan make:auth)

2) 
When you try to migrate and it fails and you see this error: 'SQLSTATE[HY000] [2054] The server requested authentication method unknown to the client (SQL: select * from information_schema.tables where table_schema = DB1 and table_name = migrations and table_type = 'BASE TABLE')'

go in terminal sudo mysql and type in: ALTER USER 'username'@'localhost' IDENTIFIED WITH mysql_native_password by 'password';
(flush privileges afterwords)

[solution](https://github.com/laradock/laradock/issues/1668)


3)
The requested URL was not found
this problem requires you to add: 

<Directory /var/www/html/public/>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>

in your VM host file

also check if 'sudo a2enmod rewrite' is enabled or not
and then restart the apache server.

[solution](https://stackoverflow.com/questions/28242495/laravel-the-requested-url-was-not-found-on-this-server)
