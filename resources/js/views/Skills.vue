<template>
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column">
          <h1>Languages:</h1>
          <div class="column-container has-text-centered">
            <div class="text-and-icon-wrapper">
              <i class="fab fa-html5"></i>
              <p>HTML</p>
            </div>
            <div class="text-and-icon-wrapper">
              <i class="fab fa-css3-alt"></i>
              <p>CSS</p>
            </div>
            <div class="text-and-icon-wrapper">
              <i class="fab fa-js"></i>
              <p>Javascript</p>
            </div>
            <div class="text-and-icon-wrapper">
              <i class="fab fa-php"></i>
              <p>PHP</p>
            </div>
            <div class="text-and-icon-wrapper">
              <i class="fas fa-database"></i>
              <p>SQL</p>
            </div>
          </div>
        </div>
        <div class="column">
          <h1>Frameworks:</h1>
          <div class="column-container has-text-centered">
            <div class="text-and-icon-wrapper">
              <i class="fab fa-bootstrap"></i>
              <p>Bootstrap</p>
            </div>
            <div class="text-and-icon-wrapper">
              <i id="bulma-icon">
                <span class="iconify" data-icon="simple-icons:bulma" data-inline="false"></span>
              </i>
              <p>Bulma</p>
            </div>
            <div class="text-and-icon-wrapper">
              <i class="fas fa-dollar-sign"></i>
              <p>Jquery</p>
            </div>
            <div class="text-and-icon-wrapper">
              <i class="fab fa-vuejs"></i>
              <p>Vue</p>
            </div>
            <div class="text-and-icon-wrapper">
              <i class="fab fa-laravel"></i>
              <p>Laravel</p>
            </div>
          </div>
        </div>
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
  font-size: 34px;
  font-weight: 300;
  text-align: center;
  border-bottom: solid 0.25px #8e999e;
}
.text-and-icon-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
}
i {
  font-size: 40px;
}
p {
  font-size: 30px;
  font-weight: 200;
}
.column {
  padding: 0 80px;
}
.column-container {
  padding: 25px;
}
#other-skills-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
}
#other-skills {
  width: 50%;
}
#bulma-icon {
  margin-left: -6px;
}
@media only screen and (max-width: 700px) {
  .column {
    padding: 0;
  }
  .column-container {
    padding: 0;
  }
  #other-skills {
    width: 100%;
  }
  #other-skills-wrapper {
    width: 100%;
  }
}
@media only screen and (min-width: 701px) and (max-width: 1000px) {
  #other-skills {
    width: 80%;
  }
  #other-skills-wrapper {
    width: 100%;
  }
}
</style>
