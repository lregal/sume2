<template>
  <item-details-container :title="$t('title')" :fields="fields" :basic-information="$t('basicInformation')">
  </item-details-container>
</template>

<script>
import ItemDetailsContainer from '@/utils/crud/components/ItemDetailsContainer.vue'
import ItemDetailsContainerMixin from '@/utils/crud/mixins/item-details-container'

export default {
  mixins: [ItemDetailsContainerMixin],
  components: {
    ItemDetailsContainer,
  },
  i18n: {
    messages: {
      pl: {
        title: 'Szczegóły osoby',
        basicInformation: 'Dane podstawowe',
        positions: 'Stanowiska',
        comments: 'Komentarze',
      },
      en: {
        title: 'Person details',
        basicInformation: 'Basic information',
        positions: 'Positions',
        comments: 'Comments',
      },
    },
  },
}

</script>
