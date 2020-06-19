<template>
  <div class="container">
    <div id="hero-img"></div>
    <div id="hero-txt">
      <h1>Jonathan Lilly</h1>
      <p>Full Stack Developer</p>
    </div>
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
#hero-img {
  background-color: grey;
  height: 50vh;
}
h1 {
  font-size: 40px;
  font-weight: 300;
  margin: 10px 0 5px 0;
  color: #4a4a4a;
  text-align: center;
}
p {
  font-size: 20px;
  font-weight: 600;
  color: #4a4a4a;
  text-align: center;
}
</style>
