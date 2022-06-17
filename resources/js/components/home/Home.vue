<template>
  <aside class="hidden md:flex fixed inset-y-0 w-64 mt-[3.25rem]" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 bg-gray-600">
      <ul class="space-y-2">
        <li class="mb-4">
          <h2 class="text-xl text-white underline">Dashboard</h2>
        </li>
        <li>
          <button
            @click="onClick(true)"
            class="
              flex
              items-center
              p-2
              rounded-lg
              text-white
              hover:bg-gray-700
              w-full
            "
          >
            PDFs
          </button>
        </li>
      </ul>
    </div>
  </aside>

  <div class="md:ml-40 flex flex-col justify-center p-4">
    <div class="text-center mb-10">
      <h1 class="text-2xl">HOME</h1>
    </div>

    <div>
      <button
            @click="onClick(true)"
            class="
              md:hidden
              flex
              items-center
              p-2
              rounded-lg
              text-white
              bg-gray-700
              w-full
              mb-6
            "
          >
            PDFs
          </button>
    </div>

    <div v-if="show">
    <div class="md:flex md:flex-wrap md:gap-2">
      <div
        v-for="item in files"
        :key="item.id"
        class="
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
      </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "home",
  props: ["files"],
  data() {
    return {
      show: false,
    };
  },
  methods: {
    onClick() {
      this.show = !this.show;
    },
  },
};
</script>
