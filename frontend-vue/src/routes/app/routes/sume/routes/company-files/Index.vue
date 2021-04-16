<template>
  <crud
    :meta="meta"
    :file-mode="true"
    :prefix="prefix"
    :path="path"
    :paths="paths"
    :page-title="pageTitle"
    :fields-info="fieldsInfo"
    :details-title="$t('detailsTitle')"
  >
  </crud>
</template>

<script>
import Crud from '@/utils/crud/components/Crud.vue'

export default {
  data () {
    return {
      prefix: 'sume',
      path: 'company-files',
      paths: {
        sh: 'crud/sume/company-files',
        st: 'crud/sume/company-files',
        u: 'crud/sume/company-files',
        d: 'crud/sume/company-files',
        mu: 'crud/sume/company-files',
        md: 'crud/sume/company-files',
      },
      pageTitle: 'sume.companyFiles',
      meta: [
        {
          name: 'path',
        },
      ],
    }
  },
  computed: {
    fieldsInfo () {
      return [
        {
          text: this.$t('fields.id'),
          name: 'id',
          details: false,
        },
        {
          type: 'select',
          url: 'sume/companies',
          list: {
            value: 'id',
            text: 'common_name',
            data: [],
          },
          column: 'company_id',
          text: this.$t('fields.company'),
          name: 'company',
          apiObject: {
            name: 'company.common_name',
          },
        },
        {
          type: 'file',
          column: 'file',
          text: this.$t('fields.file'),
          name: 'file',
          textMode: 'file',
          multiedit: false,
        },
        {
          type: 'file',
          column: 'file_2',
          text: this.$t('fields.file2'),
          name: 'file_2',
          textMode: 'file',
          multiedit: false,
        },
        {
          type: 'textarea',
          column: 'description',
          text: this.$t('fields.description'),
          name: 'description',
          required: false,
        },
      ]
    },
  },
  methods: {},
  components: {
    Crud,
  },
  i18n: {
    messages: {
      pl: {
        detailsTitle: 'Plik',
        fields: {
          id: 'Id',
          company: 'Firma',
          file: 'Plik',
          file2: 'Plik 2',
          description: 'Opis',
          type: 'Typ pliku',
          size: 'Rozmiar',
        },
      },
      en: {
        detailsTitle: 'File',
        fields: {
          id: 'Id',
          company: 'Company',
          file: 'File',
          file2: 'File 2',
          description: 'Description',
          type: 'File type',
          size: 'Size',
        },
      },
    },
  },
}

</script>
