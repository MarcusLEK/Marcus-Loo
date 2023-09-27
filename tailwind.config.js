module.exports = {
  mode: "jit",
  content: [
    "./components/**/*.{js,vue,ts}",
    "./layouts/**/*.vue",
    "./pages/**/*.vue",
    "./plugins/**/*.{js,ts}",
    "./app.vue",
  ],
  theme: {
    extend: {
      colors: {
        raisinBlack: "#191D2B",
        goGreen: "#27AE60",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
