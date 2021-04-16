export default {
  computed: {
    fieldsInfo () {
      return [
        {
          type: 'select',
          url: 'crud/companies/groups',
          list: {
            value: 'id',
            text: 'name',
            data: [],
          },
          column: 'group_id',
          text: this.$t('fields.group'),
          name: 'group',
          apiObject: {
            name: 'group.name',
          },
        },
        {
          type: 'select',
          url: 'resources/employees',
          list: {
            value: 'id',
            text: 'complexName',
            complexName: ['person.fullname'],
            data: [],
          },
          column: 'employee_id',
          text: this.$t('fields.employee'),
          name: 'employee',
          apiObject: {
            name: 'employee.person.fullname',
          },
        },
      ]
    },
  },
}
