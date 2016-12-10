cat > ~/.my.cnf <<EOF
[mysql]
user=root
password=root
host=localhost
database=mvc
socket=/opt/lampp/var/mysql/mysql.sock
EOF

cat > mvc.sql <<EOF
DROP DATABASE IF EXISTS mvc;
EOF
/opt/lampp/bin/mysqldump -uroot -hlocalhost -proot --databases mvc >> mvc.sql
