<div class="nav nav-tabs project-subnav">
  <li class="header-li">
    <h4><?php echo Jade\Dumper::_text($project->title) ?></h4>
  </li>
  <li class="pull-right <?php echo e(Helper::active_subnav('admin') ? 'active':''); ?>">
    <a href="<?php echo e(route('project_admin', array($project->id))); ?>">Collaborators</a>
  </li>
  <li class="pull-right <?php echo e(Helper::active_subnav('comments') ? 'active':''); ?>">
    <a href="<?php echo e(route('comments', array($project->id))); ?>">Timeline</a>
  </li>
  <?php if ($project->status() == Project::STATUS_ACCEPTING_BIDS || $project->status() == Project::STATUS_REVIEWING_BIDS || $project->status() == Project::STATUS_CONTRACT_AWARDED): ?>
    <li class="pull-right <?php echo e(Helper::active_subnav('review_bids') ? 'active':''); ?>">
      <a href="<?php echo e(route('review_bids', array($project->id))); ?>">Applications (<?php echo e($project->submitted_bids()->count()); ?>)</a>
    </li>
  <?php endif; ?>
</div>