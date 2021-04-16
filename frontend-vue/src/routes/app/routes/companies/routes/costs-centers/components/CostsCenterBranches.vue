<template>
  <div>
    <costs-center-branches-table
      :title="$t('global.routes.companies.costsCenterBranches')"
      :fields-info="fileteredTableFields"
      :details-loader="detailsLoader"
      :table-data="childrenList(fileteredTableFields, [], 'costs_center_id', childItemName, 'active')"
      delete-mode="soft"
    ></costs-center-branches-table>
    <costs-center-branches-details
      :details="details"
      :fields-info="fileteredDetailsFields"
    ></costs-center-branches-details>
  </div>
</template>

<script>
import FieldsInfoMixin from '../../costs-center-branches/mixins/fields'
import LocalesMixin from '../../costs-center-branches/mixins/locales'
import CostCenterBranchesChildMixin from '@/utils/crud/mixins/child'
import ChildrenTable from '@/utils/crud/components/ChildrenTable.vue'
import ChildDetails from '@/utils/crud/components/ChildDetails.vue'

export default {
  mixins: [
    FieldsInfoMixin,
    LocalesMixin,
    CostCenterBranchesChildMixin,
  ],
  components: {
    'costs-center-branches-table': ChildrenTable,
    'costs-center-branches-details': ChildDetails,
  },
}
</script>
