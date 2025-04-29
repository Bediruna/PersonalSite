<script>
    import Nav from '../components/Nav.svelte';
</script>

<div class="container my-5">
    <Nav />
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <slot></slot>
        </div>
    </div>
</div>
