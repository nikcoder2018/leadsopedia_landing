<div class="row">
    <div class="col-12 col-md-6 p-md-0">
        <ul class="list-group">
            <li class="list-group-item">
                <h3>Account API</h3>
                <h5>Endpoints</h5>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-warning">GET</code> Account
                </h6>
                <a href="https://api.leadsopedia.com/v1/account">https://api.leadsopedia.com/v1/account</a>
                <p>
                    <code>
                        <span class="text-warning">GET</span> /account
                    </code>
                    return details of your leadsopedia account.
                </p>
                <h6>Response Data Type</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                id
                            </span>
                            <code>int</code>
                            - account ID
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                name
                            </span>
                            <code>string</code>
                            - account name
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                address
                            </span>
                            <code>string</code>
                            - account address
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                phone
                            </span>
                            <code>string</code>
                            - account phone number
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                email
                            </span>
                            <code>string</code>
                            - registered account email
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                company
                            </span>
                            <code>string</code>
                            - company name
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                status
                            </span>
                            <code>string</code>
                            - account status
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                date_created
                            </span>
                            <code>datetime</code>
                            - when account was created
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
                    <code class="text-warning">GET</code> Account Credits Status
                </h6>
                <a href="https://api.leadsopedia.com/v1/account/credits">https://api.leadsopedia.com/v1/account/credits</a>
                <p>
                    <code>
                        <span class="text-warning">GET</span> /account/credits
                    </code>
                    return credits status of your leadsopedia account.
                </p><h6>Response Data Type</h6>
                <ul>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                credits_total
                            </span>
                            <code>int</code>
                            - total credits received from start
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                credits_used
                            </span>
                            <code>int</code>
                            - total credits used
                        </p>    
                    </li>
                    <li>
                        <p>
                            <span class="font-weight-bold">
                                credits_left
                            </span>
                            <code>int</code>
                            - total credits left
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
                    <code class="text-warning">GET</code> Account Usages Status
                </h6>
                <a href="https://api.leadsopedia.com/v1/account/usage">https://api.leadsopedia.com/v1/account/usage</a>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-warning">GET</code> Account Activity
                </h6>
                <a href="https://api.leadsopedia.com/v1/account/activity">https://api.leadsopedia.com/v1/account/activity</a>
            </li>
            <li class="list-group-item">
                <h6>
                    <code class="text-warning">GET</code> Account History
                </h6>
                <a href="https://api.leadsopedia.com/v1/account/history">https://api.leadsopedia.com/v1/account/history</a>
            </li>
        </ul>
    </div>
    <div class="col-12 col-md-6" style="background-color: #23241F;">
    
    </div>
</div>