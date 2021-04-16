<template>
  <item-details-container
    :title="$t('title')"
    :fields="fields"
    :basic-information="$t('basicInformation')"
  >
    <v-tab key="clients" ripple>{{ $t('clients') }}</v-tab>
    <v-tab key="branches" ripple>{{ $t('branches') }}</v-tab>
    <v-tab key="groups" ripple>{{ $t('groups') }}</v-tab>

    <!-- Clients -->
    <v-tab-item key="clients">
      <v-card flat>
        <v-card-text>
          <costs-center-client-companies
            :exclude="['costsCenter']"
            path="companies/costs-center-client-companies"
            child-item-name="costsCenterClientCompanies"
            fk-name="costs_center_id"
          ></costs-center-client-companies>
        </v-card-text>
      </v-card>
    </v-tab-item>

    <!-- Branches -->
    <v-tab-item key="branches">
      <v-card flat>
        <v-card-text>
          <costs-center-branches
            :exclude="['costsCenter']"
            path="companies/costs-center-branches"
            child-item-name="costsCenterBranches"
            fk-name="costs_center_id"
          ></costs-center-branches>
        </v-card-text>
      </v-card>
    </v-tab-item>

    <!-- Groups -->
    <v-tab-item key="groups">
      <v-card flat>
        <v-card-text>
          <costs-center-groups
            :exclude="['costsCenter']"
            path="companies/costs-center-groups"
            child-item-name="costsCenterGroups"
            fk-name="costs_center_id"
          ></costs-center-groups>
        </v-card-text>
      </v-card>
    </v-tab-item>
  </item-details-container>
</template>

<script>
import ItemDetailsContainer from '@/utils/crud/components/ItemDetailsContainer.vue'
import ItemDetailsContainerMixin from '@/utils/crud/mixins/item-details-container'
import CostsCenterBranches from './CostsCenterBranches'
import CostsCenterGroups from './CostsCenterGroups'
import CostsCenterClientCompanies from './CostCenterClientCompanies'

export default {
  mixins: [ItemDetailsContainerMixin],
  components: {
    ItemDetailsContainer,
    CostsCenterGroups,
    CostsCenterBranches,
    CostsCenterClientCompanies,
  },
  created () {
    this.setIdColumn('id')
    this.setChildItemsMapping([
      {
        name: 'costsCenterGroups',
        objName: 'costs_center_groups',
      },
      {
        name: 'costsCenterBranches',
        objName: 'costs_center_branches',
      },
      {
        name: 'costsCenterClientCompanies',
        objName: 'costs_center_client_companies',
      },
    ])
  },
  i18n: {
    messages: {
      en: {
        title: 'Costs Center details',
        basicInformation: 'Detail',
        clients: 'Clients',
        groups: 'Groups',
        branches: 'Branches',
        files: 'Files',
      },
      es: {
        title: 'Detalle de Centro de Costo',
        basicInformation: 'Información',
        clients: 'Clientes',
        groups: 'Grupos',
        branches: 'Sucursales',
        files: 'Archivos',
      },
    },
  },
}

</script>
