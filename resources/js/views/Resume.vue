<template>
  <section class="section">
    <div class="container">
      <h1 class="has-text-centered">Request My Resume</h1>
      <h2 class="has-text-centered">Let's get to know each other</h2>
      <div class="form-wrapper container">
        <div class="field">
          <label for="name" class="label">Name</label>
          <div class="control">
            <input
              v-model="name"
              name="name"
              class="input"
              type="text"
              placeholder="e.g. Alex Smith"
            />
          </div>
        </div>
        <div class="field">
          <label class="label">Email</label>
          <div class="control">
            <input
              v-model="email"
              name="email"
              class="input"
              type="email"
              placeholder="alexsmith@gmail.com"
            />
          </div>
        </div>
        <div class="field">
          <label class="label">Company</label>
          <div class="control">
            <input
              v-model="company"
              name="company"
              class="input"
              type="text"
              placeholder="Alex Smith's startup"
            />
          </div>
        </div>
        <div class="field">
          <label class="label">Your position</label>
          <div class="control">
            <input
              v-model="position"
              name="position"
              class="input"
              type="text"
              placeholder="C.T.O."
            />
          </div>
        </div>
        <div class="field">
          <label class="label">Tell me about your company</label>
          <div class="control">
            <textarea v-model="notes" name="notes" class="textarea"></textarea>
          </div>
        </div>
        <div class="control">
          <button v-on:click="sendRequest" class="button is-primary">Submit</button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data: function() {
    return {
      name: "",
      email: "",
      company: "",
      position: "",
      notes: ""
    };
  },
  methods: {
    sendRequest: function() {
      //validate
      //make post request to /resumeRequest
      axios
        .post("/resumeRequest", {
          name: this.name,
          email: this.email,
          company: this.company,
          position: this.position,
          notes: this.notes
        })
        .then(function(response) {
          console.log(response);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  },
  mounted() {}
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
