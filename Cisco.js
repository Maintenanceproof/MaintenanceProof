const axios = require('axios');

const headers = {
"Authorization": "Bearer 75dd5334bef4d2bc96f26138c163c0a3fa0b5ca6",
"Accept": "application/json"
};

axios.get('https://api.meraki.com/api/v1/organizations/1486646/sensor/readings/latest', { headers })
.then(response => {
console.log(response.data);
})
.catch(error => {
console.error(error);
});



axios.get('https://api.meraki.com/api/v1/organizations/1486646/sensor/readings/latest', { headers })
  .then(response => {
    // Handle successful response
    console.log(response.data);
  })
  .catch(error => {
    // Handle error
    if (error.response) {
      // The request was made and the server responded with a status code
      // that falls out of the range of 2xx
      console.error('Request failed with status code:', error.response.status);
    } else if (error.request) {
      // The request was made but no response was received
      console.error('No response received');
    } else {
      // Something happened in setting up the request that triggered an Error
      console.error('Error:', error.message);
    }
  });