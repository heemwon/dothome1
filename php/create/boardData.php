<?php
    include '../connect/connect.php';
    include '../connect/session.php';
    include '../connect/checkSession.php';

    // for( $i=1; $i<=100; $i++ ){
    //     $regTime = time();
    //     $sql = "INSERT INTO myBoard(memberID, boardTitle, boardContent, regTime) ";
    //     $sql .= "VALUES(1, '{$i}. 안녕하세요 게시판 제목입니다.', '{$i} 번째 컨텐츠 내용입니다. 내용입니다. 내용입니다.', {$regTime})";
    //     $reselt = $dbConnect -> query($sql);
    //     if( $reselt ) {
    //         echo "{$i} data input compleate";
    //     } else {
    //         echo "{$i} data input false";
    //     }
    //     echo "<br>";
    // }
?>