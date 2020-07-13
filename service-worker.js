const cacheName = 'v3.12';
const offlineUrl = '/offline.html';
const offlineFiles = [
  '/offline.html',
  '/manifest.json',
  'https://fonts.googleapis.com/css?family=Cabin:400,700,400italic,700italic',
  '/Themes/Giggle/css/ballpit.css',
  '/Themes/Giggle/css/offline.css',
  '/Themes/Giggle/svg/offline-snake.svg'
];

self.addEventListener('install', function(event) {
  var offlineRequest = new Request(offlineFiles);
  event.waitUntil(
    fetch(offlineRequest).then(function(response) {
      return caches.open('offline').then(function(cache) {
        console.log('[oninstall] Cached offline page', response.url);
        return cache.put(offlineRequest, response);
      });
    })
  );
});

self.addEventListener('fetch', function(event) {
  // Only fall back for HTML documents.
  var request = event.request;
  // && request.headers.get('accept').includes('text/html')
  if (request.method === 'GET') {
    // `fetch()` will use the cache when possible, to this examples
    // depends on cache-busting URL parameter to avoid the cache.
    event.respondWith(
      fetch(request).catch(function(error) {
        // `fetch()` throws an exception when the server is unreachable but not
        // for valid HTTP responses, even `4xx` or `5xx` range.
        console.error(
          '[onfetch] Failed. Serving cached offline fallback ' +
          error
        );
        return caches.open('offline').then(function(cache) {
          return cache.match(offlineUrl);
        });
      })
    );
  }
  // Any other handlers come here. Without calls to `event.respondWith()` the
  // request will be handled without the ServiceWorker.
});