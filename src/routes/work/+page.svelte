<script>
    import GitHubIcon from "../../components/icons/GitHubIcon.svelte";
    import LinkIcon from "../../components/icons/LinkIcon.svelte";
    import BlogIcon from "../../components/icons/BlogIcon.svelte";
    export let data;
    const { projects } = data;
</script>

<div class="container">
    <h2 class="text-center mb-4">RECENT WORK</h2>
    <div class="row">
        {#each projects as project}
            <div class="col-12 col-md-6 mb-4">
                <div class="card p-4 border rounded shadow">
                    <h3 class="text-xl font-semibold mb-2">{project.name}</h3>
                    <p class="mb-3">{project.description}</p>
                    <div class="d-flex align-items-center gap-3">
                        <a
                            href={project.html_url}
                            target="_blank"
                            class="text-primary text-decoration-none"
                        >
                            <GitHubIcon size={24} />
                        </a>

                        <a
                            href={`/blog/${project.blog_slug}`}
                            class="text-primary text-decoration-none"
                        >
                            <BlogIcon size={24} />
                        </a>

                        {#if project.homepage}
                            <a
                                href={project.homepage}
                                target="_blank"
                                class="text-decoration-none"
                            >
                                <LinkIcon size={24} />
                            </a>
                        {/if}
                    </div>
                </div>
            </div>
        {/each}
    </div>
</div>
