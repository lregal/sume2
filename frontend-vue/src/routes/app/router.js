import Home from './routes/home/Index.vue'
import Sume from './routes/sume/Index.vue'
import Dashboard from './routes/dashboard/Index.vue'
import Reports from './routes/reports/Index.vue'
import PunchCard from './routes/punch-card/Index.vue'
import Resources from './routes/resources/Index.vue'
import Administration from './routes/administration/Index.vue'
import Leaves from './routes/leaves/Index.vue'
import Companies from './routes/companies/Index.vue'
import Notifications from './routes/notifications/Index.vue'
import System from './routes/system/Index.vue'

import administrationRoutes from './routes/administration/router'
import sumeRoutes from './routes/sume/router'
import resourcesRoutes from './routes/resources/router'
import reportsRoutes from './routes/reports/router'
import punchCardRoutes from './routes/punch-card/router'
import leavesRoutes from './routes/leaves/router'
import companiesRoutes from './routes/companies/router'
import notificationsRoutes from './routes/notifications/router'
import systemRoutes from './routes/system/router'

let appRoutes = [{
        path: 'home',
        name: 'home',
        component: Home,
    },
    {
        path: 'dashboard',
        name: 'dashboard',
        component: Dashboard,
    },
    {
        path: 'sume',
        name: 'sume',
        component: Sume,
        children: sumeRoutes,
        meta: { guard: 'SUME' },
    },
    {
        path: 'administration',
        name: 'administration',
        component: Administration,
        children: administrationRoutes,
        meta: { guard: 'ADMIN' },
    },
    {
        path: 'reports',
        name: 'reports',
        component: Reports,
        children: reportsRoutes,
        meta: { guard: 'ADMIN' },
    },
    {
        path: 'punch-card',
        name: 'punchCard',
        component: PunchCard,
        children: punchCardRoutes,
        meta: { guard: 'ADMIN' },
    },
    {
        path: 'resources',
        name: 'resources',
        component: Resources,
        children: resourcesRoutes,
        meta: { guard: 'ADMIN' },
    },
    {
        path: 'leave',
        name: 'leave',
        component: Leaves,
        children: leavesRoutes,
        meta: { guard: 'ADMIN' },
    },
    {
        path: 'companies',
        name: 'companies',
        component: Companies,
        children: companiesRoutes,
        meta: { guard: 'ADMIN' },
    },
    {
        path: 'notifications',
        name: 'notifications',
        component: Notifications,
        children: notificationsRoutes,
        meta: { guard: 'ADMIN' },
    },
    {
        path: 'system',
        name: 'system',
        component: System,
        children: systemRoutes,
        meta: { guard: 'ADMIN' },
    },
]

export default appRoutes