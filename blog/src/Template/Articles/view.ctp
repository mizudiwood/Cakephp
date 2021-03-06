<!-- File: src/Template/Articles/view.ctp -->
<style>

.btn {
    background: #E27575;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    box-shadow: 1px 1px 5px #B6B6B6;
    border-radius: 3px;
    text-shadow: 1px 1px 1px #9E3F3F;
    cursor: pointer;
    text-align: center;
    margin:0px 5px 0px 15px;

/*Transition*/
    -webkit-transition: -webkit-box-shadow 0.5s ease-out;;
    -moz-transition: -moz-box-shadow 0.5s ease-out;
    -o-transition: box-shadow 0.5s ease-out;
}
.btn:hover {
    background: #CF7A7A
    -moz-box-shadow: 0px 0px 15px #0099ff;
    -webkit-box-shadow: 0px 0px 15px #0099ff;
    box-shadow: 0px 0px 15px #0099ff;
}

.btn:active {
    position:relative;
    top:1px;
}

</style>
<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created at: <?= $article->created->format(DATE_RFC850) ?></small></p>
<p><small>modified at: <?= $article->modified->format(DATE_RFC850) ?></small></p>
<input type="button" class="btn" onclick="location.href='../'" value="戻る" style="font-size: 15px;">
