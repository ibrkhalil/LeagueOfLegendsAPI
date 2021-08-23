---
title: LoL Champions API Docs

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- TDI @ MCMM 2019
- Diogo Silva - 85911
---
<!-- START_INFO -->
# Basic Information

Welcome to the League of Legends Champion API. This was developed for learning purposes.

<!-- END_INFO -->

#Champion Role management


<!-- START_fea193d859f64db61379c4ecc4174f1a -->
## Display a list of every role.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championRole" 
```

```javascript
const url = new URL("http://localhost/api/championRole");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championRole`


<!-- END_fea193d859f64db61379c4ecc4174f1a -->

<!-- START_401d8a5d564a739b2caabb284cca0ebe -->
## Show the form for adding a new role to the database.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championRole/create" 
```

```javascript
const url = new URL("http://localhost/api/championRole/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championRole/create`


<!-- END_401d8a5d564a739b2caabb284cca0ebe -->

<!-- START_12b0932172ff4eb13c83f94bada19338 -->
## Save a newly created role into the database.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/championRole" 
```

```javascript
const url = new URL("http://localhost/api/championRole");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/championRole`


<!-- END_12b0932172ff4eb13c83f94bada19338 -->

<!-- START_60591903fdce8721d4463a0ef78160a6 -->
## Show information from a specific champion role.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championRole/1" 
```

```javascript
const url = new URL("http://localhost/api/championRole/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championRole/{championRole}`


<!-- END_60591903fdce8721d4463a0ef78160a6 -->

<!-- START_6dfcd7fb55f84d9423028294fbbe347b -->
## Show the form for editting a specific champion role.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championRole/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/championRole/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championRole/{championRole}/edit`


<!-- END_6dfcd7fb55f84d9423028294fbbe347b -->

