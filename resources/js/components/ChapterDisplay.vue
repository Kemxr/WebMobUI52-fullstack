<script setup>
defineProps({
    chapter: {
        type: Object,
        required: true
    }
});
// changer l'url en fonction du choice.target_chapter_id
function changeUrl(chapterId) {
    window.location.href = `/chapitre/${chapterId}`;
}
</script>

<template>
    <div>
        <h2>Chapitre {{ chapter.number }}</h2>
        <p>{{ chapter.content }}</p>

        <h3>Choix :</h3>
        <ul>
            <li v-for="choice in chapter.choices" :key="choice.text">
                <RouterLink :to="`/chapitre/${choice.target_chapter_id || 1}`">
                    {{ choice.text }}
                </RouterLink>
            </li>
        </ul>
    </div>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
@import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');

h2 {
  font-family: 'Press Start 2P', cursive;
  color: #4ffa00;
  margin-bottom: 1.5rem;
  font-size: 1.4rem;
  text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.8);
  border-bottom: 2px solid #4ffa00;
  padding-bottom: 1rem;
}

p {
  font-family: 'VT323', monospace;
  font-size: 1.3rem;
  line-height: 1.6;
  margin-bottom: 2rem;
  color: #ffffff;
  text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
}

h3 {
  font-family: 'Press Start 2P', cursive;
  color: #ffffff;
  font-size: 1.1rem;
  margin-top: 2rem;
  margin-bottom: 1rem;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 1.5rem 0;
}

li {
  margin-bottom: 1rem;
  transition: transform 0.2s ease;
}

li:hover {
  transform: translateX(10px);
}

a {
  display: block;
  text-decoration: none;
  font-family: 'VT323', monospace;
  font-size: 1.25rem;
  color: #4ffa00;
  background-color: rgba(0, 0, 0, 0.4);
  padding: 0.8rem 1rem;
  border-left: 4px solid #ffffff;
  transition: all 0.3s ease;
}

a:before {
  content: '➤ ';
  color: #ffffff;
}

a:hover {
  background-color: rgba(0, 201, 17, 0.3);
  color: #ffffff;
  border-left-width: 8px;
}

@media (max-width: 768px) {
  h2 {
    font-size: 1.2rem;
  }
  
  p {
    font-size: 1.2rem;
  }
  
  h3 {
    font-size: 1rem;
  }
  
  a {
    font-size: 1.1rem;
  }
}
</style>