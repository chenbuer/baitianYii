给我自己做一个博客，记性不好，有一个自己定制的博客，自己想怎么记就怎么记


把它也放到一个docker中：
docker run -dit --name php -p 7777:80 -v /home/czy/php/treeTest/:/var/www/html/  daocloud.io/php:5.6-apache