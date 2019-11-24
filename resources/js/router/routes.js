function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [

  { path: '/', name: 'login', component: page('auth/login.vue'), meta: { auth: false, title: 'SIFCME | Inicio Sesión' } },
  { path: '/register', name: 'register', component: page('auth/register.vue'), meta: { auth: false, title: 'SIFCME | Registrar Usuario' } },
  { path: '/dashboard', name: 'dashboard', component: page('dashboard.vue'), meta: { auth: false, title: 'SIFCME | Dashboard' } },
  { path: '/usuarios', name: 'usuarios', component: page('control/usuarios.vue'), meta: { auth: false, title: 'SIFCME | Usuarios' } },
  { path: '/nuevo-usuario', name: 'nuevo-usuario', component: page('control/crud/create.vue'), meta: { auth: false, title: 'SIFCME | Nuevo Usuario' } },
  { path: '/usuario/editar/:id', name: 'editar-usuario', component: page('control/crud/edit.vue'), meta: { auth: false, title: 'SIFCME | Editar Usuario' } },
  { path: '/password', name: 'password', component: page('settings/password.vue'), meta: { auth: false, title: 'SIFCME | Cambiar Password' } },
  { path: '/settings',
    component: page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue'), meta: { auth: false, title: 'SIFCME | Perfil de Usuario' } },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue'), meta: { auth: false, title: 'SIFCME | Cambiar Password' } }
    ] },

  { path: '*', component: page('errors/404.vue'), meta: { auth: false, title: 'Página no Encontrada' } }
]
