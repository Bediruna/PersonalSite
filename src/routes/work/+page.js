import { localProjects } from '$lib/WorkData.js';

export async function load() {
    let getProjectsLocally = true;

    // WIP: hit rate limit for github api, so will use local data until I implement a better solution
    if(getProjectsLocally){
        return { projects: localProjects };
    }

    try {
        const res = await fetch('https://api.github.com/users/bediruna/repos');

        if (!res.ok) {
            throw new Error(`GitHub API error: ${res.status} ${res.statusText}`);
        }

        const data = await res.json();

        const projects = data
            .sort((a, b) => new Date(b.pushed_at) - new Date(a.pushed_at))
            .slice(0, 5);

        return { projects };
    } catch (error) {
        console.error('Error loading projects from GitHub API:', error);

        // Fallback to local data
        return { projects: localProjects };
    }
}
