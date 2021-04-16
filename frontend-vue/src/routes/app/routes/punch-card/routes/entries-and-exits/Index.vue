<template> 
    <crud
    :prefix="prefix"
    :path="path"
    :paths="paths"
    :page-title="pageTitle"
    :fields-info="fieldsInfo"
    :details-title="$t('detailsTitle')"
    :edit-mode="false"
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
      prefix: 'card_punch',
      path: 'card-punch',
      paths: {
        i: 'card_punch/card-punch',
        s: 'card_punch/card-punch',
      },
      pageTitle: 'punchCard.name',
    }
  },
  components: {
    Crud,
  },
}
</script>
