
        <h3 class="m-5">글수정 하기</h3>
        <form method="post">
            <div class="form-group">
                <label for="title">제목</label>
                <input type="text" class="form-control" id="title" name="title" value="<?=$list->title?>" placeholder="제목을 입력하세요">
            </div>
            <div class="form-group">
                <label for="content">글 내용</label>
                <textarea class="form-control" id="content" name="content" rows="8"><?=$list->content?></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">수정</button>
        </form>