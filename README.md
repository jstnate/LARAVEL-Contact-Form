# Formulaire de contact en laravel

*Ce formulaire de contact à été fait dans un but pédagogique et n’a pas pour but d’être utiliser dans de réel projet*
*A noté que cette application tourne sous PHP 8.0 et Laravel 9.47

<br/>

## Initialisation du projet

**Etape 1 :** Cloner le repository à l’aide de cette commande ou télécharger le zip

```c
git clone git@github.com:jstnate/contact-form_laravel.git
```

**Etape 2 :** Importer les dépendences laravel
```C
composer install
```

**Etape 3 :** Configurer le mailer Gmail de la façon suivante

[Lien de la vidéo](https://youtu.be/kSir8z0QS2M](https://youtu.be/kSir8z0QS2M )

**Etape 4 :** Rendez-vous dans le fichier app/Http/Controllers/MailController, puis dans la fonction `sendEmail()`, remplacer le texte `YOUR_EMAIL_ADDRESS` par votre adresse mail

<br/>

## Utilisation du formulaire

Pour pouvoir utiliser le formulaire de contact, ajouter `/contact`à l’url afin m’accéder au formulaire.

<br/>

### Remplissez le formulaire afin de recevoir votre email :)
