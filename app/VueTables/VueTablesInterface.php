<?php

namespace App\VueTables;

interface VueTablesInterface {
  public function get ($table, Array $fields, Array $relations = []);
}