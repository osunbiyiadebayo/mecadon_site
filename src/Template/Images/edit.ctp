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
                ['action' => 'delete', $image->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="images form large-9 medium-8 columns content">
    <?= $this->Form->create($image) ?>
    <fieldset>
        <legend><?= __('Edit Image') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('size');
            echo $this->Form->input('dir');
            echo $this->Form->input('type');
            echo $this->Form->input('products._ids', ['options' => $products]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
