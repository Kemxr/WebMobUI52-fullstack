<script setup>
import { ref, watchEffect, computed } from 'vue';
import { useRoute } from 'vue-router';
import { useFetchJson } from '@/composables/useFetchJson';
import ChapterDisplay from '../components/ChapterDisplay.vue';

const route = useRoute();
const chapterId = computed(() => route.params.id || 1);

// Références réactives pour les données
const data = ref(null);
const error = ref(null);
const loading = ref(false);
let abortController = null;

// Fonction pour charger les données du chapitre
const fetchChapter = async (id) => {
    // Abandonner la requête précédente si elle existe
    if (abortController) {
        abortController.abort();
    }

    loading.value = true;
    error.value = null;

    try {
        // Créer un nouveau AbortController pour cette requête
        abortController = new AbortController();

        const response = await fetch(`/api/v1/chapters/${id}`, {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            signal: abortController.signal
        });

        if (!response.ok) {
            throw new Error(`Erreur HTTP: ${response.status}`);
        }

        data.value = await response.json();
    } catch (e) {
        if (e.name !== 'AbortError') {
            error.value = e;
        }
    } finally {
        loading.value = false;
    }
};

// Utiliser watchEffect pour réagir aux changements de route
watchEffect(() => {
    if (chapterId.value) {
        fetchChapter(chapterId.value);
    }
});
</script>

<template>
    <div>
        <p v-if="loading">Chargement...</p>
        <p v-if="error">Erreur : {{ error.message }}</p>
        <ChapterDisplay v-if="data" :chapter="data" />
    </div>
</template>

<style scoped>

</style>