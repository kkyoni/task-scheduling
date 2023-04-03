1) php artisan schedule:run

2) crontab -e

3) * * * * * cd /opt/lampp/htdocs/task-scheduling && php artisan schedule:run >> /dev/null 2>&1
