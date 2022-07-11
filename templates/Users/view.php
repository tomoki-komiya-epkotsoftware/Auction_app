<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= h($user->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Bidinfo') ?></h4>
                <?php if (!empty($user->bidinfo)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Biditem Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->bidinfo as $bidinfo) : ?>
                        <tr>
                            <td><?= h($bidinfo->id) ?></td>
                            <td><?= h($bidinfo->biditem_id) ?></td>
                            <td><?= h($bidinfo->user_id) ?></td>
                            <td><?= h($bidinfo->price) ?></td>
                            <td><?= h($bidinfo->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bidinfo', 'action' => 'view', $bidinfo->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bidinfo', 'action' => 'edit', $bidinfo->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bidinfo', 'action' => 'delete', $bidinfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidinfo->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Biditems') ?></h4>
                <?php if (!empty($user->biditems)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Finished') ?></th>
                            <th><?= __('Endtime') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->biditems as $biditems) : ?>
                        <tr>
                            <td><?= h($biditems->id) ?></td>
                            <td><?= h($biditems->user_id) ?></td>
                            <td><?= h($biditems->name) ?></td>
                            <td><?= h($biditems->finished) ?></td>
                            <td><?= h($biditems->endtime) ?></td>
                            <td><?= h($biditems->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Biditems', 'action' => 'view', $biditems->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Biditems', 'action' => 'edit', $biditems->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Biditems', 'action' => 'delete', $biditems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biditems->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Bidmessage') ?></h4>
                <?php if (!empty($user->bidmessage)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Bidinfo Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Message') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->bidmessage as $bidmessage) : ?>
                        <tr>
                            <td><?= h($bidmessage->id) ?></td>
                            <td><?= h($bidmessage->bidinfo_id) ?></td>
                            <td><?= h($bidmessage->user_id) ?></td>
                            <td><?= h($bidmessage->message) ?></td>
                            <td><?= h($bidmessage->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bidmessage', 'action' => 'view', $bidmessage->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bidmessage', 'action' => 'edit', $bidmessage->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bidmessage', 'action' => 'delete', $bidmessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidmessage->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Bidrequest') ?></h4>
                <?php if (!empty($user->bidrequest)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Biditem Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Created') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->bidrequest as $bidrequest) : ?>
                        <tr>
                            <td><?= h($bidrequest->id) ?></td>
                            <td><?= h($bidrequest->biditem_id) ?></td>
                            <td><?= h($bidrequest->user_id) ?></td>
                            <td><?= h($bidrequest->price) ?></td>
                            <td><?= h($bidrequest->created) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bidrequest', 'action' => 'view', $bidrequest->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bidrequest', 'action' => 'edit', $bidrequest->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bidrequest', 'action' => 'delete', $bidrequest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bidrequest->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
