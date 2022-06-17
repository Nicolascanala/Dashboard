<template>
  <div class="mb-8 p-4 flex justify-center">
    <form method="POST" action="admin/pdf" enctype="multipart/form-data">
      <input type="hidden" name="_token" :value="csrf" />
      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-500"
          >PDF Title</label
        >
        <input
          type="text"
          name="title"
          v-model="title"
          required
          class="
            rounded-lg
            block
            w-full
            p-2.5
            bg-gray-700
            border-gray-600
            placeholder-gray-400
            text-white
            focus:ring-blue-500 focus:border-blue-500
          "
        />
      </div>
      <div class="mb-6">
        <label
          for="password"
          class="block mb-2 text-sm font-medium text-gray-500"
          >Upload PDF</label
        >
        <input
          type="file"
          name="file"
          v-on:change="pdfFile"
          class="
            rounded-lg
            block
            w-full
            p-2.5
            bg-gray-700
            border-gray-600
            placeholder-gray-400
            text-white
            focus:ring-blue-500 focus:border-blue-500
          "
        />
      </div>
      <button
        type="submit"
        class="
          text-white
          focus:ring-4 focus:outline-none
          font-medium
          rounded-lg
          text-sm
          w-full
          sm:w-auto
          px-5
          py-2.5
          text-center
          bg-blue-600
          hover:bg-blue-700
          focus:ring-blue-800
        "
      >
        Submit
      </button>
    </form>
  </div>
</template>

<script>
export default {
  name: "form-component",
  data() {
    return {
      file: null,
      title: "",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },
  methods: {
    pdfFile(e) {
      let file = e.target.files || e.dataTransfer.files;
      if (!file.length) return;

      this.file = file;
    },
  },
};
</script>