<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

// use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

class ArticlesController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
        $this->Auth->allow(['index','view']);
    }

    public function index()
    {
        $this->set('articles', $this->Articles->find('all'));
    }

    public function view($id)
    {
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }

    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);

        // 記事のカテゴリを１つ選択するためにカテゴリの一覧を追加
        $categories = $this->Articles->Categories->find('treeList');
        $this->set(compact('categories'));
    }

    public function edit($id = null)
    {
        $article = $this->Articles->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }

        $this->set('article', $article);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    // public function isAuthorized($user)
    // {
    //     $action = $this->request->getParam('action');
    //
    // // The add and index actions are always allowed.
    //     if (in_array($action, ['index', 'add', 'view'])) {
    //         return true;
    //     }
    // // All other actions require an id.
    //     if (!$this->request->getParam('pass.0')) {
    //         return false;
    //     }
    //
    // // Check that the bookmark belongs to the current user.
    //     $id = $this->request->getParam('pass.0');
    //     $article = $this->Articles->get($id);
    //     if ($article->user_id == $user['id']) {
    //         return true;
    //     }
    //     return parent::isAuthorized($user);
    // }
}
?>
