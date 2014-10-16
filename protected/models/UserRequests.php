<?php

Yii::import('application.models._base.BaseUserRequests');

class UserRequests extends BaseUserRequests
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}