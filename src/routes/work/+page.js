export async function load() {
	const res = await fetch('https://api.github.com/users/bediruna/repos');
	const data = await res.json();

	const projects = data
		.sort((a, b) => new Date(b.updated_at) - new Date(a.updated_at))
		.slice(0, 5)
		.map(repo => ({
			title: repo.name,
			description: repo.description || 'No description provided.',
			link: repo.html_url
		}));

	return { projects };
}
