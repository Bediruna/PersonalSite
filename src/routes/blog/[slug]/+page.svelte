<script>
    import { page } from '$app/stores';
    import { blogPosts } from '$lib/BlogData.js';

    // Subscribe to the $page store to access route parameters
    $: slug = $page.params.slug;

    // Find the blog post by id
    $: blogPost = blogPosts.find(post => post.slug === slug);
</script>

<!-- {#if blogPost} -->
    <article>
        <h1>{blogPost.title}</h1>
        <p><strong>Author:</strong> {blogPost.author}</p>
        <p><strong>Published:</strong> {new Date(blogPost.published_at).toLocaleDateString()}</p>
        <p><strong>Last Updated:</strong> {new Date(blogPost.updated_at).toLocaleDateString()}</p>
        <p><strong>Tags:</strong> {blogPost.tags.join(", ")}</p>
        <p>{blogPost.excerpt}</p>
        <a href={blogPost.url} target="_blank" rel="noopener noreferrer">Read more</a>
    </article>
<!-- {#else}
    <p>Blog post not found.</p>
{/if} -->