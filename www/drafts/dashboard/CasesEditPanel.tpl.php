<?php
	// This is the HTML template include file (.tpl.php) for casesEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblId->RenderWithName(); ?>

		<?php $_CONTROL->lstCrimeType->RenderWithName(); ?>

		<?php $_CONTROL->calCrimeDate->RenderWithName(); ?>

		<?php $_CONTROL->lstAgencyReportedTo->RenderWithName(); ?>

		<?php $_CONTROL->txtCrimeReportNumber->RenderWithName(); ?>

		<?php $_CONTROL->txtFamilyLawNumber->RenderWithName(); ?>

		<?php $_CONTROL->lstCourt->RenderWithName(); ?>

		<?php $_CONTROL->lstCaseStatus->RenderWithName(); ?>

		<?php $_CONTROL->txtPrimaryPersonId->RenderWithName(); ?>

		<?php $_CONTROL->lstAdvocatesAsCase->RenderWithName(true, "Rows=7"); ?>

		<?php $_CONTROL->lstSuspectsAsCase->RenderWithName(true, "Rows=7"); ?>

		<?php $_CONTROL->lstPeopleAsCase->RenderWithName(true, "Rows=7"); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
