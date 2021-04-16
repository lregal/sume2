import Employees from './routes/employees/Index'
import ShiftPlanning from './routes/shift-planning/Index'
import BargaininAgreement from './routes/collective-agreements/Index'
import JobPositions from './routes/job-positions/Index'
import JobCategories from './routes/job-categories/Index'
import Leaves from './routes/leaves/Index'
import Devices from './routes/devices/Index'
import BankAccounts from './routes/bank-accounts/Index'

let resourcesRoutes = [
  {
    path: 'bank-accounts',
    name: 'bankAccounts',
    component: BankAccounts,
  },
  {
    path: 'employees',
    name: 'employees',
    component: Employees,
  },
  {
    path: 'shift-planning',
    name: 'shiftPlanning',
    component: ShiftPlanning,
  },
  {
    path: 'job-positions',
    name: 'jobPositions',
    component: JobPositions,
  },
  {
    path: 'job-categories',
    name: 'jobCategories',
    component: JobCategories,
  },
  {
    path: 'collective-agreements',
    name: 'bargaininAgreement',
    component: BargaininAgreement,
  },
  {
    path: 'leaves',
    name: 'leaves',
    component: Leaves,
  },
  {
    path: 'devices',
    name: 'devices',
    component: Devices,
  },

]

export default resourcesRoutes
