### Requerimentos

* PHP >= 7.0
* PDO + SQLite (or MongoDB)
* GD extension
* mod_rewrite, mod_versions enabled (on apache)

make also sure that <code>$_SERVER['DOCUMENT_ROOT']</code> exists and is set correctly.


### Instalação

1. wget https://github.com/agentejo/cockpit/archive/master.zip
2. unzip master.zip
3. sudo mv cockpit-master /var/www/cockpit
4. sudo chown -R www-data:www-data /var/www/cockpit/
5. sudo chmod -R 755 /var/www/cockpit/
6. sudo nano /etc/apache2/sites-available/cockpit.conf
7. Cole o código abaixo:

    <VirtualHost *:80>
        ServerAdmin admin@example.com
        DocumentRoot /var/www/html/cockpit
        ServerName cockpit.cartorio.com
        ServerAlias www.cockpit.cartorio.com

        <Directory /var/www/cockpit/>
            Options FollowSymlinks
            AllowOverride All
            Require all granted
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        <Directory /var/www/cockpit/>
            RewriteEngine on
            RewriteBase /
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^(.*) index.php [PT,L]
        </Directory>
    </VirtualHost>

8. sudo a2ensite cockpit.conf
9. sudo a2enmod rewrite
10. sudo systemctl restart apache2.service

# Cockpit Next

* Homepage: [http://getcockpit.com](https://getcockpit.com)
* Twitter: [@getcockpit](http://twitter.com/getcockpit)
* Support Forum: [https://discourse.getcockpit.com](https://discourse.getcockpit.com)