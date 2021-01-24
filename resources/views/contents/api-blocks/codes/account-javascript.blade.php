// Get account

const axios = require('axios');

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = 'https://api.leadsopedia.com/v1/account';

axios.get(url, { headers })
    .then(({ data }) => {
        console.log(data.id);
        console.log(data.name);
        console.log(data.address);
        console.log(data.email);
        console.log(data.company);
        console.log(data.status);
        console.log(data.date_created);
    }).catch(error => console.error(error));

// --------------------------------------------------------

// Get account credits status

const axios = require('axios');

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = 'https://api.leadsopedia.com/v1/account/credits';

axios.get(url, { headers })
    .then(({ data }) => {
        console.log(data.credits_total);
        console.log(data.credits_used);
        console.log(data.credits_left);
    })
    .catch(error => console.error(error));

// --------------------------------------------------------

// Get account usage status 

const axios = require('axios');

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = 'https://api.leadsopedia.com/v1/account/usage';

axios.get(url, { headers })
    .then((response) => console.log(response.data))
    .catch(error => console.error(error));

// --------------------------------------------------------

// Get account activity

const axios = require('axios');

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = 'https://api.leadsopedia.com/v1/account/activity';

axios.get(url, { headers })
    .then(({ data }) => {
        console.log(data.activities);
        console.log(data.total);
        console.log(data.page);
        console.log(data.limit);
        console.log(data.pagesCount);
        console.log(data.next);
        console.log(data.previous);
    })
    .catch(error => console.error(error));

// --------------------------------------------------------

// Get account history

const axios = require('axios');

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = 'https://api.leadsopedia.com/v1/account/history';

axios.get(url, { headers })
    .then(({ data }) => {
        console.log(data.history);
        console.log(data.total);
        console.log(data.page);
        console.log(data.limit);
        console.log(data.pagesCount);
        console.log(data.next);
        console.log(data.previous);
    })
    .catch(error => console.error(error));
