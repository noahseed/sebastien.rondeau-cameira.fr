# sebastien.rondeau-cameira.fr

Site personnel statique de Sébastien RONDEAU-CAMEIRA, publié sur GitHub Pages.

## Développement

Aucune compilation n’est nécessaire. Pour ouvrir le site localement :

```sh
python3 -m http.server 8000
```

## Tests

Avec Node.js 22 ou ultérieur et pnpm 10 :

```sh
pnpm install --frozen-lockfile
pnpm exec playwright install chromium
pnpm test
```

Les tests vérifient les six rubriques au clic et au défilement sur cinq largeurs,
le menu mobile après redimensionnement, `aria-current`, le carrousel au clavier,
le retour en haut, les dimensions des images et le lien d’évitement sans JavaScript.
Ils s’exécutent également dans GitHub Actions à chaque push et pull request.

Pour utiliser un Chrome déjà installé, définir `PLAYWRIGHT_CHROMIUM_EXECUTABLE`.
Le chargement des ressources CDN nécessite un accès Internet ; leurs empreintes
SRI sont vérifiées par le navigateur.

## Images

Les versions WebP optimisées utilisées par la page sont dans `images/optimized/`.
Le portrait JPEG `images/me.jpg` est conservé pour les aperçus de partage Open Graph.
Les autres images non utilisées ont été supprimées ; leurs originaux restent
récupérables dans l’historique Git.
