<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entry $entry
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entry'), ['action' => 'edit', $entry->callsign]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entry'), ['action' => 'delete', $entry->callsign], ['confirm' => __('Are you sure you want to delete # {0}?', $entry->callsign)]) ?> </li>
        <li><?= $this->Html->link(__('List Entry'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entry'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entry view large-9 medium-8 columns content">
    <h3><?= h($entry->callsign) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Callsign') ?></th>
            <td><?= h($entry->callsign) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mode') ?></th>
            <td><?= h($entry->mode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($entry->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prefix') ?></th>
            <td><?= h($entry->prefix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Log Type') ?></th>
            <td><?= h($entry->log_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File Format') ?></th>
            <td><?= h($entry->file_format) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dok') ?></th>
            <td><?= h($entry->dok) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Club') ?></th>
            <td><?= h($entry->club) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Version String') ?></th>
            <td><?= h($entry->version_string) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Log Checker') ?></th>
            <td><?= h($entry->log_checker) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Qso') ?></th>
            <td><?= $this->Number->format($entry->c_qso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Qtc') ?></th>
            <td><?= $this->Number->format($entry->c_qtc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Mult') ?></th>
            <td><?= $this->Number->format($entry->c_mult) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Mult2') ?></th>
            <td><?= $this->Number->format($entry->c_mult2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Score') ?></th>
            <td><?= $this->Number->format($entry->c_score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('R Qso') ?></th>
            <td><?= $this->Number->format($entry->r_qso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('R Qtc') ?></th>
            <td><?= $this->Number->format($entry->r_qtc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('R Mult') ?></th>
            <td><?= $this->Number->format($entry->r_mult) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('R Mult2') ?></th>
            <td><?= $this->Number->format($entry->r_mult2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('R Score') ?></th>
            <td><?= $this->Number->format($entry->r_score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Qso') ?></th>
            <td><?= $this->Number->format($entry->f_qso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Qtc') ?></th>
            <td><?= $this->Number->format($entry->f_qtc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Mult') ?></th>
            <td><?= $this->Number->format($entry->f_mult) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Mult2') ?></th>
            <td><?= $this->Number->format($entry->f_mult2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('F Score') ?></th>
            <td><?= $this->Number->format($entry->f_score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Optime') ?></th>
            <td><?= $this->Number->format($entry->optime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($entry->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disqual') ?></th>
            <td><?= $entry->disqual ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prblm') ?></th>
            <td><?= $entry->prblm ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Award') ?></th>
            <td><?= $entry->award ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plaque') ?></th>
            <td><?= $entry->plaque ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Packet') ?></th>
            <td><?= $entry->packet ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stf') ?></th>
            <td><?= $entry->stf ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Problem') ?></th>
            <td><?= $entry->problem ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frage') ?></th>
            <td><?= $entry->frage ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kommentar') ?></th>
            <td><?= $entry->kommentar ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Antwort') ?></th>
            <td><?= $entry->antwort ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stop') ?></th>
            <td><?= $entry->stop ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Op List') ?></h4>
        <?= $this->Text->autoParagraph(h($entry->op_list)); ?>
    </div>
    <div class="row">
        <h4><?= __('Soapbox') ?></h4>
        <?= $this->Text->autoParagraph(h($entry->soapbox)); ?>
    </div>
    <div class="row">
        <h4><?= __('Rmx') ?></h4>
        <?= $this->Text->autoParagraph(h($entry->rmx)); ?>
    </div>
    <div class="row">
        <h4><?= __('Commands') ?></h4>
        <?= $this->Text->autoParagraph(h($entry->commands)); ?>
    </div>
</div>
