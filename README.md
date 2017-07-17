这个博客系统是利用Yii框架写的。

主要利用了yii2-tree-manager完成了树状结构的文章展示，markdown组件也是用的kartik-v家的。同时完成了基于OAuth的github登录注册，利用Yii的mail组件进行邮件注册确认等功能。是一个功能完整的博客系统。


把它放到一个docker中：
> docker run -dit --name php -p 7777:80 -v /home/czy/php/treeTest/:/var/www/html/  daocloud.io/php:5.6-apache