<script setup>
import { ref, watchEffect, computed, watch, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import { useFetchJson } from '@/composables/useFetchJson';
import ChapterDisplay from '../components/ChapterDisplay.vue';

const route = useRoute();
// const chapterId = computed(() => route.params.id || 1);
//Chapter id en fonction de la route ou du localStorage
const chapterId = computed(() => {
    if (route.params.id) {
        return route.params.id;
    } else if (localStorage.getItem('progression')) {
        return localStorage.getItem('progression');
    } else if (route.query.id) {
        return route.query.id;
    } else {
        return 1; // Valeur par défaut
        
    } 
});

// Références réactives pour les données
const data = ref(null);
const error = ref(null);
const loading = ref(false);
let abortController = null;

// Fonction pour charger les données du chapitre
const fetchChapter = async (id) => {
    // Abandonner la requête d'avant si elle existe
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

watch(chapterId, (newId) => {
  if (newId) {
    localStorage.setItem('progression', newId);
    fetchChapter(newId);
  }
}, { immediate: true });

// onMounted(() => {
//   const saved = localStorage.getItem('progression');
//   if (saved) {
//     route.replace(`/chapitre/${saved}`);
//   }
// });
</script>

<template>
    <div class="chapter-container pixel-border">
        <p v-if="loading" class="loading">Chargement...</p>
        <p v-if="error" class="error">Erreur : {{ error.message }}</p>
        <ChapterDisplay v-if="data" :chapter="data" />
    </div>
</template>


<style scoped>
.chapter-container {
  max-width: 800px;
  margin: 0 auto;
  padding: 1.5rem;
  background-color: rgba(25, 25, 30, 0.9);
  border: 3px solid #4ffa00;
  border-radius: 8px;
  box-shadow: 0 0 20px rgba(0, 255, 21, 0.5);
}

.loading, .error {
  text-align: center;
  padding: 0.2rem;
  font-family: 'Press Start 2P', cursive;
  font-size: 1rem;
  color: #ffffff;
}

.error {
  color: #ff6b6b;
}

@media (max-width: 850px) {
  .chapter-container {
    margin: 0 1rem;
    padding: 1rem;
  }
}
</style>