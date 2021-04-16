export default {
    computed: {
        fieldsInfo() {
            return [{
                    text: this.$t('fields.id'),
                    name: 'id',
                    details: false,
                    table: false,
                },
                /*{
                  type: 'select',
                  url: 'sume/people',
                  list: {
                    value: 'id',
                    text: 'fullname',
                    data: [],
                  },
                  column: 'person_id',
                  text: this.$t('fields.employee'),
                  name: 'employee',
                  apiObject: {
                    name: 'person.fullname',
                  },
                  table: false,
                },
                {
                  type: 'select',
                  url: 'system/banks',
                  list: {
                    value: 'id',
                    text: 'name',
                    data: [],
                  },
                  column: 'bank_id',
                  text: this.$t('fields.bank'),
                  grid: 'xs12 sm6 md4 lg6 xl4',
                  name: 'bank',
                  apiObject: {
                    name: 'bank.name',
                  },
                },*/
                {
                    type: 'input',
                    column: 'name',
                    text: this.$t('fields.name'),
                    grid: 'xs12 sm6 md4 lg6 xl4',
                    name: 'name',
                    apiObject: {
                        name: 'name',
                    },
                    multiedit: false,
                },
                {
                    type: 'input',
                    column: 'sector',
                    text: this.$t('fields.sector'),
                    grid: 'xs12 sm6 md4 lg6 xl4',
                    name: 'sector',
                    apiObject: {
                        name: 'sector',
                    },
                    multiedit: false,
                },
            ]
        },
    },
}