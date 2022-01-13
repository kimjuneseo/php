<?php

namespace src\Controller;

use src\App\DB;
use src\App\Lib;

class TodoController extends MasterController
{
    public function writePage()
    {
        $this->render("todo/write");
    }
    // public function istPage()
    // {
        // $this->render("todo/list");
        // }
        public function writeProcess()
        {
            //할일(title), 날짜(date), 시간(time), 내용(content)
            $title = $_POST['title'];
            $date = "{$_POST['date']}.{$_POST['time']}";
            $content = $_POST['content'];
    
            //기능대회 한정으로 이런짓해도 된다.
            //extract($_POST);
            $userId = user()->id; //지금 현재 글을 작성하는 유저의 아이디
    
            $sql = "INSERT INTO `todos`(`title`, `content`, `owner`, `date`) VALUES (?, ?, ?, ?)";
    
            $result = DB::execute($sql, [$title, $content, $userId, $date]);
            if(!$result)
            {
                Lib::msgAndBack("DB 오류로 기록되지 않았습니다.");
            }
            Lib::msgAndGo("성공적으로 작성되었습니다.", "/todo/list");
    
            //$list = DB::fetchAll("SELECT * FROM `todos` WHERE owner = ?", [$userId]);
        }
    
        public function listPage()
        {
            // todo/list?p=안뇽사세요

            $page = isset($_GET['p']) && is_numeric($_GET['p']) ? $_GET['p'] * 1 : 1;
            
            //현재 로그인된 유저가 쓴 글을 모두 가져온다.
            $userId = user()->id;
            //0번쨰 글부터 5개 가져와라

            $start = ($page - 1) * 5;
            //  LIMIT절에는 ?를 사용하지 않고 중괄호를 사용한다
            $list = DB::fetchAll("SELECT * FROM `todos` WHERE owner = ? ORDER BY id DESC LIMIT {$start}, 5", [$userId]);
            
            $sql = "SELECT COUNT(*) AS cnt FROM todos WHERE owner = ?"; //현자 로그인된 유저가 쓴 모든 들의 갯수를 cnt로 나오게 된다
            $cnt = DB::fetch($sql, [$userId])->cnt;

            $next = false;
            $prev = false;

            // ceil 올람 함수
            if(ceil($cnt / 5) > $page){
                $next = true;
            }
            
            if($page !=1){
                $prev = true;
            }
            
            $this->render("todo/list", ['list'=>$list, 'prev'=>$prev, 'next'=>$next, 'p'=>$page]);

        }

        public function deleteProcess()
        {
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] * 1 : 0;
            // var_dump(user());
            $owner = user()->id;
            // var_dump();
            if($id <=0 ){
                Lib::msgAndBack("잘못된 요청입니다");
            }

        $sql = "SELECT *FROM todos WHERE id = ? AND owner = ?";
        $data = DB::fetch($sql, [$id, $owner]);

        if(!$data){
            Lib::msgAndBack("권한이 없거나 존해하지 않는 글입니다");
        }
        //여기서 실제 삭제가 이뤄지면 된다
        $sql = "DELETE FROM `todos` WHERE id = ?";
        $result = DB::execute($sql, [$_GET['id']]);
        if($result){
            Lib::msgAndGo("{$id} 번째 글이 삭제되었습니다.", "/todo/list");
        }
        //삭제는 execute를 이용하면 된다.
        // 글 수정을 한 번 만들어봐라.
        }

        public function modPage()
        {
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] * 1 : 1;
            
            $sql = "SELECT `id`, `title`, `content`, `owner`, `date` FROM `todos` WHERE id = ?";
            $result = DB::fetch($sql, [$_GET['id']]);
            
            $date = substr($result->date, 0,10); 
            $time = substr($result->date, 11,5); 

            $this->render("todo/mod", ['result'=>$result, 'time'=> $time, 'date'=> $date]);
        }
        public function modProcess()
        {
             //할일(title), 날짜(date), 시간(time), 내용(content)
             $title = $_POST['title'];
             $date = "{$_POST['date']}.{$_POST['time']}";
             $content = $_POST['content'];
             $id = $_GET['id'];

             //기능대회 한정으로 이런짓해도 된다.
             //extract($_POST);
             $userId = user()->id; //지금 현재 글을 작성하는 유저의 아이디
             $sql = "UPDATE `todos` SET `title`= ?, `content`= ?, `owner`= ?, `date`= ? WHERE id = ?";
     
             $result = DB::execute($sql, [ $title, $content, $userId, $date, $id]);
             if(!$result)
             {
                 Lib::msgAndBack("DB 오류로 기록되지 않았습니다.");
             }
             Lib::msgAndGo("성공적으로 작성되었습니다.", "/todo/list");
     
        }
    }
 


// {
//     $id= user()->{"name"};
//     $title = $_POST['title'];
//     $date = $_POST['date'];
//     $owner = $_POST['time'];
//     $content = $_POST['content'];
    
//     if($id === "" || $title === "" || $date === "" || $owner === "" || $content === ""){
//         // 라이브러리 실행
//         Lib::msgAndBack("필수값이 공백입니다.");
//     }


//     $sql = "INSERT INTO todos (`id`, `title`, `content`, `owner`, `date`) VALUES (?, ?, ?, ?, ?)";
//     $result = DB::execute($sql, [$id, $title, $content, $owner, $date]);

//     $write = "SELECT * FROM todos WHERE owner = ? ";
//     $writeResult = DB::fetchAll($write, [$id]);
//     var_dump ($writeResult);
//     // $todo = DB::fetch($writeResult,[]);

//     // var_dump($todo);
//     // $_SESSION['todo'] = $todo;
//     // if(!$result){
//     //     Lib::msgAndBack("값이 올바르지 않습니다");
//     // }else{
//     //     Lib::msgAndGo("값이 정상적으로 들어갔습니다", "/todo/list");
//     // }
    

//     //실제로 글이 쓰여지는 프로세스를 작성
// }


