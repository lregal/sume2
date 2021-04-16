import MovementTypes from './routes/leave-types/Index'
import RequestManagement from './routes/request-management/Index'

let leavesRoutes = [{
        path: 'leave-types',
        name: 'leaveTypes',
        component: MovementTypes,
    },
    {
        path: 'request-management',
        name: 'requestManagement',
        component: RequestManagement,
    },
]

export default leavesRoutes