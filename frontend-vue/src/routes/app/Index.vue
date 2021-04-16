<template>
  <div>
    <sidebar
      :items="sidebarItems"
      expand-on="click"
      :lock-sidebar-btn="true"
      :title="$store.state.title"
      title-link="/home"
      :show-logo="true"
      logo="sume-iso.jpeg"
      sidebar-color="primary"
      :sidebar-dark="true"
      title-color="white"
      :title-dark="false"
      nav-color="sumeGreen"
    >
      <template slot="nav">
        <v-list-item-avatar>
          <img src="https://randomuser.me/api/portraits/women/81.jpg" alt="..." style="width: 48px; height: 48px">
        </v-list-item-avatar>
        <v-list-item-title class="white--text">{{ userInfo.name }}</v-list-item-title>
      </template>

      <template slot="activator">
        <v-list-item-title class="white--text">{{ userInfo.name }}</v-list-item-title>
      </template>

    </sidebar>
    <toolbar
      :profile-btn="profile"
      :locales-btn="true"
      :logout-btn="true"
      color="primary"
      :dark="true"
    >
      <template slot="left">
        <div class="headline d-none d-md-inline">
          <template v-if="$store.state.app.module !=null">
            {{ $t('global.routes.' + $store.state.app.module) }}
          </template>
          <template v-if="$store.state.app.page !=null">
            <v-icon slot="divider">forward</v-icon>
            {{ $t('global.routes.' + $store.state.app.page) }}
          </template>
        </div>
      </template>
    </toolbar>
    <v-main class="content">
      <v-container fluid fill-height class="main-container">
        <v-layout style="width:100%">
          <v-flex xs12>
            <v-card flat class="main-card">
              <v-card-text class="content-container">

                <router-view style="margin: 0 auto;"></router-view>

                <alert-box></alert-box>
              </v-card-text>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-main>
    <footnote
      v-if="footer"
      color="secondary"
      :dark="true"
    >
      <template slot="left">
        <a href="#/home" style="color:white;text-decoration:none;">
          <v-icon color="white">help</v-icon>
          Ayuda
        </a>
      </template>
      <template slot="center">
        Sume - Contenidos Interactivos
      </template>
      <template slot="right">
        &#9400; {{ year }}
      </template>
    </footnote>
    <back-top></back-top>
    <profile v-if="profile"></profile>
  </div>
</template>

<script>
import Sidebar from '@/utils/app/components/Sidebar.vue'
import Toolbar from '@/utils/app/components/Toolbar.vue'
import AlertBox from '@/utils/app/components/AlertBox.vue'
import Footnote from '@/utils/app/components/Footnote.vue'
import BackTop from '@/utils/app/components/BackTop.vue'
import Profile from '@/utils/app/components/Profile.vue'
import { mapGetters } from 'vuex'

