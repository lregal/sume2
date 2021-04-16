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
            name: 'costsCenter.name',
          },
        },
        {
          type: 'select',
          url: 'sume/companies',
          list: {
            value: 'id',
            text: 'name',
            data: [],
          },
          column: 'client_company_id',
          text: this.$t('fields.clientCompany'),
          name: 'clientCompany',
          apiObject: {
            name: 'company.name',
          },
        },
      ]
    },
  },
}
