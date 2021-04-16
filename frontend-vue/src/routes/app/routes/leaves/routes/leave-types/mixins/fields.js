export default {
    computed: {
        fieldsInfo () {
            return [
{
                    text: this.$t('fields.id'),
                    name: 'id',
                    details: false,
                },
                {
                    type: 'select',
                    url: 'leave/type',
                    list: {
                        value: 'id',
                        text: 'name',
                        data: [],
                    },
                    column: 'type',
                    text: this.$t('fields.type'),
                    grid: 'xs12 sm6 md4 lg6 xl4',
                    name: 'type',
                    apiObject: {
                        name: 'type',
                    },
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
                    type: 'input',
                    column: 'description',
                    text: this.$t('fields.description'),
                    grid: 'xs12 sm6 md4 lg6 xl4',
                    name: 'description',
                    apiObject: {
                        name: 'description',
                    },
                    multiedit: false,
                },
                {
                    type: 'select',
                    url: 'leave/leave-allowed-days-rule',
                    list: {
                        value: 'id',
                        text: 'days_type',
                        data: [],
                    },
                    column: 'leave_allowed_days_rule_id',
                    text: this.$t('fields.leaveAllowedDaysRule'),
                    grid: 'xs12 sm6 md4 lg6 xl4',
                    name: 'leaveAllowedDaysRule',
                    apiObject: {
                        name: 'leave_allowed_days_rule.days_type',
                    },
                },
            ]
        },
    },
}
