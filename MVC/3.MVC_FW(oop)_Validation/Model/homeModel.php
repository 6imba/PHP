<?php
////level1
// class homeModel{

//     public function __construct(){
//         echo 'Controller_class_DatabaseConn_constructor called !<br>';
//         try{
//             $this->conn=new PDO('mysql:host=localhost;dbname=php','root','');
//         }catch(PDOException $e){
//             echo $e->getMessage();
//         }
//     }

//     public function homeModelFunction(){
//         $sql = "SELECT * from mvctable where title='home'";
//         $stmt = $this->conn->prepare($sql);
//         $stmt->execute();
//         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         $arr = $data;
//         return $arr;
//     }

//     public function aboutModelFunction(){
//         $sql = "SELECT * from mvctable where title='about'";
//         $stmt = $this->conn->prepare($sql);
//         $stmt->execute();
//         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         $arr = $data;
//         return $arr;
//     }

//     public function contactModelFunction(){
//         $sql = "SELECT * from mvctable where title='contact'";
//         $stmt = $this->conn->prepare($sql);
//         $stmt->execute();
//         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         $arr = $data['0'];
//         return $arr;
//     }

// }

?>


<?php
//level2

class homeModel{

    public function __construct(){
        echo 'Controller_class_DatabaseConn_constructor called !<br>';
        try{
            $this->conn=new PDO('mysql:host=localhost;dbname=php','root','');
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function ModelFunction($title){
        $sql = "SELECT * from mvctable where title=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$title]);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $arr = $data['0'];
        return $arr;
    }

}

?>