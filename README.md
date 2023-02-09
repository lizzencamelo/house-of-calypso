# house-of-calypso


## Software Tools and Technology
```Figma```
&nbsp;
```HTML ```
&nbsp;
```CSS```
&nbsp;
```Bootstrap```
&nbsp;
```JavaScript```
&nbsp;
```AJAX```
&nbsp;
```PHP```
&nbsp;
```mySQL```
&nbsp;
```xampp```
&nbsp;
```Visual Studio Code```

## UI

### Home Page
![home](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/home.png)

### SignUp Modal  
![signup_modal](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/signup_modal.png)

### Login Modal   
![login_modal](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/login_modal.png)

### Our Artisans
![artisans](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/artisans.png)

### Cart   
![cart](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/cart.png)

### Shop Page
![shop_mugs](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/shop_mugs.png)
![shop_plates](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/shop_plates.png)

### Shop Product Page 
![shop_product](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/shop_product.png)
![shop_product](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/shop_product_sec.png)
![shop_product](https://github.com/lizzencamelo/house-of-calypso/blob/master/product/shop_product_ter.png)



## Launching website using xampp server

### Setting up the local server
         1. Install the xampp server and configure port settings.
            Link to install: https://www.apachefriends.org/
            Link to changing port settings: https://stackoverflow.com/questions/11294812/how-to-change-xampp-apache-server-port 
         2. Download house-of-calypso folder from the Google Drive folder.
            Link to Google drive folder: https://drive.google.com/drive/folders/1EWD2kTIOmPwXE8nEwSvFt_FMaZPlXIr7?usp=share_link
         3. Open the downloaded xampp folder and open the htdocs folder within it.
            Move the house-of-calypso folder in the htdocs folder.

### Creating the database.
         4. Locate the sql folder within house-of-calypso.
            Path: house-of-calypso > database > houseofcalypso.sql
         5. Open phpmyadmin page on a browser.
            - Start xampp control panel.
            - Start Apache and MySQL Modules.
            - Open browser. Type localhost/phpmyadmin
         6. Create a new database houseofcalypso by running following commands in the
            SQL editor tab. (NOTE: No hyphens in database name)
            CREATE DATABASE houseofcalypso;
         7. Select the database from the list of databases on the left by clicking on it.
         8. With the database selected import the houseofcalypso.sql file by clicking the
            Import tab. Choose the houseofcalypso.sql file from your system and click
            import. You should see all the tables under this database.
         
### Launching the website
         9. Launch the website by entering following path in the browser: localhost/house-of-calypso
         
         
