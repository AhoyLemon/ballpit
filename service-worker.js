'use strict';

const PRECACHE = 'precache-v104e';
const RUNTIME = 'runtime';
const offlineUrl = '/offline.html';

// A list of local resources we always want to be cached.
const PRECACHE_URLS = [
  
  // Home
  '/',
  '/Themes/Giggle/css/ballpit.css',
  '/manifest.json',
  '/Themes/default/scripts/script.js',
  '/Themes/Giggle/svg/fplus-symbol.svg',
  '/Themes/Giggle/scripts/ballpit.js',
  '/Themes/Giggle/svg/snake4.svg',
  
  // Offline screen
  '/Themes/Giggle/svg/offline-snake.svg',
  '/Themes/Giggle/css/offline.css',
  offlineUrl
];


// The install handler takes care of precaching the resources we always need.
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(PRECACHE)
      .then(cache => cache.addAll(PRECACHE_URLS))
      .then(self.skipWaiting())
  );
});



/*
self.addEventListener('fetch', function(event) {
  if (event.request.mode === 'navigate' || (event.request.method === 'GET' && event.request.headers.get('accept').includes('text/html'))) {
    event.respondWith(
      fetch(event.request.url).catch(error => {
        return caches.match(offlineUrl);
      })
    );
  } else {
    return response
  }
});


*/