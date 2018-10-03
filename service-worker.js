'use strict';

const cacheName = 'v1.3';
const offlineUrl = '/offline.html';

self.addEventListener('install', e => {
  // once the SW is installed, go ahead and fetch the resources
  // to make this work offline
  e.waitUntil(
    caches.open(cacheName).then(cache => {
      return cache.addAll([
        '/',
        'https://ballp.it/index.php',
        'https://ballp.it/Themes/Giggle/css/ballpit.css?lastUpdated=11.09.2017',
        'https://ballp.it/Themes/default/scripts/script.js?fin20',
        'https://ballp.it/Themes/Giggle/svg/fplus-symbol.svg',
        'https://ballp.it/Themes/Giggle/scripts/ballpit.js?updated=06.04.18',
        'https://ballp.it/Themes/Giggle/svg/snake4.svg'
      ]).then(() => self.skipWaiting());
    })
  );
});