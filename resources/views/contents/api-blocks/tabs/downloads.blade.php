<div class="row">
    <div class="col-12 col-md-6 p-md-0">
        <ul class="list-group">
            <li class="list-group-item">
                <h3>Downloads API</h3>
                <h5>Endpoints</h5>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-warning">GET</code> Downloads
                </h6>
                <a href="https://api.leadsopedia.com/v1/downloads">https://api.leadsopedia.com/v1/downloads</a>
                <p>
                    <code>
                        <span class="text-warning">GET</span> /downloads
                    </code>
                    return all downloads from your leadsopedia account.
                </p>
                <h6>Response Data Type</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                downloads
                            </span>
                            <code>array</code>
                            - array of downloads
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                total
                            </span>
                            <code>int</code>
                            - total downloads count
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
                            <code>array</code>
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
                    <code class="text-warning">GET</code> Download (By ID)
                </h6>
                <a href="https://api.leadsopedia.com/v1/downloads">https://api.leadsopedia.com/v1/downloads/{id}</a>
                <p>
                    <code>
                        <span class="text-warning">GET</span> /downloads/{id}
                    </code>
                    return all download details from your leadsopedia account.
                </p>
                <h6>Response Data Type</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                id
                            </span>
                            <code>int</code>
                            - download ID
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                filename
                            </span>
                            <code>string</code>
                            - download file name
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                extension
                            </span>
                            <code>string</code>
                            - download file extension
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                url
                            </span>
                            <code>string</code>
                            - download link of a file
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                date_created
                            </span>
                            <code>datetime</code>
                            - when download was created
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
                    <code class="text-danger">DEL</code> Download (By ID)
                </h6>
                <a href="https://api.leadsopedia.com/v1/downloads">https://api.leadsopedia.com/v1/downloads/{id}</a>
                <p>
                    <code>
                        <span class="text-danger">DELETE</span> /downloads/{id}
                    </code>
                    deletes download by their ID.
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
        <div class="dropdown">
            <button class="btn btn-light mt-2 dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                JavaScript
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item custom-tab-button" href="#downloads-javascript">JavaScript</a>
            </div>
        </div>
        <div class="custom-tab-item" id="downloads-javascript">
            <pre class="m-0"><code class="javascript">@include('contents.api-blocks.codes.downloads-javascript')</code></pre>
        </div>
    </div>
</div>