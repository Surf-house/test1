#!/bin/bash

set -e
 OUTPUT="backend/web/uploads"
backPath=$scrDir/$backupDir
restPath=$scrDir/$restoreDir



#checking input data
scrDir="$( cd "$(dirname "$0")" ; pwd -P )"

if [[ ! $1 ]] 
    then
    echo  "Missing date of backup"
    exit 
fi

if [[ $2 ]] 
    then
    echo "Your input was not correct, try again "
    exit
fi

if [[ ! $1 =~ ^[0-9]{2}-[0-9]{2}-[0-9]{4}$ ]]
  then 
  echo -e "Wrong date format, use DD-MM-YYYY"
  exit 
fi





echo "Make application backup..."


BACKUPS_ROOT=backups/$(date '+%d-%m-%Y')

if [[ ! -d $BACKUPS_ROOT ]];
then
  echo "Creating backup directory..."
  mkdir -p "$BACKUPS_ROOT"
fi

#TODO: make database dump
# USER="Alexander";
# PASSWORD="123456";


# databases=`mysql --user=$USER --password=$PASSWORD -e "SHOW DATABASES;" | tr -d
#  "| " | grep -v Database`

#  for db in $databases; do
#     if [[ "$db" != "information schema" ]] && [[ "$db !=_* "]]; then
#        echo "Dumping database: $db"
#        mysqldump --force --opt --user=$USER --password=$PASSWORD --databases
#     $db > $OUTPUT/`date +%Y%m%d`.$db.sql
#          gzip $OUTPUT/`date +%Y%m%d`.$db.sql
#         fi
# done
touch dump.sql

gzip --best dump.sql
mv dump.sql.gz "$BACKUPS_ROOT"

echo "Backup is ready!"



