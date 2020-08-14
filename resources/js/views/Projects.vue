<template>
  <section class="section">
    <div class="container">
      <div class="project-wrapper">
        <h1>PAWS Animal Shelter</h1>
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
                href="https://github.com/jjhugej/Puppy-Project-Pre-Nova"
              >jjhugej/Puppy-Project-Pre-Nova</a>
            </h2>
          </div>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <a v-if="!showPuppyProjectSummary" @click="togglePuppyProjectSummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <p v-if="showPuppyProjectSummary">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non nunc auctor nibh mollis faucibus eu vel neque. Cras fringilla vestibulum sem, non pellentesque sem mattis ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris auctor nec neque ac viverra. Maecenas suscipit maximus laoreet. Ut at erat auctor, tempor ligula quis, volutpat urna. Proin non est neque. Maecenas ac odio dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
              Sed condimentum, purus eget aliquam suscipit, metus diam aliquet nunc, nec sodales est leo ut dui. Nulla posuere dolor vitae aliquam bibendum. Etiam in euismod nisl. Vivamus erat nulla, tristique ac sapien at, lacinia mollis mi. Mauris vulputate congue tellus ut facilisis. Sed sit amet elit tristique, dapibus elit vitae, pharetra ligula. Nullam ex lorem, blandit eu nibh quis, fermentum pretium nulla. Maecenas bibendum laoreet lobortis. Proin sodales tortor et mauris bibendum hendrerit. Duis vestibulum quam in posuere vestibulum. Nullam vitae tortor id erat hendrerit malesuada eu in diam. Nam ullamcorper mauris nisl, nec commodo leo bibendum sit amet. Donec quis dui nec mi fringilla laoreet.
              Maecenas ultrices libero blandit massa aliquam semper. Sed condimentum lacinia turpis et venenatis. Vivamus et tincidunt ligula. Cras eu justo sed sem elementum dictum. Nullam tristique posuere libero, at aliquam lectus iaculis vitae. Etiam id sagittis tortor, consectetur accumsan quam. Sed magna orci, luctus non justo quis, auctor convallis orci. Curabitur feugiat tortor sapien, eu malesuada nibh consectetur a. Donec odio tortor, rutrum eget mi in, aliquam luctus ipsum. Nam eget feugiat erat. Vestibulum dapibus a massa vitae rhoncus.
              Phasellus eu nulla euismod, rutrum nibh ut, commodo dui. Fusce viverra tortor ac sem egestas tempor. Pellentesque posuere nulla leo. Pellentesque convallis ipsum id eros condimentum volutpat. Sed in velit eu purus volutpat faucibus nec vel orci. Morbi vitae quam dolor. Etiam dignissim tristique lacus, ac consectetur est maximus ut. Ut convallis magna malesuada velit aliquet, a semper quam ultricies. Suspendisse sodales, lorem sed convallis accumsan, neque metus rhoncus sem, ut pellentesque tellus ligula id augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Sed scelerisque egestas blandit. Sed eleifend lacus sit amet enim rhoncus, in viverra ligula viverra. Aliquam non augue et dui cursus luctus in vehicula odio. Cras eu ultricies erat. Aliquam feugiat ex non libero pulvinar blandit non efficitur metus. Cras posuere eu est vitae ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent leo arcu, hendrerit ut felis sit amet, feugiat pulvinar arcu. Aliquam eu fermentum ante, id scelerisque est. Nulla ultricies, velit id cursus aliquet, nunc ligula tincidunt dolor, vitae feugiat dui odio in ex. Cras augue leo, blandit id mi in, auctor facilisis nisl. Morbi id pellentesque odio. Nam ligula ligula, posuere at vehicula at, mattis sit amet nibh. Nunc vestibulum arcu a ligula pharetra iaculis.
            </p>
            <a v-if="showPuppyProjectSummary" @click="togglePuppyProjectSummary">
              Hide Summary
              <i class="fas fa-caret-up"></i>
            </a>
          </div>
        </div>
      </div>
      <hr />
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
            <a v-if="!showEveStationTraderSummary" @click="toggleEveStationTraderSummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <p v-if="showEveStationTraderSummary">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non nunc auctor nibh mollis faucibus eu vel neque. Cras fringilla vestibulum sem, non pellentesque sem mattis ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris auctor nec neque ac viverra. Maecenas suscipit maximus laoreet. Ut at erat auctor, tempor ligula quis, volutpat urna. Proin non est neque. Maecenas ac odio dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
              Sed condimentum, purus eget aliquam suscipit, metus diam aliquet nunc, nec sodales est leo ut dui. Nulla posuere dolor vitae aliquam bibendum. Etiam in euismod nisl. Vivamus erat nulla, tristique ac sapien at, lacinia mollis mi. Mauris vulputate congue tellus ut facilisis. Sed sit amet elit tristique, dapibus elit vitae, pharetra ligula. Nullam ex lorem, blandit eu nibh quis, fermentum pretium nulla. Maecenas bibendum laoreet lobortis. Proin sodales tortor et mauris bibendum hendrerit. Duis vestibulum quam in posuere vestibulum. Nullam vitae tortor id erat hendrerit malesuada eu in diam. Nam ullamcorper mauris nisl, nec commodo leo bibendum sit amet. Donec quis dui nec mi fringilla laoreet.
              Maecenas ultrices libero blandit massa aliquam semper. Sed condimentum lacinia turpis et venenatis. Vivamus et tincidunt ligula. Cras eu justo sed sem elementum dictum. Nullam tristique posuere libero, at aliquam lectus iaculis vitae. Etiam id sagittis tortor, consectetur accumsan quam. Sed magna orci, luctus non justo quis, auctor convallis orci. Curabitur feugiat tortor sapien, eu malesuada nibh consectetur a. Donec odio tortor, rutrum eget mi in, aliquam luctus ipsum. Nam eget feugiat erat. Vestibulum dapibus a massa vitae rhoncus.
              Phasellus eu nulla euismod, rutrum nibh ut, commodo dui. Fusce viverra tortor ac sem egestas tempor. Pellentesque posuere nulla leo. Pellentesque convallis ipsum id eros condimentum volutpat. Sed in velit eu purus volutpat faucibus nec vel orci. Morbi vitae quam dolor. Etiam dignissim tristique lacus, ac consectetur est maximus ut. Ut convallis magna malesuada velit aliquet, a semper quam ultricies. Suspendisse sodales, lorem sed convallis accumsan, neque metus rhoncus sem, ut pellentesque tellus ligula id augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Sed scelerisque egestas blandit. Sed eleifend lacus sit amet enim rhoncus, in viverra ligula viverra. Aliquam non augue et dui cursus luctus in vehicula odio. Cras eu ultricies erat. Aliquam feugiat ex non libero pulvinar blandit non efficitur metus. Cras posuere eu est vitae ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent leo arcu, hendrerit ut felis sit amet, feugiat pulvinar arcu. Aliquam eu fermentum ante, id scelerisque est. Nulla ultricies, velit id cursus aliquet, nunc ligula tincidunt dolor, vitae feugiat dui odio in ex. Cras augue leo, blandit id mi in, auctor facilisis nisl. Morbi id pellentesque odio. Nam ligula ligula, posuere at vehicula at, mattis sit amet nibh. Nunc vestibulum arcu a ligula pharetra iaculis.
            </p>
            <a v-if="showEveStationTraderSummary" @click="toggleEveStationTraderSummary">
              Hide Summary
              <i class="fas fa-caret-up"></i>
            </a>
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
              <span>Sass</span>
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
            <a v-if="!showSeluTechSummary" @click="toggleSeluTechSummarySummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <p v-if="showSeluTechSummary">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non nunc auctor nibh mollis faucibus eu vel neque. Cras fringilla vestibulum sem, non pellentesque sem mattis ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris auctor nec neque ac viverra. Maecenas suscipit maximus laoreet. Ut at erat auctor, tempor ligula quis, volutpat urna. Proin non est neque. Maecenas ac odio dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
              Sed condimentum, purus eget aliquam suscipit, metus diam aliquet nunc, nec sodales est leo ut dui. Nulla posuere dolor vitae aliquam bibendum. Etiam in euismod nisl. Vivamus erat nulla, tristique ac sapien at, lacinia mollis mi. Mauris vulputate congue tellus ut facilisis. Sed sit amet elit tristique, dapibus elit vitae, pharetra ligula. Nullam ex lorem, blandit eu nibh quis, fermentum pretium nulla. Maecenas bibendum laoreet lobortis. Proin sodales tortor et mauris bibendum hendrerit. Duis vestibulum quam in posuere vestibulum. Nullam vitae tortor id erat hendrerit malesuada eu in diam. Nam ullamcorper mauris nisl, nec commodo leo bibendum sit amet. Donec quis dui nec mi fringilla laoreet.
              Maecenas ultrices libero blandit massa aliquam semper. Sed condimentum lacinia turpis et venenatis. Vivamus et tincidunt ligula. Cras eu justo sed sem elementum dictum. Nullam tristique posuere libero, at aliquam lectus iaculis vitae. Etiam id sagittis tortor, consectetur accumsan quam. Sed magna orci, luctus non justo quis, auctor convallis orci. Curabitur feugiat tortor sapien, eu malesuada nibh consectetur a. Donec odio tortor, rutrum eget mi in, aliquam luctus ipsum. Nam eget feugiat erat. Vestibulum dapibus a massa vitae rhoncus.
              Phasellus eu nulla euismod, rutrum nibh ut, commodo dui. Fusce viverra tortor ac sem egestas tempor. Pellentesque posuere nulla leo. Pellentesque convallis ipsum id eros condimentum volutpat. Sed in velit eu purus volutpat faucibus nec vel orci. Morbi vitae quam dolor. Etiam dignissim tristique lacus, ac consectetur est maximus ut. Ut convallis magna malesuada velit aliquet, a semper quam ultricies. Suspendisse sodales, lorem sed convallis accumsan, neque metus rhoncus sem, ut pellentesque tellus ligula id augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Sed scelerisque egestas blandit. Sed eleifend lacus sit amet enim rhoncus, in viverra ligula viverra. Aliquam non augue et dui cursus luctus in vehicula odio. Cras eu ultricies erat. Aliquam feugiat ex non libero pulvinar blandit non efficitur metus. Cras posuere eu est vitae ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent leo arcu, hendrerit ut felis sit amet, feugiat pulvinar arcu. Aliquam eu fermentum ante, id scelerisque est. Nulla ultricies, velit id cursus aliquet, nunc ligula tincidunt dolor, vitae feugiat dui odio in ex. Cras augue leo, blandit id mi in, auctor facilisis nisl. Morbi id pellentesque odio. Nam ligula ligula, posuere at vehicula at, mattis sit amet nibh. Nunc vestibulum arcu a ligula pharetra iaculis.
            </p>
            <a v-if="showSeluTechSummary" @click="toggleSeluTechSummarySummary">
              Hide Summary
              <i class="fas fa-caret-up"></i>
            </a>
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
            <a v-if="!showLaravueTodoListSummary" @click="toggleLaravueTodoListSummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <p v-if="showLaravueTodoListSummary">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non nunc auctor nibh mollis faucibus eu vel neque. Cras fringilla vestibulum sem, non pellentesque sem mattis ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris auctor nec neque ac viverra. Maecenas suscipit maximus laoreet. Ut at erat auctor, tempor ligula quis, volutpat urna. Proin non est neque. Maecenas ac odio dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
              Sed condimentum, purus eget aliquam suscipit, metus diam aliquet nunc, nec sodales est leo ut dui. Nulla posuere dolor vitae aliquam bibendum. Etiam in euismod nisl. Vivamus erat nulla, tristique ac sapien at, lacinia mollis mi. Mauris vulputate congue tellus ut facilisis. Sed sit amet elit tristique, dapibus elit vitae, pharetra ligula. Nullam ex lorem, blandit eu nibh quis, fermentum pretium nulla. Maecenas bibendum laoreet lobortis. Proin sodales tortor et mauris bibendum hendrerit. Duis vestibulum quam in posuere vestibulum. Nullam vitae tortor id erat hendrerit malesuada eu in diam. Nam ullamcorper mauris nisl, nec commodo leo bibendum sit amet. Donec quis dui nec mi fringilla laoreet.
              Maecenas ultrices libero blandit massa aliquam semper. Sed condimentum lacinia turpis et venenatis. Vivamus et tincidunt ligula. Cras eu justo sed sem elementum dictum. Nullam tristique posuere libero, at aliquam lectus iaculis vitae. Etiam id sagittis tortor, consectetur accumsan quam. Sed magna orci, luctus non justo quis, auctor convallis orci. Curabitur feugiat tortor sapien, eu malesuada nibh consectetur a. Donec odio tortor, rutrum eget mi in, aliquam luctus ipsum. Nam eget feugiat erat. Vestibulum dapibus a massa vitae rhoncus.
              Phasellus eu nulla euismod, rutrum nibh ut, commodo dui. Fusce viverra tortor ac sem egestas tempor. Pellentesque posuere nulla leo. Pellentesque convallis ipsum id eros condimentum volutpat. Sed in velit eu purus volutpat faucibus nec vel orci. Morbi vitae quam dolor. Etiam dignissim tristique lacus, ac consectetur est maximus ut. Ut convallis magna malesuada velit aliquet, a semper quam ultricies. Suspendisse sodales, lorem sed convallis accumsan, neque metus rhoncus sem, ut pellentesque tellus ligula id augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Sed scelerisque egestas blandit. Sed eleifend lacus sit amet enim rhoncus, in viverra ligula viverra. Aliquam non augue et dui cursus luctus in vehicula odio. Cras eu ultricies erat. Aliquam feugiat ex non libero pulvinar blandit non efficitur metus. Cras posuere eu est vitae ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent leo arcu, hendrerit ut felis sit amet, feugiat pulvinar arcu. Aliquam eu fermentum ante, id scelerisque est. Nulla ultricies, velit id cursus aliquet, nunc ligula tincidunt dolor, vitae feugiat dui odio in ex. Cras augue leo, blandit id mi in, auctor facilisis nisl. Morbi id pellentesque odio. Nam ligula ligula, posuere at vehicula at, mattis sit amet nibh. Nunc vestibulum arcu a ligula pharetra iaculis.
            </p>
            <a v-if="showLaravueTodoListSummary" @click="toggleLaravueTodoListSummary">
              Hide Summary
              <i class="fas fa-caret-up"></i>
            </a>
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
            <a v-if="!showBallSimulatorSummary" @click="toggleBallSimulatorSummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <p v-if="showBallSimulatorSummary">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non nunc auctor nibh mollis faucibus eu vel neque. Cras fringilla vestibulum sem, non pellentesque sem mattis ac. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris auctor nec neque ac viverra. Maecenas suscipit maximus laoreet. Ut at erat auctor, tempor ligula quis, volutpat urna. Proin non est neque. Maecenas ac odio dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
              Sed condimentum, purus eget aliquam suscipit, metus diam aliquet nunc, nec sodales est leo ut dui. Nulla posuere dolor vitae aliquam bibendum. Etiam in euismod nisl. Vivamus erat nulla, tristique ac sapien at, lacinia mollis mi. Mauris vulputate congue tellus ut facilisis. Sed sit amet elit tristique, dapibus elit vitae, pharetra ligula. Nullam ex lorem, blandit eu nibh quis, fermentum pretium nulla. Maecenas bibendum laoreet lobortis. Proin sodales tortor et mauris bibendum hendrerit. Duis vestibulum quam in posuere vestibulum. Nullam vitae tortor id erat hendrerit malesuada eu in diam. Nam ullamcorper mauris nisl, nec commodo leo bibendum sit amet. Donec quis dui nec mi fringilla laoreet.
              Maecenas ultrices libero blandit massa aliquam semper. Sed condimentum lacinia turpis et venenatis. Vivamus et tincidunt ligula. Cras eu justo sed sem elementum dictum. Nullam tristique posuere libero, at aliquam lectus iaculis vitae. Etiam id sagittis tortor, consectetur accumsan quam. Sed magna orci, luctus non justo quis, auctor convallis orci. Curabitur feugiat tortor sapien, eu malesuada nibh consectetur a. Donec odio tortor, rutrum eget mi in, aliquam luctus ipsum. Nam eget feugiat erat. Vestibulum dapibus a massa vitae rhoncus.
              Phasellus eu nulla euismod, rutrum nibh ut, commodo dui. Fusce viverra tortor ac sem egestas tempor. Pellentesque posuere nulla leo. Pellentesque convallis ipsum id eros condimentum volutpat. Sed in velit eu purus volutpat faucibus nec vel orci. Morbi vitae quam dolor. Etiam dignissim tristique lacus, ac consectetur est maximus ut. Ut convallis magna malesuada velit aliquet, a semper quam ultricies. Suspendisse sodales, lorem sed convallis accumsan, neque metus rhoncus sem, ut pellentesque tellus ligula id augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.
              Sed scelerisque egestas blandit. Sed eleifend lacus sit amet enim rhoncus, in viverra ligula viverra. Aliquam non augue et dui cursus luctus in vehicula odio. Cras eu ultricies erat. Aliquam feugiat ex non libero pulvinar blandit non efficitur metus. Cras posuere eu est vitae ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent leo arcu, hendrerit ut felis sit amet, feugiat pulvinar arcu. Aliquam eu fermentum ante, id scelerisque est. Nulla ultricies, velit id cursus aliquet, nunc ligula tincidunt dolor, vitae feugiat dui odio in ex. Cras augue leo, blandit id mi in, auctor facilisis nisl. Morbi id pellentesque odio. Nam ligula ligula, posuere at vehicula at, mattis sit amet nibh. Nunc vestibulum arcu a ligula pharetra iaculis.
            </p>
            <a v-if="showBallSimulatorSummary" @click="toggleBallSimulatorSummary">
              Hide Summary
              <i class="fas fa-caret-up"></i>
            </a>
          </div>
        </div>
      </div>
      <hr />
    </div>
  </section>
