<?php
define('HASH_ALG', 'SHA1');
function createPassword(string $password) {
  $salt = bin2hex(random_bytes(20));
  $saltedPassword = $salt . $password;
  $hash = hash(HASH_ALG, $saltedPassword);
  return $salt . '/' . $hash;
}
function checkPassword(string $password, string $saltedHash) {
  $parts = explode('/', $saltedHash);
  $salt = $parts[0];
  $hash = $parts[1];
  $saltedPasswordCandidate = $salt . $password;
  $saltedPasswordCandidate = hash(HASH_ALG, $saltedPasswordCandidate);
  return $saltedPasswordCandidate == $hash;
}