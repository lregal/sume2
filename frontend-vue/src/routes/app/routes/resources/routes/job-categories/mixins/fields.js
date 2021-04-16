export default {
    computed: {
        fieldsInfo() {
            return [{
                    text: this.$t('fields.id'),
                    name: 'id',
                    details: false,
                    table: false,
                },
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
                    type: 'select',
                    url: 'resources/collective-agreements',
                    list: {
                        value: 'id',
                        text: 'name',
                        data: [],
                    },
                    column: 'collective_agreement_id',
                    text: this.$t('fields.collective_agreement'),
                    name: 'collective-agreement',
                    apiObject: {
                        name: 'collective_agreement.name',
                    },
                },
            ]
        },
    },
}