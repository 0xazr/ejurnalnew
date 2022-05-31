<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="breadcrumb">
	<a href="/index">Home</a> &gt;
	<a href="/user" class="hierarchyLink">User</a> &gt;
	<a href="/author" class="hierarchyLink">Author</a> &gt;
	<a href="/author" class="hierarchyLink">Submissions</a> &gt;
	<a href="/author/submit/1" class="current">New Submission</a>
</div>
<h2>Step 1. Starting the Submission</h2>


<div id="content">



<ul class="steplist">
<li id="step1"  class="current">1. Start</li>

<li id="step2" >2. Upload Submission</li>

<li id="step3" >3. Enter Metadata</li>

<li id="step4" >4. Upload Supplementary Files</li>

<li id="step5" >5. Confirmation</li>
</ul>

	
<p>Encountering difficulties? Contact <a href="mailto:"></a> for assistance.</p>

<div class="separator"></div>

<form id="submit" method="post" action="/author/saveSubmit/1<?= isset($submission_id) ? '/'.$submission_id : '' ?>" onsubmit="return checkSubmissionChecklist()">
	<input type="hidden" name="sectionId" value="0" />
	<input type="hidden" name="sectionId" value="84" />
	<input type="hidden" name="locale" value="en_US" />
	<script type="text/javascript">

<!--
function checkSubmissionChecklist() {
	var elements = document.getElementById('submit').elements;
	for (var i=0; i < elements.length; i++) {
		if (elements[i].type == 'checkbox' && !elements[i].checked) {
			if (elements[i].name.match('^checklist')) {
				alert('You must make sure all items in the submission checklist are satisfied before continuing.');
				return false;
			} else if (elements[i].name == 'copyrightNoticeAgree') {
				alert('You must agree to the terms of the Copyright Notice before continuing.');
				return false;
			}
		}
	}
	return true;
}
 -->

</script>


									<div id="checklist">
			<h3>Submission Checklist</h3>
			<p>Indicate that this submission is ready to be considered by this journal by checking off the following (comments to the editor can be added below).</p>
			<table width="100%" class="data">
				<tr valign="top">
			<td width="5%"><input type="checkbox" id="checklist-1" name="checklist[]" value="0" <?= isset($checked) ? $checked : '' ?>/></td>
			<td width="95%"><label for="checklist-1">The submission has not been previously published, nor is it before another journal for consideration (or an explanation has been provided in Comments to the Editor).</label></td>
		</tr>
						<tr valign="top">
			<td width="5%"><input type="checkbox" id="checklist-2" name="checklist[]" value="1" <?= isset($checked) ? $checked : '' ?>/></td>
			<td width="95%"><label for="checklist-2">The submission file is in OpenOffice, Microsoft Word, RTF, or WordPerfect document file format.</label></td>
		</tr>
						<tr valign="top">
			<td width="5%"><input type="checkbox" id="checklist-3" name="checklist[]" value="2" <?= isset($checked) ? $checked : '' ?>/></td>
			<td width="95%"><label for="checklist-3">Where available, URLs for the references have been provided.</label></td>
		</tr>
						<tr valign="top">
			<td width="5%"><input type="checkbox" id="checklist-4" name="checklist[]" value="3" <?= isset($checked) ? $checked : '' ?>/></td>
			<td width="95%"><label for="checklist-4">The text is single-spaced; uses a 12-point font; employs italics, rather than underlining (except with URL addresses); and all illustrations, figures, and tables are placed within the text at the appropriate points, rather than at the end.</label></td>
		</tr>
						<tr valign="top">
			<td width="5%"><input type="checkbox" id="checklist-5" name="checklist[]" value="4" <?= isset($checked) ? $checked : '' ?>/></td>
			<td width="95%"><label for="checklist-5">The text adheres to the stylistic and bibliographic requirements outlined in the <a href="/index.php/itj/about/submissions#authorGuidelines" target="_new">Author Guidelines</a>, which is found in About the Journal.</label></td>
		</tr>
						<tr valign="top">
			<td width="5%"><input type="checkbox" id="checklist-6" name="checklist[]" value="5" <?= isset($checked) ? $checked : '' ?>/></td>
			<td width="95%"><label for="checklist-6">If submitting to a peer-reviewed section of the journal, the instructions in <a href="javascript:openHelp('/help/view/editorial/topic/000044')">Ensuring a Blind Review</a> have been followed.</label></td>
		</tr>
		</table>
	</div>	<div class="separator"></div>

<div id="privacyStatement">
<h3>Journal's Privacy Statement</h3>
<br />
The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal and will not be made available for any other purpose or to any other party.
</div>

<div class="separator"></div>

<div id="commentsForEditor">
<h3>Comments for the Editor</h3>

<table width="100%" class="data">
<tr valign="top">
	<td width="20%" class="label">
<label for="commentsToEditor" >
	Please Enter 5 Potential Reviewers </label>
</td>
	<td width="80%" class="value"><textarea name="commentsToEditor" id="commentsToEditor" rows="3" cols="40" class="textArea">Name | Affiliation | Email | Reasons <br/></textarea></td>
</tr>
</table>
</div>
<div class="separator"></div>

<p><input type="submit" value="Save and continue" class="button defaultButton" /> <input type="button" value="Cancel" class="button" onclick="document.location.href='/author'" /></p>

<p><span class="formRequired">* Denotes required field</span></p>

</form>


</div><!-- content -->
<?= $this->endSection(); ?>