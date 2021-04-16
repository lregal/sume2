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
        },
        {
          type: 'input',
          column: 'alias',
          text: this.$t('fields.alias'),
          grid: 'xs12 sm6 md4 lg6 xl4',
          name: 'alias',
          apiObject: {
            name: 'alias',
          },
          multiedit: false,
        },
        {
          type: 'input',
          column: 'unified_banking_code',
          text: this.$t('fields.unifiedBankingCode'),
          grid: 'xs12 sm6 md4 lg6 xl4',
          name: 'unified_banking_code',
          apiObject: {
            name: 'unified_banking_code',
          },
          multiedit: false,
        },
        {
          type: 'input',
          column: 'account_number',
          text: this.$t('fields.accountNumber'),
          grid: 'xs12 sm6 md4 lg6 xl4',
          name: 'account_number',
          apiObject: {
            name: 'account_number',
          },
          multiedit: false,
        },
        {
          text: this.$t('fields.employee'),
          name: 'employee',
          apiObject: {
            name: 'person.fullname',
          },
          details: false,
        },
      ]
    },
  },
}
