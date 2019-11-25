<template>

  <transition name="page" mode="out-in">
    <slot>
      <router-view />
    </slot>
  </transition>
</template>

<script>
export default {
  name: 'Child',

  watch: {
    '$route' (to, from) {
      document.title = to.meta.title || 'Your Website'
    },
    immediate: true
  },
}
</script>
