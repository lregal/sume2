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
      prefix: 'crud/group-employees',
      path: 'group-employees',
      paths: {
        i: 'companies/group-employees',
        st: 'companies/group-employees',
        u: 'companies/group-employees',
      },
      pageTitle: 'companies.groupEmployees',
    }
  },
  components: {
    Crud,
  },
}

</script>
