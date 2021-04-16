<template>
  <crud
    :prefix="prefix"
    :path="path"
    :paths="paths"
    :page-title="pageTitle"
    :fields-info="fieldsInfo"
    :details-title="$t('detailsTitle')"
  >
  </crud>
</template>
<script>
import Crud from '@/utils/crud/components/Crud.vue'
import FieldsInfoMixin from './mixins/fields'
import LocalesMixin from './mixins/locales'

export default {
  mixins: [
    FieldsInfoMixin,
    LocalesMixin,
  ],
  data () {
    return {
      prefix: 'crud/costs-center-client-companies',
      path: 'costs-center-client-companies',
      paths: {
        i: 'companies/costs-center-client-companies',
        st: 'companies/costs-center-client-companies',
        u: 'companies/costs-center-client-companies',
      },
      pageTitle: 'companies.costs-center-client-companies',
    }
  },
  components: {
    Crud,
  },
}

</script>
