## About Aplication

As the proposal was to replicate the indicated API (https://jobs.backbonesystems.io/api/zip-codes/01210) in [GET] format https://jobs.backbonesystems.io/api/zip-codes/{ zip_code }, the Strategy was to use Laravel's Http method, where we make a request in the API itself.

Creating a route where we call a Pattern "zip_code" that only receives numbers [0-9], we pass the information via Request to the "index" function of the controller "ZipCodeController", where the request is made.