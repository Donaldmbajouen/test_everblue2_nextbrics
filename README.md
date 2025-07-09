# Next Bricks - Dashboard Laravel

## 📋 Description

Next Bricks dashboard est un dashboard développé avec Laravel. Le projet intègre des composants réutilisables et une architecture modulaire.

## 🚀 Fonctionnalités

### Interface Utilisateur
- **Design moderne** : Interface sombre avec accents violet-bleu
- **Navigation dynamique** : Sidebar avec menus déroulants et flyouts
- **Composants réutilisables** : Architecture modulaire avec Blade components
- **Responsive** : Adaptation automatique aux différentes tailles d'écran

### Composants Principaux

#### 🎯 Glowing Sphere
- **Sphère brillante** : Composant central avec dégradé violet-bleu
- **Animation fluide** : Effet de pulsation et glow dynamique
- **Ombre considérable** : Effet visuel impressionnant
- **Personnalisable** : Taille et couleurs configurables

#### 📁 Navigation Sidebar
- **Menu hiérarchique** : Structure de navigation en arborescence
- **Flyouts interactifs** : Panneaux latéraux au survol
- **Icônes dynamiques** : Système d'icônes FontAwesome
- **États visuels** : Hover effects et transitions fluides

#### 🗂️ Structure Explorer
- **Style VSCode** : Explorateur de fichiers inspiré de VSCode
- **Hiérarchie claire** : Organisation des dossiers et fichiers
- **Icônes de type** : Filtrage par catégorie de fichiers
- **Interaction intuitive** : Navigation fluide

## 🛠️ Technologies Utilisées

### Backend
- **Laravel 12** : Framework PHP moderne
- **Blade Templates** : Système de templating
- **Composer** : Gestion des dépendances

### Frontend
- **Bootstrap 5** : Framework CSS responsive
- **FontAwesome** : Icônes vectorielles
- **CSS3** : Animations et effets visuels
- **Vite** : Build tool moderne

### Composants
- **Blade Components** : Architecture modulaire
- **Props dynamiques** : Configuration flexible
- **CSS personnalisé** : Styles uniques

## 📁 Structure du Projet

```
nextbrics_testlaravel/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── Providers/
├── resources/
│   ├── views/
│   │   ├── components/
│   │   │   ├── glowing-sphere.blade.php
│   │   │   ├── nav-item.blade.php
│   │   │   ├── button.blade.php
│   │   │   ├── icon-button-block.blade.php
│   │   │   └── icon-button-sidebar.blade.php
│   │   └── welcome.blade.php
│   ├── css/
│   └── js/
├── routes/
├── config/
└── database/
```

## 🎨 Composants Développés

### 1. Glowing Sphere (`glowing-sphere.blade.php`)
```blade
<x-glowing-sphere size="300px">
    <h2>Next Bricks</h2>
    <p>Innovation & Technology</p>
</x-glowing-sphere>
```

**Caractéristiques :**
- Dégradé violet-bleu diagonal
- Animation de pulsation
- Ombre considérable
- Taille configurable

### 2. Navigation Item (`nav-item.blade.php`)
```blade
<x-nav-item
    label="Tableau de bord"
    icon="home"
    :active="true"
    :items="[...]"
/>
```

**Caractéristiques :**
- Menu hiérarchique
- Flyouts au survol
- Icônes dynamiques
- États visuels

### 3. Structure Explorer
- Interface style VSCode
- Hiérarchie de dossiers
- Icônes de filtrage
- Navigation intuitive

## 🚀 Installation

### Prérequis
- PHP 8.1+
- Composer
- Node.js & NPM

### Étapes d'installation

1. **Cloner le projet**
```bash
git clone [repository-url]
cd nextbrics_testlaravel
```

2. **Installer les dépendances**
```bash
composer install
npm install
```

3. **Configuration**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Base de données**
```bash
php artisan migrate
php artisan db:seed
```

5. **Build des assets**
```bash
npm run dev
```

6. **Démarrer le serveur**
```bash
php artisan serve
```

## 🎯 État Actuel du Développement

### ✅ Terminé
- [x] Architecture de base Laravel
- [x] Interface utilisateur moderne
- [x] Composant Glowing Sphere
- [x] Système de navigation dynamique
- [x] Structure Explorer style VSCode
- [x] Composants Blade réutilisables
- [x] Design responsive
- [x] Animations et transitions

## 🎨 Design System

### Couleurs
- **Violet** : `#8B5CF6`, `#7C3AED`, `#6D28D9`
- **Bleu** : `#1D4ED8`, `#2563EB`, `#3B82F6`
- **Fond sombre** : `#1A1A1A`
- **Accents** : `#2a2a2a`

### Typographie
- **Titres** : Font-weight bold
- **Corps** : Font-weight normal
- **Icônes** : FontAwesome

### Animations
- **Transitions** : 0.2s ease
- **Hover effects** : Changement de couleur et scale
- **Glow effects** : Animations de pulsation

## 🤝 Contribution

1. Fork le projet
2. Créer une branche feature (`git checkout -b feature/AmazingFeature`)
3. Commit les changements (`git commit -m 'Add some AmazingFeature'`)
4. Push vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrir une Pull Request

## 📄 Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.


