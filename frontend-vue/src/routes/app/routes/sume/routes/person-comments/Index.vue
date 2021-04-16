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
      prefix: 'crud/sume',
      path: 'person-comments',
      paths: {
        i: 'sume/person-comments',
        st: 'sume/person-comments',
        u: 'sume/person-comments',
      },
      pageTitle: 'sume.personComments',
    }
  },
  components: {
    Crud,
  },
}

</script>
