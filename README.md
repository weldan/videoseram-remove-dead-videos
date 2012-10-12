videoseram-remove-dead-videos
=============================

i wrote this to remove dead video links on one of my website:

http://videoseram.com

it's a collection of horror or any related genre videos found on youtube.com

i run this script every night to ensure there are no dead video on any posts on the website. 

put it here if anyone interested. 

require:
https://github.com/wp-cli/wp-cli


this is how i use it. put this on crontab (crontab -e)

0 0  * * * /usr/bin/wp --path=/var/www/videoseram.com eval-file /home/weldan/sources/videoseram-cli/remove-dead-posts.php

if you run logwatch you could see if there is any dead video on posts removed, executed 12 am everyday. 