<div class="row">
    <div class="col-12 col-md-6 p-md-0">
        <ul class="list-group">
            <li class="list-group-item">
                <h3>Lists API</h3>
                <h5>Endpoints</h5>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-warning">GET</code> Lists
                </h6>
                <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists</a>
                <p>
                    <code>
                        <span class="text-warning">GET</span> /mylists
                    </code>
                    returns a list of all mylists in your leadsopedia account.
                </p>
                <h6>Response Data Type</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                lists
                            </span>
                            <code>array</code>
                            - array of lists
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                total
                            </span>
                            <code>int</code>
                            - total people count
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
                            - page size. Default value is <code>100</code>
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
                    <code class="text-warning">GET</code> List (By ID)
                </h6>
                <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists/{list_id}</a>
                <p>
                    <code>
                        <span class="text-warning">GET</span> /mylists/{list_id}
                    </code>
                    returns list details from a leadsopedia account
                </p>
                <h6>Response Data Type</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                id
                            </span>
                            <code>string</code>
                            - list's ID
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                name
                            </span>
                            <code>string</code>
                            - list name
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                total_contacts
                            </span>
                            <code>int</code>
                            - total number of contacts in the list
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                date_created
                            </span>
                            <code>datetime</code>
                            - date when list is created
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
                    <code class="text-primary">POST</code> Create List
                </h6>
                <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists</a>
                <p>
                    <code>
                        <span class="text-primary">POST</span> /mylists
                    </code>
                    add lists or updates if they already exist.
                </p>
                <h6>Fields to create a list</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">name</span>
                            <code>string | required</code>
                        </p>
                    </li>
                </ul>
                <h6>Status code if contact was created</h6>
                <ul>
                    <li>
                        <span class="font-weight-bold">201</span>
                    </li>
                </ul>
                <h6>Headers</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                Content-Type
                            </span>
                            : application/json
                        </p>
                    </li>
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
                    <code class="text-primary">POST</code> Update List
                </h6>
                <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists/{list_id}</a>
                <p>
                    <code>
                        <span class="text-primary">POST</span> /mylists/{list_id}
                    </code>
                    updates the list by ID. ID is required and needs to be passed into the request body
                </p>
                <h6>Status code if contact was created</h6>
                <ul>
                    <li>
                        <span class="font-weight-bold">201</span>
                    </li>
                </ul>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-danger">DEL</code> Delete List
                </h6>
                <a href="https://api.leadsopedia.com/v1/mylists">https://api.leadsopedia.com/v1/mylists/{list_id}</a>
                <p>
                    <code>
                        <span class="text-danger">DELETE</span> /mylists/{id}
                    </code>
                    deletes the list by their ID
                </p>
                <h6>Status Codes</h6>
                <ul>
                    <li>
                        <span class="font-weight-bold">200</span>
                        - if deletion was successful
                    </li>
                    <li>
                        <span class="font-weight-bold">403</span>
                        - if a user does not have access to delete contacts
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
        </ul>
    </div>
    <div class="col-12 col-md-6" style="background-color: #23241F;">
        
    </div>
</div>