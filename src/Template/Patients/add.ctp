<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
      <?=$this->Element('sidebar',array("type"=>"Patient","typePural"=>"Patients"))?>
</nav>
<div class="patients form large-9 medium-8 columns content">
    <?= $this->Form->create($patient) ?>
    <fieldset>
        <legend><?= __('Add Patient') ?></legend>
        <?php
            echo $this->Form->control('carrier_id', ['options' => $carriers]);
            echo $this->Form->control('name');
            echo $this->Form->control('street_address');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('zipcoder');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
