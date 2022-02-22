<template>
  <div class="main-layout">
    <navbar />
    <div class="container-lg mt-4">
      <child />
    </div>
    <Footer />
  </div>
</template>

<script>
import Navbar from "~/components/Navbar";
import Footer from "~/components/Footer";
export default {
  name: "MainLayout",

  components: {
    Navbar,
    Footer,
  },
};
</script>
