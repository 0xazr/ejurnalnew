
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="breadcrumb">
	<a href="<?= base_url(); ?>/">Home</a> &gt;
	<a href="<?= base_url(); ?>/user" class="hierarchyLink">User</a> &gt;
	<a href="<?= base_url(); ?>/author" class="hierarchyLink">Author</a> &gt;
	<a href="<?= base_url(); ?>/author/" class="current">Active Submissions</a>
</div>
<h2>Active Submissions</h2>


<div id="content">



<ul class="menu">
	<li class="current"><a href="<?= base_url(); ?>/author/index/active">Active</a></li>
	<li><a href="<?= base_url(); ?>/author/index/completed">Archive</a></li>
</ul>

<br />

<div id="submissions">
<table class="listing" width="100%">
	<tr><td colspan="6" class="headseparator">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="5%"><a href="<?= base_url(); ?>/author/index?sort=id&amp;sortDirection=1">ID</a></td>
		<td width="5%"><span class="disabled">MM-DD</span><br /><a href="<?= base_url(); ?>/author/index?sort=submitDate&amp;sortDirection=1">Submit</a></td>
		<td width="5%"><a href="<?= base_url(); ?>/author/index?sort=section&amp;sortDirection=1">Sec</a></td>
		<td width="25%"><a href="<?= base_url(); ?>/author/index?sort=authors&amp;sortDirection=1">Authors</a></td>
		<td width="35%"><a href="<?= base_url(); ?>/author/index?sort=title&amp;sortDirection=2" style="font-weight:bold">Title</a></td>
		<td width="25%" align="right"><a href="<?= base_url(); ?>/author/index?sort=status&amp;sortDirection=1">Status</a></td>
	</tr>
	
	<!-- Tampilan ketika tidak ada submission -->		
	<tr>
		<td colspan="6" class="headseparator">&nbsp;</td>
	</tr>
	
	<?php if(isset($submissions)) : ?>
		<?php foreach($submissions as $submission) : ?>
		<tr>
			<td colspan="6" class="separator">&nbsp;</td>
		</tr>
			
		<tr valign="top">
			<td><?= $submission['submission_id']; ?></td>
			<td>&mdash;</td>
			<td>ART</td>
			<td>Niani</td>
						<td><a href="/author/submit/3?articleId=12539" class="action">Untitled</a></td>
				<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12539" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
			
		</tr>
		<?php endforeach; ?>
	<?php else : ?>
	<tr valign="top">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><a>No Submission.</a></td>
		<td></td>
	</tr>
	<?php endif; ?>

	<!-- Tampilan ketika ada submission -->
	<!-- <tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12539</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12539" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12539" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12538</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12538" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12538" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12525</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12525" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12525" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12531</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12531" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12531" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12534</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12534" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12534" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12535</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12535" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12535" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12541</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12541" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12541" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12545</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12545" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12545" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12546</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12546" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12546" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12547</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12547" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12547" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12564</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12564" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12564" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12565</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12565" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12565" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12566</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12566" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12566" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12567</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12567" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12567" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12568</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12568" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12568" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12569</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12569" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12569" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12570</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12570" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12570" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12571</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12571" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12571" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12647</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12647" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12647" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12648</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12648" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12648" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12652</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12652" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12652" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12653</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/3?articleId=12653" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12653" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="separator">&nbsp;</td>
	</tr>
		
	<tr valign="top">
		<td>12658</td>
		<td>&mdash;</td>
		<td>ART</td>
		<td>Niani</td>
					<td><a href="/author/submit/2?articleId=12658" class="action">Untitled</a></td>
			<td align="right">Incomplete<br /><a href="/author/deleteSubmission/12658" class="action" onclick="confirm('Are you sure you want to delete this incomplete submission?')">Delete</a></td>
		
	</tr>

	<tr>
		<td colspan="6" class="endseparator">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="4" align="left">1 - 25 of 61 Items</td>
		<td colspan="2" align="right"><strong>1</strong>&nbsp;<a href="/author/index?sort=title&amp;sortDirection=1&amp;submissionsPage=2#submissions">2</a>&nbsp;<a href="/author/index?sort=title&amp;sortDirection=1&amp;submissionsPage=3#submissions">3</a>&nbsp;<a href="/author/index?sort=title&amp;sortDirection=1&amp;submissionsPage=2#submissions">&gt;</a>&nbsp;<a href="/author/index?sort=title&amp;sortDirection=1&amp;submissionsPage=3#submissions">&gt;&gt;</a>&nbsp;</td>
	</tr> -->
