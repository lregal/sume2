<template>
  <div>
    <group-employees-table
      :title="$t('global.routes.companies.groupEmployees')"
      :fields-info="fileteredTableFields"
      :details-loader="detailsLoader"
      :table-data="childrenList(fileteredTableFields, [], 'group_id', childItemName, 'active')"
      delete-mode="soft"
    ></group-employees-table>
    <group-employees-details
      :details="details"
      :fields-info="fileteredDetailsFields"
    ></group-employees-details>
  </div>
</template>

<script>
import FieldsInfoMixin from '../../group-employees/mixins/fields'
import LocalesMixin from '../../group-employees/mixins/locales'
import GroupEmployeesChildMixin from '@/utils/crud/mixins/child'
import ChildrenTable from '@/utils/crud/components/ChildrenTable.vue'
import ChildDetails from '@/utils/crud/components/ChildDetails.vue'

export default {
  mixins: [
    FieldsInfoMixin,
    LocalesMixin,
    GroupEmployeesChildMixin,
  ],
  components: {
    'group-employees-table': ChildrenTable,
    'group-employees-details': ChildDetails,
  },
}
</script>
