<script setup>
const user = window.Laravel && window.Laravel.user ? window.Laravel.user : null;
const csrfToken = window.Laravel && window.Laravel.csrfToken ? window.Laravel.csrfToken : '';
</script>

<template>
  <header>
    <h1>
      <a href="/chapitre/1" class="title-link">Le labyrinthe des ombres</a>
    </h1>
    <div class="header-buttons">
      <template v-if="user">
        <span class="welcome-text">Bienvenue, {{ user.name }}</span>
        <form method="POST" action="/logout" class="logout-form">
          <input type="hidden" name="_token" :value="csrfToken">
          <button id="logoutBtn" type="submit" class="btn">Logout</button>
        </form>
      </template>
      <template v-else>
        <a href="/register" class="btn">Register</a>
        <a href="/login" class="btn">Login</a>
      </template>
    </div>
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
  position: relative;
}

h1 {
  font-family: 'Press Start 2P', cursive;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin: 0;
  font-size: 1.8rem;
  text-shadow: 3px 3px 0px rgba(0, 0, 0, 0.8), 
               5px 5px 0px rgba(0, 201, 17, 0.3);
}

.welcome-text {
  font-family: 'Press Start 2P', cursive;
  color: #4ffa00;
  display: block;
  text-align: center;
  margin-top: 1rem;
}

#logoutBtn {
  position: absolute;
  top: 1rem; 
  right: 1rem; 
  font-size: 1.2rem;
  padding: 0.8rem 1.5rem;
  background-color: #4ffa00;
  color: #121212;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 201, 17, 0.5);
  cursor: pointer;
}

#logoutBtn:hover {
  background-color: #121212;
  color: #4ffa00;
  box-shadow: 0 0 15px rgba(0, 255, 21, 0.7);
  transform: scale(1.1);
}

.title-link {
  text-decoration: none;
  color: #4ffa00;
}

.title-link:hover {
  color: #a83eff;
  text-shadow: 3px 3px 0px rgba(0, 201, 17, 0.3), 
               5px 5px 0px rgba(0, 0, 0, 0.8);
}

.header-buttons {
  margin-top: 1rem;
  display: flex;
  justify-content: center;
  gap: 1rem;
}

.btn {
  font-family: 'Press Start 2P', cursive;
  text-decoration: none;
  color: #121212;
  background-color: #4ffa00;
  padding: 0.5rem 1rem;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 201, 17, 0.5);
  transition: all 0.3s ease;
}


.btn:hover {
  background-color: #121212;
  color: #4ffa00;
  box-shadow: 0 0 15px rgba(0, 255, 21, 0.7);
  transform: scale(1.05);
}

/* Responsive */
@media (max-width: 768px) {
  h1 {
    font-size: 1.3rem;
  }

  .btn {
    font-size: 0.8rem;
    padding: 0.4rem 0.8rem;
  }
}

/* Responsive */
@media (max-width: 480px) {
  h1 {
    font-size: 1rem;
    letter-spacing: 1px;
  }
  
  header {
    padding: 1rem 0.5rem;
  }

  .btn {
    font-size: 0.7rem;
    padding: 0.3rem 0.6rem;
  }
}
</style>