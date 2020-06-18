<template>
  <div id="navbar-root" class="tabs is-centered">
    <ul>
      <router-link tag="li" to="/skills" exact>
        <a>Skills</a>
      </router-link>
      <router-link tag="li" to="/projects" exact>
        <a>Projects</a>
      </router-link>
      <router-link tag="li" to="/resume" exact>
        <a>Resume</a>
      </router-link>
      <router-link tag="li" to="/contact" exact>
        <a>Contact</a>
      </router-link>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  }
};
</script>
<style scoped>
#navbar-root {
  padding-top: 5vh;
}
a {
  padding: 0 25px;
  font-size: 16px;

  letter-spacing: 0.1rem;
  text-decoration: none;
  text-transform: uppercase;
}
</style>