export default {
  name: 'app',
  data: () => ({
    profile: true,
    footer: true,
    sidebarItems: [
      {
        icon: 'dashboard',
        text: 'dashboard.name',
        model: false,
        guard: 'ADMIN',
        route: '/dashboard',
      },
      {
        icon: 'people',
        text: 'sume.name',
        model: false,
        guard: 'SUME',
        route: '/sume',
        children: [
          {
            text: 'sume.companies',
            route: '/companies',
          },
          {
            text: 'sume.companyTypes',
            route: '/company-types',
          },
          {
            text: 'sume.companyFiles',
            route: '/company-files',
          },
          {
            text: 'sume.companyComments',
            route: '/company-comments',
          },
          {
            text: 'sume.personComments',
            route: '/person-comments',
          },
          {
            text: 'sume.personCommentTypes',
            route: '/person-comment-types',
          },
          {
            text: 'sume.jobPositions',
            route: '/positions',
          },
          {
            text: 'sume.positionTasks',
            route: '/position-tasks',
          },
          {
            text: 'sume.tasks',
            route: '/tasks',
          },
        ],
      },
      {
        icon: 'person',
        text: 'admin.name',
        model: false,
        guard: 'ADMIN',
        route: '/administration',
        children: [
          {
            text: 'admin.people',
            route: '/people',
          },
          {
            text: 'admin.users',
            route: '/users',
          },
          {
            text: 'resources.employees',
            route: '/employees',
          },
          {
            text: 'admin.permissions',
            route: '/permissions',
          },
          {
            text: 'admin.userPermissions',
            route: '/user-permissions',
          },
        ],
      },
      {
        icon: 'pie_chart',
        text: 'reports.name',
        model: false,
        guard: 'ADMIN',
        route: '/reports',
        children: [
          {
            text: 'reports.leaves',
            route: '/leaves',
          },
        ],
      },
      {
        icon: 'list_alt',
        text: 'punchCard.name',
        model: false,
        guard: 'ADMIN',
        route: '/punch-card',
        children: [
          {
            text: 'punchCard.entriesAndExits',
            route: '/entries-and-exits',
          },
        ],
      },
      {
        icon: 'assignment_ind',
        text: 'resources.name',
        model: false,
        guard: 'ADMIN',
        route: '/resources',
        children: [
          {
            text: 'resources.employees',
            route: '/employees',
          },
          {
            text: 'resources.shiftPlanning',
            route: '/shift-planning',
          },
          {
            text: 'resources.leaves',
            route: '/leaves',
          },
          {
            text: 'resources.devices',
            route: '/devices',
          },
          {
            text: 'resources.jobCategories',
            route: '/job-categories',
          },
          {
            text: 'resources.jobPositions',
            route: '/job-positions',
          },
          {
            text: 'resources.collectiveAgreements',
            route: '/collective-agreements',
          },
          {
            text: 'resources.bankAccounts',
            route: '/bank-accounts',
          },
        ],
      },
      {
        icon: 'event',
        text: 'leaves.name',
        model: false,
        guard: 'ADMIN',
        route: '/leave',
        children: [
          {
            text: 'leaves.movementTypes',
            route: '/leave-types',
          },
          {
            text: 'leaves.requestManagement',
            route: '/request-management',
          },
        ],
      },
      {
        icon: 'business',
        text: 'companies.name',
        model: false,
        guard: 'ADMIN',
        route: '/companies',
        children: [
          {
            text: 'companies.companyTypes',
            route: '/company-types',
          },
          {
            text: 'companies.companies',
            route: '/companies',
          },
          {
            text: 'companies.branchOffices',
            route: '/branch-offices',
          },
          {
            text: 'companies.costsCenters',
            route: '/costs-centers',
          },
          {
            text: 'companies.groups',
            route: '/groups',
          },
          {
            text: 'companies.places',
            route: '/places',
          },
        ],
      },
      {
        icon: 'message',
        text: 'notifications.name',
        model: false,
        guard: 'ADMIN',
        route: '/notifications',
        children: [
          {
            text: 'notifications.messages',
            route: '/messages',
          },
        ],
      },
      {
        icon: 'settings',
        text: 'system.name',
        model: false,
        guard: 'ADMIN',
        route: '/system',
        children: [
          {
            text: 'system.settings',
            route: '/settings',
          },
          {
            text: 'system.import',
            route: '/import',
          },
          {
            text: 'system.users',
            route: '/users',
          },
          {
            text: 'system.roles',
            route: '/roles',
          },
          {
            text: 'system.banks',
            route: '/banks',
          },

        ],
      },
    ],
  }),
  computed: {
    ...mapGetters('auth', [
      'isLogged',
      'userInfo',
    ]),
    year () {
      let year = new Date()
      return year.getFullYear()
    },
  },
  components: {
    Sidebar,
    Toolbar,
    AlertBox,
    Footnote,
    BackTop,
    Profile,
  },
}
</script>
<style scoped>
.main-container {
  padding: 10px 0 0 0;
  background-color: white;
}

.content {
  min-height: 100vh;
  overflow-x: auto;
  background-color: white;
}

.main-card {
  background-color: white;
}

.content-container {
  margin-bottom: 100px;
  padding: 0;
}

.headline {
  padding-bottom: 10px;
}

</style>
