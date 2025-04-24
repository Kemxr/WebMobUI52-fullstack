<script setup>
import { useFetchJson } from '@/composables/useFetchJson';

// appel API vers /api/v1/chapters/1
const { data, error, loading } = useFetchJson({
  url: 'chapters/1',
  method: 'GET',
});
</script>

<template>
  <div>
    <h1>Page Test API</h1>

    <p v-if="loading">Chargement...</p>
    <p v-if="error">Erreur : {{ error.message }}</p>

    <div v-if="data">
      <h2>Chapitre {{ data.number }}</h2>
      <p>{{ data.content }}</p>

      <h3>Choix :</h3>
      <ul>
        <li v-for="choice in data.choices" :key="choice.text">
          {{ choice.text }} → chapitre {{ choice.target_chapter_id }}
        </li>
      </ul>
    </div>
  </div>
</template>
