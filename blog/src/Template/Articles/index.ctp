<!-- File: src/Template/Articles/index.ctp (delete links added) -->

<!-- <h1>Blog articles</h1> -->

<p><?PHP
// ['action' => 'iflogin']
 // session_start();
 // echo "登录成功：". isset($_COOKIE['cookie']);
 // var_dump($x);
// if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    // if(isset($_COOKIE['user']) && $_COOKIE['user']==='admin'){
    echo $this->Html->link(__('ログアウト', true),
    array('plugin' => null, 'controller' => 'users', 'action' => '../logout'),
    array('class'=>'active'));

    // echo "登录成功：". $_SESSION['user'];
// }
?></p>
<p><?PHP
// else{

    echo $this->Html->link(__('ログイン', true),
    array('plugin' => null, 'controller' => 'users', 'action' => '../login'),
    array('class'=>'active'));
// }
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
