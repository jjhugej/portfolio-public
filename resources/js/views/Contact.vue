<template>
  <section class="section">
    <div class="container">
      <h1 class="has-text-centered">Contact</h1>
      <h2 class="has-text-centered">jonlillywebdev@gmail.com</h2>
      <div id="social-media-links" class="container has-text-centered">
        <a id="linkedin-link" href="https://linkedin.com/in/jonathan-lilly-0b08651b3">
          <i class="fab fa-linkedin"></i>
        </a>
        <a id="github-link" href="https://github.com/jjhugej">
          <i class="fab fa-github-square"></i>
        </a>
        <a id="facebook-link" href="https://www.facebook.com/jonathan.lilly.9465">
          <i class="fab fa-facebook-square"></i>
        </a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  mounted() {},
};
</script>
<style scoped>
h1 {
  font-size: 40px;
  font-weight: 200;
  margin-bottom: 20px;
}
h2 {
  font-size: 24px;
  font-weight: 300;
}
a {
  font-size: 60px;
  padding: 30px;
}
#github-link {
  color: black;
}
#linkedin-link {
  color: #0077b5;
}
#facebook-link {
  color: #4267b2;
}
#social-media-links {
  margin-top: 10vh;
}
</style>
