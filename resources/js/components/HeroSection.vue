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
#hero-txt {
  margin-bottom: 2vh;
}
h1 {
  font-size: 50px;
  font-weight: 300;
  margin-top: 10px;
  color: #636b6f;
  text-align: center;
}
p {
  font-size: 24px;
  color: #636b6f;
  text-align: center;
}
</style>
