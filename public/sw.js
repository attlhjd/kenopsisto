// sw.js

const CACHE_NAME = 'site-cache-v1';

self.addEventListener('install', (event) => {
    console.log('Service Worker: Installing...');
    event.waitUntil(
        fetch('/service-worker-assets').then(response => response.json()).then(assets => {
            caches.open(CACHE_NAME)
                .then((cache) => {
                    console.log('Service Worker: Caching Files');
                    return cache.addAll(assets);
                })
        }).catch(err => console.error('Failed to fetch asset list:', err))
    );
});

self.addEventListener('activate', (event) => {
    const currentCaches = [CACHE_NAME];
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames.map(cacheName => {
                    if (!currentCaches.includes(cacheName)) {
                        return caches.delete(cacheName);
                    }
                })
            );
        }).then(() => {
            self.clients.claim(); // Claim clients immediately
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
