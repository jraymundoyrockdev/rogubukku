<?php

class Model_User_Token extends Model_Auth_User_Token
{
    protected $_table_columns = array(
        'id' => null,
        'user_id' => null,
        'user_agent' => null,
        'token' => null,
        'created' => null,
        'expires' => null,
    );

    protected $_table_name = 'user_tokens';

} // End User Token Model