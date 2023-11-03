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
	});
</script>
