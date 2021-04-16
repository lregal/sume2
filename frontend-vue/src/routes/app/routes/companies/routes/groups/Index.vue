<template>
  <div>
    <crud
      :custom-buttons="buttons"
      :prefix="prefix"
      :path="path"
      :paths="paths"
      :page-title="pageTitle"
      :fields-info="fieldsInfo"
      :edit-button="false"
      :watch-for-creation="true"
      primary-key="id"
      :details-title="$t('detailsTitle')"
    >
    </crud>
    <item-details
      :fields="itemFields"
    ></item-details>
  </div>
</template>

<script>
import Crud from '@/utils/crud/components/Crud.vue'
import FieldsInfoMixin from './mixins/fields'
import LocalesMixin from './mixins/locales'
import ItemDetails from './components/ItemDetails.vue'
import ExtendedControllerMixin from '@/utils/crud/mixins/extended-controller'
import {
  mapMutations,
  mapActions,
} from 'vuex'

export default {
  mixins: [
    ExtendedControllerMixin,
    FieldsInfoMixin,
    LocalesMixin,
  ],
  components: {
    Crud,
    ItemDetails,
  },
  data () {
    return {
      prefix: 'crud/companies',
      path: 'groups',
      paths: {
        i: 'companies/groups',
        sh: 'companies/groups',
      },
      pageTitle: 'companies.groups',
    }
  },
  computed: {
    buttons () {
      return [
        {
          name: 'goToItem',
          icon: 'forward',
          color: 'blue',
          text: this.$t('buttons.goToItem'),
        },
      ]
    },
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
}
</script>
