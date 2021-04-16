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
          url: 'companies/groups',
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
      ]
    },
  },
}
