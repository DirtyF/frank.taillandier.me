workbox.core.setCacheNameDetails({
  prefix: 'frank-taillandier',
  suffix: 'v1',
  precache: 'precache',
  runtime: 'runtime-cache'
})

// let Service Worker take control of pages ASAP
workbox.skipWaiting()
workbox.clientsClaim()

// let Workbox handle our precache list
workbox.precaching.precacheAndRoute(self.__precacheManifest)

// use `networkFirst` strategy for `*.html`, like all my posts
workbox.routing.registerRoute(
    /\.html$/,
    workbox.strategies.networkFirst()
)

// use `cacheFirst` strategy for images
workbox.routing.registerRoute(
    /assets\/(img|favicons)/,
    workbox.strategies.cacheFirst()
)

// third party files
workbox.routing.registerRoute(
    /^https?:\/\/res.cloudinary.com/,
    workbox.strategies.staleWhileRevalidate()
);
