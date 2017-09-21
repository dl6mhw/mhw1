<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entry[]|\Cake\Collection\CollectionInterface $entry
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entry'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entry index large-9 medium-8 columns content">
    <h3><?= __('Entry') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('callsign') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prefix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('log_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_format') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dok') ?></th>
                <th scope="col"><?= $this->Paginator->sort('club') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disqual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_qso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_qtc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_mult') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_mult2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_score') ?></th>
                <th scope="col"><?= $this->Paginator->sort('r_qso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('r_qtc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('r_mult') ?></th>
                <th scope="col"><?= $this->Paginator->sort('r_mult2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('r_score') ?></th>
                <th scope="col"><?= $this->Paginator->sort('f_qso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('f_qtc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('f_mult') ?></th>
                <th scope="col"><?= $this->Paginator->sort('f_mult2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('f_score') ?></th>
                <th scope="col"><?= $this->Paginator->sort('optime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('version_string') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prblm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('log_checker') ?></th>
                <th scope="col"><?= $this->Paginator->sort('award') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plaque') ?></th>
                <th scope="col"><?= $this->Paginator->sort('packet') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('problem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('frage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kommentar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('antwort') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stop') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entry as $entry): ?>
            <tr>
                <td><?= h($entry->callsign) ?></td>
                <td><?= h($entry->mode) ?></td>
                <td><?= h($entry->category) ?></td>
                <td><?= h($entry->prefix) ?></td>
                <td><?= h($entry->log_type) ?></td>
                <td><?= h($entry->file_format) ?></td>
                <td><?= h($entry->dok) ?></td>
                <td><?= h($entry->club) ?></td>
                <td><?= h($entry->disqual) ?></td>
                <td><?= $this->Number->format($entry->c_qso) ?></td>
                <td><?= $this->Number->format($entry->c_qtc) ?></td>
                <td><?= $this->Number->format($entry->c_mult) ?></td>
                <td><?= $this->Number->format($entry->c_mult2) ?></td>
                <td><?= $this->Number->format($entry->c_score) ?></td>
                <td><?= $this->Number->format($entry->r_qso) ?></td>
                <td><?= $this->Number->format($entry->r_qtc) ?></td>
                <td><?= $this->Number->format($entry->r_mult) ?></td>
                <td><?= $this->Number->format($entry->r_mult2) ?></td>
                <td><?= $this->Number->format($entry->r_score) ?></td>
                <td><?= $this->Number->format($entry->f_qso) ?></td>
                <td><?= $this->Number->format($entry->f_qtc) ?></td>
                <td><?= $this->Number->format($entry->f_mult) ?></td>
                <td><?= $this->Number->format($entry->f_mult2) ?></td>
                <td><?= $this->Number->format($entry->f_score) ?></td>
                <td><?= $this->Number->format($entry->optime) ?></td>
                <td><?= h($entry->created) ?></td>
                <td><?= h($entry->version_string) ?></td>
                <td><?= h($entry->prblm) ?></td>
                <td><?= h($entry->log_checker) ?></td>
                <td><?= h($entry->award) ?></td>
                <td><?= h($entry->plaque) ?></td>
                <td><?= h($entry->packet) ?></td>
                <td><?= h($entry->stf) ?></td>
                <td><?= h($entry->problem) ?></td>
                <td><?= h($entry->frage) ?></td>
                <td><?= h($entry->kommentar) ?></td>
                <td><?= h($entry->antwort) ?></td>
                <td><?= h($entry->stop) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entry->callsign]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entry->callsign]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entry->callsign], ['confirm' => __('Are you sure you want to delete # {0}?', $entry->callsign)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
