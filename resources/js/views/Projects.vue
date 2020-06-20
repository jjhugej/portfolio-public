<template>
  <section class="section">
    <div class="container">
      <div class="project-wrapper">
        <h1>Eve Station Trader</h1>
        <div class="content-indent">
          <div class="content-wrapper tech-wrapper">
            <h2>Technologies Used:</h2>
            <div class="tech-list">
              <span>Laravel</span>
              <span>Jquery</span>
              <span>Bootstrap/Sass</span>
              <span>MySQL</span>
            </div>
          </div>
          <div class="content-wrapper links-wrapper">
            <h2>
              Github:
              <a href="https://github.com/jjhugej/EveStationTrader">jjhugej/EveStationTrader</a>
            </h2>
          </div>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <p>summary goes here</p>
          </div>
        </div>
      </div>
      <hr />
      <div class="project-wrapper">
        <h1>Laravue Todo List</h1>
        <div class="content-indent">
          <div class="content-wrapper tech-wrapper">
            <h2>Technologies Used:</h2>
            <div class="tech-list">
              <span>Laravel</span>
              <span>Vue</span>
              <span>Bulma/Sass</span>
              <span>MySQL</span>
            </div>
          </div>
          <div class="content-wrapper links-wrapper">
            <h2>
              Github:
              <a
                href="https://github.com/jjhugej/laravue_todo_list"
              >jjhugej/laravue_todo_list</a>
            </h2>
          </div>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <p>summary goes here</p>
          </div>
        </div>
      </div>
      <hr />
      <div class="project-wrapper">
        <h1>LillyPad Web Development</h1>
        <div class="content-indent">
          <div class="content-wrapper tech-wrapper">
            <h2>Technologies Used:</h2>
            <div class="tech-list">
              <span>Laravel</span>
              <span>Jquery</span>
              <span>Sass (custom)</span>
              <span>MySQL</span>
            </div>
          </div>
          <div class="content-wrapper links-wrapper">
            <h2>
              Github:
              <a href="https://github.com/jjhugej/selutech">jjhugej/selutech</a>
            </h2>
          </div>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <p>summary goes here</p>
          </div>
        </div>
      </div>
      <hr />
      <div class="project-wrapper">
        <h1>Bouncing Balls (portfolio concept)</h1>
        <div class="content-indent">
          <div class="content-wrapper tech-wrapper">
            <h2>Technologies Used:</h2>
            <div class="tech-list">
              <span>HTML</span>
              <span>CSS</span>
              <span>Javascript</span>
              <span>MySQL</span>
            </div>
          </div>
          <div class="content-wrapper links-wrapper">
            <h2>
              Github:
              <a
                href="https://github.com/jjhugej/portfolio-ball-simulator"
              >jjhugej/portfolio-ball-simulator</a>
            </h2>
          </div>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <p>summary goes here</p>
          </div>
        </div>
      </div>
      <hr />
    </div>
  </section>
</template>

<script>
export default {
  mounted() {}
};
</script>
<style scoped>
.project-wrapper {
  padding: 0 80px;
}
h1 {
  font-size: 30px;
  color: #636b6f;
  font-weight: 300;
}
h2 {
  font-weight: 600;
}
.content-indent {
  padding-left: 20px;
}
.content-wrapper {
  margin: 10px 0;
}
.tech-wrapper {
  display: flex;
  margin: 10px 0;
}
.tech-list {
  padding-left: 10px;
}
span {
  padding: 0 10px;
  margin: 0 2px;
  border: solid 1px rgb(133, 230, 243);
  border-radius: 10px;
}
.summary-wrapper {
}
.summary-wrapper > p {
  padding-left: 10px;
}
</style>
