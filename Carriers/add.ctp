<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?=$this->Element('sidebar',array("type"=>"Carrier","typePural"=>"Carriers"))?>   
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
