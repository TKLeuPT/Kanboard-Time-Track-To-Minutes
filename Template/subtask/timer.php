<span class="subtask-time-tracking">
    <?php if (! empty($subtask['time_spent'])): ?>
        <?= $this->TimeHelper->convertToHoursMins($subtask['time_spent'], '%01dh %02dmin') ?>
    <?php endif ?>

    <?php if (! empty($subtask['time_spent']) && ! empty($subtask['time_estimated'])): ?>/<?php endif ?>

    <?php if (! empty($subtask['time_estimated'])): ?>
        <?= $this->TimeHelper->convertToHoursMins($subtask['time_estimated'], '%01dh %02dmin') ?>
    <?php endif ?>

    <?php if ($this->user->hasProjectAccess('SubtaskController', 'edit', $task['project_id']) && $subtask['user_id'] == $this->user->getId()): ?>
        <?= $this->subtask->renderTimer($task, $subtask) ?>
    <?php endif ?>
</span>
