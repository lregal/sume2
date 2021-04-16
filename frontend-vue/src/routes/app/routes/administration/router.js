import Users from './routes/users/Index.vue'
import Permissions from './routes/permissions/Index.vue'
import UserPermissions from './routes/user-permissions/Index.vue'
import Employees from '@/routes/app/routes/resources/routes/employees/Index'
import People from '@/routes/app/routes/administration/routes/people/Index'

let administrationRoutes = [
  {
    path: 'users',
    name: 'users',
    component: Users,
  },
  {
    path: 'permissions',
    name: 'permissions',
    component: Permissions,
  },
  {
    path: 'user-permissions',
    name: 'user-permissions',
    component: UserPermissions,
  },
  {
    path: 'people',
    name: 'people',
    component: People,
  },
  {
    path: 'employees',
    name: 'employees',
    component: Employees,
  },
]

export default administrationRoutes
