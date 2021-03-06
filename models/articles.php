<?php

    $k = -1;
    function articles_all($link){
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        $n = mysqli_num_rows($result);
        $articles = array();

        for ($i = $n; $i > 0; $i--){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        return $articles;
    }
    function articles_all_ZJM($link){
        $query = "SELECT * FROM articles WHERE locinrost='зжм' ORDER BY id ASC";
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        $n = mysqli_num_rows($result);
        $articles = array();

        for ($i = $n; $i > 0; $i--){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        return $articles;
    }

    function articles_all_SJM($link){
        $query = "SELECT * FROM articles WHERE locinrost='сжм' ORDER BY id ASC";
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        $n = mysqli_num_rows($result);
        $articles = array();

        for ($i = $n; $i > 0; $i--){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        return $articles;
    }
    function articles_all_CNTR($link){
        $query = "SELECT * FROM articles WHERE locinrost LIKE 'центр' ORDER BY id ASC";
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        $n = mysqli_num_rows($result);
        $articles = array();

        for ($i = $n; $i > 0; $i--){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        return $articles;
    }
    function articles_all_search($link){
        $query = "SELECT * FROM articles WHERE header LIKE '%" . $word . "%' ORDER BY id ASC";
        $result = mysqli_query($link, $query);
    
        if (!$result){
            die(mysqli_error($link));
            echo "PIIIISOOOOS";
        }
    
        $n = mysqli_num_rows($result);
        $articles = array();
    
        for ($i = $n; $i > 0; $i--){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }
        return $articles;
    }
    function articles_new($link, $header, $mark, $plusminus, $image, $about, $contacts, $map, $brn, $locinrost){
        $header = trim($header);

        if ($header == '')
            return false;
        
        $t = "INSERT INTO articles (header, mark, plusminus, image, about, contacts, map, brn, locinrost) VALUES ('%s', '%s', '%s','%s', '%s', '%s','%s','%s','%s')";
        $query = sprintf($t,
        mysqli_real_escape_string($link, $header), 
        mysqli_real_escape_string($link, $mark),
        mysqli_real_escape_string($link, $plusminus),
        mysqli_real_escape_string($link, $image),
        mysqli_real_escape_string($link, $about),
        mysqli_real_escape_string($link, $contacts),
        mysqli_real_escape_string($link, $map),
        mysqli_real_escape_string($link, $brn),
        mysqli_real_escape_string($link, $locinrost));
        
        $result = mysqli_query($link, $query);
        if (!$result)
            die(mysqli_error($link));
        
        return true;
    }
    function articles_get($link, $id_article){
        $query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id_article);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $article = mysqli_fetch_assoc($result);    
        return $article;
    }

    function articles_edit($link, $id, $header, $mark, $plusminus, $image, $about, $contacts, $map, $brn, $locinrost){
        $header = trim($header);
        $mark = trim($mark);
        $plusminus = trim($plusminus);
        $image = trim($image);
        $about = trim($about);
        $contacts = trim($contacts);
        $map = trim($map);
        $brn = trim($brn);
        $locinrost = trim($locinrost);
        $id = (int)$id;

        if ($header == '') return false;

        $sql = "UPDATE articles SET header='%s', mark='%s', plusminus='%s', image='%s', about='%s', contacts='%s', map='%s',brn='%s', locinrost='%s' WHERE id='%d'";
        $query = sprintf($sql, 
        mysqli_real_escape_string($link, $header), 
        mysqli_real_escape_string($link, $mark),
        mysqli_real_escape_string($link, $plusminus),
        mysqli_real_escape_string($link, $image),
        mysqli_real_escape_string($link, $about),
        mysqli_real_escape_string($link, $contacts),
        mysqli_real_escape_string($link, $map),
        mysqli_real_escape_string($link, $brn),
        mysqli_real_escape_string($link, $locinrost),
        $id);

        $result = mysqli_query($link, $query);

        if (!$result) die(mysqli_error($link));

        return mysqli_affected_rows($link);
    }

    function articles_delete($link, $id){
        $id = (int)$id;

        if ($id == 0) return false;

        $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);

        if (!$result) die(mysqli_error($link));

        return mysqli_affected_rows($link);
    }

?>