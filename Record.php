<?php
namespace Classes;

require "./connection/pdo_connection4.php";
class Record
{
    public string $full_name;
    public int $mobile_no;
    public string $email;
    public string $addi;
    public string $date_of_birth;
    public string $gender;
    public string $father_name;
    public string $language_known;
    public string $marital_stats;
    public string $religion;
    public string $hobbies;
    private $con;
    private string $response;

    public function __construct($db)
    {
        $this->con = $db;
    }



    public function getPost()
    {
        if (!empty($_POST)) {
            # code...
            $this->full_name = $_POST['full_name'];
            $this->mobile_no = $_POST['mobile_no'];
            $this->email = $_POST['email'];
            $this->addi = $_POST['addi'];
            $this->date_of_birth = $_POST['date_of_birth'];
            $this->gender = $_POST['gender'];
            $this->father_name = $_POST['father_name'];
            $this->language_known = $_POST['language_known'];
            $this->marital_stats = $_POST['marital_stats'];
            $this->religion = $_POST['religion'];
            $this->hobbies = $_POST['hobbies'];
        }
    }

    public function Add()
    {
        if (isset($_POST['Add'])) {
            $this->getPost();
            $stmt = $this->con->prepare("INSERT INTO informations (full_name,mobile_no,email,addi,date_of_birth,gender,father_name,language_known,marital_stats,religion,hobbies)VALUES (?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->execute([
                $this->full_name,
                $this->mobile_no,
                $this->email,
                $this->addi,
                $this->date_of_birth,
                $this->gender,
                $this->father_name,
                $this->language_known,
                $this->marital_stats,
                $this->religion,
                $this->hobbies,
            ]);
            $this->responseSQL($stmt);
            header('Location: ./index.php');
        }
    }
    public function getAll()
    {
        $stmt = $this->con->prepare("SELECT * FROM informations");
        $stmt->execute();
        if (!$stmt->rowCount()) {
            return [];
        }
        return $stmt->fetchAll();
    }

    public function responseSQL($stmt)
    {
        if ($stmt->rowCount()) {
            $this->response = 'success';
        }
        $this->response = 'failed';

    }

    public function getResponse()
    {
        return $this->response;
    }
}