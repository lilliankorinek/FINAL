<?php

var accountSid = 'AC787a4af4bc52a83de591bf1d30e30f61'; // Your Account SID from www.twilio.com/console
var authToken = '{{3bc1b87fd0ba47594aaf3dee8c2f1698}}';   // Your Auth Token from www.twilio.com/console

var twilio = require('twilio');
var client = new twilio(AC787a4af4bc52a83de591bf1d30e30f61, '3bc1b87fd0ba47594aaf3dee8c2f1698');

client.messages.create({
    body: 'Hello from Node',
    to: '15208584673',  // Text this number
    from: '6467590247' // From a valid Twilio number
})
.then((message) => console.log(message.sid));

// this line loads the library

