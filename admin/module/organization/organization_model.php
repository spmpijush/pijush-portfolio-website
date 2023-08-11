<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class organization_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        $sth = $this->db->prepare(
            "SELECT
                * 
            FROM
            tbl_about_us
            LIMIT 1"
        );
        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public function update($data = array())
    {
        $getData = $this->getData();

        if (is_array($getData)) {
            return $this->db->update("", "tbl_about_us", $data, '1');
        } else {
            return $this->db->insert("", "tbl_about_us", $data);
        }
    }
}
