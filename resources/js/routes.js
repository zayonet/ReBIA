import Home from './pages/Home.vue';
import Welcome from './pages/Welcome.vue';
import Dashboard from './pages/Dashboard.vue';
import About from './pages/About.vue'; 
import Profile from './pages/user/Profile.vue';
import Personal from './pages/user/Personal-info.vue';
import NotFound from './pages/404.vue';


export default [
    {
        path: '/home',
        component: Home,
        name: 'home'
    },
    {
        path: '/',
        component: Personal,
        name: 'personal'
    },
    {
        path: '/welcome',
        component: Welcome,
        name: 'welcome'
    },
    {
        path: '/dashboard',
        component: Dashboard,
        name: 'dashboard'
    },
    {
        // UserProfile will be rendered inside User's <router-view>
        // when /user/:id/profile is matched
        path: '/profile',
        component: Profile,
        name: 'profile'
    },
    {
        path: '/about',
        component: About,
        name: 'about'
    },
    /* {
        path: '/users',
        component: Users,
        name: 'users',

        children: [
            {
                // UserProfile will be rendered inside User's <router-view>
                // when /user/:id/profile is matched
                path: 'profile',
                component: Profile,
                name: 'classes'
            },
        ]
    }, */
    {
        path: '*',
        component: NotFound,
        name: NotFound
    } //a estrela significa k se nao encontrar nenhum component entrao chama o 404
]
