<?php

namespace App;

use Illuminate\Support\Facades\Crypt;

trait Encryptable
{
  // public function getAttribute($key)
  // {
  //   $value = parent::getAttribute($key);
  //   if (in_array($key, $this->encryptable)) {
  //     $value = Crypt::decryptString($value);
  //   }
  //   return $value;
  // }

  // public function setAttribute($key, $value)
  // {
  //   if (in_array($key, $this->encryptable)) {
  //     $value = empty($value) ? '' : $value;
  //     $value = Crypt::encryptString($value);
  //   }
  //   return parent::setAttribute($key, $value);
  // }
}