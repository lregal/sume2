import Settings from './routes/settings/Index'
import Users from './routes/users/Index'
import Roles from './routes/roles/Index'
import People from '../administration/routes/people/Index'
import Import from './routes/import/Index'
import Banks from './routes/banks/Index'

let systemRoutes = [
  {
    path: 'settings',
    name: 'settings',
    component: Settings,
  },
  {
    path: 'users',
    name: 'users',
    component: Users,
  },
  {
    path: 'roles',
    name: 'roles',
    component: Roles,
  },
  {
    path: 'people',
    name: 'people',
    component: People,
  },
  {
    path: 'import',
    name: 'import',
    component: Import,
  },
  {
    path: 'banks',
    name: 'banks',
    component: Banks,
  },
]

export default systemRoutes
