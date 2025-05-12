# Histoires interactives

## Projet fullstack Laravel + Vue.js

Ce projet est une application web interactive dans laquelle l'utilisateur incarne un archéologue explorant un labyrinthe mystique. L'histoire évolue selon les choix du joueur. C'est une application en Single Page Application (SPA) avec une API REST, une authentification, et un système de rôles (admin/user).

<img src="/public/mazeIcon.svg">

---

## 📋 Table des matières

- [Objectifs du projet](#-objectifs-du-projet)
- [Architecture technique](#-architecture-technique)
- [Fonctionnalités implémentées](#-fonctionnalités-implémentées)
- [Modèle de données](#-modèles-de-données)
- [Guide d'installation](#-guide-dinstallation)
- [Sécurité](#-sécurité)
- [Technologies utilisées](#-technologies-utilisées)

---

## ✨ Objectifs du projet

- Créer une fiction interactive multi-plateforme stylisée "pixel rétro"
- Implémenter une SPA performante avec Vue.js et une API Laravel
- Intégrer un système de rôles (admin/user) pour la gestion des contenus
- Favoriser l'autonomie narrative à travers des choix dynamiques et des embranchements multiples

---

## 🛠️ Architecture technique

### Backend — Laravel

- API RESTful pour gérer les histoires, chapitres, et choix
- Authentification personnalisée
- Middleware `admin` pour la protection des routes sensibles
- Form Requests pour la validation sécurisée des données

### Frontend — Vue.js

- SPA avec Vue Router
- Composants réutilisables : ChapterDisplay, Header, etc.
- Gestion dynamique du routing et de l’état
- Requêtes HTTP via composables

---

## 🌟 Fonctionnalités implémentées

### Authentification et rôles

- Inscription, connexion et déconnexion via formulaire sécurisé
- Redirection automatique en fonction de l’état d’authentification
- Middleware `admin` protégeant les routes de création, modification et suppression

### Interaction narrative

- Accès à la liste des histoires après login
- Navigation fluide entre chapitres selon les choix
- Choix cliquables modifiant la progression

### Interface utilisateur

- Design inspiré du rétro gaming (pixel, vert néon)
- Responsive (mobile, tablette, desktop)
- Effets visuels au survol et transitions

---

## 📚 Modèle de données

### Utilisateur (users)

- id, name, email, password, role (admin ou user)

### Histoire (stories)

- id, title, description

### Chapitre (chapters)

- id, story_id (clé étrangère), number, content

### Choix (choices)

- id, chapter_id, text, target_chapter_id

---

## 🚀 Guide d'installation

### Prérequis

- PHP >= 8.2
- Composer
- Node.js et npm
- MySQL

### Étapes

1. Cloner le projet

```
git clone https://github.com/Kemxr/WebMobUI52-fullstack.git
cd WebMobUI52-fullstack
```

2. Installer les dépendances

```
composer install
npm install
```

3. Configurer l’environnement

```
cp .env.example .env
php artisan key:generate
```
4. Créer la base de donnée SQLite

```
touch database/database.sqlite
```

5. Configurer `.env` avec vos infos SQLite.
```
DB_CONNECTION=sqlite
```

6. Lancer la base de données

```
php artisan migrate --seed
```

7. Build le projet

```
npm run dev
```

8. Démarrer les serveur

```
composer run dev
```
Ouvrir un browser et se connecter a localhost

9. Se connecter pour tester

### Admin

email : admin@example.com

password : Password123!

### Guest

email : guest@example.com

password : Password123!

---

## 🔐 Sécurité

- Validation des formulaires via FormRequest
- Middleware `auth` + `admin`
- Protection CSRF
- Gestion des sessions Laravel

---

## 💻 Technologies utilisées

### Backend

- Laravel 12
- Authentification personnalisée
- Eloquent ORM

### Frontend

- Vue.js 3
- Vue Router

### Autres

- SQLite (base de données)
- Composer / NPM
- Vite



## **🧩**Conclusion

Ce projet de plateforme d’histoires interactives démontre l'intégration complète entre une interface moderne (Vue.js) et un backend robuste (Laravel). Il permet de lire, gérer et enrichir des récits interactifs avec des choix narratifs dynamiques. *Le Labyrinthe des Ombres* n’est qu’un exemple : le système est conçu pour accueillir un catalogue croissant d’histoires. Le projet allie narration immersive, architecture fullstack modulaire et extensibilité future.