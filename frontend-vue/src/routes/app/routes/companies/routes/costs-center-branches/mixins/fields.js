export default {
  computed: {
    fieldsInfo () {
      return [
        {
          type: 'select',
          url: 'companies/costs-centers',
          list: {
            value: 'id',
            text: 'name',
            data: [],
          },
          column: 'costs_center_id',
          text: this.$t('fields.costsCenter'),
          name: 'costsCenter',
          apiObject: {
            name: 'costs_center.name',
          },
        },
        {
          type: 'select',
          url: 'companies/branch-offices',
          list: {
            value: 'id',
            text: 'name',
            data: [],
          },
          column: 'branch_office_id',
          text: this.$t('fields.branchOffice'),
          name: 'branchOffice',
          apiObject: {
            name: 'branch_office.name',
          },
        },
      ]
    },
  },
}
