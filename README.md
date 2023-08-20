# ImportExportPatch
Fix Import Stock error: systemException Warning: Undefined array key "source_code"

# Installation
- Copy Bnaia folder into app/code
- bin/magento setup:upgrade
- bin/magento setup:di:compile
- bin/magento static:content:deploy

# Note
if the issue still exist please do the following only once
access your database then execute these commands
- TRUNCATE TABLE importexport_importdata;
- TRUNCATE TABLE import_history;

Please take a backup before doing any operation on the database.

