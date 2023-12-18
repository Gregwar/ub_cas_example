# Exemple minimum de CAS UB

Ce dépôt contient un exemple minimum d'application PHP (brut) utilisant le CAS UB.

## Paramétrage d'un domaine local (ex: `dev.u-bordeaux.fr`)

Il faut que le nom de domaine de votre application contienne
`u-bordeaux.fr` pour que l'application soit autorisée à utiliser le CAS UB.
En développement, vous pouvez ajouter la ligne suivante dans votre fichier
`/etc/hosts`:

```
127.0.0.1 dev.u-bordeaux.fr
```

## Installation des dépendances:

Installez [Composer](https://getcomposer.org/download/), puis lancez la commande:

```
composer install
```

## Lancement de la démo:

Lancez le serveur PHP:

```
php -S localhost:8080
```

Et connectez-vous sur http://dev.u-bordeaux.fr:8080