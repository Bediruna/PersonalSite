<script>
    import { page } from '$app/stores';

    // Subscribe to the $page store to access route parameters
    $: id = $page.params.id;
</script>

<h1>Blog ID: {id}</h1>