<h3 class="m-5">게시글 보기</h3>
        <div class="row mt-4">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>글번호</th>
                        <th>글제목</th>
                        <th>글쓴이</th>
                        <th>작성일</th>
                    </tr>
                    <?php foreach($list as $item) : ?>
                    <tr>
                        <td><?=$item->id?></td>
                        <td><a href="/todo/read?id=<?=$item->id?>"><?=$item->title?></a></td>
                        <td><?=$item->ower?></td>
                        <td><?=$item->date?></td>
                    </tr>
                    <?php endforeach ; ?>
                </table>
            </div>
        </div>
        <div class="row">
        	<div class="col-12 text-right">
        		<button type="button" class="btn btn-info"><a href="/todo/write">글작성</a></button>
        	</div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						        <span class="sr-only">Previous</span>
      						</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">11</a></li>
                        <li class="page-item"><a class="page-link" href="#">12</a></li>
                        <li class="page-item"><a class="page-link" href="#">13</a></li>
                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
					        	<span aria-hidden="true">&raquo;</span>
					        	<span class="sr-only">Next</span>
					      	</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>