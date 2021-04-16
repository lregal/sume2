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
          type: 'select',
          url: 'system/countries',
          list: {
            value: 'code',
            text: 'name',
            data: [],
          },
          column: 'country_code',
          text: this.$t('fields.countryCode'),
          grid: 'xs6 sm3 md2 lg3 xl2',
          name: 'country',
          apiObject: {
            name: 'country.code',
          },
          multiedit: false,
          table: false,
        },
        {
          type: 'input',
          column: 'coordinates_lat',
          text: this.$t('fields.coordinatesLat'),
          grid: 'xs12 sm6 md4 lg6 xl4',
          table: false,
          multiedit: false,
          required: false,
        },
        {
          type: 'input',
          column: 'coordinates_lng',
          text: this.$t('fields.coordinatesLng'),
          grid: 'xs12 sm6 md4 lg6 xl4',
          table: false,
          multiedit: false,
          required: false,
        },
      ]
    },
  },
}
