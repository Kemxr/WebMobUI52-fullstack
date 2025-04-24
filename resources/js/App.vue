<script setup>
  import { ref } from 'vue';
  import TheHeader from '@/components/TheHeader.vue';
  // import PageExample from '@/pages/PageExample.vue';
  import StoryView from './pages/StoryView.vue';
  const n = ref(1);
</script>

<template>
  <div>
    <TheHeader />
    <main>
      <StoryView />
    </main>
  </div>
</template>

<style scoped>

</style>