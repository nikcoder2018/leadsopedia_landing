<div class="row">
    <div class="col-12 col-md-6 p-md-0">
        <ul class="list-group">
            <li class="list-group-item">
                <h3>Contacts API</h3>
                <h5>Endpoints</h5>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-warning">GET</code> Contacts
                </h6>
                <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts?list_id={list_id}</a>
                <p>
                    <code>
                        <span class="text-warning">GET</span> /contacts
                    </code>
                    return list of all contacts from selected list in your leadsopedia account.
                </p>
                <h6>Response Data Type</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                contacts
                            </span>
                            <code>array</code>
                            - array of contacts in a list
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                total
                            </span>
                            <code>int</code>
                            - total contacts count
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                page
                            </span>
                            <code>int</code>
                            - current page
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                limit
                            </span>
                            <code>int</code>
                            - page size. Default is <code>100</code>
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                pagesCount
                            </span>
                            <code>int</code>
                            - total number of pages with current limit
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                next
                            </span>
                            <code>string</code>
                            - link for next page with current limit
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                previous
                            </span>
                            <code>string</code>
                            - link to previous page with current limit
                        </p>    
                    </li>
                </ul>
                <h6>Headers</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                x-api-key
                            </span>
                            : {your_api_key}
                        </p>
                    </li>
                </ul>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-warning">GET</code> Contacts (By Email)
                </h6>
                <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts?list_id={list_id}&email={email_address}</a>
                <p>
                    <code>
                        <span class="text-warning">GET</span> /contacts/{list_id}
                    </code>
                    return list details from leadsopedia account.
                </p>
                <h6>Response Data Type</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                id
                            </span>
                            <code>int</code>
                            - contact's ID
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                email
                            </span>
                            <code>string</code>
                            - contact's email
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                first_name
                            </span>
                            <code>string</code>
                            - contact's first name
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                last_name
                            </span>
                            <code>string</code>
                            - contact's last name
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                title
                            </span>
                            <code>string</code>
                            - contact's title
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                company
                            </span>
                            <code>string</code>
                            - contact's company
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                phone
                            </span>
                            <code>string</code>
                            - contact's phone number
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                city
                            </span>
                            <code>string</code>
                            - contact's city
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                state
                            </span>
                            <code>string</code>
                            - contact's state
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                region
                            </span>
                            <code>string</code>
                            - contact's region
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                country
                            </span>
                            <code>int</code>
                            - contact's country
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                date_added
                            </span>
                            <code>datetime</code>
                            - date contact was added
                        </p>    
                    </li>
                </ul>
                <h6>Parameters</h6>
                <ul>
                    <li>
                        <span class="font-weight-bold">email</span>
                        - {your_contact_email}
                    </li>
                </ul>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-warning">GET</code> Contacts (By ID)
                </h6>
                <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts?list_id={list_id}&email={contact_id}</a>
                <p>
                    <code>
                        <span class="text-warning">GET</span> /contacts/{list_id}?id={contact_id}
                    </code>
                    return list details from leadsopedia account.
                </p>
                <h6>Response Data Type</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                id
                            </span>
                            <code>int</code>
                            - contact's ID
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                email
                            </span>
                            <code>string</code>
                            - contact's email
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                first_name
                            </span>
                            <code>string</code>
                            - contact's first name
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                last_name
                            </span>
                            <code>string</code>
                            - contact's last name
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                title
                            </span>
                            <code>string</code>
                            - contact's title
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                company
                            </span>
                            <code>string</code>
                            - contact's company
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                phone
                            </span>
                            <code>string</code>
                            - contact's phone number
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                city
                            </span>
                            <code>string</code>
                            - contact's city
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                state
                            </span>
                            <code>string</code>
                            - contact's state
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                region
                            </span>
                            <code>string</code>
                            - contact's region
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                country
                            </span>
                            <code>int</code>
                            - contact's country
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                date_added
                            </span>
                            <code>datetime</code>
                            - date contact was added
                        </p>    
                    </li>
                </ul>
                <h6>Parameters</h6>
                <ul>
                    <li>
                        <span class="font-weight-bold">email</span>
                        - {your_contact_id}
                    </li>
                </ul>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-primary">POST</code> Add List Contact
                </h6>
                <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts/{list_id}</a>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-primary">POST</code> Update List Contact (By Email)
                </h6>
                <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts/{list_id}</a>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-danger">DEL</code> Delete Contact (By ID)
                </h6>
                <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts/{list_id}?id={contact_id}</a>
                <p>
                    <code>
                        <span class="text-danger">DELETE</span> /contacts/{list_id}?id={contact_id}
                    </code>
                    deletes the list contact by their ID.
                </p>
                <h6>Status Codes</h6>
                <ul>
                    <li>
                        <span class="font-weight-bold">
                            200
                        </span>
                        - if deletion was successful
                    </li>
                    <li>
                        <span class="font-weight-bold">
                            403
                        </span>
                        - if user does not have access to delete contacts
                    </li>
                </ul>
                <h6>Headers</h6>
                <ul>
                    <li>
                        <span class="font-weight-bold">x-api-key</span>
                        : {you_api_key}
                    </li>
                </ul>
                <h6>Parameters</h6>
                <ul>
                    <li>
                        <span class="font-weight-bold">email</span>
                        - {your_contact_id}
                    </li>
                </ul>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-danger">DEL</code> Delete Contact (By Email)
                </h6>
                <a href="https://api.leadsopedia.com/v1/contacts">https://api.leadsopedia.com/v1/contacts/{list_id}?id={email_address}</a>
            </li>
        </ul>
    </div>
    <div class="col-12 col-md-6" style="background-color: #23241F;">
    
    </div>
</div>