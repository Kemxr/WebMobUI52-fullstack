<template>
    <div>
        <h2>Chapitre {{ chapter.number }}</h2>
        <p>{{ chapter.content }}</p>

        <h3>Choix :</h3>
        <ul>
            <li v-for="choice in chapter.choices" :key="choice.text">
                <RouterLink :to="`/chapitre/${choice.target_chapter_id}`">
                    {{ choice.text }}
                </RouterLink>
            </li>
        </ul>
    </div>
</template>

<script setup>
defineProps({
    chapter: {
        type: Object,
        required: true
    }
});
</script>
<style scoped>

</style>