<template>
  <crud
    :prefix="prefix"
    :path="path"
    :paths="paths"
    :page-title="pageTitle"
    :fields-info="fieldsInfo"
    :custom-buttons="buttons"
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
      path: 'places',
      paths: {
        i: 'companies/places',
      },
      pageTitle: 'companies.places',
    }
  },
  computed: {
    buttons () {
      return [
        {
          name: 'marker',
          icon: 'place',
          color: 'purple',
          text: this.$t('buttons.marker'),
        },
      ]
    },
  },
  components: {
    Crud,
  },
}

</script>
