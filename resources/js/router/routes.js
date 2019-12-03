function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [

  { path: '/', name: 'login', component: page('auth/login.vue'), meta: { auth: false, title: 'SIFCME | Inicio Sesión' } },
  { path: '/dashboard', name: 'dashboard', component: page('dashboard.vue'), meta: { auth: false, title: 'SIFCME | Dashboard' } },
  // RUTAS USUARIO CRUD
  { path: '/usuarios', name: 'usuarios', component: page('control/usuarios.vue'), meta: { auth: false, title: 'SIFCME | Usuarios' } },
  { path: '/nuevo-usuario', name: 'nuevo-usuario', component: page('control/crud/create.vue'), meta: { auth: false, title: 'SIFCME | Nuevo Usuario' } },
  { path: '/usuario/editar/:id', name: 'editar-usuario', component: page('control/crud/edit.vue'), meta: { auth: false, title: 'SIFCME | Editar Usuario' } },
  { path: '/register', name: 'register', component: page('auth/register.vue'), meta: { auth: false, title: 'SIFCME | Registrar Usuario' } },
  { path: '/password', name: 'password', component: page('settings/password.vue'), meta: { auth: false, title: 'SIFCME | Cambiar Password' } },
  // RUTAS CRUD GENERALES
  { path: '/solicitudes', name: 'solicitudes', component: page('creditos/solicitudes.vue'), meta: { auth: false, title: 'SIFCME | Solicitudes' } },
  { path: '/nueva/solicitud', name: 'nueva-solicitud', component: page('creditos/generales/create.vue'), meta: { auth: false, title: 'SIFCME | Nueva Solicitud' } },
  { path: '/editar/solicitud/:id', name: 'editar-solicitud', component: page('creditos/generales/edit.vue'), meta: { auth: false, title: 'SIFCME | Editar Solicitud' } },
  { path: '/expediente/:id', name: 'ver-expediente', component: page('creditos/view.vue'), meta: { auth: false, title: 'SIFCME | Solicitud' } },
  { path: '/view/generales/:id', name: 'ver-solicitud', component: page('creditos/generales/view.vue'), meta: { auth: false, title: 'SIFCME | Solicitud' } },
  // RUTAS CRUD ESTRUCTURA
  { path: '/captura/estructura/:id', name: 'nueva-estructura', component: page('creditos/estructura/create.vue'), meta: { auth: false, title: 'SIFCME | Estructura de Inversión' } },
  { path: '/editar/estructura/:id', name: 'editar-estructura', component: page('creditos/estructura/edit.vue'), meta: { auth: false, title: 'SIFCME | Editar Estructura de Inversión' } },
  // RUTAS CRUD DESCRIPCION
  { path: '/captura/descripcion/:id', name: 'nueva-descripcion', component: page('creditos/descripcion/create.vue'), meta: { auth: false, title: 'SIFCME | Descripcion del Negocio' } },
  { path: '/captura/declaracion/:id', name: 'nueva-declaracion', component: page('creditos/declaracion/create.vue'), meta: { auth: false, title: 'SIFCME | Declaración Patrimonial' } },
  { path: '/captura/informacion/:id', name: 'nueva-informacion', component: page('creditos/informacion/create.vue'), meta: { auth: false, title: 'SIFCME | Información de Ingresos-Egresos' } },
  // { path: '/editar/solicitud/:id', name: 'editar-solicitud', component: page('creditos/generales/edit.vue'), meta: { auth: false, title: 'SIFCME | Editar Solicitud' } },
  { path: '/settings',
    component: page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue'), meta: { auth: false, title: 'SIFCME | Perfil de Usuario' } },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue'), meta: { auth: false, title: 'SIFCME | Cambiar Password' } }
    ] },

  { path: '*', component: page('errors/404.vue'), meta: { auth: false, title: 'Página no Encontrada' } }
]
