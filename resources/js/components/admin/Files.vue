<template>
  <div class="md:flex md:flex-wrap md:gap-2">
    <div
      v-for="item in files"
      :key="item.id"
      class="
        mx-auto
        md:ml-16 md:mr-0
        p-6
        mb-4
        md:mb-0
        max-w-sm
        rounded-lg
        shadow-md
        bg-gray-800
        dark:border-gray-700
      "
    >
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
        {{ item.title }}
      </h5>
      <a
        :href="item.media[0].original_url"
        download
        class="
          inline-flex
          items-center
          py-2
          px-3
          text-sm
          font-medium
          text-center text-white
          rounded-lg
          focus:ring-4 focus:outline-none
          bg-blue-600
          hover:bg-blue-700
          focus:ring-blue-800
        "
      >
        Download PDF
      </a>
      <button
        @click="deleteFile(item.id)"
        class="
          ml-2
          inline-flex
          items-center
          py-2
          px-3
          text-sm
          font-medium
          text-center text-white
          rounded-lg
          focus:ring-4 focus:outline-none
          bg-red-600
          hover:bg-red-700
          focus:ring-red-800
        "
      >
        Delete
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    filesProp: {
      default: [],
    },
  },
  data() {
    return {
      files: [],
    };
  },
  methods: {
    deleteFile(id) {
      axios
        .delete(`/admin/pdf/${id}`)
        .then((response) => (this.files = response.data));
    },
  },
  mounted() {
    this.files = this.filesProp;
  },
};
</script>
