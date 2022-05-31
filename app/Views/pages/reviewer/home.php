
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="breadcrumb">
	<a href="https://iptek.its.ac.id/index.php/itj/index">Home</a> &gt;
			<a href="https://iptek.its.ac.id/index.php/itj/user" class="hierarchyLink">User</a> &gt;
			<a href="https://iptek.its.ac.id/index.php/itj/reviewer" class="hierarchyLink">Reviewer</a> &gt;
			<a href="https://iptek.its.ac.id/index.php/itj/reviewer" class="current">Active Submissions</a></div>

<h2>Active Submissions</h2>


<div id="content">



<ul class="menu">
	<li class="current"><a href="https://iptek.its.ac.id/index.php/itj/reviewer/index/active">Active</a></li>
	<li><a href="https://iptek.its.ac.id/index.php/itj/reviewer/index/completed">Archive</a></li>
</ul>

<br />

<div id="submissions">
<table class="listing" width="100%">
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><a href="https://iptek.its.ac.id/index.php/itj/reviewer/index?sort=id&amp;sortDirection=1">ID</a></td>
		<!-- <td width="5%"><span class="disabled">MM-DD</span><br /><a href="https://iptek.its.ac.id/index.php/itj/reviewer/index?sort=assignDate&amp;sortDirection=1">Assigned</a></td> -->
		<td width="5%"><a href="https://iptek.its.ac.id/index.php/itj/reviewer/index?sort=section&amp;sortDirection=1">Sec</a></td>
		<td width="70%"><a href="https://iptek.its.ac.id/index.php/itj/reviewer/index?sort=title&amp;sortDirection=1" style="font-weight:bold">Title</a></td>
		<!-- <td width="5%"><a href="https://iptek.its.ac.id/index.php/itj/reviewer/index?sort=dueDate&amp;sortDirection=1">Due</a></td> -->
		<td width="10%"><a href="https://iptek.its.ac.id/index.php/itj/reviewer/index?sort=round&amp;sortDirection=1">Review Round</a></td>
	</tr>
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>

	<?php foreach($assignments as $assignment) : ?>	
	<tr valign="top">
		<td><?= $assignment["submission_id"]; ?></td>
		<!-- <td>05-24</td> -->
		<td>ART</td>
		<td><a href="<?= base_url(); ?>/reviewer/submission/<?= $assignment["id_assignment"]; ?>" class="action"><?= $assignment["title"]; ?></a></td>
		<!-- <td class="nowrap">06-21</td> -->
		<td>1</td>
	</tr>
  <?php endforeach; ?>

	<tr>
		<td colspan="6" class="endseparator">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" align="left">1 - 2 of 2 Items</td>
		<td colspan="3" align="right"></td>
	</tr>
</table>
</div>


</div><!-- content -->
<?= $this->endSection(); ?>