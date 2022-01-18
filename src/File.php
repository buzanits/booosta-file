<?php
namespace booosta\file;

use \booosta\Framework as b;
b::init_module('file');

class File extends \booosta\base\Module
{
  use moduletrait_file;

  protected $name, $extension;

  public function get($var) { return $this->$var; }
  public function set($var, $val) { $this->$var = $val; }

  public function get_fileextension($filename)
  {
    $pathinfo = pathinfo($filename);
    return $pathinfo['extension'];
  }

  public function get_rawname($filename)
  {
    $pathinfo = pathinfo($filename);
    return $pathinfo['filename'];
  }

  public function get_extension() { return $this->extension; }
}
