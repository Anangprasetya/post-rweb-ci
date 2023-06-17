###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/userguide3/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.


***************
Developer
***************

Anang Nur Prasetya (Backend Developer)

***************
Cara Menjalankan Aplikasi
***************

- Download repositori ini dan ektrak di folder : **localhost**
- Buka _phpmyadmin_ dan buat database dengan nama : **<nama_db_bebas>**
- Import file sql pada db yang baru dibuat yang terletak pada folder **appdb/database.sql**
- Buka file database yang terletak di **application/config/database.php**
terdapat code
```
'username' => 'admin',
'password' => 'password',
'database' => 'bljr_postrwebci',
```
ganti dengan
```
'username' => 'root',
'password' => '',
'database' => '<nama_db_bebas>',
```

- Buka file config yang terletak di **application/config/config.php**
cari kode berikut ``` $config['base_url'] = 'http://localhost/post-rweb/'; ```
**ganti** dan sesuaikan dengan letak penyimpanan masing-masing yang mengarah ke repositori ini

- Aplikasi berhasil jalan

- Jika terjadi error setelah melakukan langkah diatas, hubungi saja developer dari repositori ini !
