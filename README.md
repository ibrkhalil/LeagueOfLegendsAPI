# LoL API
##### University project used to learn laravel. My take on the league of legends API (Riot Games API).

This project will be evaluated according to the list below:
-  Model and Controller creation
-  Request validation
-  Standard HTTP codes response
-  File upload
-  API Docs page
-  Authentication via Laravel Passport
-  Visual data preview (bootstrap


## Installation
1. Clone the project into your destination folder
1. Open the project and run
`npm install`
`composer install`
1. Rename the **.env.example** file to **.env**
1. Add your database name and database login details and run
`php artisan key:generate`
1. Run 
`php artisan migrate` 
to migrate table information
1. Run 
`php artisan db:seed` to seed 2 records of information to the database
1. Unzip the **uploads.zip** file in **destinationFolder\public** and replace the current **uploads** folder with it. You should now have the following folder order:
-	 public
		- uploads
			- champImage
			- champSkills
			- champSkin
			- public
Each folder should have the right images.
**This only works when you run the command on 6.**

###### You can now run your project in your machine with visible information.

## Alternatively you can access the live demo here
http://lolapi.jmfreitas.com/

------------

####My new image uploads are not working
- Create a symlink between your **storage/app** folder and your **public/uploads** folder.
- After that repeat (or do, if you never did it before) step 7.
- Your image uploads should now appear on your browser.
