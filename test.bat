rmdir /S /Q .\modules\

php worker make:module Accueil --object --list --model="/modules-test/models/accueil/accueil.json"
php worker make:routes Accueil

php worker make:module Article --object --list --model="/modules-test/models/article/article.json"
php worker make:routes Article

php worker make:module Entite --object --list --model="/modules-test/models/entite/entite.json"
php worker make:module Entite/Client --object --list --model="/modules-test/models/entite/client.json"
php worker make:module Entite/ClientContact --object --list --model="/modules-test/models/entite/client_contact.json"
php worker make:module Entite/ClientAdresseFacturation --object --list --model="/modules-test/models/entite/client_adresse_facturation.json"
php worker make:module Entite/ClientAdresseLivraison --object --list --model="/modules-test/models/entite/client_adresse_livraison.json"
php worker make:module Entite/Fournisseur --object --list --model="/modules-test/models/entite/fournisseur.json"
php worker make:module Entite/FournisseurContact --object --list --model="/modules-test/models/entite/fournisseur_contact.json"
php worker make:module Entite/SousTraitant --object --list --model="/modules-test/models/entite/soustraitant.json"
php worker make:module Entite/SousTraitantContact --object --list --model="/modules-test/models/entite/soustraitant_contact.json"
php worker make:routes Entite

@REM php worker make:module Ressource --object --list --model="/modules-test/models/achat/achat.json"
@REM php worker make:module Ressource/Matiere --object --list --model="/modules-test/models/achat/matiere.json"
@REM php worker make:module Ressource/Composant --object --list --model="/modules-test/models/achat/composant.json"
@REM php worker make:module Ressource/Consommable --object --list --model="/modules-test/models/achat/consommable.json"
@REM php worker make:routes Ressource

@REM php worker make:module Stock --object --list --model="/modules-test/stock/stock.json"
@REM php worker make:module Stock/Matiere --object --list --model="/modules-test/stock/matiere.json"
@REM php worker make:module Stock/MatiereClient --object --list --model="/modules-test/stock/matiere_client.json"
@REM php worker make:module Stock/MatiereEntree --object --list --model="/modules-test/stock/matiere_entree.json"
@REM php worker make:module Stock/MatiereSortie --object --list --model="/modules-test/stock/matiere_sortie.json"
@REM php worker make:module Stock/MatiereReste --object --list --model="/modules-test/stock/matiere_reste.json"
@REM php worker make:module Stock/Composant --object --list --model="/modules-test/stock/composant.json"
@REM php worker make:module Stock/ComposantClient --object --list --model="/modules-test/stock/composant_client.json"
@REM php worker make:module Stock/ComposantEntree --object --list --model="/modules-test/stock/composant_entree.json"
@REM php worker make:module Stock/ComposantSortie --object --list --model="/modules-test/stock/composant_sortie.json"
@REM php worker make:module Stock/ComposantReste --object --list --model="/modules-test/stock/composant_reste.json"
@REM php worker make:module Stock/Consommable --object --list --model="/modules-test/stock/consommable.json"
@REM php worker make:module Stock/ConsommableClient --object --list --model="/modules-test/stock/consommable_client.json"
@REM php worker make:module Stock/ConsommableEntree --object --list --model="/modules-test/stock/consommable_entree.json"
@REM php worker make:module Stock/ConsommableSortie --object --list --model="/modules-test/stock/consommable_sortie.json"
@REM php worker make:module Stock/ConsommableReste --object --list --model="/modules-test/stock/consommable_reste.json"
@REM php worker make:module Stock/Article --object --list --model="/modules-test/stock/article.json"
@REM php worker make:module Stock/ArticleClient --object --list --model="/modules-test/stock/article_client.json"
@REM php worker make:module Stock/ArticleEntree --object --list --model="/modules-test/stock/article_entree.json"
@REM php worker make:module Stock/ArticleSortie --object --list --model="/modules-test/stock/article_sortie.json"
@REM php worker make:module Stock/ArticleReste --object --list --model="/modules-test/stock/article_reste.json"
@REM php worker make:routes Stock

