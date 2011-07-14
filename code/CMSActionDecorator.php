<?php
class CMSActionDecorator extends LeftAndMainDecorator {

	function action_view_draft() {
		$id = (int)$_REQUEST['ID'];
		$Page = DataObject::get_by_id('Page', $id);
		FormResponse::set_redirect_url($Page->Link().'?stage=Stage');
		FormResponse::add("window.location.href = '{$Page->Link()}?stage=Stage';", 'redirect');
		return FormResponse::respond();
	}
	
	function action_view_published() {
		$id = (int)$_REQUEST['ID'];
		$Page = DataObject::get_by_id('Page', $id);
		FormResponse::set_redirect_url($Page->Link());
		FormResponse::add("window.location.href = '{$Page->Link()}';", 'redirect');
		return FormResponse::respond();
	}
}