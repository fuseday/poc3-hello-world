<template>
  <button v-bind="$attrs" @click="sayHi">
    <slot/>
    Foo bar baz
  </button>
</template>

<script>
import {defineComponent} from "vue"

export default defineComponent({
  methods: {
    sayHi() {
      console.log("Hi!")
    }
  }
})
</script>