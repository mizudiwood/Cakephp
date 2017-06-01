<!-- File: src/Template/Articles/edit.ctp -->

<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->control('parent_id', [
        'options' => $parentCategories,
        'empty' => 'No parent category'
    ]);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
