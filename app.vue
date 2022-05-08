<template>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcus Loo - Web Portfolio</title>
  </head>
  <body class="bg-raisinBlack">
    <!-- <div class="snap-y snap-mandatory h-screen overflow-scroll scroll-smooth"> -->
      <div class="p-10">
        <div class="snap-center h-screen flex items-center justify-center">
          <div class="grid grid-cols-3">
            <span class="col-span-12 mb-5 text-5xl text-white font-bold">Hello, I'm <span class="text-goGreen ml-2">Marcus Loo</span>.</span>
            <span class="col-span-12 mb-5 text-5xl text-white font-bold">Web Developer and Tech Enthusiast</span>
            <a href="https://drive.google.com/file/d/1yYHxsNtZJ4dXXBq1K9iRKLL6rCe66syB/view?usp=sharing" target="_blank" class="col-span-12 md:col-span-1 text-xl text-center text-white border-2 rounded-full p-5 cursor-pointer hover:border-goGreen transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-goGreen duration-300">
              Download CV
            </a>
          </div>
        </div>

        <div class="snap-center h-screen flex items-center justify-center">
          <div>
            <span class="text-white text-5xl font-bold flex justify-center mb-5">ABOUT <span class="text-goGreen ml-2">ME</span></span>
            <div class="text-white text-xl">
              Technology has been a huge passion of mine especially being able to learn and use tech in different ways imaginable.
              I am able to multi task as well as highly open to learning new things even if its not related to my field. I strongly believe in work culture and team work. I always believe that in tech it is a never ending journey of growth and progress.
            </div>
          </div>
        </div>

        <div class="snap-center flex justify-center">
           <div id="contactme">
            <span class="text-white text-5xl font-bold flex justify-center mb-5">MY <span class="text-goGreen ml-2">EXPERIENCES</span></span>
            <div class="grid grid-row-2">
              <div class="grid grid-cols-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="col-span-2 h-14 w-14 text-white bg-goGreen rounded-full p-2 my-auto" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                <div class="col-span-10 md:col-span-2 bg-gray-700 rounded-full p-4 text-white text-center my-auto">
                  <span>Oct 2020 - PRESENT</span>
                </div>
              </div>
              <div class="grid grid-cols-12">
                <div class="border-l w-1 ml-7"></div>
                <div class="col-start-3 col-span-full p-4 text-white text-xl my-auto mb-10">
                  <div class="text-3xl mb-5">VE Capital Pte. Ltd. - Laravel Developer</div>
                  <div class="block ml-5 mb-10">
                    <ul class="list-disc">
                      <li>Actively involve in the planning of the project from the sprint planning phase until the deployment phase</li>
                      <li>Maintain, improve and debug existing application built by the company</li>
                      <li>Review and merge PR requests</li>
                    </ul>
                  </div>

                  <div class="text-3xl mb-3">Achievements</div>
                  <div class="block ml-5">
                    <ul class="list-disc">
                      <li>Successfully encourage the company to implement scrum</li>
                      <li>Implemented proper mobile app architecture using GetX</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid grid-row-2">
              <div class="grid grid-cols-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="col-span-2 h-14 w-14 text-white bg-goGreen rounded-full p-2 my-auto" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                <div class="col-span-10 md:col-span-2 bg-gray-700 rounded-full p-4 text-white text-center my-auto">
                  <span>Mar 2020 - Jun 2020</span>
                </div>
              </div>
              <div class="grid grid-cols-12">
                <div class="border-l w-1 ml-7"></div>
                <div class="col-start-3 col-span-full p-4 text-white text-xl my-auto mb-10">
                  <div class="text-3xl mb-5">Hiredly (formerly known as WOBB) - Intern Developer</div>
                  <div class="block ml-5 mb-5">
                    <ul class="list-disc">
                      <li>Maintenance of WOBB mobile app on Android and IOS</li>
                      <li>Implementation of new features for mobile app</li>
                      <li>Creating and deploying mobile app APK for internal Alpha testing</li>
                      <li>Managing and integrating of Google/Facebook analytics</li>
                      <li>Manage and review resumes/cv for QC</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="snap-center h-screen flex items-center justify-center">
          <div>
            <span class="text-white text-5xl font-bold flex justify-center mb-5">MY <span class="text-goGreen ml-2">SKILLS</span></span>
            <div class="grid grid-rows-2">
              <div class="mb-10">
                <span class="text-white text-4xl font-bold flex justify-center mb-3">Frameworks</span>
                  <div class="flex items-center justify-center flex-wrap gap-3">
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      LARAVEL
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      VUE
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      FLUTTER
                    </span>
                </div>
              </div>
              <div class="mb-10">
                <span class="text-white text-4xl font-bold flex justify-center mb-3">Languages</span>
                  <div class="flex items-center justify-center flex-wrap gap-3">
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      PHP
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      HTML
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      CSS
                    </span>
                    
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      JAVASCRIPT
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      SQL
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      DART
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      C++
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      PYTHON
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      JAVA
                    </span>
                    <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                      BASH
                    </span>
                </div>
              </div>
              <div class="mb-10">
                <span class="text-white text-4xl font-bold flex justify-center mb-3">Others</span>
                <div class="flex items-center justify-center flex-wrap gap-3">
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                    LINUX
                  </span>
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                    DOCKER
                  </span>
                  <span class="inline-flex items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-slate-500 bg-white ring-1 ring-slate-900/10 pointer-events-none">
                    MOBILE DEVELOPMENT
                  </span>
                </div>
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
                <a href="linkedin.com/in/marcus-loo/" class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white inline" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd" />
                  </svg>
                  <span class="inline text-white text-xl my-auto ml-5">linkedin.com/in/marcus-loo/</span>
                </a>
                <a href="https://drive.google.com/file/d/1yYHxsNtZJ4dXXBq1K9iRKLL6rCe66syB/view?usp=sharing" target="_blank" class="text-xl text-center text-white border-2 rounded-full p-5 cursor-pointer hover:border-goGreen transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 hover:bg-goGreen duration-300">
                  Download CV
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <footer class="border-t border-white text-white p-5">
        <div class="grid grid-cols-12">
          <div class="col-span-4 grid grid-cols-12">
            <div class="col-span-12 md:col-span-2 my-auto">
              Built With
            </div>
            <img class="col-span-12 md:col-span-3 object-scale-down my-auto" src="/images/tailwindcss-logotype-white.svg" alt="tailwindlogo">
          </div>
          <a class="col-start-12 col-span-1 my-auto flex justify-end" href="https://github.com/MarcusLEK/Marcus-Loo">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
          </a>
        </div>
      </footer>
    <!-- </div> -->
  </body>
</template>
