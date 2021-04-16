<template>
  <item-details-container
    :title="$t('title')"
    :fields="fields"
    :basic-information="$t('basicInformation')"
  >
    <v-tab key="overseers" ripple>{{ $t('overseers') }}</v-tab>
    <v-tab key="employees" ripple>{{ $t('employees') }}</v-tab>
    <!-- Overseers -->
    <v-tab-item key="overseers">
      <v-card flat>
        <v-card-text>
          <group-overseers
            :exclude="['group']"
            path="companies/group-overseers"
            child-item-name="groupOverseers"
            fk-name="group_id"
          ></group-overseers>
        </v-card-text>
      </v-card>
    </v-tab-item>

    <!-- Employees -->
    <v-tab-item key="employees">
      <v-card flat>
        <v-card-text>
          <group-employees
            :exclude="['group']"
            path="companies/group-employees"
            child-item-name="groupEmployees"
            fk-name="group_id"
          ></group-employees>
        </v-card-text>
      </v-card>
    </v-tab-item>
  </item-details-container>
</template>

<script>
import ItemDetailsContainer from '@/utils/crud/components/ItemDetailsContainer.vue'
import ItemDetailsContainerMixin from '@/utils/crud/mixins/item-details-container'
import GroupOverseers from './GroupOverseers'
import GroupEmployees from './GroupEmployees'

export default {
  mixins: [ItemDetailsContainerMixin],
  components: {
    ItemDetailsContainer,
    GroupOverseers,
    GroupEmployees,
  },
  created () {
    this.setIdColumn('id')
    this.setChildItemsMapping([
      {
        name: 'groupOverseers',
        objName: 'group_overseers',
      },
      {
        name: 'groupEmployees',
        objName: 'group_employees',
      },
    ])
  },
  i18n: {
    messages: {
      en: {
        title: 'Group details',
        basicInformation: 'Detail',
        employees: 'Employees',
        overseers: 'Overseers',
        files: 'Files',
      },
      es: {
        title: 'Detalle de Grupo',
        basicInformation: 'Información',
        employees: 'Empleados',
        overseers: 'Supervisores',
        files: 'Archivos',
      },
    },
  },
}

</script>
