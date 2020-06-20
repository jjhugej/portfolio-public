<template>
  <section class="section">
    <div class="container">
      <h1 class="has-text-centered">Request My Resume</h1>
      <h2 class="has-text-centered">Let's get to know each other</h2>
      <div class="form-wrapper container">
        <form v-on:submit.prevent="onSubmit" action="#" method="POST">
          <div class="field">
            <label class="label">Name</label>
            <div class="control">
              <input class="input" type="text" placeholder="e.g. Alex Smith" />
            </div>
          </div>
          <div class="field">
            <label class="label">Email</label>
            <div class="control">
              <input class="input" type="email" placeholder="alexsmith@gmail.com" />
            </div>
          </div>
          <div class="field">
            <label class="label">Company</label>
            <div class="control">
              <input class="input" type="text" placeholder="Alex Smith's startup" />
            </div>
          </div>
          <div class="field">
            <label class="label">Your position</label>
            <div class="control">
              <input class="input" type="text" placeholder="C.T.O." />
            </div>
          </div>
          <div class="field">
            <label class="label">Tell me about your company</label>
            <div class="control">
              <textarea></textarea>
            </div>
          </div>
          <div class="control">
            <button class="button is-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  mounted() {
    console.log("About Component mounted.");
  }
};
</script>
<style scoped>
h1 {
  font-size: 40px;
  font-weight: 200;
}
h2 {
  font-size: 20px;
  font-weight: 300;
}
.form-wrapper {
  width: 50vw;
}
textarea {
  width: 100%;
  height: 20vh;
}
</style>
