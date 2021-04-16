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
                    text: this.$t('fields.position'),
                    grid: 'xs12 sm6 md4 lg6 xl4',
                    name: 'name',
                    apiObject: {
                        name: 'name',
                    },
                    multiedit: false,
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
            ]
        },
    },
}
