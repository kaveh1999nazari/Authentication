<?php return array (
  'user' => 
  array (
    1 => 'App\\Domain\\Entity\\User',
    2 => 'Cycle\\ORM\\Mapper\\Mapper',
    3 => 'Cycle\\ORM\\Select\\Source',
    4 => 'App\\Domain\\Repository\\UserRepository',
    5 => 'default',
    6 => 'users',
    7 => 
    array (
      0 => 'id',
    ),
    8 => 
    array (
      0 => 'id',
    ),
    9 => 
    array (
      'id' => 'id',
      'email' => 'email',
      'mobile' => 'mobile',
      'password' => 'password',
      'roles' => 'roles',
      'otpCode' => 'otp_code',
      'otpExpiredAt' => 'otp_expired_at',
    ),
    10 => 
    array (
    ),
    12 => NULL,
    13 => 
    array (
      'id' => 'int',
      'email' => 'string',
      'mobile' => 'string',
      'password' => 'string',
      'roles' => 'string',
      'otpCode' => 'string',
      'otpExpiredAt' => 'datetime',
    ),
    14 => 
    array (
    ),
    19 => NULL,
    20 => 
    array (
      'id' => 2,
    ),
  ),
  'token' => 
  array (
    1 => 'Spiral\\Cycle\\Auth\\Token',
    2 => 'Cycle\\ORM\\Mapper\\Mapper',
    3 => 'Cycle\\ORM\\Select\\Source',
    4 => 'Cycle\\ORM\\Select\\Repository',
    5 => 'default',
    6 => 'auth_tokens',
    7 => 
    array (
      0 => 'id',
    ),
    8 => 
    array (
      0 => 'id',
    ),
    9 => 
    array (
      'id' => 'id',
      'hashedValue' => 'hashed_value',
      'createdAt' => 'created_at',
      'expiresAt' => 'expires_at',
      'payload' => 'payload',
    ),
    10 => 
    array (
    ),
    12 => NULL,
    13 => 
    array (
      'id' => 'string',
      'hashedValue' => 'string',
      'createdAt' => 'datetime',
      'expiresAt' => 'datetime',
      'payload' => 'string',
    ),
    14 => 
    array (
    ),
    19 => NULL,
    20 => 
    array (
      'id' => 2,
    ),
  ),
);