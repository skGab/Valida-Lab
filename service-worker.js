const cacheName = 'cache-v1';
const urlsToCache = [
  '/',
  '/index.php',
  '/assets/css/compressed/custom.min.css',
  '/vendor/js/custom.js',
  '/assets/imgs/logo_valida.svg',
  '/assets/imgs/logo_grupo-polar.svg',
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(cacheName).then((cache) => {
      return cache.addAll(urlsToCache);
    })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      return response || fetch(event.request);
    })
  );
});
