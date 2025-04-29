<script>
    import Nav from "../components/Nav.svelte";
</script>

<div class="container">
    <div class="sticky-nav">
        <Nav />
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <slot></slot>
        </div>
    </div>
</div>

<style>
    @media (min-width: 992px) {
        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 10;
            background-color: var(--navbar-bg-color);
        }
    }
</style>
