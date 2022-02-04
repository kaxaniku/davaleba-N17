<?php
class News extends DB{
    public function InsNews($title,$text,$id) {
        $sql = "INSERT INTO news (title,text,category_id) VALUES (:title,:text,:id)";
        $stm = $this->connection->prepare($sql);
        $stm->bindParam(':title' , $title);
        $stm->bindParam(':text' , $text);
        $stm->bindParam(':id' , $id);
        $stm->execute();
    }
    public function UpdateNews($title,$text,$id,$cida) {
        $sql2 = "UPDATE news SET title = :title,text = :text,category_id = :cida WHERE id = :id";
        $stm = $this->connection->prepare($sql2);
        $stm->bindParam(':title' , $title);
        $stm->bindParam(':text' , $text);
        $stm->bindParam(':cida' , $cida);
        $stm->bindParam(':id' , $id);
        $stm->execute();
    }
}

$DBnews = new News;