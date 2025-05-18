<script setup>
  import { ref } from 'vue';
  import TheHeader from '@/components/TheHeader.vue';
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
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

div {
  background-color: #0f0f17;
  background-image: 
    linear-gradient(rgba(15, 15, 23, 0.85), rgba(15, 15, 23, 0.85)),
    url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none" stroke="%238bfbf7" stroke-width="0.5" stroke-opacity="0.1"/></svg>');
}

main {
  background-color: #0f0f17;
  background-image: 
    linear-gradient(rgba(15, 15, 23, 0.85), rgba(15, 15, 23, 0.85)),
    url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none" stroke="%238bfbf7" stroke-width="0.5" stroke-opacity="0.1"/></svg>');
  font-family: 'VT323', monospace;
  line-height: 1.6;
  min-height: 100vh;
  padding-bottom: 2rem;
}

.pixel-border:after {
  content: '';
  position: absolute;
  top: -8px;
  left: -8px;
  right: -8px;
  bottom: -8px;
  border: 2px solid rgba(0, 201, 17, 0.3);
  pointer-events: none;
  z-index: -1;
}

/* Animation loading */
@keyframes blink {
  0% { opacity: 0.2; }
  50% { opacity: 1; }
  100% { opacity: 0.2; }
}

.loading {
  animation: blink 1.5s infinite;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}

@media (max-width: 480px) {
  body {
    font-size: 0.9rem;
  }
}
</style>