</template>

<script>
export default {
  data: function () {
    return {
      showPuppyProjectSummary: false,
      showEveStationTraderSummary: false,
      showLaravueTodoListSummary: false,
      showSeluTechSummary: false,
      showBallSimulatorSummary: false,
    };
  },
  methods: {
    togglePuppyProjectSummary: function () {
      return (this.showPuppyProjectSummary = !this.showPuppyProjectSummary);
    },
    toggleEveStationTraderSummary: function () {
      return (this.showEveStationTraderSummary = !this
        .showEveStationTraderSummary);
    },
    toggleLaravueTodoListSummary: function () {
      return (this.showLaravueTodoListSummary = !this
        .showLaravueTodoListSummary);
    },
    toggleSeluTechSummarySummary: function () {
      return (this.showSeluTechSummary = !this.showSeluTechSummary);
    },
    toggleBallSimulatorSummary: function () {
      return (this.showBallSimulatorSummary = !this.showBallSimulatorSummary);
    },
  },
  mounted() {},
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
}
.content-wrapper {
  margin: 10px;
}
.tech-wrapper {
  display: flex;
  flex-wrap: wrap;
  margin: 10px;
}
.tech-list {
  padding-left: 10px;
}
span {
  padding: 0 10px;
  border: solid 1px rgb(133, 230, 243);
  border-radius: 10px;
}

.summary-wrapper > p {
  padding-left: 10px;
}
@media only screen and (max-width: 700px) {
  .project-wrapper {
    padding: 5px;
  }
  .tech-list {
    padding: 0;
  }
  h2 {
    flex-basis: 100%;
  }
  span {
    display: block;
    margin: 5px;
    min-width: 100px;
  }
}
</style>
