# web-php-apache2-simple
A hello world PHP script

# Developer Workspace

[![Contribute](http://beta.codenvy.com/factory/resources/codenvy-contribute.svg)](http://beta.codenvy.com/f?id=5ayat0naxlljn3p2)

# Recipe

FROM [codenvy/php](https://hub.docker.com/r/codenvy/php/)

# Commands to run

| #       | Description           | Command  |
| :------------- |:-------------| :-----|
| 1      | Start Apache, tail logs | `sudo service apache2 start && sudo tail -f /var/log/apache2/access.log -f /var/log/apache2/error.log` |
| 2      | Stop Apache      |   `sudo service apache2 stop` |
| 3 | Restart Apache      |    `sudo service apache2 restart` |

# Preview URL

localhost:$mappedPort/$projectName
