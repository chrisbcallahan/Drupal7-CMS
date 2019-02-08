# Drupal7-CMS #

This repository holds the files for a Drupal 7 based CMS.

***How to install 

- Ensure you have a server the meets all Drupal 7 requirements. 

- Download unzip the Drupal7-CMS.zip file.

- Move the unzipped Drupal7-CMS-master/ directory to the proper directory in your web server, and rename it to the name of your site. 

**Unzip the following files: 
```
data.zip

includes.zip
                             
misc.zip

modules.zip

profiles.zip

scripts.zip

sites.zip 

sites/all.zip

sites/default.zip
```
***NOTE: Make sure you unzip all files after moving the original directory to your server to prevent losing any hidden files!

**In your sites root directory change the following filenames: 
```
hidden.DS_Store -> .DS_Store

hidden.gitignore -> .gitignore

hidden.htaccess -> .htaccess

hidden.idea -> .idea
```                                                               
- Create a database and database user for your drupal site. 

- Import the sqldump/saafsleep.sql.zip file into your database. *(In phpMyAdmin the file must remain zipped to work properly)

- Update the sites/settings.php file by adding your database and credentials in the format specified in the comments.

- If you haven't done so already, install drupal 7.

