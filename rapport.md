# Présentation d'un rapport technique sur le logiciel de gestion de versions décentralisé Git

### Par Justin Duplessis

#### Document basé sur la [documentation officielle Git](http://git-scm.com/doc) et [l'encyclopédie libre Wikipédia](https://wikipedia.org) en Mars 2014

#### Publié sous la licence Creative Commons CC BY-NC-SA 4.0 
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.fr"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">
###### Version du document: 0.0.1

---

### Table des matières

1. [Qu'est qu'un logiciel de gestion de versions ?](#whatis)
    * 1.1 [Centralisé](#centralise)
    * 1.2 [Décentralisé](#decentralise)
    * 1.3 [Local](#local)
2. [Fonctionnement]/(#basic)
    * 2.1 [Les instantanés]/(#snapshots)
    * 2.2 [Les différences]/(#differences)
    * 2.3 [Vérification de l'intégrité]/(#integrity)
3. [Les trois états des fichiers]/(#stages)
    * 3.1 [Répertoire de travail / Working directory]/(#edited)
    * 3.2 [Zone d'index / Staging]/(#staged)
    * 3.3 [Validation / Commit]/(#commited)
4. [Utilisation de Git]/(#usage)
    * 4.1 [Intialiser un environnement]/(#initclone)
        * 4.1.1 [Cloner]/(#clone)
        * 4.1.2 [Créer]/(#init)
    * 4.2 [Travailler avec les instantanés]/(#commits)
        * [Ajouter des fichiers aux modifications]/(#stage)
        * [Enlever des modifications locales]/(#unstage)
        * [Enregistrer les modifications]/(#commit)
        * [Comparer les modifications]/(#diff)
        * [Ingorer des fichiers]/(#gitignore)
    * 4.3 [Travailler avec les branches]/(#branches)
        * [Créer une nouvelle branche]/(#branch)
        * [Changer de branche]/(#checkout)
        * [Fusionner des branches]/(#merge)
        
---
    
### <a name="whatis"></a> 1. Qu'est qu'un logiciel de gestion de versions ?

Un logiciel de gestion de versions est un logiciel qui gère et conserve un ensemble de fichier et de leurs différentes versions à travers le temps dans une arborescence que l'ont appel dépôt.
L'utilisation des logiciels de version est surtout utilisé pour gérer du code source, mais peut s'appliquer à d'autres utilisations.


Il existe trois types de logiciels de gestion de versions:

* Centralisé
* Décentralisé
* Local

La majeure différence des gestionnaire de versions se fait sur la manière donc les clients enregistrent leurs modifications dans le dépôt.

---

#### <a name="centralise"></a> 1.1 Centralisé
Un logiciel de gestion de versions centralisé enregistre le dépôt à un seul endroit et les client n'ont que le minimum sur leur poste.


Un gestionnaire de versions centralisé requiert donc un serveur qui a comme rôle de conserver l'arborescence et ses modifications et d'interragir avec les clients afin d'enregistrer de nouvelles modifications et distribuer l'arborescence.

Toutes les opérations relatives aux branches et aux consignations ne peuvent être enregistrées qu'avec une connexion au serveur.
Dans le cas d'une panne, les utilisateurs ne peuvent aller chercher d'anciennes modifications ni en enregistrer de nouvelles car ils n'ont que leur version courante des fichiers.


Subversion (SVN) de la fondation Apache et Team Foundation Server (TFS) de Microsoft sont de bons exemples de logiciels de gestion de versions centralisés encore beaucoup utilisés.

---

#### <a name="decentralise"></a> 1.2 Décentralisé

Un gestionnire de versions décentralisé ne requiert pas de serveur central car chaque client a l'entièreté des données relatives à l'arborescence ainsi que ses modifications.

Toutes les opérations relatives aux consignations et aux branches sont traités localement par le gestionnaire de versions installé. Ensuite, le client peut décider de publier sur un serveur ses modifications.


Il est à noter que le serveur et les clients vont avoir exactement les mêmes données.
Si le serveur tombe en panne ou est inaccessible, les utilisateurs peuvent tout de même enregistrer des modifications sur leur poste et les envoyer plus tard au serveur.


Lors de l'envoie de nouvelles modifications, le client doit d'abord être à la même version que le serveur.


BitKeeper est un logiciel de gestion de versions décentralisé propriétaire qui a fortement inspiré le développement de Git et Mercurial.

---

#### <a name="local"></a> 1.3 Local

Similaire au gestionnaire décentralisé, mais ne supporte pas la publication à un serveur. 

N'est utile que dans les cas où le projet n'est modifié que sur un poste.

Les logiciels de gestion de versions locaux ne sont pas fait pour partager, mais permetent la plupart du temps de naviguer avec les branches et les consignations.

---

#### Git

Git est un logiciel libre écrit par Linus Torvalds et publié sous la license GNU GPL v2 en avril 2005.
Ce logiciel a été conçu pour ne pas avoir besoin d'un serveur centralisé afin de gérer les modifications d'une arborescence visant un support de développement non-linéaire.


L'utilisation de git peut aussi se faire sans connexion réseau ou serveur dans le cas où une personne veut garder la gestion de versions sur une machine locale.
Dans le cas d'une utilisation à plusieurs, git permet la publication à un serveur.


Le protocole git peut être utilisé lors de la publication ou les protocoles standards SSH, HTTPS, HTTP, FTP et rsync.

---

[Retour à la page d'acceuil](index.html)

---

<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.fr"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Rapport technique sur Git</span> de <a xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/drfoliberg" property="cc:attributionName" rel="cc:attributionURL">Justin Duplessis</a> est mis à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.fr">licence Creative Commons Attribution - Pas d’Utilisation Commerciale - Partage dans les Mêmes Conditions 4.0 International</a>.

---