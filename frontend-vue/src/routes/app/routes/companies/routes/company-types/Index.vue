<template>
  <crud
    :prefix="prefix"
    :path="path"
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
      prefix: 'crud/companies',
      path: 'company-types',
      pageTitle: 'companies.companyTypes',
    }
  },
  components: {
    Crud,
  },
}

</script>
