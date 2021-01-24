// Get all contacts

const axios = require('axios');

const listID = 1;

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = `https://api.leadsopedia.com/v1/contacts`;

axios.get(`${url}?list_id=${listID}`, { headers })
    .then(({ data }) => {
        // array of contacts
        console.log(data.contacts);
        // total people count
        console.log(data.count)
        // current page
        console.log(data.page)
        // page size
        console.log(data.limit)
        // total number of pages
        console.log(data.pagesCount)
        // link to next page
        console.log(data.next)
        // link to previous page 
        console.log(data.previous)
    }).catch(error => console.error(error));

// --------------------------------------------------------

// Get contacts by Email

const axios = require('axios');

const contactID = 1;
const listID = 1;
const email = 'email@example.com';

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = `https://api.leadsopedia.com/v1/contacts`;

axios.get(`${url}?list_id=${listID}&email=${email}`, { 
        headers 
    })
    .then(({ data }) => {
        console.log(data.id);
        console.log(data.email);
        console.log(data.first_name);
        console.log(data.last_name);
        console.log(data.title);
        console.log(data.company);
        console.log(data.phone);
        console.log(data.city);
        console.log(data.state);
        console.log(data.region);
        console.log(data.country);
        console.log(data.date_added);
    }).catch(error => console.error(error));

// --------------------------------------------------------

// Get contact by ID

const axios = require('axios');

const contactID = 1;
const listID = 1;

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = `https://api.leadsopedia.com/v1/contacts`;

axios.get(`${url}?list_id=${listID}&id=${listID}`, { 
        headers 
    })
    .then(({ data }) => {
        console.log(data.id);
        console.log(data.email);
        console.log(data.first_name);
        console.log(data.last_name);
        console.log(data.title);
        console.log(data.company);
        console.log(data.phone);
        console.log(data.city);
        console.log(data.state);
        console.log(data.region);
        console.log(data.country);
        console.log(data.date_added);
    }).catch(error => console.error(error));

// --------------------------------------------------------

// Create contact

const axios = require('axios');

const headers = { 
    'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2',
    'Content-Type': 'application/json',
};
const url = 'https://api.leadsopedia.com/v1/contacts';

const data = {};

axios.post(url, data, { headers })
    .then((response) => {
        if(response.status === 201) {
            console.log('Contact created.');
        }
    }).catch(error => console.error(error));

// --------------------------------------------------------

// Update contact by ID

const axios = require('axios');

const contactID = 1;

const headers = { 
    'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2', 
    'Content-Type': 'application/json',
};
const url = `https://api.leadsopedia.com/v1/contacts/${contactID}`;

const data = {};

axios.post(url, data, { headers })
    .then((response) => {
        console.log('Contact updated.');
    })
    .catch(error => console.error(error));

// --------------------------------------------------------

// Delete contact by ID 

const axios = require('axios');

const contactID = 1;

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = `https://api.leadsopedia.com/v1/contacts/${contactID}`;

axios.delete(url, {}, { headers })
    .then(() => console.log('Contact deleted.'))
    .catch(error => console.error(error));

// --------------------------------------------------------

// Delete contact by Email 

const axios = require('axios');

const email = 'email@example.com';

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = `https://api.leadsopedia.com/v1/contacts?email=${email}`;

axios.delete(url, {}, { headers })
    .then(() => console.log('Contact deleted.'))
    .catch(error => console.error(error));