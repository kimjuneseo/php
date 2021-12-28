<div class="container">
    <div class="row mt-5">
        <div class="col-10 offset-1">
            <h2>Todo List</h2>
            <?php foreach($list as $item) : ?>
            <div class="row my-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-2 d-flex justify-content-between align-items-center">
                            <h5 class="card-title"><?=$item->title?></h5>
                            <span class="badge bg-primary"><?=$item->date?></span>
                        </div>

                        <div class="card-body">
                            <p class="card-text"><?=$item->content?></p>
                        </div>
                        <div class="card-footer p-1">
                            <a href="/todo/mod?id=<?= $item->id ?>" class="btn btn-primary">수정</a>
                            <a href="/todo/del?id=<?= $item->id ?>" class="btn btn-danger">삭제</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach;?>
            <div class="row my-3">
                <div class="col-12 d-flex justify-cotnet-between">
                    <?php if($prev):?>
                    <a href="/todo/list?p=<?= $p -1?>" class="btn btn-info">이전</a>
                    <?php endif; ?>
                </div>
                <?php if($next):?>
                <a href="/todo/list?p=<?= $p + 1?>" class="btn btn-info">다음</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>