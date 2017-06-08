<!-- File: src/Template/Articles/index.ctp (delete links added) -->

<!-- <h1>Blog articles</h1> -->

<p><?PHP
session_start();
// echo "登录成功：". $_SESSION['user'];
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    echo $this->Html->link(__('ログアウト', true),
    array('plugin' => null, 'controller' => 'credits', 'action' => '../logout'),
    array('class'=>'active'));
    echo "登录成功：". $_SESSION['user'];
}
else{
    echo $this->Html->link(__('ログイン', true),
    array('plugin' => null, 'controller' => 'credits', 'action' => '../login'),
    array('class'=>'active'));
}
?></p>

<p><?= $this->Html->link("Add Article", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <!-- <th>Modified</th> -->
        <th> </th>
    </tr>

    <!-- ここから、$articles のクエリオブジェクトをループして、投稿記事の情報を表示 -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>

        <td>
            <?= $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $article->id],
            ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
