<!-- File: src/Template/Articles/view.ctp -->

<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created at: <?= $article->created->format(DATE_RFC850) ?></small></p>
<p><small>modified at: <?= $article->modified->format(DATE_RFC850) ?></small></p>
