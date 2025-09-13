import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import NProgress from 'nprogress'
import { router } from '@inertiajs/vue3'
import Layout from './Shared/Layout.vue'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]

    // If page doesn't already define a layout, use the default
    page.default.layout = page.default.layout || Layout

    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
  progress: {
    delay: 250,
    color: 'red',
    includeCSS: true,
    showSpinner: false,
  },
})

// router.on('start', () => NProgress.start())
// router.on('finish', (event) => {
//   if (event.detail.visit.completed) {
//     NProgress.done()
//   } else if (event.detail.visit.interrupted) {
//     NProgress.set(0)
//   } else if (event.detail.visit.cancelled) {
//     NProgress.done()
//     NProgress.remove()
//   }
// })

