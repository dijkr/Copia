<h2>Commodum Copia - Documentation</h2>
<hr>
<h3>Development system</h3>

- Proxmox (o.a. back-ups, snapshots)
- AlmaLinux 9.1
- Apache 2.4.53
- MariaDB
- PHP 8.0.27
- PHPStorm 2022.3.2
- Laravel 9.52.7
- Vite 4.3.5
- Statamic 4 CMS
- Github
- TablePlus + PHPMyAdmin for remote DB-management
- NoMachine for remote GUI via NX
- Putty for remote CLI via SSH

Het project is gestart door het installeren van de benodigde software. 
Vervolgens is met Composer het project opgestart. Hiernaar zijn er
models en controllers aangemaakt met Artisan.

<hr>
<h3>Bestanden</h3>
Onderstaande bestanden hebben momenteel een aandeel in het project.
  
**Models:**
- Category.php
- Product.php
- Subcategory.php
- Subsubcategory.php

**Controllers:**
- CategoryController.php
- ProductController.php
- SubcategoryController.php
- SubsubcategoryController.php

**Views:**
- footer.blade.php
- header.blade.php
- layout.blade.php
- categorien.blade.php
- home.blade.php
- product.blade.php
- producten.blade.php

**Routes:**
- web.php

**Overige:**
- .env
- vite.config.js
- app.css
- app.js
- Diverse afbeeldingen
- Diverse migration_table.php-bestanden

<hr>
<h3>Toelichting</h3>

**Models aandachtspunten**
-	De models en controllers zijn aangemaakt met php artisan.
-	In het product-model is gespecificeerd dat een product een relatie heeft met een category, een subcategory en een subsubcategory.
-	In het promotion-model is gespecificeerd dat een promotie een relatie heeft net een product.

**Controller-functies** <br>
De controller specificeerd de view voor de functie. Wat betekend dat het resultaat van de controller beschikbaar is voor de desbetreffende view. Hierdoor zie je niet welke view wordt toegepast voor een bepaalde route.
-	[category] Get all categories
-	[category] Get information about a category
-	[product] Get products, grouped per subcategory
-	[product] Get one product
-	[promotion] Get the number of the week
-	[promotion] Get all promotions
-	[promotion] Get a random promotion

**Views**
-	De header, footer en layout zijn altijd included. De layout kan gezien worden als de body.
-	Vervolgens zijn er diverse views wat de daadwerkelijke inhoud van de pagina’s betreft.

**Routes** <br>
De controller specificeerd de view voor de functie. Wat betekend dat het resultaat van de controller beschikbaar is voor de desbetreffende view. Hierdoor zie je niet welke view wordt toegepast voor een bepaalde route.
-	De route gebruikt controller-functies om data te verkrijgen. Het resultaat is beschikbaar voor de view. De view wordt

**.env** <br>
Hierin wordt configuratie toegepast voor o.a. de appnaam en de verbinding met de database.

**app.css en app.js** <br>
Deze bestanden betreffen de inhoud voor CSS en Javascript.

**Vite.config.js** <br>
Vite leest continue wijzigingen aan app.css en app.js. Ook wordt bij een wijziging, dit in de development-webbrowser weergegeven. Zodoende hoeft de webbrowser niet handmatig te refreshen om de website te updaten na aanpassingen aan app.css en app.js.
<hr>
<h3>Improvement</h3>
Sugguesties en het oplossen van bekende problemen worden via de Github Issues module bijgehouden en afgewerkt.
<hr>
