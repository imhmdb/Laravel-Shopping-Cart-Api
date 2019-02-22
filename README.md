# Laravel Shopping Cart APi

[![Build Status](https://travis-ci.org/imhmdb/Laravel-Shopping-Cart-Api.svg?branch=master)](https://travis-ci.org/imhmdb/Laravel-Shopping-Cart-Api) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT) [![author: Mohamad Bahamdain](https://img.shields.io/badge/author-mohamad%20bahamdain-blue.svg)](https://github.com/imhmdb)





This Project was built as a simple backend task that would allow me to earn the opertuninty of doing a co-op training with a company that provides an e-commerce platform as SAAS, the main objective of this task was to assess how much I can finish and learn given time constraint.

## Task Requiremnts:
  - Implement a shopping cart system API.
  - The user can create a cart with or without login
  - The user can list products.
  - The user can add products to the cart.
  - The user can checkout by submitting their: name, address, and payment details.
  - The order should be save with unique Id.
  - If the user is logged in, the order should be linked to them.
  - The user can list their previous orders.

## Assumptions!
  - The User can create more than one cart
  - No product variations are present
  - No payment gateway is integrated with, so I Assumed that the user would enter credit card information to checkout
  - Assuming that this implementation might need to serve more than a simple API in the future
  - The API in question is a RESTful API
  - We don't need to use the Cart outside the controllers and models.
  - Cart Items Quantities Can be 1 or more but Max is 10.
  - The Cart data is persisted to the database.
  - Since Users Without login Can Create Carts, And not to allow any other User to access or sabotage other user's carts and their in cart data, each cart should have a cartKey associated with it, and thus the cartKey is used to do any Cart related operations.
  - Carts Created by logged in Users should be connected to them.
  - The Users Can signUp Or login using thier email addresses and passwords, users will be given an access_token upon signin in.
  - The Products listing is dummy and thus no need to paginate the data.


## Language, Framework, and Datastore. Choices Made!
  - This System is implemented using php laravel framework
  - Mysql is used as a Database for this application
  - The Cart data is persisted in the Database to be in-compliance with the RESTfulness Guidelines and best practices and avoid using the sessions to save the state of the user ([Why it's a bad thing to use sessions in a RESTful API](https://stackoverflow.com/a/20311981)), I also Avoided using the cookies to be the only holder of the cart data becuase cookies can hold only a small amount of data and also for the huge marketing benifits of tracking down users Cart data and using it to bug them with what products they forgot in thier carts.



# API documentation:
All API End points and documentation can be found at:
[This link](https://documenter.getpostman.com/view/6582263/S11EvLJP).

The following is just a simple list of the api end points:

>POST /api/auth/signup

>POST /api/auth/login

>GET /api/auth/logout

>GET /api/products/

>GET /api/products/:id

>POST /api/carts/

>GET /api/carts/:CartToken

>POST /api/carts/:CartToken

>POST /api/carts/:CartToken/checkout

>DEL /api/carts/:CartToken

>GET /api/orders

>GET /api/orders/:orderID


# Installation

Install the dependencies and start the server to test the Api.

```sh
$ Composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan passport:install
$ php artisan db:seed
```



### Todos

 - Add more features
 - implement a front-page for the store
 - integrate with a real payment gateway

License
----

MIT