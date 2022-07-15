export default {

  // ||||||||||||||||||||||||||||||||||||||||||||||||||||
  // General Configuration:-                            ||||||||||||||||||||||||||||||||||
  // ||||||||||||||||||||||||||||||||||||||||||||||||||||

  // ____________________________________________________
  // SSR                  |||||||||||||||||||||||||||||||
  // Disable server-side rendering:
  // Default Status : True
  // DOCS : https://go.nuxtjs.dev/ssr-mode
  // true: Server-side rendering enabled
  // false: No server-side rendering (only client-side rendering)
  // |||||||||||||||||||||||||||||||||||||||||||||||||||
   ssr: false,

  // ____________________________________________________
  // TARGET               |||||||||||||||||||||||||||||||
  // Default Status : server
  // DOCS : https://go.nuxtjs.dev/config-target
  // 'server': For server side rendering
  // 'static': For static sites]
  // ||||||||||||||||||||||||||||||||||||||||||||||||||||
  target: 'static',

  // ____________________________________________________
  // COMPONENT            ||||||||||||||||||||||||||||||||
  // Auto import components: From Default ./components directory
  //Status : [true,false]
  components: true,


  // ENVIRONMENT          ||||||||||||||||||||||||||||||||||||
  // |||||||||||||||||||||||||||||||||||||||||||||||||||||||||
  // env: {
  //   apiUrl: process.env.API_URL || 'http://localhost:8000',
  //   //  apiUrl: process.env.API_URL || 'https://devapi.domain.com',
  //   //  apiUrl: process.env.API_URL || 'https://api.domain.in',
  //   // PAYMENT KEY INFO
  //   // payKey: '--razor--pay--key--',
  // },






  // ||||||||||||||||||||||||||||||||||||||||||||||||||||||
  // HEAD SECTION                                         |||||||||||||||||||||||||||||
  // ||||||||||||||||||||||||||||||||||||||||||||||||||||||

  // Global page headers:
  head: {
    title: 'storefront',
    titleTemplate: '%s - Welcome To StoreFront',
    // Locale, Translation
    htmlAttrs: {
      lang: 'en'
    },
    // Meta Tag
    meta: [
      //Charset
      { charset: 'utf-8' },
      // Viewport
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      // Description
      {
        hid: 'description',
        name: 'description',
        content: '--short-description--'
      },
      // Keywords
      {
        hid: 'keywords',
        name: 'keywords',
        content: `--words--`
      },
      {
        name: 'google-site-verification',
        content: '--key--'
      },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      //  Favicon
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
    // Head JSLogics

    // Razorpay Checkout Example
    // script: [
    //   {
    //   hid: 'rzpay',
    //   src: 'https://checkout.razorpay.com/v1/checkout.js',
    //   defer: true
    //   }
    // ]
  },
  // |-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|
  // STYLESHEET SECTION
  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    // '@/assets/main.css'
  ],


  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    // { src: '~/plugins/vee-validate.js' },
    // { src: '~/plugins/firebase.js', mode: 'client', ssr: false },
    // { src: '~/plugins/pixi.js', mode: 'client', ssr: false }
  ],


  // Loader Configuration
  loading: {
    color: 'green',
    height: '5px'
  },



  // AXIOS                                              ||||||||||||||||||||||||||||||||||||||||||||
  // DOCS : https://go.nuxtjs.dev/config-axios          ||||||||||||||||||||||||||||||||||||||||||||
  // |||||||||||||||||||||||||||||||||||||||||||||||||||

  axios: {
    // Workaround to avoid enforcing hard-coded localhost:3000:
    // VISIT : https://github.com/nuxt-community/axios-module/issues/308
    baseURL: 'http://localhost:8000',
    credentials:true
  },


  // ROUTER                                             ||||||||||||||||||||||||||||||||||||||||||||
  // DOCS :                                             ||||||||||||||||||||||||||||||||||||||||||||
  // |||||||||||||||||||||||||||||||||||||||||||||||||||
  router:{
    middleware:['auth']
  },


  // AUTHENTICATION                                     ||||||||||||||||||||||||||||||||||||||||||||
  // DOCS :                                             ||||||||||||||||||||||||||||||||||||||||||||
  // |||||||||||||||||||||||||||||||||||||||||||||||||||
  auth: {
    // REDIRECTION
    // redirect: {
    //   home: '/',
    //   logout: '/',
    //   login: '/auth/sign-in',
    //   callback: '/'
    // },

    // STORAGE
    // localStorage: {
    //   prefix: '--short--name--.'
    // },

    // STRATEGIES
    strategies: {

      laravelSanctum: {
        provider: 'laravel/sanctum',
        url: 'http://localhost:8000',
        // user: {
        //   property: 'data',
        //   autoFetch: true
        // },
        endpoints:{
          login:{
            url:'/login',
            method: 'post'
          }
          // user: {
          //   url: '/api/details',
          //   method: 'get'
          // },
          // logout: {
          //   url: '/api/logout',
          //   method: 'get'
          // }
        }
      }


    }
  },




  // |||||||||||||||||||||||||||||||||||||||||||||||||||
  // MODULES WE NEED                                    ||||||||||||||||||||||||||||||||||||||||||||
  // Below set or load all related node modules for build your application |||||||||||||||||||||||||
  // |||||||||||||||||||||||||||||||||||||||||||||||||||


  // DEV MODULES  [BUILD MODULES]                       |||||||||||||||||||||||
  // DOCS : https://go.nuxtjs.dev/config-modules        |||||||||||||||||||||||
  // ||||||||||||||||||||||||||||||||||||||||||||||||||
  buildModules: [
    // Stylesheet Settings
      // https://go.nuxtjs.dev/tailwindcss
        '@nuxtjs/tailwindcss',

    // // Lint Modules For Matching Code style
    //   // https://go.nuxtjs.dev/eslint
    //     '@nuxtjs/eslint-module',
    //   // https://go.nuxtjs.dev/stylelint
    //     '@nuxtjs/stylelint-module',

    // // For VUE
    //   // https://go.nuxtjs.dev/vuetify
    //     '@nuxtjs/vuetify',

    // // FONTS
    //   //google fonts style
    //   '@nuxtjs/google-fonts',

    // PWA
      //PWA Application
      '@nuxtjs/pwa'
  ],



  // MODULES                                           ||||||||||||||||||||||||||
  // DOCS: https://go.nuxtjs.dev/config-modules        ||||||||||||||||||||||||||
  // |||||||||||||||||||||||||||||||||||||||||||||||||
  modules: [
    // Default
      // DOCS: https://go.nuxtjs.dev/axios
      '@nuxtjs/axios',
      // '@nuxtjs/sitemap',
      // '@nuxtjs/robots',
    // Authentication
      // Default
      '@nuxtjs/auth-next'

      // Laravel Only

  ],



  // BUILD CONFIGURATION                              |||||||||||||||||||||||||||
  // DOCS: https://go.nuxtjs.dev/config-build         |||||||||||||||||||||||||||
  // |||||||||||||||||||||||||||||||||||||||||||||||||
  build: {

    // extractCSS: {
    //   ignoreOrder: true,
    // },
    //
    // optimization: {
    //   splitChunks: {
    //     //  maxSize: 200000,
    //     cacheGroups: {
    //       styles: {
    //         name: 'styles',
    //         test: /\.(css|vue)$/,
    //         chunks: 'all',
    //         enforce: true,
    //       },
    //     },
    //   },
    // },

  },



  // |||||||||||||||||||||||||||||||||||||||||||||||||||
  // MODULES DESCRIPTION                               ||||||||||||||||||||||||||||||||||||||||||||
  // Below describe all related node modules for build your application ||||||||||||||||||||||||||||
  // |||||||||||||||||||||||||||||||||||||||||||||||||||




  // ROBOTS                                ____________________________________________
  // DOCS :                                ||||||||||||||||||||||||||||||||||||||||||||
  // ||||||||||||||||||||||||||||||||||||||
  // robots: {
  //   UserAgent: '*',
  //   Host: '--client-domain--',
  //   Disallow: '/_nuxt',
  //   Sitemap: 'https://--client--domain/sitemap.xml'
  // },


  // SITEMAP                                ___________________________________________
  // DOCS :                                ||||||||||||||||||||||||||||||||||||||||||||
  // ||||||||||||||||||||||||||||||||||||||
  // sitemap: {
  //   hostname: '--client--domain--',
  //   gzip: true,
  //   routes: ['about#team']
  // },


  // FONTS GOOGLE                          ____________________________________________
  // DOCS :                                ||||||||||||||||||||||||||||||||||||||||||||
  // ||||||||||||||||||||||||||||||||||||||
  // googleFonts: {
  //   families: {
  //     '--font--name--': {
  //       wght: [400, 700],
  //     },
  //   },
  // },


  // VUTIFY                                ____________________________________________
  // DOCS :                                ||||||||||||||||||||||||||||||||||||||||||||
  // ||||||||||||||||||||||||||||||||||||||
  // Vuetify module configuration: https://go.nuxtjs.dev/config-vuetify
  // vuetify: {
  //   customVariables: ['~/assets/variables.scss'],
  //   treeShake: true,
  //   defaultAssets: false,
  //   theme: {
  //       dark: true,
  //       light: false,
  //       options: {
  //           customProperties: false,
  //           variations: false,
  //           // themeCache: {
  //           //   get: (key) => localStorage.getItem(key),
  //           //   set: (key, value) => localStorage.setItem(key, value),
  //           // },
  //           // minifyTheme,
  //       },
  //         themes: {
  //             dark: {
  //               primary: 'ed2f7b',
  //               accent: '#A78BFA',
  //               secondary: 'f9b31e',
  //               info: '#6366F1',
  //               warning: '#F59E0B',
  //               error: '#EF4444',
  //               success: '#9FE2BF'
  //             },
  //         },
  //
  //       },
  // },




  // ||||||||||||||||||||||||||||||||||||||||||||||||||||| ****************************____________
  // EXCEPTION MANAGER                  ***********************************************************
  // ||||||||||||||||||||||||||||||||||||||||||||||||||||| ****************************^^^^^^^^^^^^


  // SENTRY                                ____________________________________________
  // DOCS :                                ||||||||||||||||||||||||||||||||||||||||||||
  // ||||||||||||||||||||||||||||||||||||||
  // sentry: {
  //   // Enter your project's DSN here
  //   dsn: '--sentry--project--dsn--',
  //   // Additional Module Options go here
  //   // https://sentry.nuxtjs.org/sentry/options
  //   config: {
  //     // Add native Sentry config here
  //     // https://docs.sentry.io/platforms/javascript/guides/vue/configuration/options/
  //   }
  // },




  // ||||||||||||||||||||||||||||||||||||||||||||||||||||| ****************************____________
  // PWA MANAGER                        ***********************************************************
  // ||||||||||||||||||||||||||||||||||||||||||||||||||||| ****************************^^^^^^^^^^^^
  // PWA module configuration: https://go.nuxtjs.dev/pwa
  pwa: {
    icon: {
      /* icon options */
      source: '/icon.png'
    },
    manifest: {
      lang: 'en',
      name: '--slogan--',
      short_name: '--short--name--',
      description: `--description--`
    },
    meta: {
      theme_color: '#121212',
      nativeUI: true,
      name: '--short--name--',
      author: '--author--name--',
      description: `--description--`,
      ogHost: '--client--domain--'
    }
  }





}
