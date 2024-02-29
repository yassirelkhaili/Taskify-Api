# Project: Taskify Api
# 🚀 Get started here

This template guides you through CRUD operations (GET, POST, PUT, DELETE), variables, and tests.

## 🔖 **How to use this Taskify Api**

#### **Step 1: Send requests**

RESTful APIs allow you to perform CRUD operations using the POST, GET, PUT, and DELETE HTTP methods.

This collection contains each of these [request](https://learning.postman.com/docs/sending-requests/requests/) types. Open each request and click "Send" to see what happens.

#### **Step 2: View responses**

Observe the response tab for status code (200 OK), response time, and size.

#### **Step 3: Send new Body data**

Update or add new data in "Body" in the POST request. Typically, Body data is also used in PUT request.

```
{
    "name": "Add your name in the body"
}

 ```

#### **Step 4: Update the variable**

Variables enable you to store and reuse values in Postman. We have created a [variable](https://learning.postman.com/docs/sending-requests/variables/) called `base_url` with the sample request [https://postman-api-learner.glitch.me](https://postman-api-learner.glitch.me). Replace it with your API endpoint to customize this collection.

#### **Step 5: Add tests in the "Tests" tab**

Tests help you confirm that your API is working as expected. You can write test scripts in JavaScript and view the output in the "Test Results" tab.

<img src="https://content.pstmn.io/b5f280a7-4b09-48ec-857f-0a7ed99d7ef8/U2NyZWVuc2hvdCAyMDIzLTAzLTI3IGF0IDkuNDcuMjggUE0ucG5n">

## 💪 Pro tips

- Use folders to group related requests and organize the collection.
- Add more [scripts](https://learning.postman.com/docs/writing-scripts/intro-to-scripts/) in "Tests" to verify if the API works as expected and execute workflows.
    

## 💡Related templates

[API testing basics](https://go.postman.co/redirect/workspace?type=personal&collectionTemplateId=e9a37a28-055b-49cd-8c7e-97494a21eb54&sourceTemplateId=ddb19591-3097-41cf-82af-c84273e56719)  
[API documentation](https://go.postman.co/redirect/workspace?type=personal&collectionTemplateId=e9c28f47-1253-44af-a2f3-20dce4da1f18&sourceTemplateId=ddb19591-3097-41cf-82af-c84273e56719)  
[Authorization methods](https://go.postman.co/redirect/workspace?type=personal&collectionTemplateId=31a9a6ed-4cdf-4ced-984c-d12c9aec1c27&sourceTemplateId=ddb19591-3097-41cf-82af-c84273e56719)

## End-point: Update Task
This is a PUT request and it is used to overwrite an existing piece of data. For instance, after you create an entity with a POST request, you may want to modify that later. You can do that using a PUT request. You typically identify the entity being updated by including an identifier in the URL (eg. `id=1`).

A successful PUT request typically returns a `200 OK`, `201 Created`, or `204 No Content` response code.
### Method: PUT
>```
>http://localhost:8000/tasks/202
>```

### Response: 200
```json
{
    "status": "success",
    "message": "Task updated successfully",
    "data": {
        "id": 202,
        "title": "new title",
        "description": "new description213123",
        "status": "pending",
        "due_date": "2024-04-13",
        "priority": "medium",
        "user_id": 28,
        "created_at": "2024-02-28T00:15:01.000000Z",
        "updated_at": "2024-02-28T00:22:07.000000Z",
        "deleted_at": null
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Tasks
This is a GET request and it is used to "get" data from an endpoint. There is no request body for a GET request, but you can use query parameters to help specify the resource you want data on (e.g., in this request, we have `id=1`).

A successful GET response will have a `200 OK` status, and should include some kind of response body - for example, HTML web content or JSON data.
### Method: GET
>```
>http://localhost:8000/tasks
>```
### Headers

|Content-Type|Value|
|---|---|
|X-XSRF-TOKEN|eyJpdiI6ImRlcDlSUXcyM1dOVGdlc2dqLzA2UHc9PSIsInZhbHVlIjoid09RdjF1SWVFRjhFbUkxRWVwME5QREZ4cm1Kdk5pckJGa3lmckxyZlJjSUdOdDU1TmZBSUxLSmF6TDRlaGFkVU11TU9HSjF0Z2pjNnp6dFNsWHJMWGFxaDNpRjk3MU96U0kxOXRIdm56Y3htTDBuc1ZPNTh6YzluME5YSHh6NWQiLCJtYWMiOiI2ZTUzYjY1OWMxY2RjNzE1NjIwMTI4ZGQxNTBkYzkwYTRlMjI0MTVkYTgzOTRiMjRkOTRhYjMxYWI2YjgxN2M5IiwidGFnIjoiIn0|


### Response: 200
```json
{
    "status": "success",
    "message": "Tasks fetched successfully",
    "data": [
        {
            "id": 202,
            "title": "random task",
            "description": "random description",
            "status": "pending",
            "due_date": "2024-04-13",
            "priority": "medium",
            "user_id": 28,
            "created_at": "2024-02-28T00:15:01.000000Z",
            "updated_at": "2024-02-28T00:15:01.000000Z",
            "deleted_at": null
        }
    ]
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Post Task
This is a POST request, submitting data to an API via the request body. This request submits JSON data, and the data is reflected in the response.

A successful POST request typically returns a `200 OK` or `201 Created` response code.
### Method: POST
>```
>http://localhost:8000/api/tasks
>```
### Headers

|Content-Type|Value|
|---|---|
|X-XSRF-TOKEN|eyJpdiI6Ik9JZXErME1DTE8zQjM2T0ZPNExiTlE9PSIsInZhbHVlIjoidVBsOHJQaVJJWVZUSG9ac2VKbW1tRHl4eHI0Z2Voa2hJWGsydXpkOTJ6dU1TZnU2NDNYM1dDNjdQeHM5Nm03VUpCRFFGVXlrVWR0N2x3a0VudU5NclNsUGlsSjM2WXpyb0cwU3ErcWdKY21RQjkwQ3dYT3B2cGJjOE13NEdMV3QiLCJtYWMiOiIwNDllNjQxNTA1ZDkxZDk3NjA4NzQ1NTIxMzY4ZDI2ZDBhZGQxZDBjNjVkOTk1MjY2ODMyNmVmYTAyODJkZjA3IiwidGFnIjoiIn0|


### Query Params

|Param|value|
|---|---|
|X-XSRF-TOKEN|eyJpdiI6ImRlcDlSUXcyM1dOVGdlc2dqLzA2UHc9PSIsInZhbHVlIjoid09RdjF1SWVFRjhFbUkxRWVwME5QREZ4cm1Kdk5pckJGa3lmckxyZlJjSUdOdDU1TmZBSUxLSmF6TDRlaGFkVU11TU9HSjF0Z2pjNnp6dFNsWHJMWGFxaDNpRjk3MU96U0kxOXRIdm56Y3htTDBuc1ZPNTh6YzluME5YSHh6NWQiLCJtYWMiOiI2ZTUzYjY1OWMxY2RjNzE1NjIwMTI4ZGQxNTBkYzkwYTRlMjI0MTVkYTgzOTRiMjRkOTRhYjMxYWI2YjgxN2M5IiwidGFnIjoiIn0|


### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|8|w2qxNjDRaiZRNuCp7c75mVcEjakK1YiCbLMFpXXv9764ffd1|string|


### Response: 201
```json
{
    "status": "success",
    "message": "Task created successfully",
    "data": {
        "title": "task token",
        "description": "random",
        "status": "pending",
        "due_date": "2024-04-13",
        "priority": "low",
        "user_id": "28",
        "updated_at": "2024-02-28T11:14:10.000000Z",
        "created_at": "2024-02-28T11:14:10.000000Z",
        "id": 204
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Show Task
This is a GET request and it is used to "get" data from an endpoint. There is no request body for a GET request, but you can use query parameters to help specify the resource you want data on (e.g., in this request, we have `id=1`).

A successful GET response will have a `200 OK` status, and should include some kind of response body - for example, HTML web content or JSON data.
### Method: GET
>```
>http://localhost:8000/tasks/202
>```
### Headers

|Content-Type|Value|
|---|---|
|X-XSRF-TOKEN|eyJpdiI6ImRlcDlSUXcyM1dOVGdlc2dqLzA2UHc9PSIsInZhbHVlIjoid09RdjF1SWVFRjhFbUkxRWVwME5QREZ4cm1Kdk5pckJGa3lmckxyZlJjSUdOdDU1TmZBSUxLSmF6TDRlaGFkVU11TU9HSjF0Z2pjNnp6dFNsWHJMWGFxaDNpRjk3MU96U0kxOXRIdm56Y3htTDBuc1ZPNTh6YzluME5YSHh6NWQiLCJtYWMiOiI2ZTUzYjY1OWMxY2RjNzE1NjIwMTI4ZGQxNTBkYzkwYTRlMjI0MTVkYTgzOTRiMjRkOTRhYjMxYWI2YjgxN2M5IiwidGFnIjoiIn0|


### Response: 200
```json
{
    "status": "success",
    "message": "Task fetched successfully",
    "data": {
        "id": 202,
        "title": "new title",
        "description": "new description213123",
        "status": "pending",
        "due_date": "2024-04-13",
        "priority": "medium",
        "user_id": 28,
        "created_at": "2024-02-28T00:15:01.000000Z",
        "updated_at": "2024-02-28T00:22:07.000000Z",
        "deleted_at": null
    }
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Delete Task
This is a DELETE request, and it is used to delete data that was previously created via a POST request. You typically identify the entity being updated by including an identifier in the URL (eg. `id=1`).

A successful DELETE request typically returns a `200 OK`, `202 Accepted`, or `204 No Content` response code.
### Method: DELETE
>```
>http://localhost:8000/tasks/2
>```
### Headers

|Content-Type|Value|
|---|---|
|X-XSRF-TOKEN|eyJpdiI6Ind5SjRQUWJFWFpBV093aTZGWTBDVHc9PSIsInZhbHVlIjoiZHBYVkc5VHpNT3EwT28wRkJ0N01tUlh2UHUyM3RnZUg2VzlEZEUwcWxWREsvVjBEM0w5bHQxeEpYUmVwaWVuVWxsM0hNRmtCbXBwSFhNWjlUNWIvWHdOcEdtTDlCZ3hvOFhnRGtlWTVWRGY5V0pIaG1ldVp1YVBreXZxT0VoeG8iLCJtYWMiOiJkYTQ2ZDIwN2UzYWNiNjgwNGYxYzU3N2Y2NWM0ZmRiOGVjMjhlN2VlMmRhMWM0YTNhNzNlNzVmOWE3N2I0MjJmIiwidGFnIjoiIn0=|


### Body (**raw**)

```json

```

### Response: 200
```json
{
    "status": "success",
    "message": "Task deleted successfully",
    "data": null
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get XSRF Token
This is a DELETE request, and it is used to delete data that was previously created via a POST request. You typically identify the entity being updated by including an identifier in the URL (eg. `id=1`).

A successful DELETE request typically returns a `200 OK`, `202 Accepted`, or `204 No Content` response code.
### Method: GET
>```
>http://localhost:8000/sanctum/csrf-cookie
>```
### Body (**raw**)

```json

```

### Response: 204
```json
null
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: User Login
This is a DELETE request, and it is used to delete data that was previously created via a POST request. You typically identify the entity being updated by including an identifier in the URL (eg. `id=1`).

A successful DELETE request typically returns a `200 OK`, `202 Accepted`, or `204 No Content` response code.
### Method: POST
>```
>http://localhost:8000/api/login
>```
### Headers

|Content-Type|Value|
|---|---|
|X-XSRF-TOKEN|eyJpdiI6Ik9JZXErME1DTE8zQjM2T0ZPNExiTlE9PSIsInZhbHVlIjoidVBsOHJQaVJJWVZUSG9ac2VKbW1tRHl4eHI0Z2Voa2hJWGsydXpkOTJ6dU1TZnU2NDNYM1dDNjdQeHM5Nm03VUpCRFFGVXlrVWR0N2x3a0VudU5NclNsUGlsSjM2WXpyb0cwU3ErcWdKY21RQjkwQ3dYT3B2cGJjOE13NEdMV3QiLCJtYWMiOiIwNDllNjQxNTA1ZDkxZDk3NjA4NzQ1NTIxMzY4ZDI2ZDBhZGQxZDBjNjVkOTk1MjY2ODMyNmVmYTAyODJkZjA3IiwidGFnIjoiIn0===|


### Body (**raw**)

```json
{"email":"elkhailiyassir@gmail.com","password":"Password32145?"}
```

### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|


### Response: 200
```json
{
    "status": "success",
    "message": "Login was succesful",
    "data": "13|S5EnhcaE9A5BV6bE6E4ka9NJmVcle4RVQozXGnpW2c6ddb68"
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: User Logout
This is a DELETE request, and it is used to delete data that was previously created via a POST request. You typically identify the entity being updated by including an identifier in the URL (eg. `id=1`).

A successful DELETE request typically returns a `200 OK`, `202 Accepted`, or `204 No Content` response code.
### Method: POST
>```
>http://localhost:8000/logout
>```
### Headers

|Content-Type|Value|
|---|---|
|X-XSRF-TOKEN|eyJpdiI6InNoN2JTOERId1Q2N2o0Wi80RWZidFE9PSIsInZhbHVlIjoiVWw5S1RUSGNscU9ibHA5NUwwMCtIbDBHcUVCT2wzVmxNNzRKTVNiOVptdkdDdTNUbzAwMjVkYUtJOCtsUUFXLzI2bVpnWU16SDZxSDZscnViVVcrSllMTWI0OFczN0E5NDRHWWxERnhjR3FsNVZlQ2hKM3UzV1EycDJrcDVOdkwiLCJtYWMiOiJkMTcwOTk1ZWY1ZTkzNGYxZWUxMTVkYTJmYzM1ZmZjNzNjMWIzZjg5NTEyY2Q5NTYyMDlkOTY3M2YxZjFkNjczIiwidGFnIjoiIn0=|


### Body (**raw**)

```json

```

### Response: 204
```json
null
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Check User Login
This is a DELETE request, and it is used to delete data that was previously created via a POST request. You typically identify the entity being updated by including an identifier in the URL (eg. `id=1`).

A successful DELETE request typically returns a `200 OK`, `202 Accepted`, or `204 No Content` response code.
### Method: GET
>```
>http://localhost:8000/api/user
>```
### Body (**raw**)

```json

```

### Response: 200
```json
{
    "id": 28,
    "name": "bezasa",
    "email": "elkhailiyassir@gmail.com",
    "email_verified_at": null,
    "created_at": "2024-02-27T08:57:51.000000Z",
    "updated_at": "2024-02-27T08:57:51.000000Z"
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Author: [Yassir Elkhaili](https://github.com/yassirelkhaili)
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
