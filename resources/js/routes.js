export default {
  routes: [
    { 
        path: '/company/{id}', 
        component:  () => import('./views/Company/CompanyShow'),
        name: 'company'
    }, 
    {
        path: '/',
        component: () => import('./views/Company/CompanyList'),
        name: 'companies'
    }
  ]
}
