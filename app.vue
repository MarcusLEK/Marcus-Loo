<template>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcus</title>
  </head>
  <body class="min-w-min bg-raisinBlack">
    <nav class="bg-white"></nav>
    <div id="introduction" class="mb-5 p-5 min-h-screen flex items-center justify-center">
      <div class="grid grid-rows-2 text-white text-4xl font-bold mb-3">
        <span>Hello, I'm <span class="text-goGreen ml-2">Marcus Loo</span>.</span>
        <span>Web Developer and Tech Enthusiast</span>
      </div>
    </div>

    <div id="frameworktools" class="mb-5 p-5 min-h-screen">
      <div class="mb-5">
        <span class="text-white text-4xl font-bold flex justify-center mb-3">Frameworks</span>
          <div class="flex items-center justify-center">
            <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3">
              Laravel
            </span>
            <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3">
              Vue
            </span>
            <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3">
              Flutter
            </span>
        </div>
      </div>
      <div class="mb-5">
        <span class="text-white text-4xl font-bold flex justify-center mb-3">Languages</span>
          <div class="flex justify-center">
            <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3">
              PHP
            </span>
            <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3">
              Javascript
            </span>
            <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3">
              SQL
            </span>
            <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3">
              Dart
            </span>
        </div>
      </div>
    </div>

    <div id="contactme" class="mb-5 p-5">
      <span class="text-white text-4xl font-bold flex justify-center mb-3">Contact <span class="text-goGreen ml-2">Me</span></span>
      <div class="flex justify-center text-white text-xl mb-3">
        <span>Have an idea and want to bring it to life?</span>
      </div>
      <div class="flex justify-center">
        <div class="grid grid-rows-6">
          <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white inline" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            <span class="inline text-white text-xl my-auto ml-5">Malaysia, KL</span>
          </div>
          <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white inline" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
            </svg>
            <span class="inline text-white text-xl my-auto ml-5">Marcuslooek@gmail.com</span>
          </div>
        </div>
      </div>
    </div>

      <footer class="border-t p-5">
        <div class="grid grid-cols-12 gap-4">
          <div class="col-span-12 md:col-span-3 grid grid-rows-2">
            <span class="text-white">All Rights Reserved</span>
            <span class="text-white">Built with <img class="ml-3 inline object-scale-down w-44" src="/images/tailwindcss-logotype-white.svg" alt="tailwindlogo"></span>
          </div>
        </div>
      </footer>
  </body>
</template>
