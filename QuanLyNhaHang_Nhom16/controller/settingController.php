<?php
    function get_MonAn_MN1() {
        global $db;
        $query = 'SELECT * FROM mon_an  WHERE mon_an.MA_MENU = 1' ;
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function get_MonAn_MN2() {
        global $db;
        $query = 'SELECT * FROM mon_an  WHERE mon_an.MA_MENU = 2' ;
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function get_MonAn_MN3() {
        global $db;
        $query = 'SELECT * FROM mon_an  WHERE mon_an.MA_MENU = 3' ;
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function get_MonAn_MN4() {
        global $db;
        $query = 'SELECT * FROM mon_an  WHERE mon_an.MA_MENU = 4' ;
        $statement = $db->prepare($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function delete_MonAn($ma_mon) {
        global $db;
        $query = 'UPDATE mon_an
        SET DEL=1
        WHERE MA_MON = :ma_mon;';
        $statement = $db->prepare($query);
        $statement->bindValue(':ma_mon', $ma_mon);
        $statement->execute();
        $statement->closeCursor();
    }
    function add_MonAn($ten_MonAn, $Gia, $ma_Menu ) {
        global $db;
        $query = 'INSERT INTO mon_an (TEN_MON, GIA, MA_MENU, DEL)
              VALUES
                 (:ten_MonAn, :Gia, :ma_Menu, 0)';
        $statement = $db->prepare($query);
        $statement->bindValue(':ten_MonAn', $ten_MonAn);
        $statement->bindValue(':Gia', $Gia);
        $statement->bindValue(':ma_Menu', $ma_Menu);
        $statement->execute();
        $statement->closeCursor();
    }
?>