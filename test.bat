rmdir /S /Q .\modules\

php worker make:module Accueil --object --list --model="/libre-erp/models/accueil/accueil.json"
php worker make:routes Accueil

php worker make:module Article --object --list --model="/libre-erp/models/article/article.json"
php worker make:routes Article

php worker make:module Entite --object --list --model="/libre-erp/models/entite/entite.json"
php worker make:module Entite/Client --object --list --model="/libre-erp/models/entite/client.json"
php worker make:module Entite/ClientContact --object --list --model="/libre-erp/models/entite/client_contact.json"
php worker make:module Entite/ClientAdresseFacturation --object --list --model="/libre-erp/models/entite/client_adresse_facturation.json"
php worker make:module Entite/ClientAdresseLivraison --object --list --model="/libre-erp/models/entite/client_adresse_livraison.json"
php worker make:module Entite/Fournisseur --object --list --model="/libre-erp/models/entite/fournisseur.json"
php worker make:module Entite/FournisseurContact --object --list --model="/libre-erp/models/entite/fournisseur_contact.json"
php worker make:module Entite/SousTraitant --object --list --model="/libre-erp/models/entite/soustraitant.json"
php worker make:module Entite/SousTraitantContact --object --list --model="/libre-erp/models/entite/soustraitant_contact.json"
php worker make:routes Entite

php worker make:module Ressource --object --list --model="/libre-erp/models/achat/achat.json"
php worker make:module Ressource/Matiere --object --list --model="/libre-erp/models/achat/matiere.json"
php worker make:module Ressource/Composant --object --list --model="/libre-erp/models/achat/composant.json"
php worker make:module Ressource/Consommable --object --list --model="/libre-erp/models/achat/consommable.json"
php worker make:routes Ressource

php worker make:module Stock --object --list --model="/libre-erp/stock/stock.json"
php worker make:module Stock/Matiere --object --list --model="/libre-erp/stock/matiere.json"
php worker make:module Stock/MatiereClient --object --list --model="/libre-erp/stock/matiere_client.json"
php worker make:module Stock/MatiereEntree --object --list --model="/libre-erp/stock/matiere_entree.json"
php worker make:module Stock/MatiereSortie --object --list --model="/libre-erp/stock/matiere_sortie.json"
php worker make:module Stock/MatiereReste --object --list --model="/libre-erp/stock/matiere_reste.json"
php worker make:module Stock/Composant --object --list --model="/libre-erp/stock/composant.json"
php worker make:module Stock/ComposantClient --object --list --model="/libre-erp/stock/composant_client.json"
php worker make:module Stock/ComposantEntree --object --list --model="/libre-erp/stock/composant_entree.json"
php worker make:module Stock/ComposantSortie --object --list --model="/libre-erp/stock/composant_sortie.json"
php worker make:module Stock/ComposantReste --object --list --model="/libre-erp/stock/composant_reste.json"
php worker make:module Stock/Consommable --object --list --model="/libre-erp/stock/consommable.json"
php worker make:module Stock/ConsommableClient --object --list --model="/libre-erp/stock/consommable_client.json"
php worker make:module Stock/ConsommableEntree --object --list --model="/libre-erp/stock/consommable_entree.json"
php worker make:module Stock/ConsommableSortie --object --list --model="/libre-erp/stock/consommable_sortie.json"
php worker make:module Stock/ConsommableReste --object --list --model="/libre-erp/stock/consommable_reste.json"
php worker make:module Stock/Article --object --list --model="/libre-erp/stock/article.json"
php worker make:module Stock/ArticleClient --object --list --model="/libre-erp/stock/article_client.json"
php worker make:module Stock/ArticleEntree --object --list --model="/libre-erp/stock/article_entree.json"
php worker make:module Stock/ArticleSortie --object --list --model="/libre-erp/stock/article_sortie.json"
php worker make:module Stock/ArticleReste --object --list --model="/libre-erp/stock/article_reste.json"
php worker make:routes Stock

php worker make:module Achat --object --list --model="/libre-erp/achat/achat.json"
php worker make:module Achat/Fournisseur --object --list --model="/libre-erp/models/achat/fournisseur.json"
php worker make:module Achat/SousTraitant --object --list --model="/libre-erp/models/achat/soustraitant.json"
php worker make:routes Achat

php worker make:module Qualite --object --list --model="/libre-erp/models/qualite/qualite.json"
php worker make:module Qualite/NonConformite --object --list --model="/libre-erp/models/qualite/nonconformite.json"
php worker make:module Qualite/Decision --object --list --model="/libre-erp/models/qualite/decision.json"
php worker make:routes Qualite

php worker make:module Industrialisation --object --list --model="/libre-erp/models/industrialisation/industrialisation.json"
php worker make:module Industrialisation/Gamme --object --list --model="/libre-erp/models/industrialisation/gammes.json"
php worker make:module Industrialisation/Document --object --list --model="/libre-erp/models/industrialisation/document.json"
php worker make:routes Industrialisation

php worker make:module Fabrication --object --list --model="/libre-erp/models/fabrication/fabrication.json"
php worker make:module Fabrication/Ordre --object --list --model="/libre-erp/models/industrialisation/Ordre.json"
php worker make:module Fabrication/Employe --object --list --model="/libre-erp/models/industrialisation/gammes.json"
php worker make:module Fabrication/Pointage --object --list --model="/libre-erp/models/industrialisation/document.json"
php worker make:routes Fabrication

php worker make:module Reception --object --list --model="/libre-erp/models/reception/reception.json"
php worker make:module Reception/Bon --object --list --model="/libre-erp/models/reception/bon.json"
php worker make:routes Reception

php worker make:module Expedition --object --list --model="/libre-erp/models/expedition/expedition.json"
php worker make:module Expedition/Bon --object --list --model="/libre-erp/models/expedition/bon.json"
php worker make:routes Expedition

php worker make:module Commerce --object --list --model="/libre-erp/models/commerce/commerce.json"
php worker make:module Commerce/AppelDOffre --object --list --model="/libre-erp/models/commerce/appel_d_offre.json"
php worker make:module Commerce/Commande --object --list --model="/libre-erp/models/commerce/commande.json"
php worker make:routes Commerce

php worker make:module Facturation --object --list --model="/libre-erp/models/facturation/facturation.json"
php worker make:module Facturation/Monnaie --object --list --model="/libre-erp/models/facturation/monnaie.json"
php worker make:module Facturation/TauxDeChange --object --list --model="/libre-erp/models/facturation/taux_de_change.json"
php worker make:module Facturation/Facture --object --list --model="/libre-erp/models/facturation/facture.json"
php worker make:module Facturation/Avoir --object --list --model="/libre-erp/models/facturation/avoir.json"
php worker make:routes Facturation

php worker make:module EDI --object --list --model="/libre-erp/models/EDI/client.json"
php worker make:module EDI/EDIClient --object --list --model="/libre-erp/models/EDI/client.json"
php worker make:module EDI/EDIFournisseur --object --list --model="/libre-erp/models/EDI/fournisseur.json"
php worker make:module EDI/EDISousTraitant --object --list --model="/libre-erp/models/EDI/soustraitant.json"
php worker make:routes EDI

php worker make:module Bilan --object --list --model="/libre-erp/models/bilan/bilan.json"

php worker make:module Rapport --object --list --model="/libre-erp/models/rapport/rapport.json"
