<template>
  <div>
    <group-overseers-table
      :title="$t('global.routes.companies.groupOverseers')"
      :fields-info="fileteredTableFields"
      :details-loader="detailsLoader"
      :table-data="childrenList(fileteredTableFields, [], 'group_id', childItemName, 'active')"
      delete-mode="soft"
    ></group-overseers-table>
    <group-overseers-details
      :details="details"
      :fields-info="fileteredDetailsFields"
    ></group-overseers-details>
  </div>
</template>

<script>
import FieldsInfoMixin from '../../group-overseers/mixins/fields'
import LocalesMixin from '../../group-overseers/mixins/locales'
import GroupOverseersChildMixin from '@/utils/crud/mixins/child'
import ChildrenTable from '@/utils/crud/components/ChildrenTable.vue'
import ChildDetails from '@/utils/crud/components/ChildDetails.vue'

export default {
  mixins: [
    FieldsInfoMixin,
    LocalesMixin,
    GroupOverseersChildMixin,
  ],
  components: {
    'group-overseers-table': ChildrenTable,
    'group-overseers-details': ChildDetails,
  },
}
</script>
