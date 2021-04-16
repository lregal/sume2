<?php
namespace App\Resources;

class CRUD
{
    public static $resources = [
        [
            'prefix' => 'sume',
            'permission' => 'SUME',
            'namespace' => 'Sume',
                'resources' => [
                    ['path' => 'positions', 'controller' => 'PositionsController', 'model' => 'App\Models\Sume\Position', 'custom' => [
                        ['path' => '/{id}/tasks', 'method' => 'get', 'function' => 'positionTasks']]
                    ],
                    ['path' => 'company-comments', 'controller' => 'CompanyCommentsController', 'model' => 'App\Models\Sume\CompanyComment'],
                    ['path' => 'person-comments', 'controller' => 'PersonCommentsController', 'model' => 'App\Models\Sume\PersonComment'],
                    ['path' => 'position-tasks', 'controller' => 'PositionTasksController', 'model' => 'App\Models\Sume\PositionTask', 'delete' => true, 'multipleAdd' => true],
                    ['path' => 'company-comment-types', 'controller' => 'CompanyCommentTypesController', 'model' => 'App\Models\Sume\CompanyCommentType'],
                    ['path' => 'person-comment-types', 'controller' => 'PersonCommentTypesController', 'model' => 'App\Models\Sume\PersonCommentType'],
                    ['path' => 'tasks', 'controller' => 'TasksController', 'model' => 'App\Models\Sume\Task'],
                    ['path' => 'street-prefixes', 'controller' => 'StreetPrefixesController', 'model' => 'App\Models\Sume\StreetPrefix'],
                    ['path' => 'languages', 'controller' => 'LanguagesController', 'model' => 'App\Models\Sume\Language'],
                    ['path' => 'company-files', 'controller' => 'CompanyFilesController', 'model' => 'App\Models\Sume\CompanyFile'],
                ],
        ],
        [
            'prefix' => 'resources',
            'permissions' => 'ADMIN',
            'namespace' => 'Resources',
            'resources' => [
                ['path' => 'employees','controller'=>'EmployeesController', 'model'=>'App\Models\Resources\Employee'],
                ['path' => 'bank-accounts', 'controller' => 'BankAccountsController', 'model' => 'App\Models\Resources\BankAccount'],
                ['path' => 'collective-agreements', 'controller' => 'CollectiveAgreementController', 'model' => 'App\Models\Resources\CollectiveAgreement'],
                ['path' => 'job-categories', 'controller' => 'JobCategoriesController', 'model' => 'App\Models\Resources\JobCategory'],
                ['path' => 'job-positions', 'controller' => 'JobPositionsController', 'model' => 'App\Models\Resources\JobPosition'],
            ]

        ],
        [
            'prefix' => 'admin',
            'permission' => 'ADMIN',
            'namespace' => 'Admin',
            'resources' => [
                ['path' => 'people', 'controller' => 'PeopleController', 'model' => 'App\Models\Admin\Person', 'custom' => [
                    ['path' => '-list/{mode}/{search?}', 'method' => 'get', 'function' => 'itemsList'],
                    ['path' => '/search', 'method' => 'post', 'function' => 'search']]
                ],
                ['path' => 'users', 'controller' => 'UsersController', 'model' => 'App\Models\Admin\User', 'custom' => [
                    ['path' => '/{id}/reset-password', 'method' => 'put', 'function' => 'resetPassword'],
                    ['path' => '/{id}/permissions', 'method' => 'get', 'function' => 'userPermissions']]
                ],
                ['path' => 'permissions', 'controller' => 'PermissionsController', 'model' => 'App\Models\Admin\Permission', 'custom' => [
                    ['path' => '/{id}/users', 'method' => 'get', 'function' => 'permissionUsers']]
                ],
                ['path' => 'user-permissions', 'controller' => 'UserPermissionsController', 'model' => 'App\Models\Admin\UserPermission', 'delete' => true, 'multipleAdd' => true],
                ['path' => 'user-types', 'controller' => 'UserTypesController', 'model' => 'App\Models\Admin\UserType', 'custom' => [
                    ['path' => '/{id}/reset-password', 'method' => 'put', 'function' => 'resetPassword'],
                    ['path' => '/{id}/permissions', 'method' => 'get', 'function' => 'userPermissions']]
                ],
            ],
        ],
        [
            'prefix' => 'system',
            'permission' => 'ADMIN',
            'namespace' => 'System',
            'resources' => [
                ['path' => 'banks', 'controller' => 'BanksController', 'model' => 'App\Models\System\Bank'],
                ['path' => 'countries', 'controller' => 'CountriesController', 'model' => 'App\Models\System\Country'],
            ],
        ],
        [
            'prefix' => 'companies',
            'permission' => 'ADMIN',
            'namespace' => 'Companies',
            'resources' => [
                ['path' => 'companies', 'controller' => 'CompaniesController', 'model' => 'App\Models\Companies\Company'],
                ['path' => 'company-types', 'controller' => 'CompanyTypesController', 'model' => 'App\Models\Companies\CompanyType'],
                ['path' => 'costs-centers', 'controller' => 'CostsCentersController', 'model' => 'App\Models\Companies\CostsCenter'],
                ['path' => 'branch-offices', 'controller' => 'BranchOfficesController', 'model' => 'App\Models\Companies\BranchOffice'],
                ['path' => 'groups', 'controller' => 'GroupsController', 'model' => 'App\Models\Companies\Group'],
                ['path' => 'group-overseers', 'controller' => 'GroupOverseersController', 'model' => 'App\Models\Companies\GroupOverseer'],
                ['path' => 'group-employees', 'controller' => 'GroupEmployeesController', 'model' => 'App\Models\Companies\GroupEmployee'],
                ['path' => 'costs-center-branches', 'controller' => 'CostsCenterBranchesController', 'model' => 'App\Models\Companies\CostsCenterBranch'],
                ['path' => 'costs-center-client-companies', 'controller' => 'CostsCenterClientsCompaniesController', 'model' => 'App\Models\Companies\CostsCenterClientCompany'],
                ['path' => 'costs-center-groups', 'controller' => 'GroupCostsCentersController', 'model' => 'App\Models\Companies\GroupCostsCenter'],
                ['path' => 'places', 'controller' => 'PlacesController', 'model' => 'App\Models\Companies\Place'],
            ],
        ],
        [
            'prefix' => 'leave',
            'permissions' => 'ADMIN',
            'namespace' => 'Leave',
            'resources' => [
                ['path' => 'leave-types', 'controller' => 'LeaveTypesController', 'model' => 'App\Models\Leaves\LeaveType'],
                ['path' => 'leave-allowed-days-rule', 'controller' => 'LeaveAllowedDaysRuleController', 'model' => 'App\Models\Leaves\LeaveAllowedDaysRule'],
                ['path' => 'type', 'controller' => 'TypesController']
            ]

        ],
    ];
}