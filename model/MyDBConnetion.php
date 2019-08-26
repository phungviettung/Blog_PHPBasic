<?php
class DB{
    private $hostname = "172.28.128.4";
    private $username = "root";
    private $password = "tung";
    private $dbname = "Blog";
    private $conn = null;
    private $result = null;
    
    public function connect()
    {
       // $this->conn = new PDO('mysql:host=' . $this->hostname . '; dbname = ' . $this->dbname, $this->username, $this->password);  
        $this->conn = new mysqli($this->hostname ,$this->username, $this->password ,$this->dbname);

        if (!$this->conn)
        {
            die("ket noi that bai ". mysqli_connect_error());
        }else {
            //echo "ok";
        }

        return $this->conn;

    }

    //thuc thi cau lenh
    public function excute($sql)
    {
       $this->result = $this->conn->query($sql);
        //$this->result = mysqli_query($this->conn, $sql);
        return $this->result;
    }


    //lay du lieu

    public function getData()
    {
        if($this->result)
        {
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }

    //lay du lieu theo id

    public function getDataID($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE admin_id = '$id' ";
        $this->excute($sql);
        if($this->num_row() != 0)
        {
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }

    public function getDataIDPost($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE post_id = '$id' ";
        $this->excute($sql);
        if($this->num_row() != 0)
        {
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }


    //lay toan bo du lieu
    public function getAllData($table)
    {
        $sql = "SELECT * FROM $table";
        $this->excute($sql);
        if($this->num_row() == 0)
        {
            $data = 0;
        }
        else{
            while($datas = $this->getData()){
                $data[] = $datas;
            }
        }
        return $data;
    }

    //dem so ban ghi
    public function num_row()
    {
        if($this->result){
            $num = mysqli_num_rows($this->result);
        }
        else{
            $num = 0;
        }
        return $num;
    }
    // lay id được thêm sau cùng

    public function last_id()
    {
        if($this->result){
            $last_id = mysqli_insert_id($this->conn);
        }
        else{
            $last_id = 0;
        }
        return $last_id;
    }
    //them du lieu admin

    public function Ad_InsertData($admin_name, $admin_pass)
    {
        $sql = "INSERT INTO admin(admin_name, admin_pass) VALUES('$admin_name', '$admin_pass')";
        return $this->excute($sql);
    }

    //Sua du lieu admin

    public function Ad_UpdateData($id, $admin_name)
    {
        $sql = "UPDATE admin SET admin_name = '$admin_name' WHERE admin_id = '$id'";
        return $this->excute($sql);
    }

    //Xoa (dung chung)

    public function Ad_Delete($id, $table)
    {
        $sql = "DELETE FROM $table WHERE admin_id = '$id'";
        return $this->excute($sql);
    }

    public function post_Delete($id, $table)
    {
        $sql = "DELETE FROM $table WHERE post_id = '$id'";
        var_dump($sql);
        return $this->excute($sql);
    }

    //them du lieu post
    public function Post_InsertData($post_title, $admin_id, $img)
    {
        $sql = "INSERT INTO posts(post_title, admin_id, img) VALUES('$post_title', '$admin_id', '$img')";
        return $this->excute($sql);
    }

    public function PostDetail_InsertData($post_id, $pdetail_content)//post_id là thằng vừa mới thêm vào table posts
    {
        $sql = "INSERT INTO post_details(post_id, pdetail_content) VALUES('$post_id', '$pdetail_content')";
        return $this->excute($sql);
    }

    //sua du lieu post_nội dung ở post detail

    public function PostDetails_UpdateData($id, $content)
    {
        $sql = "UPDATE post_details SET pdetail_content = '$content' , update_date = NOW() WHERE post_id = '$id'";
        //var_dump($sql);
        return $this->excute($sql);
    }

    //sua du lieu title ở post

    public function Post_UpdateData($id, $content)
    {
        $sql = "UPDATE posts SET post_title = '$content' WHERE post_id = '$id'";
        var_dump($sql);
        return $this->excute($sql);
    }


    // lấy dữ liệu bài post từ 2 bảng post và post_details

    public function getAllInfoPost()
    {
        $sql = <<<sql
            SELECT *
            FROM posts INNER JOIN post_details 
            ON posts.post_id =  post_details.post_id
sql;
        $this->excute($sql);
        if($this->num_row() == 0)
        {
            $data = 0;
        }
        else{
            while($datas = $this->getData()){
                $data[] = $datas;
            }
        }
        return $data;
    }

    public function PhanTrangPost($start, $limit)
    {
        $sql = <<<sql
            SELECT * FROM posts LIMIT $start, $limit
sql;

        $this->excute($sql);
        if($this->num_row() == 0)
        {
             $data = 0;
        }
        else{
            while($datas = $this->getData()){
                $data[] = $datas;
            }
        }
        return $data;
    }

    //them user

    public function U_InsertData($u_name, $u_pass)
    {
        $sql = "INSERT INTO users(u_name, u_pass) VALUES('$u_name', '$u_pass')";
        var_dump($sql);
        return $this->excute($sql);
    }
}

?>