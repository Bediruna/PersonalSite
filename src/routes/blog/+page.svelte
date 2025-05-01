<script>
    import { blogPosts } from "$lib/BlogData.js";
</script>

<main>
    <h1>Blog Posts</h1>
    <ul>
        {#each blogPosts as post}
            <li>
                <h2>{post.title}</h2>
                <p>{post.excerpt}</p>
                <p><strong>Published:</strong> {new Date(post.published_at).toLocaleDateString()}</p>
                <p><strong>Tags:</strong> {post.tags.join(", ")}</p>
                <a href=blog/{post.slug} rel="noopener noreferrer">Read more</a>
            </li>
        {/each}
    </ul>
</main>
