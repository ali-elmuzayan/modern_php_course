<?php

// I have an example with tarmeez academy
/*
 * we need to test it
 *  - but it will be hard with all this functionality even with the payment
 *    process you need to test it without the payment process
 *
 * how to improve it
 * - first the validation should be another class it could be in the
 *   request itself create a CheckoutRequest
 *
 * - also the payment process it should be in a different class
 *   => by create a PaymentService class for that
 *   => when implement it you need the constructor
 *   => now you create a new layer which is the service of the payment
 *   => it can have all the payment services that needed for the project
 *
 * - also the creation can move to another class
 *   => OrderServices => CreatOrder function
 *   => inject by the construct
 *
 * - order item service:
 *   => addItemsTo Order
 *   => inject by the constructor
 *
 *
 * what is goal:
 *   - it is not to make less lines because you will write more code
 */