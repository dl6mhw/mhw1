<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Entry'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="entry form large-9 medium-8 columns content">
    <?= $this->Form->create($entry) ?>
    <fieldset>
        <legend><?= __('Add Entry') ?></legend>
        <?php
            echo $this->Form->control('mode');
            echo $this->Form->control('category');
            echo $this->Form->control('prefix');
            echo $this->Form->control('log_type');
            echo $this->Form->control('file_format');
            echo $this->Form->control('dok');
            echo $this->Form->control('club');
            echo $this->Form->control('disqual');
            echo $this->Form->control('c_qso');
            echo $this->Form->control('c_qtc');
            echo $this->Form->control('c_mult');
            echo $this->Form->control('c_mult2');
            echo $this->Form->control('c_score');
            echo $this->Form->control('r_qso');
            echo $this->Form->control('r_qtc');
            echo $this->Form->control('r_mult');
            echo $this->Form->control('r_mult2');
            echo $this->Form->control('r_score');
            echo $this->Form->control('f_qso');
            echo $this->Form->control('f_qtc');
            echo $this->Form->control('f_mult');
            echo $this->Form->control('f_mult2');
            echo $this->Form->control('f_score');
            echo $this->Form->control('optime');
            echo $this->Form->control('op_list');
            echo $this->Form->control('soapbox');
            echo $this->Form->control('version_string');
            echo $this->Form->control('prblm');
            echo $this->Form->control('log_checker');
            echo $this->Form->control('rmx');
            echo $this->Form->control('award');
            echo $this->Form->control('plaque');
            echo $this->Form->control('packet');
            echo $this->Form->control('commands');
            echo $this->Form->control('stf');
            echo $this->Form->control('problem');
            echo $this->Form->control('frage');
            echo $this->Form->control('kommentar');
            echo $this->Form->control('antwort');
            echo $this->Form->control('stop');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
