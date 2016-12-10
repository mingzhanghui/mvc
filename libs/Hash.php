<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 12/8/16
 * Time: 10:23 AM
 */
class Hash {
  /**
   * @param string $algo The algorithm (sha256, sha1, whirlpool, etc)
   * @param string $data The data to encode
   * @param string $salt The salt (This should be the same throughtout the system probably)
   * @return string The hashed/salted data
   */
  public static function create($algo, $data, $salt) {

    $context = hash_init($algo, HASH_HMAC, $salt);
    hash_update($context, $data);

    return hash_final($context);
  }

}
