import {defineComponent} from "vue"

export default defineComponent({
    data: () => ({
        message: "Hello Sir, my greetings to you!",
    }),
    methods: {
        greet() {
            alert(this.message)
        },
    },
    render() {
        return this.$slots.default({
            greet: this.greet,
            message: this.message,
        })
    },
})