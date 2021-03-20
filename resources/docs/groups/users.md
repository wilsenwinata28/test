# Users

APIs for User

## Get User List




> Example request:

```bash
curl -X GET \
    -G "http://localhost:1200/api/get_user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:1200/api/get_user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": true,
    "data": [
        {
            "id": 2,
            "user_id": 1,
            "status": "ACTIVE",
            "position": "test 123",
            "user": {
                "id": 1,
                "name": "test",
                "email": "test@gmail.com",
                "created_at": "2021-03-20T08:23:45.000000Z",
                "updated_at": "2021-03-20T08:23:45.000000Z"
            }
        }
    ]
}
```
<div id="execution-results-GETapi-get_user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-get_user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_user"></code></pre>
</div>
<div id="execution-error-GETapi-get_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_user"></code></pre>
</div>
<form id="form-GETapi-get_user" data-method="GET" data-path="api/get_user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-get_user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-get_user" onclick="tryItOut('GETapi-get_user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-get_user" onclick="cancelTryOut('GETapi-get_user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-get_user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/get_user</code></b>
</p>
</form>


## Get User Detail




> Example request:

```bash
curl -X GET \
    -G "http://localhost:1200/api/get_user/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:1200/api/get_user/omnis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": true,
    "data": []
}
```
<div id="execution-results-GETapi-get_user--user_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-get_user--user_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-get_user--user_id-"></code></pre>
</div>
<div id="execution-error-GETapi-get_user--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-get_user--user_id-"></code></pre>
</div>
<form id="form-GETapi-get_user--user_id-" data-method="GET" data-path="api/get_user/{user_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-get_user--user_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-get_user--user_id-" onclick="tryItOut('GETapi-get_user--user_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-get_user--user_id-" onclick="cancelTryOut('GETapi-get_user--user_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-get_user--user_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/get_user/{user_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="GETapi-get_user--user_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Store User




> Example request:

```bash
curl -X POST \
    "http://localhost:1200/api/post_user_data/quia?position=testasd&status=active" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"position":"deleniti","status":"esse"}'

```

```javascript
const url = new URL(
    "http://localhost:1200/api/post_user_data/quia"
);

let params = {
    "position": "testasd",
    "status": "active",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "position": "deleniti",
    "status": "esse"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": false,
    "messages": [
        "500 error"
    ]
}
```
<div id="execution-results-POSTapi-post_user_data--user_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-post_user_data--user_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-post_user_data--user_id-"></code></pre>
</div>
<div id="execution-error-POSTapi-post_user_data--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-post_user_data--user_id-"></code></pre>
</div>
<form id="form-POSTapi-post_user_data--user_id-" data-method="POST" data-path="api/post_user_data/{user_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-post_user_data--user_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-post_user_data--user_id-" onclick="tryItOut('POSTapi-post_user_data--user_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-post_user_data--user_id-" onclick="cancelTryOut('POSTapi-post_user_data--user_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-post_user_data--user_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/post_user_data/{user_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-post_user_data--user_id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>position</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="position" data-endpoint="POSTapi-post_user_data--user_id-" data-component="query" required  hidden>
<br>
string.</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="status" data-endpoint="POSTapi-post_user_data--user_id-" data-component="query" required  hidden>
<br>
string.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>position</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="position" data-endpoint="POSTapi-post_user_data--user_id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="status" data-endpoint="POSTapi-post_user_data--user_id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Update User




> Example request:

```bash
curl -X PUT \
    "http://localhost:1200/api/put_user_data/et/deserunt?position=testdsa&status=inactive" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"position":"repudiandae","status":"aut"}'

```

```javascript
const url = new URL(
    "http://localhost:1200/api/put_user_data/et/deserunt"
);

let params = {
    "position": "testdsa",
    "status": "inactive",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "position": "repudiandae",
    "status": "aut"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": true,
    "data": []
}
```
<div id="execution-results-PUTapi-put_user_data--user_id---id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-put_user_data--user_id---id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-put_user_data--user_id---id-"></code></pre>
</div>
<div id="execution-error-PUTapi-put_user_data--user_id---id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-put_user_data--user_id---id-"></code></pre>
</div>
<form id="form-PUTapi-put_user_data--user_id---id-" data-method="PUT" data-path="api/put_user_data/{user_id}/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-put_user_data--user_id---id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-put_user_data--user_id---id-" onclick="tryItOut('PUTapi-put_user_data--user_id---id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-put_user_data--user_id---id-" onclick="cancelTryOut('PUTapi-put_user_data--user_id---id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-put_user_data--user_id---id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/put_user_data/{user_id}/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="PUTapi-put_user_data--user_id---id-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTapi-put_user_data--user_id---id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>position</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="position" data-endpoint="PUTapi-put_user_data--user_id---id-" data-component="query" required  hidden>
<br>
string.</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="status" data-endpoint="PUTapi-put_user_data--user_id---id-" data-component="query" required  hidden>
<br>
string.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>position</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="position" data-endpoint="PUTapi-put_user_data--user_id---id-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="status" data-endpoint="PUTapi-put_user_data--user_id---id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete User




> Example request:

```bash
curl -X DELETE \
    "http://localhost:1200/api/delete_user_data/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:1200/api/delete_user_data/sit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": true,
    "data": []
}
```
<div id="execution-results-DELETEapi-delete_user_data--user_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-delete_user_data--user_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-delete_user_data--user_id-"></code></pre>
</div>
<div id="execution-error-DELETEapi-delete_user_data--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-delete_user_data--user_id-"></code></pre>
</div>
<form id="form-DELETEapi-delete_user_data--user_id-" data-method="DELETE" data-path="api/delete_user_data/{user_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-delete_user_data--user_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-delete_user_data--user_id-" onclick="tryItOut('DELETEapi-delete_user_data--user_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-delete_user_data--user_id-" onclick="cancelTryOut('DELETEapi-delete_user_data--user_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-delete_user_data--user_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/delete_user_data/{user_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="DELETEapi-delete_user_data--user_id-" data-component="url" required  hidden>
<br>
</p>
</form>



