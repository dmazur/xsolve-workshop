#!/bin/bash

# Init ownership & permissions for project files
# IMPORTANT: It is necessary to run from root directory

# Set global Owner (CLI user)
sudo chown -R `whoami` .

# Set global Group (containing server daemon)
sudo chgrp -R xampp .

# Set global permissions for folders (u=RWX, g=RX)
find . -type d -exec chmod 750 {} \;

# Set global permissions for files (u=RW, g=R)
find . -type f -exec chmod 640 {} \;

# Allow Group to write logs & backups (g+W)
mkdir Storage/Backups
chmod -R g+w Storage/Log/ Storage/Backups/

# Make new files inherit folder group 'Group'
chmod g+s Storage/Log/ Storage/Backups/

# Use ACL to set new files default permissions
setfacl -d -m g::rw Storage/Log/ Storage/Backups/



# Unset globals
chgrp -R `whoami` .git clean.sh permissions.sh

# Make clean.sh, permissions.sh executable
chmod u+x clean.sh permissions.sh

# Make phpinfo.php accessible from URL
ln -s /opt/lampp/htdocs/dashboard/phpinfo.php Public/phpinfo.php

echo "Done"
exit 0
