<template>
  <section class="section">
    <div class="container">
      <h1 class="has-text-centered">Resume Request</h1>
      <h2 class="has-text-centered">Please fill out the form below</h2>
      <div class="form-wrapper container">
        <form v-on:submit.prevent>
          <div class="field">
            <label for="name" class="label">Name</label>
            <input
              v-model="name"
              name="name"
              class="input"
              type="text"
              placeholder="e.g. Alex Smith"
              required
            />
            <p v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</p>
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
                required
              />
              <p v-if="errors.email" class="has-text-danger">{{ errors.email[0] }}</p>
            </div>
          </div>
          <div class="field">
            <label class="label">Phone Number</label>
            <div class="control">
              <input
                v-model="phone"
                name="phone"
                class="input"
                type="phone"
                placeholder="123-456-7890"
                required
              />
              <p v-if="errors.phone" class="has-text-danger">{{ errors.phone[0] }}</p>
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
                required
              />
              <p v-if="errors.company" class="has-text-danger">{{ errors.company[0] }}</p>
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
                placeholder="Recruiter"
                required
              />
              <p v-if="errors.position" class="has-text-danger">{{ errors.position[0] }}</p>
            </div>
          </div>
          <div class="field">
            <label class="label">
              Please write a brief description of your
              company:
            </label>
            <div class="control">
              <textarea v-model="notes" name="notes" class="textarea"></textarea>
            </div>
          </div>

          <div class="control">
            <button
              :disabled="btnDisabled"
              v-on:click="sendRequest"
              class="button is-primary"
            >{{ btnText }}</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data: function () {
    return {
      name: "",
      email: "",
      phone: "",
      company: "",
      position: "",
      notes: "",
      btnDisabled: false,
      btnText: "Submit",
      errors: {},
    };
  },
  computed: {},
  methods: {
    sendRequest: function () {
      this.errors = {};
      axios
        .post("/resumerequest", {
          name: this.name,
          email: this.email,
          phone: this.phone,
          company: this.company,
          position: this.position,
          notes: this.notes,
        })
        .then((response) => {
          EventBus.$emit("resumeRequestSubmitted");
          this.btnDisabled = "true";
          this.btnText = "Submitted!";
          this.name = "";
          this.email = "";
          this.phone = "";
          this.company = "";
          this.position = "";
          this.notes = "";
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
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
  margin-top: 30px;
  width: 50vw;
}

textarea {
  width: 100%;
  height: 20vh;
}
@media only screen and (max-width: 700px) {
  .form-wrapper {
    width: 80vw;
  }
}
</style>
