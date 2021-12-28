
<div class="container">
    <div class="row">
        <h2 class="my-3">할일 작성하기</h2>
        <div class="col-10 offset-1">
            <form method="post">
                <div class="form-group">
                    <label for="title">할일</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="할 일을 입력하세요">
                </div>
                <div class="form-row">
                    <div class="col-5">
                        <label for="date">날짜</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="col-5 offset-2">
                        <label for="time">시간</label>
                        <input type="time" class="form-control" id="time" name="time">
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">상세 내용</label>
                    <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">작성</button>
            </form>
        </div>
    </div>
</div>