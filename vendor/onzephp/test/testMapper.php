<?php

class TestMapper extends BaseMapper {

    public function __construct($table) {
       parent::__construct($table);
    }

    public function create () {
      return new TestDO ();
    }

}
