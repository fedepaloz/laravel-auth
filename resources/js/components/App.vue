<template>
  <div class="content">
    <Placeholder :title="title"></Placeholder>
    <div class="title m-b-md"></div>
  </div>
</template>

 
 <script>
import Placeholder from "./Placeholder.vue";
export default {
  name: "App",
  components: {
    Placeholder,
  },
  data() {
    return {
      title: "WIP",
    };
  },
};
</script>


 