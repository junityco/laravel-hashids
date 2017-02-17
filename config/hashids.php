<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Hashids Salt
    |--------------------------------------------------------------------------
    |
    | This option is used to make your ids unique. If you don't want others to
    | decrypt your hashes, provide a unique string used for salting. It may be
    | the name of your project or left it empty.
    |
    */

    'salt' => '',

    /*
    |--------------------------------------------------------------------------
    | Hashids Minimum Length
    |--------------------------------------------------------------------------
    |
    | This option indicates the preferred lenght of the ids. Note that ids are
    | only padded to fit at least a certain length. It doesn't mean that your
    | ids will be exactly that length.
    |
    | Default value: "0". It means that length of the ids will increase with
    | the ids.
    |
    */
   
    'length' => 0,

    /*
    |--------------------------------------------------------------------------
    | Hashids Alphabet
    |--------------------------------------------------------------------------
    |
    | The alphabet is used when creating hash of the ids. Hash will be created
    | from the given alphabet. Alphabet must contain at least 16 unique
    | characters and can't contain spaces.
    |
    | For example, alphabet "abcdefghijklmnopqrstuvwxyz" will create all
    | hashids in lowercase and without digits.
    |
    */

    'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',

];
