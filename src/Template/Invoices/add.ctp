<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('sidebar',array("type"=>"Invoice","typePural"=>"Invoices"))?>   
</nav>
<div class="invoices form large-9 medium-8 columns content">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend><?= __('Add Invoice') ?></legend>
        <?php
            echo $this->Form->control('patient_id');
            echo $this->Form->control('ammount');
            echo $this->Form->control('service');
            echo $this->Form->control('duedate', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
