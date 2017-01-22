# Sunshine PHP 2017 - Build Security In

This repository is a compliment to the "Build Security In" session presented at the Sunshine PHP Conference 2017

[http://2017.sunshinephp.com/tutorials#build-security-in](http://2017.sunshinephp.com/tutorials#build-security-in)

## Setup

This application makes use of a database connection for some things. The use the settings:

```
username: sunphp
password: subphp17
database name: sunphp
host: localhost
```

### Create the project

```
composer create-project enygma/sunphp17
```

### Create the MySQL database

By default this application uses a MySQL database but that can be changed if desired with some config updates. First, though, you'll need to make your DB:

```
mysqladmin create sunphp17
mysql -p mysql
> grant all on sunphp.* to 'sunphp'@'localhost' identified by 'sunphp17';
> flush privileges;
> quit;
```

### Run the setup script

The setup script will perform a few actions and ask a few questions. Be sure that when it asks about the database information you use the connection information above.

```
./setup
```
