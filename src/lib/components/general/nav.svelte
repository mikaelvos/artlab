<style>
    button {
        border: red dotted 2px;
        border-radius: 2;
        margin: 4;
        padding: 4;
        background-color: rgb(219, 141, 141);
    }
</style>

<nav>
    <button onclick="{() => scrollTo("intro")}">Intro </button>
    <button onclick={() => scrollTo("graffiti")}>Graffiti workshop</button>
</nav>

<script lang="ts">
    function scrollTo(id: string) {
        var elem = document.getElementById(id);
        elem?.scrollIntoView();
    }
</script>