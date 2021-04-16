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
      prefix: 'crud/costs-center-groups',
      path: 'costs-center-groups',
      paths: {
        i: 'companies/costs-center-groups',
        st: 'companies/costs-center-groups',
        u: 'companies/costs-center-groups',
      },
      pageTitle: 'companies.costs-center-groups',
    }
  },
  components: {
    Crud,
  },
}

</script>
