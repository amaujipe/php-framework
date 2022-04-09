# Basic PHP Framework
This framework was created for educational purposes following the 
instructions by the teacher [Italo Morales](https://github.com/italomoralesf/italomoralesf.github.io)
on his [website](https://rimorsoft.com). 
Even tho, it's a completely functional PHP framework, but still basic.

This framework tries to imitate the behavior of frameworks like Laravel and 
Symphony, in fact, many of the created components and the imported ones from 
Composer, are called, inspired, or taken from Laravel.

To use this framework you need to follow the steps:
1. Clone the repository from GitHub, or download the `.zip` file. 
2. Use the `composer install` command to download the needed dependencies. 
3. During the development process, I use a database with a single table 
   called users, where default requests and responses were based on that 
   table. The queries to create that table are available in `/database/seed.`

The workflow in this framework is as follows:

`/public/index.php` acts as a front controller, that filters all user's 
requests through the `/bootstrap/app.php` file, which imports Composer 
autoload and all the config files. 

In the `/app/` folder, you have the `helpers.php` file, which is in charge 
of printing each view. Also, you get the `Controllers` and `Models` folders, 
which complete the MVC design pattern.

If you have any questions or suggestions, you can contact me through this 
GitHub account, or on my Twitter account [@amaujipe](https://twitter.com/amaujipe).