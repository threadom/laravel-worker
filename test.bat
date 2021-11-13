rmdir /S /Q .\modules\

php worker make:module Accueil --object --list --model="/config/modules/accueil/accueil.json"
php worker make:routes Accueil

php worker make:module Article --object --list --model="/config/modules/article/article.json"
php worker make:routes Article

php worker make:module Entite --object --list --model="/config/modules/entite/entite.json"
php worker make:module Entite/Client --object --list --model="/config/modules/entite/client.json"
php worker make:module Entite/ClientContact --object --list --model="/config/modules/entite/client_contact.json"
php worker make:module Entite/ClientAdresseFacturation --object --list --model="/config/modules/entite/client_adresse_facturation.json"
php worker make:module Entite/ClientAdresseLivraison --object --list --model="/config/modules/entite/client_adresse_livraison.json"
php worker make:module Entite/Fournisseur --object --list --model="/config/modules/entite/fournisseur.json"
php worker make:module Entite/FournisseurContact --object --list --model="/config/modules/entite/fournisseur_contact.json"
php worker make:module Entite/SousTraitant --object --list --model="/config/modules/entite/soustraitant.json"
php worker make:module Entite/SousTraitantContact --object --list --model="/config/modules/entite/soustraitant_contact.json"
php worker make:routes Entite

@REM php worker make:module Ressource --object --list --model="/config/modules/achat/achat.json"
@REM php worker make:module Ressource/Matiere --object --list --model="/config/modules/achat/matiere.json"
@REM php worker make:module Ressource/Composant --object --list --model="/config/modules/achat/composant.json"
@REM php worker make:module Ressource/Consommable --object --list --model="/config/modules/achat/consommable.json"
@REM php worker make:routes Ressource

@REM php worker make:module Stock --object --list --model="/test/stock/stock.json"
@REM php worker make:module Stock/Matiere --object --list --model="/test/stock/matiere.json"
@REM php worker make:module Stock/MatiereClient --object --list --model="/test/stock/matiere_client.json"
@REM php worker make:module Stock/MatiereEntree --object --list --model="/test/stock/matiere_entree.json"
@REM php worker make:module Stock/MatiereSortie --object --list --model="/test/stock/matiere_sortie.json"
@REM php worker make:module Stock/MatiereReste --object --list --model="/test/stock/matiere_reste.json"
@REM php worker make:module Stock/Composant --object --list --model="/test/stock/composant.json"
@REM php worker make:module Stock/ComposantClient --object --list --model="/test/stock/composant_client.json"
@REM php worker make:module Stock/ComposantEntree --object --list --model="/test/stock/composant_entree.json"
@REM php worker make:module Stock/ComposantSortie --object --list --model="/test/stock/composant_sortie.json"
@REM php worker make:module Stock/ComposantReste --object --list --model="/test/stock/composant_reste.json"
@REM php worker make:module Stock/Consommable --object --list --model="/test/stock/consommable.json"
@REM php worker make:module Stock/ConsommableClient --object --list --model="/test/stock/consommable_client.json"
@REM php worker make:module Stock/ConsommableEntree --object --list --model="/test/stock/consommable_entree.json"
@REM php worker make:module Stock/ConsommableSortie --object --list --model="/test/stock/consommable_sortie.json"
@REM php worker make:module Stock/ConsommableReste --object --list --model="/test/stock/consommable_reste.json"
@REM php worker make:module Stock/Article --object --list --model="/test/stock/article.json"
@REM php worker make:module Stock/ArticleClient --object --list --model="/test/stock/article_client.json"
@REM php worker make:module Stock/ArticleEntree --object --list --model="/test/stock/article_entree.json"
@REM php worker make:module Stock/ArticleSortie --object --list --model="/test/stock/article_sortie.json"
@REM php worker make:module Stock/ArticleReste --object --list --model="/test/stock/article_reste.json"
@REM php worker make:routes Stock

@REM php worker make:module Achat --object --list --model="/test/achat/achat.json"
@REM php worker make:module Achat/Fournisseur --object --list --model="/config/modules/achat/fournisseur.json"
@REM php worker make:module Achat/SousTraitant --object --list --model="/config/modules/achat/soustraitant.json"
@REM php worker make:routes Achat

@REM php worker make:module Qualite --object --list --model="/config/modules/qualite/qualite.json"
@REM php worker make:module Qualite/NonConformite --object --list --model="/config/modules/qualite/nonconformite.json"
@REM php worker make:module Qualite/Decision --object --list --model="/config/modules/qualite/decision.json"
@REM php worker make:routes Qualite

@REM php worker make:module Industrialisation --object --list --model="/config/modules/industrialisation/industrialisation.json"
@REM php worker make:module Industrialisation/Gamme --object --list --model="/config/modules/industrialisation/gammes.json"
@REM php worker make:module Industrialisation/Document --object --list --model="/config/modules/industrialisation/document.json"
@REM php worker make:routes Industrialisation

@REM php worker make:module Fabrication --object --list --model="/config/modules/fabrication/fabrication.json"
@REM php worker make:module Fabrication/Ordre --object --list --model="/config/modules/industrialisation/Ordre.json"
@REM php worker make:module Fabrication/Employe --object --list --model="/config/modules/industrialisation/gammes.json"
@REM php worker make:module Fabrication/Pointage --object --list --model="/config/modules/industrialisation/document.json"
@REM php worker make:routes Fabrication

@REM php worker make:module Reception --object --list --model="/config/modules/reception/reception.json"
@REM php worker make:module Reception/Bon --object --list --model="/config/modules/reception/bon.json"
@REM php worker make:routes Reception

@REM php worker make:module Expedition --object --list --model="/config/modules/expedition/expedition.json"
@REM php worker make:module Expedition/Bon --object --list --model="/config/modules/expedition/bon.json"
@REM php worker make:routes Expedition

@REM php worker make:module Commerce --object --list --model="/config/modules/commerce/commerce.json"
@REM php worker make:module Commerce/AppelDOffre --object --list --model="/config/modules/commerce/appel_d_offre.json"
@REM php worker make:module Commerce/Commande --object --list --model="/config/modules/commerce/commande.json"
@REM php worker make:routes Commerce

@REM php worker make:module Facturation --object --list --model="/config/modules/facturation/facturation.json"
@REM php worker make:module Facturation/Monnaie --object --list --model="/config/modules/facturation/monnaie.json"
@REM php worker make:module Facturation/TauxDeChange --object --list --model="/config/modules/facturation/taux_de_change.json"
@REM php worker make:module Facturation/Facture --object --list --model="/config/modules/facturation/facture.json"
@REM php worker make:module Facturation/Avoir --object --list --model="/config/modules/facturation/avoir.json"
@REM php worker make:routes Facturation

@REM php worker make:module EDI --object --list --model="/config/modules/EDI/client.json"
@REM php worker make:module EDI/EDIClient --object --list --model="/config/modules/EDI/client.json"
@REM php worker make:module EDI/EDIFournisseur --object --list --model="/config/modules/EDI/fournisseur.json"
@REM php worker make:module EDI/EDISousTraitant --object --list --model="/config/modules/EDI/soustraitant.json"
@REM php worker make:routes EDI

@REM php worker make:module Bilan --object --list --model="/config/modules/bilan/bilan.json"

@REM php worker make:module Rapport --object --list --model="/config/modules/rapport/rapport.json"
