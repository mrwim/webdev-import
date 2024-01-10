$SERVICE = docker container ls | Select-String "maria" | ForEach-Object { $_.ToString().Split(" ")[0] }
docker container exec $SERVICE mysqldump -psecret123 -u root developmentdb > ./app/sql-scripts/data.sql
