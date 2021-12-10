export SERVICE=`docker container ls | grep maria| awk '{ print $1 }'`
docker container exec ${SERVICE} mysqldump -psecret123 -u root developmentdb > ./sql-scripts/data.sql