@REM php worker make:module Achat --object --list --model="/modules-test/achat/achat.json"
@REM php worker make:module Achat/Fournisseur --object --list --model="/modules-test/models/achat/fournisseur.json"
@REM php worker make:module Achat/SousTraitant --object --list --model="/modules-test/models/achat/soustraitant.json"
@REM php worker make:routes Achat

@REM php worker make:module Qualite --object --list --model="/modules-test/models/qualite/qualite.json"
@REM php worker make:module Qualite/NonConformite --object --list --model="/modules-test/models/qualite/nonconformite.json"
@REM php worker make:module Qualite/Decision --object --list --model="/modules-test/models/qualite/decision.json"
@REM php worker make:routes Qualite

@REM php worker make:module Industrialisation --object --list --model="/modules-test/models/industrialisation/industrialisation.json"
@REM php worker make:module Industrialisation/Gamme --object --list --model="/modules-test/models/industrialisation/gammes.json"
@REM php worker make:module Industrialisation/Document --object --list --model="/modules-test/models/industrialisation/document.json"
@REM php worker make:routes Industrialisation

@REM php worker make:module Fabrication --object --list --model="/modules-test/models/fabrication/fabrication.json"
@REM php worker make:module Fabrication/Ordre --object --list --model="/modules-test/models/industrialisation/Ordre.json"
@REM php worker make:module Fabrication/Employe --object --list --model="/modules-test/models/industrialisation/gammes.json"
@REM php worker make:module Fabrication/Pointage --object --list --model="/modules-test/models/industrialisation/document.json"
@REM php worker make:routes Fabrication

@REM php worker make:module Reception --object --list --model="/modules-test/models/reception/reception.json"
@REM php worker make:module Reception/Bon --object --list --model="/modules-test/models/reception/bon.json"
@REM php worker make:routes Reception

@REM php worker make:module Expedition --object --list --model="/modules-test/models/expedition/expedition.json"
@REM php worker make:module Expedition/Bon --object --list --model="/modules-test/models/expedition/bon.json"
@REM php worker make:routes Expedition

@REM php worker make:module Commerce --object --list --model="/modules-test/models/commerce/commerce.json"
@REM php worker make:module Commerce/AppelDOffre --object --list --model="/modules-test/models/commerce/appel_d_offre.json"
@REM php worker make:module Commerce/Commande --object --list --model="/modules-test/models/commerce/commande.json"
@REM php worker make:routes Commerce

@REM php worker make:module Facturation --object --list --model="/modules-test/models/facturation/facturation.json"
@REM php worker make:module Facturation/Monnaie --object --list --model="/modules-test/models/facturation/monnaie.json"
@REM php worker make:module Facturation/TauxDeChange --object --list --model="/modules-test/models/facturation/taux_de_change.json"
@REM php worker make:module Facturation/Facture --object --list --model="/modules-test/models/facturation/facture.json"
@REM php worker make:module Facturation/Avoir --object --list --model="/modules-test/models/facturation/avoir.json"
@REM php worker make:routes Facturation

@REM php worker make:module EDI --object --list --model="/modules-test/models/EDI/client.json"
@REM php worker make:module EDI/EDIClient --object --list --model="/modules-test/models/EDI/client.json"
@REM php worker make:module EDI/EDIFournisseur --object --list --model="/modules-test/models/EDI/fournisseur.json"
@REM php worker make:module EDI/EDISousTraitant --object --list --model="/modules-test/models/EDI/soustraitant.json"
@REM php worker make:routes EDI

@REM php worker make:module Bilan --object --list --model="/modules-test/models/bilan/bilan.json"

@REM php worker make:module Rapport --object --list --model="/modules-test/models/rapport/rapport.json"
