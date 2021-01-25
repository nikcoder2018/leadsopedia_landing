// Get all downloads

const axios = require('axios');

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = 'https://api.leadsopedia.com/v1/mydownloads';

axios.get(url, { headers })
    .then(({ data }) => {
        // array of downloads
        console.log(data.downloads);
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

// Get download by ID

const axios = require('axios');

const downloadID = 1;

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = `https://api.leadsopedia.com/v1/mydownloads/${downloadID}`;

axios.get(url, { headers })
    .then(({ data }) => {
        console.log(data.id);
        console.log(data.filename);
        console.log(data.extension);
        console.log(data.url);
        console.log(data.date_created);
    }).catch(error => console.error(error));

// --------------------------------------------------------

// Delete download by ID 

const axios = require('axios');

const downloadID = 1;

const headers = { 'X-Api-Key': 'AKp2BbuyfS-ugPMkBmd3sg2' };
const url = `https://api.leadsopedia.com/v1/mydownloads/${downloadID}`;

axios.delete(url, {}, { headers })
    .then(() => console.log('Download deleted.'))
    .catch(error => console.error(error));
