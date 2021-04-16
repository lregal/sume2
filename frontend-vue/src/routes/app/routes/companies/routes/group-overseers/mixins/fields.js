export default {
  computed: {
    fieldsInfo () {
      return [
        {
          type: 'select',
          url: 'crud/sume/people',
          list: {
            value: 'id',
            text: 'fullname',
            data: [],
          },
          column: 'person_id',
          text: this.$t('fields.person'),
          name: 'person',
          apiObject: {
            name: 'person.fullname',
          },
        },
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
      ]
    },
  },
}
