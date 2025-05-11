<script setup>
import { ref, watchEffect, computed, watch } from 'vue';
import { useRoute } from 'vue-router';
import { useFetchChapter } from '@/composables/fetchChapter';
import ChapterDisplay from '../components/ChapterDisplay.vue';

const route = useRoute();

// Récupérer l'utilisateur connecté
const user = window.Laravel && window.Laravel.user ? window.Laravel.user : null;

// Déterminer l'ID du chapitre en fonction de la route ou du localStorage
const chapterId = computed(() => {
    if (!user) return 1; // Si aucun utilisateur, retourner le chapitre par défaut

    const localStorageKey = `progression_user_${user.id}`;
    if (route.params.id) {
        return route.params.id;
    } else if (localStorage.getItem(localStorageKey)) {
        return localStorage.getItem(localStorageKey);
    } else {
        return 1;  
    } 
});

// Utiliser le composable pour récupérer les données du chapitre
const { data, error, loading, fetchChapter } = useFetchChapter();


watchEffect(() => {
    if (chapterId.value) {
        console.log('Fetching chapter with ID:', chapterId.value);
        fetchChapter(chapterId.value);
    }
});

// Sauvegarder la progression dans le localStorage par utilisateur
watch(chapterId, (newId) => {
    if (newId && user) {
        const localStorageKey = `progression_user_${user.id}`;
        localStorage.setItem(localStorageKey, newId);
    }
}, { immediate: true });

// Mettre à jour la progression côté serveur
const updateProgress = async (newChapterId) => {
    if (user) {
        const localStorageKey = `progression_user_${user.id}`;
        localStorage.setItem(localStorageKey, newChapterId);
        //Essayer de sauvegarder la progression sur le serveur si ya le temps
        console.log(`Progression sauvegardée pour l'utilisateur ${user.id} : Chapitre ${newChapterId}`);
    }
};
</script>

<template>
    <div class="chapter-container pixel-border">
        <p v-if="loading" class="loading">Chargement...</p>
        <p v-if="error" class="error">Erreur : {{ error.message }}</p>
        <ChapterDisplay v-if="data" :chapter="data" @change-chapter="updateProgress" />
    </div>
</template>

<style scoped>
.chapter-container {
  max-width: 800px;
  margin: 0 auto;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
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