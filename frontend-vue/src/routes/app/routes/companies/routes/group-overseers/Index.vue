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
      prefix: 'crud/group-overseers',
      path: 'group-overseers',
      paths: {
        i: 'companies/group-overseers',
        st: 'companies/group-overseers',
        u: 'companies/group-overseers',
      },
      pageTitle: 'companies.groupOverseers',
    }
  },
  components: {
    Crud,
  },
}

</script>
