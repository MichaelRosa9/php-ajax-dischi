var app = new Vue({
  el: '#app',
  data: {
    records: []
  },
  created: function() {

    axios.get('http://localhost:8888/php-intro/php-ajax-dischi/api.php')
    .then((response) => {
      this.records = response.data;
      console.log(this.records);
    })
    .catch( (error) => {
      // handle error
      console.log(error);
    })
  }
})