</table>
</div>
<div id="submitStart">
<h4>Start a New Submission</h4>

<a href="<?= base_url(); ?>/author/submit" class="action">Click here</a> to go to step one of the five-step submission process.<br />
</div>




<div class="separator"></div>

<script type="text/javascript">

<!--
function toggleChecked() {
	var elements = document.getElementsByName("referralId[]");
	for (var i=0; i < elements.length; i++) {
			elements[i].checked = !elements[i].checked;
	}
}
-->

</script>

<h3>Refbacks</h3>

<ul class="menu">
	<li class="current"><a href="/author/index?referralFilter=">All</a></li>
	<li><a href="/author/index?referralFilter=1">New</a></li>
	<li><a href="/author/index?referralFilter=2">Published</a></li>
	<li><a href="/author/index?referralFilter=3">Ignored</a></li>
</ul>

<div id="referrals">
<form action="<?= base_url(); ?>/referral/bulkAction" method="post">
<table width="100%" class="listing">
	<tr><td class="headseparator" colspan="8">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="3%">&nbsp;</td>
		<td width="7%">Date Added</td>
		<td width="3%">Hits</td>
		<td>URL</td>
		<td>Article</td>
		<td>Title</td>
		<td>Status</td>
		<td width="10%" align="right">Action</td>
	</tr>
	<tr><td class="headseparator" colspan="8">&nbsp;</td></tr>
	<tr valign="top">
		<td colspan="8" class="nodata">
							There are currently no refbacks.
					</td>
	</tr>
	<tr valign="top">
		<td colspan="8" class="endseparator">&nbsp;</td>
	</tr>
</table>
<!-- <table width="100%" class="listing">
	<tr><td class="headseparator" colspan="8">&nbsp;</td></tr>
	<tr class="heading" valign="bottom">
		<td width="3%">&nbsp;</td>
		<td width="7%">Date Added</td>
		<td width="3%">Hits</td>
		<td>URL</td>
		<td>Article</td>
		<td>Title</td>
		<td>Status</td>
		<td width="10%" align="right">Action</td>
	</tr>
	<tr><td class="headseparator" colspan="8">&nbsp;</td></tr>
		<tr valign="top">
		<td><input type="checkbox" name="referralId[]" value="135051"/></td>
		<td>2022-04-05</td>
		<td>1</td>
		<td><a href="/issue/current">/issue/curr...</a></td>
		<td>Flexural And Shear Behaviour Of Reinforced Concrete Slab With Pvc Pipe As A Cavity Forming In Two-Way System</td>
		<td></td>
		<td>New</td>
		<td align="right">
			<a class="action" href="/referral/editReferral/135051">Edit</a>&nbsp;|&nbsp;<a class="action" onclick="confirm('Are you sure you wish to delete the selected refback(s)?')" href="/referral/deleteReferral/135051">Delete</a>
		</td>
	</tr>
	<tr valign="top">
		<td colspan="8" class="endseparator">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="4" align="left">1 - 1 of 1 Items</td>
		<td colspan="4" align="right"></td>
	</tr>
</table> -->
<p>
	<input type="submit" name="accept" value="Publish" class="button" onclick="confirm('Are you sure you wish to publish the selected refback(s)?')"/>
	<input type="submit" name="decline" value="Ignore" class="button" onclick="confirm('Are you sure you wish to ignore the selected refback(s)?')"/>
	<input type="submit" name="delete" value="Delete" class="button" onclick="confirm('Are you sure you wish to delete the selected refback(s)?')"/>
	<input type="button" value="Select All" class="button" onclick="toggleChecked()" />
</p>
</form>
</div>
</div><!-- content -->
<?= $this->endSection(); ?>