<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class home_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
}
