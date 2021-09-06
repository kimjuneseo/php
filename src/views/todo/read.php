<h3 class="m-5">글보기</h3>
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                            <?=$list->title?>
                            </div>
                            <div class="col-4 text-right">
                                <span class="badge badge-primary"><?=$list->ower?></span>
                                <span class="badge badge-info"><?=$list->date?></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                        <?=$list->content?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-success"><a href="/todo/mod?id=<?=$list->id?>">수정</a></button>
                        <button type="button" class="btn btn-danger"><a href="/todo/del?id=<?=$list->id?>">삭제</a></button>
                    </div>
                </div>
            </div>
        </div>