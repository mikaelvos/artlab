<script lang="ts">
    import Hero from "./parts/hero.svelte";
    import NameBanner from "./parts/nameBanner.svelte";
    import IntroductionText from "./parts/introductionText.svelte";

    import Nav from "../general/nav.svelte";

    import Activities from "./parts/activities.svelte";
    import LearningOutcomes from "./parts/learningOutcomes.svelte";
</script>

<div class="relative h-100 bg-red-900">
    <Hero />

    <div class="absolute z-5 top-1/16 left-1/16 w-7/8">
        <NameBanner />
        <IntroductionText />
        <Nav />
    </div>
</div>

<div class="grid grid-cols-2 gap-4" id="intro">
    <LearningOutcomes />
    <Activities />
</div>
