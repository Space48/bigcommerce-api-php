# BigCommerce API PHP SDK

This is a PHP library to simplify interacting with the BigCommerce APIs.

It is automatically generated from the [official API specs](https://github.com/bigcommerce/api-specs/).

## Re-generate

To re-generate based on the latest API specs, ensure that you have the [api specs repo](https://github.com/bigcommerce/api-specs/) checkout out, and then run:

    php bin/console sdk:generate ../bigcommerce-api-specs -f

Note that you may run into a couple of issues with the official repo, there's [a fork here with some fixes](https://github.com/bobbyshaw/api-specs/tree/fixes).

## Implementation

This SDK is built using [Saloon](https://docs.saloon.dev/). The Resources and Requests are generated using the [SDK generator](https://github.com/crescat-io/saloon-sdk-generator).

## To do 

- [x] Generate Requests
  - Ran into an issue with a request named "Void" which is a reserved word. Created [an issue](https://github.com/crescat-io/saloon-sdk-generator/issues/4) to see how we might proceed.
- [ ] Generate Resources
- [ ] Generate Connector
- [ ] Throw exceptions on failure
- [ ] Throw exception on rate limit
- [ ] Add Data Transfer Objects for responses (not currently supported by saloon SDK generator)