<!-- START_551e0c954b0958050810cecfd6440bd7 -->
## Update a specific role.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/championRole/1" 
```

```javascript
const url = new URL("http://localhost/api/championRole/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/championRole/{championRole}`

`PATCH api/championRole/{championRole}`


<!-- END_551e0c954b0958050810cecfd6440bd7 -->

<!-- START_eb36ee379cf1bd9d7e3cda0727815b83 -->
## Delete a specific role from the database.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/championRole/1" 
```

```javascript
const url = new URL("http://localhost/api/championRole/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/championRole/{championRole}`


<!-- END_eb36ee379cf1bd9d7e3cda0727815b83 -->

#Champion Skills management


<!-- START_d59c689c20c9c3ca67836008e1702d4d -->
## Display a list of every champion skill.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkill" 
```

```javascript
const url = new URL("http://localhost/api/championSkill");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championSkill`


<!-- END_d59c689c20c9c3ca67836008e1702d4d -->

<!-- START_18515feb2f30d7348b51a65eaace7b85 -->
## Show the form for adding a new champion skill to the database.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkill/create" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championSkill/create`


<!-- END_18515feb2f30d7348b51a65eaace7b85 -->

<!-- START_d367bede4992567617eb7ccd98aa78fa -->
## Save a newly created champion skill into the database

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/championSkill" 
```

```javascript
const url = new URL("http://localhost/api/championSkill");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/championSkill`


<!-- END_d367bede4992567617eb7ccd98aa78fa -->

<!-- START_149309ea10a73c9a833bb5da5f78fab7 -->
## Show information from a specific champion skill

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkill/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championSkill/{championSkill}`


<!-- END_149309ea10a73c9a833bb5da5f78fab7 -->

<!-- START_ae575c6bd7ff5c56a77930a0e2ff9377 -->
## Show the form for editting a specific champion skill.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkill/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championSkill/{championSkill}/edit`


<!-- END_ae575c6bd7ff5c56a77930a0e2ff9377 -->

<!-- START_9891e07714209a0de0ce63158580eeac -->
## Update a specific champion skill.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/championSkill/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/championSkill/{championSkill}`

`PATCH api/championSkill/{championSkill}`


<!-- END_9891e07714209a0de0ce63158580eeac -->

<!-- START_57be34943ea7b4722a94a75e1a795b38 -->
## Delete a specific champion skill from the database

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/championSkill/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkill/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/championSkill/{championSkill}`


<!-- END_57be34943ea7b4722a94a75e1a795b38 -->

#Champion Skins management


<!-- START_fde0c20f6b91d545716d31b0063148c6 -->
## Display a listing of the resource.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkin" 
```

```javascript
const url = new URL("http://localhost/api/championSkin");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championSkin`


<!-- END_fde0c20f6b91d545716d31b0063148c6 -->

<!-- START_2ec2e77fcb7b2c22b6e32aa68325cef8 -->
## Show the form for creating a new resource.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkin/create" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championSkin/create`


<!-- END_2ec2e77fcb7b2c22b6e32aa68325cef8 -->

<!-- START_48d90230770af6f0e908d21b368c070d -->
## Store a newly created resource in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/championSkin" 
```

```javascript
const url = new URL("http://localhost/api/championSkin");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/championSkin`


<!-- END_48d90230770af6f0e908d21b368c070d -->

<!-- START_de0c0ff8087a75d712e56909593dc592 -->
## Display the specified resource.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkin/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championSkin/{championSkin}`


<!-- END_de0c0ff8087a75d712e56909593dc592 -->

<!-- START_66e54e7be86e74a606f8fedc7adf54ed -->
## Show the form for editing the specified resource.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/championSkin/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/championSkin/{championSkin}/edit`


<!-- END_66e54e7be86e74a606f8fedc7adf54ed -->

<!-- START_fa659191331e6b53b7b661e6fc428798 -->
## Update the specified resource in storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/championSkin/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/championSkin/{championSkin}`

`PATCH api/championSkin/{championSkin}`


<!-- END_fa659191331e6b53b7b661e6fc428798 -->

<!-- START_83a724ff40955bfc71abffc7eb8197ac -->
## Remove the specified resource from storage.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/championSkin/1" 
```

```javascript
const url = new URL("http://localhost/api/championSkin/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/championSkin/{championSkin}`


<!-- END_83a724ff40955bfc71abffc7eb8197ac -->

#Champion management


<!-- START_8287b53731a7e2de025ffda4593f75da -->
## Display a list of existing champions.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/champion" 
```

```javascript
const url = new URL("http://localhost/api/champion");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/champion`


<!-- END_8287b53731a7e2de025ffda4593f75da -->

<!-- START_33980d59662416a10e9a0fb69a7fce80 -->
## Show the form for creating a new champion.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/champion/create" 
```

```javascript
const url = new URL("http://localhost/api/champion/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/champion/create`


<!-- END_33980d59662416a10e9a0fb69a7fce80 -->

<!-- START_eb6c9c2dffb31ca44295ceabe2fe6ccc -->
## Save a newly created champion in the database.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/champion" 
```

```javascript
const url = new URL("http://localhost/api/champion");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/champion`


<!-- END_eb6c9c2dffb31ca44295ceabe2fe6ccc -->

<!-- START_f52374dd94e3ace8fda487ce2cb0b34c -->
## Show a specific champion.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/champion/1" 
```

```javascript
const url = new URL("http://localhost/api/champion/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/champion/{champion}`


<!-- END_f52374dd94e3ace8fda487ce2cb0b34c -->

<!-- START_11db9e3254fc7f2a5ea7029d3d7ae765 -->
## Show the form for editing a specific champion.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/champion/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/champion/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/champion/{champion}/edit`


<!-- END_11db9e3254fc7f2a5ea7029d3d7ae765 -->

<!-- START_c43ccc58724871827265582aa9a55641 -->
## Update a specific champion in the database.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/champion/1" 
```

```javascript
const url = new URL("http://localhost/api/champion/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/champion/{champion}`

`PATCH api/champion/{champion}`


<!-- END_c43ccc58724871827265582aa9a55641 -->

<!-- START_f9a2754f480c4e47f74880789347ecc4 -->
## Remove a champion record from the database.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/champion/1" 
```

```javascript
const url = new URL("http://localhost/api/champion/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/champion/{champion}`


<!-- END_f9a2754f480c4e47f74880789347ecc4 -->


