<template>
  <div>
    <costs-center-client-companies-table
      :title="$t('global.routes.companies.costsCenterClientCompanies')"
      :fields-info="fileteredTableFields"
      :details-loader="detailsLoader"
      :table-data="childrenList(fileteredTableFields, [], 'costs_center_id', childItemName, 'active')"
      delete-mode="soft"
    ></costs-center-client-companies-table>
    <costs-center-client-companies-details
      :details="details"
      :fields-info="fileteredDetailsFields"
    ></costs-center-client-companies-details>
  </div>
</template>

<script>
import FieldsInfoMixin from '../../costs-center-client-companies/mixins/fields'
import LocalesMixin from '../../costs-center-client-companies/mixins/locales'
import CostCenterClientCompaniesChildMixin from '@/utils/crud/mixins/child'
import ChildrenTable from '@/utils/crud/components/ChildrenTable.vue'
import ChildDetails from '@/utils/crud/components/ChildDetails.vue'

export default {
  mixins: [
    FieldsInfoMixin,
    LocalesMixin,
    CostCenterClientCompaniesChildMixin,
  ],
  components: {
    'costs-center-client-companies-table': ChildrenTable,
    'costs-center-client-companies-details': ChildDetails,
  },
}
</script>
