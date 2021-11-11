rmdir /S /Q .\modules\

php worker make:module Article --object --list
php worker make:routes

php worker make:module Entite --object --list
php worker make:module Entite/Client --object
php worker make:module Entite/Clients --list
php worker make:module Entite/Fournisseur --object
php worker make:module Entite/Fournisseurs --list
php worker make:module Entite/SousTraitant --object
php worker make:module Entite/SousTraitants --list
php worker make:routes
