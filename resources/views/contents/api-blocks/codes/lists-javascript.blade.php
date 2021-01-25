// Get all lists

const axios = require('axios');

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = 'https://api.leadsopedia.com/v1/mylists';

axios.get(url, { headers })
    .then(({ data }) => {
        // array of lists
        console.log(data.lists);
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

// Get list by ID

const axios = require('axios');

const listID = 1;

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = `https://api.leadsopedia.com/v1/mylists/${listID}`;

axios.get(url, { headers })
    .then(({ data }) => {
        // list ID
        console.log(data.id);
        // list name 
        console.log(data.name);
        // total contacts in list
        console.log(data.total_contacts)
        // date list was created 
        console.log(data.date_created)
    }).catch(error => console.error(error));

// --------------------------------------------------------

// Create list

const axios = require('axios');

const headers = { 
    'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2',
    'Content-Type': 'application/json',
};
const url = 'https://api.leadsopedia.com/v1/mylists';

const data = {
    name: 'My List',
};

axios.post(url, data, { headers })
    .then((response) => {
        if(response.status === 201) {
            console.log('List created.');
        }
    }).catch(error => console.error(error));

// --------------------------------------------------------

// Update list by ID

const axios = require('axios');

const listID = 1;

const headers = { 
    'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2', 
    'Content-Type': 'application/json',
};
const url = `https://api.leadsopedia.com/v1/mylists/${listID}`;

const data = {
    name: 'My Other List',
};

axios.post(url, data, { headers })
    .then((response) => {
        console.log('List updated.');
    })
    .catch(error => console.error(error));

// --------------------------------------------------------

// Delete list by ID 

const axios = require('axios');

const listID = 1;

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = `https://api.leadsopedia.com/v1/mylists/${listID}`;

axios.delete(url, {}, { headers })
    .then(() => console.log('List deleted.'))
    .catch(error => console.error(error));
