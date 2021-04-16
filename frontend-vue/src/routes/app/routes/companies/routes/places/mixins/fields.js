export default {
  computed: {
    fieldsInfo () {
      return [
        {
          text: this.$t('fields.id'),
          name: 'id',
          details: false,
          table: false,
        },
        {
          type: 'input',
          column: 'name',
          text: this.$t('fields.name'),
          name: 'name',
        },
        {
          type: 'select',
          url: 'companies/companies',
          list: {
            value: 'id',
            text: 'name',
            data: [],
          },
          column: 'company_id',
          text: this.$t('fields.company'),
          name: 'company',
          apiObject: {
            name: 'company.name',
          },
        },
        {
          type: 'input',
          column: 'address',
          text: this.$t('fields.address'),
          name: 'address',
        },
      ]
    },
  },
}
