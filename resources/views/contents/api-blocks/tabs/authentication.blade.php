<div class="row">
    <div class="col-12 col-md-6 p-md-0">
        <h3>Authentication</h3>
        <p>
            To access the API, you need the API key located under <b>Settings - API Key</b>. Example
            of the
            API key: <b>AKp2BbuyfS-ugPMkBmd3sg2</b>
        </p>
        <p>All API request URLs start with <a
                href="https://api.leadsopedia.com/v1">https://api.leadsopedia.com/v1</a></p>
        <p>
            For example, to make a request to get the list of contacts in your account, you need to
            append the people index path to the base URL to form a URL that looks like <a
                href="https://api.leadsopedia.com/contacts">https://api.leadsopedia.com/contacts</a>
        </p>
        <hr class="my-3">
        <h5>Response Codes</h5>
        <ul class="list-group">
            <li class="list-group-item">
                <b>200</b> - Request was successful.
            </li>
            <li class="list-group-item">
                <b>201</b> - Item was successfully created. The <code>Location</code> header returned contains the URL to the newly-created item.
            </li>
            <li class="list-group-item">
                <b>400</b> - Wrong input parameter. See the response content for details
            </li>
            <li class="list-group-item">
                <b>401</b> - User not found. No user was found for the granted <code>ApiKey</code>.
            </li>
            <li class="list-group-item">
                <b>403</b> - Access denied. User with granted <code>ApiKey</code> doesn't have access to the requested resource.
            </li>
            <li class="list-group-item">
                <b>404</b> - The requested resource could not be found. See the response content for details.
            </li>
            <li class="list-group-item">
                <b>500</b> - Internal Server Error. See the response content for additional details. We are notified about any server errors and will resolve them shortly.
            </li>
        </ul>
        <h5 class="mt-3">Rate Limiting</h5>
        <p>Each Reply user has a limit of 15,000 API calls per month.</p>
        <p>The time limit between API calls takes 10 seconds.</p>
        <p>The limit for syncing contacts using native integrations is the same as the limit for the number of contacts in your Reply account.</p>
    </div>
    <div class="col-12 col-md-6" style="background-color: #23241F;">
        <div class="dropdown">
            <button class="btn btn-light mt-2 dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                cURL
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item custom-tab-button" href="#authentication-curl">cURL</a>
                <a class="dropdown-item custom-tab-button" href="#authentication-javascript">JavaScript</a>
            </div>
        </div>
        <div class="custom-tab-item" id="authentication-curl">
            <pre
                class="m-0"><code class="bash">curl https://api.leadsopedia.com/v1/contacts \<br />&nbsp;-H 'X-Api-Key: AKp2BbuyfS-ugPMkBmd3sg2'</code></pre>
        </div>
        <div class="custom-tab-item d-none" id="authentication-javascript">
            <pre
                class="m-0"><code class="javascript">@include('contents.api-blocks.codes.authentication-javascript')</code></pre>
        </div>
    </div>
</div>