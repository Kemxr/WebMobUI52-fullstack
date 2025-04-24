<script setup>

</script>

<template>
  <header>
    <h1>Le labyrinthe des ombres</h1>
  </header>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

header {
  background-color: #121212;
  color: #4ffa00;
  text-align: center;
  padding: 1.5rem 1rem;
  margin-bottom: 2rem;
  box-shadow: 0 0 15px rgba(0, 201, 17, 0.3);
  border-bottom: 3px solid #4ffa00;
}

h1 {
  font-family: 'Press Start 2P', cursive; /* Police 8-bit */
  text-transform: uppercase;
  letter-spacing: 2px;
  margin: 0;
  font-size: 1.8rem;
  text-shadow: 3px 3px 0px rgba(0, 0, 0, 0.8), 
               5px 5px 0px rgba(0, 201, 17, 0.3);
}

@media (max-width: 768px) {
  h1 {
    font-size: 1.3rem;
  }
}

@media (max-width: 480px) {
  h1 {
    font-size: 1rem;
    letter-spacing: 1px;
  }
  
  header {
    padding: 1rem 0.5rem;
  }
}
</style>