<template>
  <div class="flex mt-3">
    <span class="flex-none w-20 text-right">{{ title }}</span>
    <select
      class="flex-1 mx-5 px-1 border rounded"
      v-bind:value="modelValue ?? value"
      v-bind:placeholder="placeholder"
      v-bind:name="name"
      v-on:input="$emit('update:modelValue', $event.target.value)"
    >
      <option
        v-for="option in options"
        v-bind:key="option.id"
        v-bind:value="option.id"
      >
        {{ option.name }}
      </option>
    </select>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      required: true,
      type: String,
    },
    value: {
      required: false,
      type: String,
    },
    placeholder: {
      required: false,
      type: String,
    },
    name: {
      required: false,
      type: String,
    },
    options: {
      required: false,
      type: Array,
    },
    modelValue: {
      required: false,
    },
  },
};
</script>