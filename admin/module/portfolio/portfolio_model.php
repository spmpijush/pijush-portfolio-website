<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class portfolio_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getPortfolioData()
    {
        $sth = $this->db->prepare(
            "SELECT
                * 
            FROM
            tbl_portfolio
            "
        );
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    public function productSave()
    {
        $data = $_POST;
        $title = $data['title'];
        $upload_by = $data['upload_by'];
        $price = $data['price'];
        $upload_date = $data['upload_date'];
        $product_document = $data['product_document'];
        $product_second_img = $data['product_second_img'];
        $file = $data['file'];
        $data += array($title, $upload_by, $price, $upload_date, $product_document, $product_second_img, $file);
        return $this->db->insert("", "tbl_portfolio", $data);
    }

    // public function update($data = array())
    // {
    //     $getData = $this->getData();

    //     if (is_array($getData)) {
    //         return $this->db->update("", "tbl_about_us", $data, '1');
    //     } else {
    //         return $this->db->insert("", "tbl_about_us", $data);
    //     }
    // }
}
