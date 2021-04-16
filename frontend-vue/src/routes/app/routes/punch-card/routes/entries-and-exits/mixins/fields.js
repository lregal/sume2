export default {
    computed: {
        fieldsInfo() {
            return [{
                    type: 'select',
                    url: 'card_punch/punch-types',
                    list: {
                        value: 'id',
                        text: 'name',
                        data: [],
                    },
                    column: 'punch_type_id',
                    text: this.$t('fields.punch_type_id'),
                    grid: 'xs12 sm6 md4 lg6 xl4',
                    name: 'punch_type.name',
                    apiObject: {
                        name: 'punch_type.name',
                    },
                },
                {
                    type: 'input',
                    column: 'movement_timestamp',
                    text: this.$t('fields.movement_timestamp'),
                    grid: 'xs12 sm6 md4 lg6 xl4',
                    name: 'movement_timestamp',
                    apiObject: {
                        name: 'movement_timestamp',
                    },
                    multiedit: false,
                    create: false,
                    edit: false
                },
                {
                    type: 'select',
                    url: 'companies/branch_office',
                    list: {
                        value: 'id',
                        text: 'name',
                        data: [],
                    },
                    column: 'branch_office_id',
                    text: this.$t('fields.branch_office_id'),
                    grid: 'xs12 sm6 md4 lg6 xl4',
                    name: 'branch_office_id',
                    apiObject: {
                        name: 'branch_office.name',
                    },
                },
            ]
        },
    },
}