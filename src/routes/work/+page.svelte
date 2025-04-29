<script>
	export let data;
	const { projects } = data;
</script>

<div class="container my-5">
	<h2 class="text-center mb-4">RECENT WORK</h2>
	<div class="grid gap-4 md:grid-cols-2">
		{#each projects as project}
			<div class="card p-4 border rounded shadow">
				<h3 class="text-xl font-semibold mb-2">{project.title}</h3>
				<p class="mb-3">{project.description}</p>
				<a href={project.link} target="_blank" class="text-blue-600 underline">View on GitHub</a>
			</div>
		{/each}
	</div>
</div>
