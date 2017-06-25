<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Carriers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Patient'), ['controller' => 'Patient', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Patient'), ['controller' => 'Patient', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="carriers form large-9 medium-8 columns content">
    <?= $this->Form->create($carrier) ?>
    <fieldset>
        <legend><?= __('Add Carrier') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('carrier_code');
            echo $this->Form->control('crated', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
