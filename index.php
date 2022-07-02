Travail à faire
1.	Donner toutes les informations sur les pilotes. 
	SELECT * FROM pilote ;
	
2.	Donner le nom et l'adresse des pilotes. 
	SELECT plnom, ville FROM pilote ;
	
3.	Sélectionner l'identificateur et le nom de chaque pilote. 
	SELECT plnum "Numero pilote", plnom FROM pilote ;
	
4. Quelles sont toutes les villes de départ des vols ? 
	SELECT DISTINCT vd FROM vol;
	
5. Donner le nom des pilotes qui habitent à Port-au-Prince. 
	SELECT plnom, ville FROM pilote WHERE ville='Port-au-Prince';
	
6. Donner le nom et l’adresse des pilotes qui gagnent plus de 19000 gourdes. 
	SELECT plnom, ville FROM pilote WHERE salaire>19000;
	
7. Rechercher le nom des pilotes dont l'adresse est inconnue. 
	SELECT plnom FROM pilote WHERE ville IS NULL

8. Rechercher les avions de nom A310, A320, A330 et A340. 
	SELECT * FROM avion WHERE avnom IN ('A310','A320','A330', 'A340');
	
9. Quel est le nom des pilotes qui gagnent entre 19000 et 22000 gourdes ? 
	SELECT plnom FROM pilote WHERE salaire BETWEEN 19000 AND 22000;

10. Quelle est la capacité des avions de type Airbus ? 
	SELECT capacite FROM avion WHERE avnom LIKE '%A%'
11. Quels sont les noms des avions différents de A310, A320, A330 et A340 ? 
	SELECT avnom FROM avion WHERE avnom NOT IN('A310','A320','A330', 'A340');
12. Quels sont les vols au départ de Port-au-Prince desservant Cap-Haïtien ? 
	SELECT * FROM  vol WHERE vd='Port-au-Prince' AND va='Cap-Haïtien'
13. Quels sont les vols au départ d'une ville et dont l'heure d'arrivée est inférieure à une certaine heure ? 
	SELECT * FROM vol WHERE vd='&1' AND heure < '&2' 
14. Donner le revenu mensuel des pilotes Port-au-Princien. 
	SELECT plnom, salaire FROM pilote WHERE ville='Port-au-Prince'
15. Donner la partie entière des salaires des pilotes. 
	SELECT FLOOR(salaire) FROM pilote;
	SELECT plnom, salaire, salaire+1500 FROM pilote;
	
16. Quel est le salaire moyen des pilotes Capois. 
	SELECT AVG(salaire) FROM pilote WHERE ville='Cap-Haïtien'
17. Trouver le nombre de vols au départ de Port-au-Prince. 
	SELECT COUNT(numvol) FROM vol WHERE vd='Port-au-Prince' 
18. Combien de destinations sont desservies au départ de Cap-Haïtien ? 
	SELECT COUNT(DISCTINCT va) FROM vol WHERE vd='Cap-Haïtien'
19. Quel est le numéro et le nom des pilotes résidant dans la ville de localisation de l’avion av_3 ? 
	SELECT plnum, plnom FROM pilote, avion WHERE ville=localisation AND avnum='av_3'
20. Donner le nom des pilotes faisant des vols au départ de Port-au-Prince sur des Airbus. 
	SELECT DISTINCT plnom FROM pilote, vol, avion WHERE pilote.plnum=vol.numPIL AND vol.numAV=avion.avnum AND avnom LIKE 'A%' AND vd='Port-au-Prince'

21. Quels sont les avions localisés dans la même ville que l'avion numéro av_10 ? 
	SELECT * FROM avion WHERE localisation=(SELECT localisation FROM avion WHERE avnum='av_10')
22. Quel est le nom des pilotes gagnant plus que le salaire moyen des pilotes ? 
	SELECT plnom FROM pilote WHERE salaire>(SELECT AVG(salaire)FROM pilote)
23. Quels sont les noms des pilotes en service au départ de Jérémie ? 
	SELECT plnom FROM pilote, vol WHERE vd='Jérémie' AND plnum=numPIL
24. Quels sont les noms des pilotes Port-au-Princiens qui gagnent plus que tous les pilotes Capois? 
	SELECT plnom FROM pilote WHERE ville='Port-au-Prince' AND salaire> ALL(SELECT DISTINCT salaire FROM pilote WHERE ville='Cap-Haïtien')
25. Donner le nom des pilotes Capois qui gagnent plus qu'un pilote Jacmélien. 
	
26. Rechercher le nom des pilotes ayant même adresse et même salaire que Donald. 
	
27. En une seule requête, donner la liste des pilotes Capois par ordre de salaire décroissant et par ordre alphabétique des noms. 
28. Quel est le nombre de vols effectués par chaque pilote ? 
29. Combien de fois chaque pilote conduit-il chaque avion ? 
30. Donner le nombre de destinations desservies par chaque avion. 
31. Donner le nombre de vols, s'il est supérieur à 2, par pilote. 
32. Quelles sont les villes à partir desquelles le nombre de villes desservies est le plus grand? 
33. Ajouter une colonne sexe à la table pilote. 
34. Insérer un nouveau pilote ayant pour code pil_11. 
35. Modifier le prénom du pilote pil_11. 
36. Supprimer le pilote pil_11. 
37. Supprimer la table vol. 
38. Supprimer la table avion ; 
39. Supprimer la table pilote ; 
40. Reprendre les insertions des trois (3) tables (pilote, avion, vol). 
41. Créer un vue
