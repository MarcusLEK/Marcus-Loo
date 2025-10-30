<template>
	<div class="bg-raisinBlack">
		<Introduction />

		<About />

		<Experiences />

		<Skills />

		<ContactMe />

		<Footer />
	</div>
</template>

<script setup lang="ts">
	useHead({
		titleTemplate: () => {
			return "Marcus Loo - Web Portfolio";
		},
    meta: [
      { name: 'description', content: 'Technology has been a huge passion of mine especially being able\n' +
            '\t\t\t\tto learn and use tech in different ways imaginable. I am able to\n' +
            '\t\t\t\tmulti task as well as highly open to learning new things even if\n' +
            '\t\t\t\tits not related to my field. I strongly believe in work culture\n' +
            '\t\t\t\tand team work. I always believe that in tech it is a never\n' +
            '\t\t\t\tending journey of growth and progress.' },
      { name: 'keywords', content: 'MARCUS LOO EE KHANG, Software Engineer, Fullstack Developer' },
      { name: 'og:title', content: 'MARCUS LOO EE KHANG | Software Engineer | Fullstack Developer' },
      { name: 'og:description', content: 'Technology has been a huge passion of mine especially being able\n' +
            '\t\t\t\tto learn and use tech in different ways imaginable. I am able to\n' +
            '\t\t\t\tmulti task as well as highly open to learning new things even if\n' +
            '\t\t\t\tits not related to my field. I strongly believe in work culture\n' +
            '\t\t\t\tand team work. I always believe that in tech it is a never\n' +
            '\t\t\t\tending journey of growth and progress.' },
      { name: 'og:description', content: 'https://marcus-portfolio.vercel.app' },
      { name: 'og:locale', content: 'en_US' },
      { name: 'og:type', content: 'website' },
    ],
	});
</script>
