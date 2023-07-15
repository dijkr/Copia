**Development system**
- Proxmox (o.a. back-ups, snapshots)
- AlmaLinux 9.1
- Apache 2.4.53
- MariaDB
- PHP 8.0.27
- PHPStorm 2022.3.2
- Laravel 9.52.7
- Vite 4.3.5
- Github
- TablePlus + PHPMyAdmin for remote DB-management
- NoMachine for remote GUI via NX
- Putty for remote CLI via SSH

Schematekening maken met Visio

**Bestanden**
Onderstaande bestanden hebben momenteel een aandeel in het project.

**Models:**
Category.php
Product.php
Subcategory.php
Subsubcategory.php

**Controllers:**
CategoryController.php
ProductController.php
SubcategoryController.php
SubsubcategoryController.php

**Views:**
footer.blade.php
header.blade.php
layout.blade.php
categorien.blade.php
home.blade.php
product.blade.php
producten.blade.php

**Routes:**
web.php

**Overige:**
.env
vite.config.js
app.css
app.js
Diverse afbeeldingen
Diverse migration_table.php-bestanden


**Models aandachtspunten**
-	De models en controllers zijn aangemaakt met php artisan.
-	In het product-model is gespecificeerd dat een product een relatie heeft met een category, een subcategory en een subsubcategory.
-	In het promotion-model is gespecificeerd dat een promotie een relatie heeft net een product.

**Controller-functies**
(!) De controller specificeerd de view voor de functie. Wat betekend dat het resultaat van de controller beschikbaar is voor de desbetreffende view. Hierdoor zie je niet welke view wordt toegepast voor een bepaalde route.
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

**Routes**
(!) De controller specificeerd de view voor de functie. Wat betekend dat het resultaat van de controller beschikbaar is voor de desbetreffende view. Hierdoor zie je niet welke view wordt toegepast voor een bepaalde route.
-	[web.php] De controllers worden specifiek genoemd om bruikbaar te maken voor routes.
-	De route gebruikt controller-functies om data te verkrijgen. Het resultaat is beschikbaar voor de view. De view wordt

**.env**
Hierin wordt configuratie toegepast voor o.a. de appnaam en de verbinding met de database.

**app.css en app.js**
Deze bestanden betreffen de inhoud voor CSS en Javascript.

**Vite.config.js**
Vite leest continue wijzigingen aan app.css en app.js. Ook wordt bij een wijziging, dit in de development-webbrowser weergegeven. Zodoende hoeft de webbrowser niet handmatig te refreshen om de website te updaten na aanpassingen aan app.css en app.js.

