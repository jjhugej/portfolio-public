<template>
  <article v-if="isVisible" class="message is-success">
    <div class="message-header">
      <p>Success</p>
      <button v-on:click="closeMessage" class="delete" aria-label="delete"></button>
    </div>
    <div class="message-body has-text-centered">Request received!</div>
  </article>
</template>

<script>
export default {
  data: function() {
    return {
      isVisible: false
    };
  },
  methods: {
    closeMessage: function() {
      this.isVisible = false;
    }
  },
  created() {},
  mounted() {
    EventBus.$on("resumeRequestSubmitted", () => {
      this.isVisible = true;
      setTimeout(() => (this.isVisible = false), 9000);
    });
  }
};
</script>
<style scoped>
article {
  position: fixed;
  bottom: 10%;
  right: 10%;
  z-index: 99;
}
p {
  text-align: center;
}
</style>
