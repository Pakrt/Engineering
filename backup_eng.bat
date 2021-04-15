cd "D:\xampp\mysql\bin"
mysqldump -hlocalhost -uroot engineering > "D:\backup\engineering_%date:~-10,2%%date:~-7,2%%date:~-4,4%_%time:~0,2%%time:~3,2%%time:~6,2%.sql"