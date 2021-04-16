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
      prefix: 'crud/costs-center-branches',
      path: 'costs-center-branches',
      paths: {
        i: 'companies/costs-center-branches',
        st: 'companies/costs-center-branches',
        u: 'companies/costs-center-branches',
      },
      pageTitle: 'companies.costsCenterBranches',
    }
  },
  components: {
    Crud,
  },
}

</script>
