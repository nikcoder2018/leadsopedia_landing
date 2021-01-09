const axios = require('axios');

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' }
const url = 'https://api.leadsopedia.com/v1/contacts';

axios.get(url, { headers })
    .then(({ data }) => {
        // list of contacts
        console.log(data);
    })
    .catch(error => {
        console.error(error);
    });
