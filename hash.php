<?php

/* create 3 arrays
1. $userInput [
    'password =>'xxxx'
    ],


$userInput = array();

2. $userData[
    'salt' => 'xxx'
    'hash'
    ],

$userData = array();

3. $sysConfig[
    'salt' => 'xxx'
    'hash'
    ]
$sysConfig = array();

Create a hashing algo. that accepts 3 values
$password
$userSalt
$SystemSalt

hashing algo = md5, or sha256, sha512, haval160,4

string hash ( string $sha512 , string $data [, bool $raw_output = FALSE ] )


use this algo to create the value for $userData['hash]

Save this to the $userData  array

Create a verify a function that compares $userData['hash]
to the hashed value of :
$userInput['password']
$userData['salt']
$sysConfig['salt']


to 

$userData['hash']

and returns true on match



notes
hash is a one way encription
you don't store the password you store the password hash.
Each time a password is entered you are comparing the hashed password and not the hash

Md5('password123');
Md5 and others are built into php
Sha1
Sha2
    Sha256
    Sha512 - 128 charachers

Whirlpool - also 128 characters
Blowfish - different character lenght ( aka Bcrypt)

Salt and peper. A user salt and a system salt

Salt vs hash

salts are saved encryption output
hash is the encryption
