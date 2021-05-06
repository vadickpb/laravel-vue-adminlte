import VueRouter from 'vue-router'

let routes = [
    {
        path: '/Dashboard',
        component: require('./views/Dashboard').default
    },
    {
        path: '/Users',
        component: require('./views/Users').default
    }
];

export default new VueRouter({
    base: '/admin',
    mode : 'history',
    routes,
    linkActiveClass: 'active'
})
