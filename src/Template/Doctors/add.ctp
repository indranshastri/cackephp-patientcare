<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('sidebar',array("type"=>"Doctor","typePural"=>"Doctors"))?>   
</nav>
<div class="doctors form large-9 medium-8 columns content">
    <?= $this->Form->create($doctor) ?>
    <fieldset>
        <legend><?= __('Add Doctor') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('accepting_patients');
            echo $this->Form->control('crated', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
