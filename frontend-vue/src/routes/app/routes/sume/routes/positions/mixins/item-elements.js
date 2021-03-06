export default {
  computed: {
    itemElements () {
      return {
        positionTasks: {
          title: this.$t('itemElements.positionTasks.title'),
          url: 'sume/positions/{id}/tasks',
          controller: 'sume/position-tasks',
          itemObject: 'task_positions',
          columns: [
            {
              obj: 'name',
              name: 'task',
              header: this.$t('itemElements.positionTasks.headers.task'),
            },
          ],
          primaryId: 'position_id',
          foreignId: 'task_id',
          icon: 'list',
          color: 'blue',
          buttonText: this.$t('itemElements.positionTasks.title'),
        },
      }
    },
  },
}
