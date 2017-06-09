<!-- File: src/Template/Articles/add.ctp -->
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

<h1>Add Article</h1>
<?php
    echo $this->Form->create($article);
    // ここにカテゴリのコントロールを追加
    // echo $this->Form->control('user_id');
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Article'));



    echo $this->Form->end();
?>
<input type="button" class="btn" onclick="location.href='../'" value="戻る" style="font-size: 15px;">
