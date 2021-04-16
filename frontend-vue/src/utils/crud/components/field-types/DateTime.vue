<template>
    <div>
    <v-datetime-picker
        :label="field.text"
        v-model="datetime"
        @input="onChange()"
    ></v-datetime-picker >
    </div>
</template>
<script>
import crud from '@/config/crud'
import moment from 'moment-timezone'
import Vue from 'vue'
import Rutas from './../../../../routes/app/routes/resources/routes/leaves/routers'



export default {
  name: 'DateTimeField',
  props: [
    'field',
    'value',
  ],
  data () {
    return {
      datetime: undefined,
      datepicker: false,
      timezone:undefined
    }
  },
  computed: {
    locale () {
      return crud.locale || 'en-us'
    },
    firstDayOfWeek () {
      return crud.firstDayOfWeek || 0
    },
  },
  methods: {
    onBlur () {
      this.emitNewValue()
    },
    onChange () {
      this.emitNewValue()
    },
    emitNewValue () {
      //moment(this.datetime.toISOString(), moment.defaultFormat).toDate()
      //moment.utc("2013-11-18 11:55").tz("America/Argentina/Buenos_Aires");
      //
      //console.log("moment"+moment.utc(this.datetime.toISOString()).tz("America/Argentina/Buenos_Aires").toString())
      /*var date = this.datetime.toISOString(); //moment.utc().format('YYYY-MM-DD HH:mm:ss');
      console.log(date); 
      var stillUtc = moment.utc(date).toDate();
      var local = moment(stillUtc).format('YYYY-MM-DD HH:mm:ss');

      console.log(local); 



      this.$emit('input', local)*/
      this.$emit('input', this.datetime.toISOString())
    },
  },
  watch: {
    /* value: {
      immediate: true,
      handler (val) {
        this.datetime = val
      },
    }, */
  },
  async mounted () {

    try {
      
      await Vue.http.get(Rutas.local)
        .then(response => response.json())
        .then((response) => {
            if ([400,401,403,
            ].includes(response.status)) {
                console.log("vamossssss")
            }
            console.log("response"+response.timeZone);
            this.timezone = response.timeZone
            moment.tz.setDefault(this.timezone)
        })
      
    } catch (e) {
      console.error(e)
    }
    
    
    //this.beforeDestroy ()
  },
}
</script>
