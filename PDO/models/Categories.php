<?php
class Categories extends DB{
    public function InsCat($title) {
        $sql = "INSERT INTO categories (title,first_title) VALUES (:title,:title)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':title' , $title);
        $stm->execute();
    }
    public function UpdateCat($title,$id) {
        $sql2 = "UPDATE categories SET title = :title WHERE id = :id";
        $stm = $this->connection->prepare($sql2);
        $stm->bindParam(':title' , $title);
        $stm->bindParam(':id' , $id);
        $stm->execute();
    }
}
$DBcat = new Categories;