<!-- File: src/Template/Articles/add.ctp -->

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
 <input type="button" class="btn" onclick="javascript:history.back(-1);" value="戻る">
