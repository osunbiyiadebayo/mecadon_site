<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sub Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Main Categories'), ['controller' => 'MainCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Main Category'), ['controller' => 'MainCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($subCategory) ?>
    <fieldset>
        <legend><?= __('Edit Sub Category') ?></legend>
        <?php
            echo $this->Form->input('categoryname');
            echo $this->Form->input('category_logo');
            echo $this->Form->input('main_category_id', ['options' => $mainCategories]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
