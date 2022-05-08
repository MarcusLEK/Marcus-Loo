<template>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcus</title>
  </head>
  <body class="bg-raisinBlack p-10">
    <!-- <div class="snap-y snap-mandatory h-screen overflow-scroll scroll-smooth"> -->
      <div class="snap-center h-screen flex items-center justify-center">
        <div class="grid grid-cols-3">
          <span class="col-span-12 mb-5 text-5xl text-white font-bold">Hello, I'm <span class="text-goGreen ml-2">Marcus Loo</span>.</span>
          <span class="col-span-12 mb-5 text-5xl text-white font-bold">Web Developer and Tech Enthusiast</span>
          <div class="col-span-12 md:col-span-1 text-xl text-center text-white border-2 rounded-full p-5 cursor-pointer hover:border-goGreen transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-goGreen duration-300">
            Download CV
          </div>
        </div>
      </div>

      <div class="snap-center h-screen flex justify-center">
         <div id="contactme">
          <span class="text-white text-5xl font-bold flex justify-center mb-5">MY EXPERIENCES</span>
          <div class="grid grid-row-2">
            <div class="grid grid-cols-12">
              <svg xmlns="http://www.w3.org/2000/svg" class="col-span-2 h-14 w-14 text-white bg-goGreen rounded-full p-2 my-auto" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
              </svg>
              <div class="col-span-10 md:col-span-2 bg-gray-700 rounded-full p-4 text-white text-center my-auto">
                <span>2021 - PRESENT</span>
              </div>
            </div>
            <div class="grid grid-cols-12">
              <div class="border-l w-1 ml-7"></div>
              <div class="col-start-3 col-span-full p-4 text-white text-xl my-auto mb-10">
                <div class="text-3xl mb-5">VE Capital Pte. Ltd. - Laravel Developer</div>
                <div class="block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum eaque fugiat suscipit quod neque, dolore delectus labore, nobis dignissimos consectetur sed minima nisi doloribus officiis! Doloribus accusantium dolorum quibusdam!</div>
              </div>
            </div>
          </div>
          <div class="grid grid-row-2">
            <div class="grid grid-cols-12">
              <svg xmlns="http://www.w3.org/2000/svg" class="col-span-2 h-14 w-14 text-white bg-goGreen rounded-full p-2 my-auto" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
              </svg>
              <div class="col-span-10 md:col-span-2 bg-gray-700 rounded-full p-4 text-white text-center my-auto">
                <span>2021 - PRESENT</span>
              </div>
            </div>
            <div class="grid grid-cols-12">
              <div class="border-l w-1 ml-7"></div>
              <div class="col-start-3 col-span-full p-4 text-white text-xl my-auto mb-10">
                <div class="text-3xl mb-5">Hiredly (formerly known as WOBB) - Intern Developer</div>
                <div class="block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum eaque fugiat suscipit quod neque, dolore delectus labore, nobis dignissimos consectetur sed minima nisi doloribus officiis! Doloribus accusantium dolorum quibusdam!</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="snap-center h-screen flex items-center justify-center">
          <div class="grid grid-rows-2">
            <div class="mb-20">
              <span class="text-white text-4xl font-bold flex justify-center mb-3">Frameworks</span>
                <div class="flex items-center justify-center flex-wrap gap-3 md:gap-2">
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3 pointer-events-none">
                    Laravel
                  </span>
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3 pointer-events-none">
                    Vue
                  </span>
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3 pointer-events-none">
                    Flutter
                  </span>
              </div>
            </div>
            <div>
              <span class="text-white text-4xl font-bold flex justify-center mb-3">Languages</span>
                <div class="flex items-center justify-center flex-wrap gap-3 md:gap-2">
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3 pointer-events-none">
                    PHP
                  </span>
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3 pointer-events-none">
                    Javascript
                  </span>
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3 pointer-events-none">
                    SQL
                  </span>
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 mx-3 pointer-events-none">
                    Dart
                  </span>
              </div>
            </div>
          </div>
      </div>

      <div class="snap-center h-screen flex items-center justify-center">
        <div id="contactme">
          <span class="text-white text-6xl font-bold flex justify-center mb-5">Contact <span class="text-goGreen ml-2">Me</span></span>
          <div class="text-white text-xl mb-10">
            <span class="block">Have a great idea and want to bring it to life? Lets Talk!</span>
          </div>
          <div class="flex justify-center items-center">
            <div class="grid grid-rows-6">
              <div class="mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white inline" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                <span class="inline text-white text-xl my-auto ml-5">Malaysia, KL</span>
              </div>
              <div class="mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white inline" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                <span class="inline text-white text-xl my-auto ml-5">Marcuslooek@gmail.com</span>
              </div>
              <div class="text-xl text-center text-white border-2 rounded-full p-5 cursor-pointer hover:border-goGreen transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-goGreen duration-300">
                Download CV
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- </div> -->
  </body>
</template>
