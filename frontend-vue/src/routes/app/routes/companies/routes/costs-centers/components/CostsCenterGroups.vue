<template>
  <div>
    <costs-center-groups-table
      :title="$t('global.routes.companies.costsCenterGroups')"
      :fields-info="fileteredTableFields"
      :details-loader="detailsLoader"
      :table-data="childrenList(fileteredTableFields, [], 'costs_center_id', childItemName, 'active')"
      delete-mode="soft"
    ></costs-center-groups-table>
    <costs-center-groups-details
      :details="details"
      :fields-info="fileteredDetailsFields"
    ></costs-center-groups-details>
  </div>
</template>

<script>
import FieldsInfoMixin from '../../costs-center-groups/mixins/fields'
import LocalesMixin from '../../costs-center-groups/mixins/locales'
import CostCenterGroupsChildMixin from '@/utils/crud/mixins/child'
import ChildrenTable from '@/utils/crud/components/ChildrenTable.vue'
import ChildDetails from '@/utils/crud/components/ChildDetails.vue'

export default {
  mixins: [
    FieldsInfoMixin,
    LocalesMixin,
    CostCenterGroupsChildMixin,
  ],
  components: {
    'costs-center-groups-table': ChildrenTable,
    'costs-center-groups-details': ChildDetails,
  },
}
</script>
