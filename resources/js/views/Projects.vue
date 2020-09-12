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
          <h2 class="content-wrapper links-wrapper">
            Website:
            <a href="https://puppyproject.net">PuppyProject.net</a>
          </h2>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <a v-if="!showPuppyProjectSummary" @click="togglePuppyProjectSummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <div class="summary-div" v-if="showPuppyProjectSummary">
              <p>An S.P.A. web application built for a local animal shelter. Using Laravel and Vue.js this app is feature rich with one goal in mind: helping animals. This website is currently in beta and is awaiting feedback from the animal shelter before finalizing the design and features.</p>
              <ul class="summary-list">
                <p>Technical Objectives:</p>
                <li>Create an API using Laravel</li>
                <li>Use Laravel's Sanctum package for user authentication</li>
                <li>Consume the API using the Axios package</li>
                <li>Use Vue.js to create a fluid single page application</li>
                <li>Use VueX to manage application state</li>
                <li>Use Laravel's Nova package to quickly create an admin dashboard</li>
              </ul>
              <p>This project was conceived as a way to help a local animal shelter while diving deeper into the ecosystems of both Laravel and Vue.js.</p>
              <p>The first goal was to create a fully functional API using Laravel. The API functions very similarly to a standard non-SPA Laravel application, with the exception of the authentication flow. In order to solve my authentication issues I decided to forego an OAuth system and instead used Laravel's Sanctum package. Sanctum offered a simple way to authenticate a single page application without the use of tokens. Instead of tokens Sanctum uses the built-in cookie based authentication service that comes out-of-the-box with Laravel. This allowed me to keep the traditional CSRF protection and session authentication.</p>
              <p>The second goal was to consume the API with the Axios package and to then use Vue to simplify managing the front end of the application. While Axios' main function is to make AJAX requests cleaner, the best part was the automation of dealing with CSRF tokens. Vue.js on the frontend gave me the level of maintainability I needed on the front end. Vue allowed me to focus more on the business logic instead of constantly having to reach in and out of the DOM to manage application state. In order to further simplify state management I opted to use the VueX centralized state management store.</p>
              <p>The final goal of the project was to test Laravel's premium package called Nova. While a custom administrator dashboard was certainly an option, Nova offered a ton of features that took only minutes to set up. I received access to C.R.U.D functionality, graphs, and charts that were well designed and seamlessly integrated with my application. Nova was worth the $100 price tag for a quick admin dashboard set up, but lacked some customizability options and has some issues dealing with SQL pivot tables.</p>
              <p
                class="is-italic"
              >*Note: because Nova is a paid package I am unable to upload the code to a public repository per the license agreement. You will notice that the repository on github is titled "Puppy Project Pre Nova" and does not contain any of the Nova code and does not reflect some of the new features or refactors in the latest version.</p>
            </div>
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
          <h2 class="content-wrapper links-wrapper">
            Website:
            <p class="is-inline-block">In Development</p>
          </h2>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <a v-if="!showEveStationTraderSummary" @click="toggleEveStationTraderSummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <p v-if="showEveStationTraderSummary"></p>
            <div class="summary-div" v-if="showEveStationTraderSummary">
              <p>A passion project that mimics a stock trading and inventory management app for an online game. Built with Laravel, MySQL, and JavaScript.</p>

              <ul class="summary-list">
                <p>Technical Objectives:</p>
                <li>Authenticate users using Laravel's built in authentication system.</li>
                <li>Allow users to link their Eve Online account to the application</li>
                <li>Use the Eve Online's Oauth system in order to receive access/refresh tokens for users</li>
                <li>Fetch user's in-game data and dynamically update the application accordingly</li>
                <li>Allow users to easily account for all costs of in-game transactions and plan for future costs</li>
              </ul>
              <p>This project was for a game that I played called Eve Online. This was also the first large scale Laravel application that I had worked on. The project is due for a complete rewrite due to some poor architectural decisions I made early in development that have plagued the project in it's entirety.</p>
              <p>The overarching goal of the project was to allow players of the MMORPG to easily track their assets, production costs, logistics costs, and all relevant market and broker fees.</p>
              <p>The entirety of the feature list is predicated upon the successful authentication of the application's users with their respective Eve Online accounts. Eve uses an OAuth authentication flow with access tokens that lasted 20 minutes, and refresh tokens used to grab new access tokens after they expire. In order to accomplish this I decided to make a "master controller" that I named EveBaseController. This controller was to be extended by every other controller, and the EveBaseController would extend Laravel's base Controller class. This gave me access to all of the out-of-the-box functionality provided by the base Laravel controller, and provided me with a layer of abstraction for interacting with Eve's OAuth flow. While this worked fine at first, my biggest mistake was using this EveBaseController as a catch-all controller for anything else that would be critical for the entire application, even if it didn't have anything to do with authenticating users. Quickly the controller became clunky and unmanageable. This mistake broke the 1st rule of the S.O.L.I.D. principles.</p>
              <p>The next mistake made early on in development was creating base level controllers for each top level controller (ex. MarketController extends a MarketBaseController). Initially this strictly served as a way to tuck away voluminous methods and hide them behind expressive function names. This was not a complete failure as my top level controllers were much easier to read, and the underlying logic was easy to find. This seemed like a solid way to abstract pieces of functionality, at least at first.</p>
              <p>The ultimate problem with this architecture is that each component works fine as an individual piece. However, when the time came for the components to communicate with one another I had abstracted away tons of functionality into seperate controllers that had no way of interacting with one another. In the future rewrite I will use a combination of service containers/providers and traits in order to properly abstract functionality that is critical to more than one class.</p>
              <p>As the project grew I knew that my architectural mistakes would warrant a rewrite from the ground up. This project has served as one of the best learning experiences in my development career thus far. The rewrite will rectify the unmaintainability on the backend and will change the project from a standard PHP application to a single page application.</p>
            </div>
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
          <h2 class="content-wrapper links-wrapper">
            Website:
            <a href="https://lillypadwebdev.com/">lillypadwebdev.com</a>
          </h2>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <a v-if="!showSeluTechSummary" @click="toggleSeluTechSummarySummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <p
              v-if="showSeluTechSummary"
            >A uniquely designed website for a fake web agency. Featuring custom designed logos, svg images, and transitions. Built with Laravel and JavaScript.</p>
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
          <h2 class="content-wrapper links-wrapper">
            Website:
            <p class="is-inline-block">Learning Project - Not Hosted</p>
          </h2>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <a v-if="!showLaravueTodoListSummary" @click="toggleLaravueTodoListSummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <p
              v-if="showLaravueTodoListSummary"
            >A simple to do list using Laravel on the backend and Vue on the frontend. The styling is done almost completely using the Bulma framework.</p>
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
          <h2 class="content-wrapper links-wrapper">
            Website:
            <p class="is-inline-block">Learning Project - Not Hosted</p>
          </h2>
          <div class="content-wrapper summary-wrapper">
            <h2>Summary:</h2>
            <a v-if="!showBallSimulatorSummary" @click="toggleBallSimulatorSummary">
              Show Summary
              <i class="fas fa-caret-down"></i>
            </a>
            <p
              v-if="showBallSimulatorSummary"
            >A uniquely designed website for a fake web agency. Featuring custom designed logos, svg images, and transitions. Built with Laravel and JavaScript.</p>
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
.summary-div > * {
  padding: 10px;
}
.summary-list > li {
  list-style: inside;
  padding-left: 10px;
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
