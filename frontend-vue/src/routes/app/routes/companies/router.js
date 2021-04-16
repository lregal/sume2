import Companies from './routes/companies/Index'
import BranchOffices from './routes/branch-offices/Index'
import CostsCenters from './routes/costs-centers/Index'
import Groups from './routes/groups/Index'
import Places from './routes/places/Index'
import GroupOverseers from './routes/group-overseers/Index'
import GroupEmployees from './routes/group-employees/Index'
import CostsCenterBranches from './routes/costs-center-branches/Index'
import CostsCenterClientCompanies from './routes/costs-center-client-companies/Index'
import CostsCenterGroups from './routes/costs-center-groups/Index'
import CompanyTypes from './routes/company-types/Index'

let companiesRoutes = [
  {
    path: 'company-types',
    name: 'companyTypes',
    component: CompanyTypes,
  },
  {
    path: 'companies',
    name: 'companies',
    component: Companies,
  },
  {
    path: 'branch-offices',
    name: 'branch-offices',
    component: BranchOffices,
  },
  {
    path: 'costs-centers',
    name: 'costs-centers',
    component: CostsCenters,
  },
  {
    path: 'groups',
    name: 'groups',
    component: Groups,
  },
  {
    path: 'places',
    name: 'places',
    component: Places,
  },
  {
    path: 'group-overseers',
    name: 'groupOverseers',
    component: GroupOverseers,
  },
  {
    path: 'group-employees',
    name: 'groupEmployees',
    component: GroupEmployees,
  },
  {
    path: 'costs-center-branches',
    name: 'costsCenterBranches',
    component: CostsCenterBranches,
  },
  {
    path: 'costs-center-client-companies',
    name: 'costsCenterClientCompanies',
    component: CostsCenterClientCompanies,
  },
  {
    path: 'costs-center-groups',
    name: 'costsCenterGroups',
    component: CostsCenterGroups,
  },
]

export default companiesRoutes
