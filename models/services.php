<?php

class Categories extends DataBase
{
    public function catName(): array
    {
        $db = $this->connectDb();
        $sql = "SELECT `cat_id`,`cat_name` FROM `mp_category`;";
        $resultQuery = $db->query($sql);
        return $resultQuery->fetchAll();
    }
};

class Contraindication extends DataBase
{
    public function allContraindication(): array
    {
        $dB = $this->connectDb();
        $sql = "SELECT `cont_id`, `cont_name` FROM `mp_contraindication`;";
        $resultsQuery = $dB->query($sql);
        return $resultsQuery->fetchAll();
    }
};

class Services extends DataBase
{
    public function service(string $name, string $intro, string $description, string $price, string $time, string $picture, string $miniature, string $catId): void
    {
        $dB = $this->connectDb();
        $sql = "INSERT INTO mp_services (ser_name,ser_intro, ser_description, ser_price, ser_time, ser_picture, ser_miniature, cat_id ) VALUES (:ser_name, :ser_intro, :ser_description, :ser_price, :ser_time, :ser_picture, :ser_miniature, :cat_id) ";
        $query = $dB->prepare($sql);
        $query->bindValue(":ser_name", $name, PDO::PARAM_STR);
        $query->bindValue(":ser_description", $description, PDO::PARAM_STR);
        $query->bindValue(":ser_price", $price, PDO::PARAM_STR);
        $query->bindValue(":ser_time", $time, PDO::PARAM_STR);
        $query->bindValue(":ser_picture", $picture, PDO::PARAM_STR);
        $query->bindValue(":ser_miniature", $miniature, PDO::PARAM_STR);
        $query->bindValue(":cat_id", $catId, PDO::PARAM_STR);
        $query->bindValue(":ser_intro", $intro, PDO::PARAM_STR);
        $query->execute();
    }
};

class Prestation extends DataBase
{
    public function allPresta(): array
    {
        $db = $this->connectDb();
        $sql = "SELECT `mp_category`.`cat_id`, `cat_name`, `ser_name`, `ser_intro`, `ser_description`, `ser_price`, `ser_time`, `ser_picture`, `ser_miniature` FROM mp_services
        INNER JOIN `mp_category` ON `mp_category`.`cat_id` = `mp_services`.`cat_id`";
        $resultQuery = $db->query($sql);
        return $resultQuery->fetchAll();
    }

    public function getPrestaByCategory(int $id_cat): array
    {
        $db = $this->connectDb();
        $sql = "SELECT `mp_category`.`cat_id`, `cat_name`, `ser_name`, `ser_intro`, `ser_description`, `ser_price`, `ser_time`, `ser_picture`, `ser_miniature` FROM mp_services
        INNER JOIN `mp_category` ON `mp_category`.`cat_id` = `mp_services`.`cat_id`
    WHERE `mp_category`.`cat_id` = :id_cat";
        $query = $db->prepare($sql);
        $query->bindValue(":id_cat", $id_cat, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }
};
