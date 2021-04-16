<template>
  <div>
    <item-details-container
      :title="$t('title')"
      :fields="fields"
      :basic-information="$t('basicInformation')"
    >
    </item-details-container>
  </div>

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
      es: {
        title: 'Company details',
        basicInformation: 'Basic information',
        positions: 'Positions',
        comments: 'Comments',
        files: 'Files',
      },
      en: {
        title: 'Company details',
        basicInformation: 'Basic information',
        positions: 'Positions',
        comments: 'Comments',
        files: 'Files',
      },
    },
  },
}

</script>
