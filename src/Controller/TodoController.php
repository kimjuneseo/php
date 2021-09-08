<?php

namespace src\Controller;

use src\App\DB;
use src\App\Lib;


class TodoController extends MasterController
{
    public function listPage()
    {
            $userId = user()->id;
            $list = DB::fetchAll("SELECT * FROM `board` WHERE ower = ?", [$userId]);
            $this->render("/todo/list", ['list'=>$list]);
    }

    public function writePage()
    {
        $this->render("/todo/write");
    }

    public function writeProcess()
    {
        $sql2 = "SELECT * FROM `board` ";
        $cnt = DB::fetchAll($sql2);
        $cnt = count($cnt);

        $cnt = $cnt+=1;    
        $id = user()->id;
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = date("Y-m-d");

        $sql = "INSERT INTO `board`(`id`,`title`, `content`, `ower`, `date`) VALUES (?, ?, ?, ?, ?)";

        $result = DB::execute($sql, [$cnt, $title, $content, $id, $date]);
        if(!$result)
        {
            Lib::msgAndBack("DB 오류로 기록되지 않았습니다.");
        }
        Lib::msgAndGo("성공적으로 작성되었습니다.", "/todo/list");
    }

    public function modPage()
    {
        $userId = $_GET['id'];
        $list = DB::fetch("SELECT * FROM `board` WHERE id = ?", [$userId]);
        $this->render("/todo/mod", ['list'=>$list]);
        
    }
    public function modProcess()
    {
        $userId = $_GET['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $date = date("Y-m-d");


        $sql = "UPDATE `board` SET `title`= ?,`content`= ?,`date`= ? WHERE id = ?";
        $result = DB::fetch($sql, [$title, $content, $date, $userId]);

        if(!$result){
            Lib::msgAndGo("성공적으로 작성되었습니다.", "/todo/list");
        } 
        Lib::msgAndBack("수정이 되지 않았습니다.");
        
    }

    public function readPage()
    {
        $userId = $_GET['id'];
        $list = DB::fetch("SELECT * FROM `board` WHERE id = ?", [$userId]);
        if(!user()->id == $list->ower){
            Lib::msgAndBack("수정하려는 게시물과 아이디가 다름니다.");
        }
        $this->render("/todo/read", ['list'=>$list]);
    }

    public function delProcess()
    {

       $kk =  Lib::msgAndBoolen("정말 삭제하시겠습니까?", "/todo/list");
       echo $kk;
        $id = $_GET['id'];
        $result = DB::fetch("DELETE FROM `board` WHERE id = ?", [$id]);


    }
}
