<template>
  <crud
    :prefix="prefix"
    :path="path"
    :paths="paths"
    :page-title="pageTitle"
    :fields-info="fieldsInfo"
    :details-title="$t('detailsTitle')"
    :watch-for-creation="true"
    primary-key="id"
  >
  </crud>
</template>

<script>
import Crud from '@/utils/crud/components/Crud.vue'
import {
  mapMutations,
  mapActions,
} from 'vuex'

export default {
  data () {
    return {
      prefix: 'crud/resources',
      path: 'employees',
      paths: {
        i: 'resources/employees',
      },
      pageTitle: 'resources.employees',
    }
  },
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
          url: 'sume/people',
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
          url: 'companies/companies',
          list: {
            value: 'id',
            text: 'name',
            data: [],
          },
          column: 'company_id',
          text: this.$t('fields.companies'),
          name: 'company',
          apiObject: {
            name: 'company.name',
          },
        },
        {
          type: 'input',
          column: 'labor_file_number',
          text: this.$t('fields.laborFileNumber'),
          grid: 'xs12 sm6 md4 lg6 xl4',
          name: 'labor_file_number',
          multiedit: false,
        },
        {
          type: 'date',
          column: 'admition_date',
          text: this.$t('fields.admitionDate'),
          grid: 'xs12 sm6 md4 lg6 xl4',
          name: 'admition_date',
          multiedit: false,

        },
        {
          type: 'date',
          column: 'termination_date',
          text: this.$t('fields.terminationDate'),
          grid: 'xs12 sm6 md4 lg6 xl4',
          name: 'termination_date',
          multiedit: false,

        },
      ]
    },
  },
  components: {
    Crud,
  },

  methods: {
    ...mapMutations([
      'alertSuccess',
      'alertError',
    ]),
    ...mapActions('crud', [
      'updateItem',
      'storeItem',
    ]),
  },
  i18n: {
    messages: {
      es: {
        detailsTitle: 'Crear nuevo empleado ',
        fields: {
          id: 'Id',
          firstname: 'Nombre',
          legajo: 'Legajo',
          laborFileNumber: 'Legajo',
        },
      },
    },
  },
}

</script>
