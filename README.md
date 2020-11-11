# CI4-adminLTE3-Auth-starter

Make you easier to start project.

#### Development

This project is on development, some features you can using now is listed below.

## What you get?

### Codeigniter 4 & AdminLTE 3
- Layouting adminLTE 3 using templating engine on Codeigniter 4.
- You get dashboard view with _partials components :
<pre><font color="#3465A4"><b>app/Views/dashboard/</b></font>
├── dashboard.php
├── <font color="#3465A4"><b>_partials</b></font>
│   ├── <font color="#3465A4"><b>breadcrumb</b></font>
│   │   └── breadcrumb.php
│   ├── <font color="#3465A4"><b>calendar</b></font>
│   │   └── calendar.php
│   ├── <font color="#3465A4"><b>chart-tabs</b></font>
│   │   └── chart-tabs.php
│   ├── <font color="#3465A4"><b>direct-chat</b></font>
│   │   └── direct-chat.php
│   ├── <font color="#3465A4"><b>graph</b></font>
│   │   └── graph.php
│   ├── <font color="#3465A4"><b>map-card</b></font>
│   │   └── map-card.php
│   ├── <font color="#3465A4"><b>small-box</b></font>
│   │   └── small-box.php
│   └── <font color="#3465A4"><b>todo-list</b></font>
│       └── todo-list.php
└── script.php
</pre>

### Authentications

You can customization this Auth on `\App\Controller\TamhorAuth` and `\App\Controller\AuthController`

- Login
- Register
- RBAC
- Email verifications
- Recover Password


## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

## Installations

### Creating Database

First, make sure you have a database. If you dont have a database, let's creating :
- `mysql -u root -p`
- `Enter password: [leave blank if you never setup password]`
- mysql> `CREATE DATABASE db_starter;`
- mysql> `quit`
Now, you have a database `db_starter`

### Project Setup

`git clone https://github.com/tamhor/CI4-adminLTE3-Auth-starter.git`\
`cd CI4-adminLTE3-Auth-starter.git`\
`cp env .env`\
`code .` => open with your code editor (for example I use VSCode).

Setup your `.env` file :

Environment :\
`# CI_ENVIRONMENT = production` to `CI_ENVIRONMENT = development`
Databases initial :\
`# database.default.hostname = localhost`\
`# database.default.database = ci4`\
`# database.default.username = root`\
`# database.default.password = root`\
`# database.default.DBDriver = MySQLi`\
to\
`database.default.hostname = localhost`\
`database.default.database = db_starter`\
`database.default.username = root`\
`database.default.password = [leave blank if you never setup password]`\
`database.default.DBDriver = MySQLi`

- Note: Don't forget to remove the `#` tag at the first line.

Setting your \App\Config\Email.php :

`public $protocol = 'smtp';`\
`public $SMTPHost = 'smtp.gmail.com';`\
`public $SMTPUser = 'tamhor.dev@gmail.com';`\
`public $SMTPPass = '[type your password here]';`\
`public $SMTPPort = 465;`\
`public $SMTPTimeout = 60;`\
`public $SMTPCrypto = 'ssl';`\
`public $mailType = 'html';`\

- Note: Better use your secondary email address.

`php spark migrate`\
`php spark db:seed AuthSeeder`\
`php spark serve`